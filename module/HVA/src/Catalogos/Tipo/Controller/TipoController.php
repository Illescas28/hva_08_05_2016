<?php

namespace Catalogos\Tipo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Tipo\Form\TipoForm;

//// Filter ////
use Catalogos\Tipo\Filter\TipoFilter;

//// Propel ////
use Tipo;
use TipoQuery;
use BasePeer;

class TipoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $TipoForm = new TipoForm();
        $TipoForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $TipoFilter = new TipoFilter();
            $TipoForm->setInputFilter($TipoFilter->getInputFilter());
            $TipoForm->setData($request->getPost());

            if ($TipoForm->isValid()) {
                $Tipo = new Tipo();
                foreach($TipoForm->getData() as $TipoKey => $TipoValue){
                    if($TipoKey != 'idtipo' && $TipoKey != 'submit'){
                        $Tipo->setByName($TipoKey, $TipoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Tipo->save();
                return $this->redirect()->toRoute('tipo');
            }else{
                $messageArray = array();
                foreach ($TipoForm->getMessages() as $key => $value){
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
        return array('TipoForm' => $TipoForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario tipoForm
        $tipoForm = new TipoForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($tipoForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idtipo';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $tipoQuery = new TipoQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $tipoQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $tipoQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'tipos' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('tipo', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra tipoQuery
        $tipoQuery = TipoQuery::create();

        //Verificamos que el Id tipo que se quiere modificar exista
        if($tipoQuery->create()->filterByIdtipo($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra tipoQuery
            $tipoPKQuery = $tipoQuery->findPk($id);
            $tipoQueryArray = $tipoPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $TipoForm = new TipoForm();
            $ElementsTipoForm = $TipoForm->getElements();

            if ($request->isPost()){
                $TipoArray = array();
                foreach($ElementsTipoForm as $key=>$value){
                    if($key != 'submit'){
                        $TipoArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $tipoQueryArray[$key];
                    }
                }
            }else{
                foreach($tipoQueryArray as $tipoQueryKey => $tipoQueryValue){
                    $TipoArray[$tipoQueryKey] = $tipoQueryArray[$tipoQueryKey];

                }
            }

            $TipoFilter = new TipoFilter();
            $TipoForm->setInputFilter($TipoFilter->getInputFilter());
            $TipoForm->setData($TipoArray);

            if ($TipoForm->isValid()) {
                foreach($TipoForm->getData() as $TipoKey => $TipoValue){
                    if($TipoKey != 'submit'){
                        $tipoPKQuery->setByName($TipoKey, $TipoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($tipoPKQuery->isModified()){
                    $tipoPKQuery->save();
                    return $this->redirect()->toRoute('tipo');
                }
            }else{
                $messageArray = array();
                foreach ($TipoForm->getMessages() as $key => $value){
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
            'TipoForm' => $TipoForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('tipo');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                TipoQuery::create()->filterByIdtipo($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('tipo');
        }

        $provedorEntity = TipoQuery::create()->filterByIdtipo($id)->findOne();
        return array(
            'id'    => $id,
            'tipo' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
