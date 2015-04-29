<?php

namespace Catalogos\Proveedor\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Proveedor\Form\ProveedorForm;

//// Filter ////
use Catalogos\Proveedor\Filter\ProveedorFilter;

//// Propel ////
use Proveedor;
use ProveedorQuery;
use BasePeer;

class ProveedorController extends AbstractActionController
{
    public function nuevoAction()
    {
        $ProveedorForm = new ProveedorForm();
        $ProveedorForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $ProveedorFilter = new ProveedorFilter();
            $ProveedorForm->setInputFilter($ProveedorFilter->getInputFilter());
            $ProveedorForm->setData($request->getPost());

            if ($ProveedorForm->isValid()) {
                $Proveedor = new Proveedor();
                foreach($ProveedorForm->getData() as $ProveedorKey => $ProveedorValue){
                    if($ProveedorKey != 'idproveedor' && $ProveedorKey != 'submit'){
                        $Proveedor->setByName($ProveedorKey, $ProveedorValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Proveedor->save();
                return $this->redirect()->toRoute('proveedor');
            }else{
                $messageArray = array();
                foreach ($ProveedorForm->getMessages() as $key => $value){
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
        return array('ProveedorForm' => $ProveedorForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario proveedorForm
        $proveedorForm = new ProveedorForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($proveedorForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idproveedor';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $proveedorQuery = new ProveedorQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $proveedorQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $proveedorQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Proveedores' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('proveedor', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra proveedorQuery
        $proveedorQuery = ProveedorQuery::create();

        //Verificamos que el Id proveedor que se quiere modificar exista
        if($proveedorQuery->create()->filterByIdproveedor($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra proveedorQuery
            $proveedorPKQuery = $proveedorQuery->findPk($id);
            $proveedorQueryArray = $proveedorPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $ProveedorForm = new ProveedorForm();
            $ElementsProveedorForm = $ProveedorForm->getElements();

            if ($request->isPost()){
                $ProveedorArray = array();
                foreach($ElementsProveedorForm as $key=>$value){
                    if($key != 'submit'){
                        $ProveedorArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $proveedorQueryArray[$key];
                    }
                }
            }else{
                foreach($proveedorQueryArray as $proveedorQueryKey => $proveedorQueryValue){
                    $ProveedorArray[$proveedorQueryKey] = $proveedorQueryArray[$proveedorQueryKey];

                }
            }

            $ProveedorFilter = new ProveedorFilter();
            $ProveedorForm->setInputFilter($ProveedorFilter->getInputFilter());
            $ProveedorForm->setData($ProveedorArray);

            if ($ProveedorForm->isValid()) {
                foreach($ProveedorForm->getData() as $ProveedorKey => $ProveedorValue){
                    if($ProveedorKey != 'submit'){
                        $proveedorPKQuery->setByName($ProveedorKey, $ProveedorValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($proveedorPKQuery->isModified()){
                    $proveedorPKQuery->save();
                    return $this->redirect()->toRoute('proveedor');
                }
            }else{
                $messageArray = array();
                foreach ($ProveedorForm->getMessages() as $key => $value){
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
            'ProveedorForm' => $ProveedorForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('proveedor');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                ProveedorQuery::create()->filterByIdproveedor($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('proveedor');
        }

        $provedorEntity = ProveedorQuery::create()->filterByIdproveedor($id)->findOne();
        return array(
            'id'    => $id,
            'proveedor' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
