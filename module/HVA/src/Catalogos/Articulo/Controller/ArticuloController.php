<?php

namespace Catalogos\Articulo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Articulo\Form\ArticuloForm;

//// Filter ////
use Catalogos\Articulo\Filter\ArticuloFilter;

//// Propel ////
use Articulo;
use ArticuloQuery;
use BasePeer;

class ArticuloController extends AbstractActionController
{
    public function nuevoAction()
    {
        $ArticuloForm = new ArticuloForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $ArticuloFilter = new ArticuloFilter();
            $ArticuloForm->setInputFilter($ArticuloFilter->getInputFilter());
            $ArticuloForm->setData($request->getPost());

            if ($ArticuloForm->isValid()) {
                $Articulo = new Articulo();
                foreach($ArticuloForm->getData() as $ArticuloKey => $ArticuloValue){
                    if($ArticuloKey == 'idtipo'){
                        $tipoExists =  \TipoQuery::create()->filterByIdtipo($ArticuloKey)->exists();
                        // Validamos que exista el idtipo.
                        if(!$tipoExists){
                            return array(
                                'ArticuloForm' => $ArticuloForm,
                                'Error' => 'Invalid idtipo.'
                            );
                        }
                    }
                    if($ArticuloKey != 'idarticulo' && $ArticuloKey != 'submit'){
                        $Articulo->setByName($ArticuloKey, $ArticuloValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Articulo->save();
                return $this->redirect()->toRoute('articulo');
            }
        }
        return array('ArticuloForm' => $ArticuloForm);
    }

    public function listarAction()
    {
        $articulosQuery = new \ArticuloQuery();

        $result = $articulosQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'articulos' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('articulo', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra articuloQuery
        $articuloQuery = ArticuloQuery::create();

        //Verificamos que el Id articulo que se quiere modificar exista
        if($articuloQuery->create()->filterByIdarticulo($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra articuloQuery
            $articuloPKQuery = $articuloQuery->findPk($id);
            $articuloQueryArray = $articuloPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $ArticuloForm = new ArticuloForm();
            $ElementsArticuloForm = $ArticuloForm->getElements();

            if ($request->isPost()){
                $ArticuloArray = array();
                foreach($ElementsArticuloForm as $key=>$value){
                    if($key != 'submit'){
                        $ArticuloArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $articuloQueryArray[$key];
                    }
                }
            }else{
                foreach($articuloQueryArray as $articuloQueryKey => $articuloQueryValue){
                    $ArticuloArray[$articuloQueryKey] = $articuloQueryArray[$articuloQueryKey];

                }
            }

            $ArticuloFilter = new ArticuloFilter();
            $ArticuloForm->setInputFilter($ArticuloFilter->getInputFilter());
            $ArticuloForm->setData($ArticuloArray);

            if ($ArticuloForm->isValid()) {
                foreach($ArticuloForm->getData() as $ArticuloKey => $ArticuloValue){
                    if($ArticuloKey != 'submit'){
                        $articuloPKQuery->setByName($ArticuloKey, $ArticuloValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($articuloPKQuery->isModified()){
                    $articuloPKQuery->save();
                    return $this->redirect()->toRoute('articulo');
                }
            }else{
                $messageArray = array();
                foreach ($ArticuloForm->getMessages() as $key => $value){
                    foreach($value as $val){
                        //Obtenemos el valor de la columna con error
                        $message = $key.' '.$val;
                        array_push($messageArray, $message);
                    }
                }

                return new ViewModel(array(
                    'Error' => $messageArray,
                ));
            }
        }

        return array(
            'id' => $id,
            'ArticuloForm' => $ArticuloForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('articulo');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                ArticuloQuery::create()->filterByIdarticulo($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('articulo');
        }

        $provedorEntity = ArticuloQuery::create()->filterByIdarticulo($id)->findOne();
        return array(
            'id'    => $id,
            'articulo' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
