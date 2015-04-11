<?php

namespace Catalogos\Lugar\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Lugar\Form\LugarForm;

//// Filter ////
use Catalogos\Lugar\Filter\LugarFilter;

//// Propel ////
use Lugar;
use LugarQuery;
use BasePeer;

class LugarController extends AbstractActionController
{
    public function nuevoAction()
    {
        $LugarForm = new LugarForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $LugarFilter = new LugarFilter();
            $LugarForm->setInputFilter($LugarFilter->getInputFilter());
            $LugarForm->setData($request->getPost());

            if ($LugarForm->isValid()) {
                $Lugar = new Lugar();
                foreach($LugarForm->getData() as $LugarKey => $LugarValue){
                    if($LugarKey != 'idlugar' && $LugarKey != 'submit'){
                        $Lugar->setByName($LugarKey, $LugarValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Lugar->save();
                return $this->redirect()->toRoute('lugar');
            }
        }
        return array('lugarForm' => $LugarForm);
    }

    public function verAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if ($id) {
            $lugarQuery = LugarQuery::create()->filterByIdlugar($id)->findOne();
        }

        return new ViewModel(array(
            'lugar' => $lugarQuery,
        ));
    }

    public function listarAction()
    {
        $lugarsQuery = new \LugarQuery();

        $result = $lugarsQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'lugares' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('lugar', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra lugarQuery
        $lugarQuery = LugarQuery::create();

        //Verificamos que el Id lugar que se quiere modificar exista
        if($lugarQuery->create()->filterByIdlugar($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra lugarQuery
            $lugarPKQuery = $lugarQuery->findPk($id);
            $lugarQueryArray = $lugarPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $LugarForm = new LugarForm();
            $ElementsLugarForm = $LugarForm->getElements();

            if ($request->isPost()){
                $LugarArray = array();
                foreach($ElementsLugarForm as $key=>$value){
                    if($key != 'submit'){
                        $LugarArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $lugarQueryArray[$key];
                    }
                }
            }else{
                foreach($lugarQueryArray as $lugarQueryKey => $lugarQueryValue){
                    $LugarArray[$lugarQueryKey] = $lugarQueryArray[$lugarQueryKey];

                }
            }

            $LugarFilter = new LugarFilter();
            $LugarForm->setInputFilter($LugarFilter->getInputFilter());
            $LugarForm->setData($LugarArray);

            if ($LugarForm->isValid()) {
                foreach($LugarForm->getData() as $LugarKey => $LugarValue){
                    if($LugarKey != 'submit'){
                        $lugarPKQuery->setByName($LugarKey, $LugarValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($lugarPKQuery->isModified()){
                    $lugarPKQuery->save();
                    return $this->redirect()->toRoute('lugar');
                }
            }else{
                $messageArray = array();
                foreach ($LugarForm->getMessages() as $key => $value){
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
            'LugarForm' => $LugarForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('lugar');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                LugarQuery::create()->filterByIdlugar($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('lugar');
        }

        $provedorEntity = LugarQuery::create()->filterByIdlugar($id)->findOne();
        return array(
            'id'    => $id,
            'lugar' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
