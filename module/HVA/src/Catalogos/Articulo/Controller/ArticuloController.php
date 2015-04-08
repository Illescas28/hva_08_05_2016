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
                                'productoFotoForm' => $ArticuloForm,
                                'Error' => 'Invalid idproduct.'
                            );
                        }
                    }
                    if($ArticuloKey == 'idudm'){
                        $udmExists =  \UdmQuery::create()->filterByIdudm($ArticuloKey)->exists();
                        // Validamos que exista el idtipo.
                        if(!$udmExists){
                            return array(
                                'productoFotoForm' => $ArticuloForm,
                                'Error' => 'Invalid idproduct.'
                            );
                        }
                    }

                    if($ArticuloKey != 'idarticulo' && $ArticuloKey != 'submit'){
                        $Articulo->setByName($ArticuloKey, $ArticuloValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Articulo->save();
                return $this->redirect()->toRoute('articulo');
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
        return array('ArticuloForm' => $ArticuloForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario articuloForm
        $articuloForm = new ArticuloForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($articuloForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idarticulo';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $articuloQuery = new ArticuloQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $articuloQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $articuloQuery->paginate($page,$limit);


        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        //<--->
        // Instanciamos nuestro formulario articulovarianteForm
        $articulovarianteForm = new \Catalogos\Articulovariante\Form\ArticulovarianteForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($articulovarianteForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idarticulovariante';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $articulovarianteQuery = new \ArticulovarianteQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $articulovarianteQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $articulovarianteQuery->filterByIdarticulo()->paginate($page,$limit);

        $dataVariante = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Articulovariantes' => $dataVariante,
            'Articulos' => $data,
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
