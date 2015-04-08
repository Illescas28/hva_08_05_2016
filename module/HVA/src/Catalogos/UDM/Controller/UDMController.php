<?php

namespace Catalogos\UDM\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\UDM\Form\UDMForm;

//// Filter ////
use Catalogos\UDM\Filter\UDMFilter;

//// Propel ////
use Udm;
use UdmQuery;
use BasePeer;

class UDMController extends AbstractActionController
{
    public function nuevoAction()
    {
        $UDMForm = new UDMForm();
        $UDMForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $UDMFilter = new UDMFilter();
            $UDMForm->setInputFilter($UDMFilter->getInputFilter());
            $UDMForm->setData($request->getPost());

            if ($UDMForm->isValid()) {
                $UDM = new Udm();
                foreach($UDMForm->getData() as $UDMKey => $UDMValue){
                    if($UDMKey != 'idudm' && $UDMKey != 'submit'){
                        $UDM->setByName($UDMKey, $UDMValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $UDM->save();
                return $this->redirect()->toRoute('udm');
            }else{
                $messageArray = array();
                foreach ($UDMForm->getMessages() as $key => $value){
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
        return array('UDMForm' => $UDMForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario udmForm
        $udmForm = new UDMForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($udmForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idudm';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $udmQuery = new UdmQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $udmQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $udmQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'udms' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('udm', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra udmQuery
        $udmQuery = UdmQuery::create();

        //Verificamos que el Id udm que se quiere modificar exista
        if($udmQuery->create()->filterByIdudm($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra udmQuery
            $udmPKQuery = $udmQuery->findPk($id);
            $udmQueryArray = $udmPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $UDMForm = new UDMForm();
            $ElementsUDMForm = $UDMForm->getElements();

            if ($request->isPost()){
                $UDMArray = array();
                foreach($ElementsUDMForm as $key=>$value){
                    if($key != 'submit'){
                        $UDMArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $udmQueryArray[$key];
                    }
                }
            }else{
                foreach($udmQueryArray as $udmQueryKey => $udmQueryValue){
                    $UDMArray[$udmQueryKey] = $udmQueryArray[$udmQueryKey];

                }
            }

            $UDMFilter = new UDMFilter();
            $UDMForm->setInputFilter($UDMFilter->getInputFilter());
            $UDMForm->setData($UDMArray);

            if ($UDMForm->isValid()) {
                foreach($UDMForm->getData() as $UDMKey => $UDMValue){
                    if($UDMKey != 'submit'){
                        $udmPKQuery->setByName($UDMKey, $UDMValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($udmPKQuery->isModified()){
                    $udmPKQuery->save();
                    return $this->redirect()->toRoute('udm');
                }
            }else{
                $messageArray = array();
                foreach ($UDMForm->getMessages() as $key => $value){
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
            'UDMForm' => $UDMForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('udm');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                UdmQuery::create()->filterByIdudm($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('udm');
        }

        $provedorEntity = UdmQuery::create()->filterByIdudm($id)->findOne();
        return array(
            'id'    => $id,
            'udm' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
