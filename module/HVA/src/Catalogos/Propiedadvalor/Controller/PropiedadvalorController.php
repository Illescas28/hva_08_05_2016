<?php

namespace Catalogos\Propiedadvalor\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Propiedadvalor\Form\PropiedadvalorForm;

//// Filter ////
use Catalogos\Propiedadvalor\Filter\PropiedadvalorFilter;

//// Propel ////
use Propiedadvalor;
use PropiedadvalorQuery;
use BasePeer;

class PropiedadvalorController extends AbstractActionController
{
    public function nuevoAction()
    {
        $PropiedadvalorForm = new PropiedadvalorForm();
        $PropiedadvalorForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $PropiedadvalorFilter = new PropiedadvalorFilter();
            $PropiedadvalorForm->setInputFilter($PropiedadvalorFilter->getInputFilter());
            $PropiedadvalorForm->setData($request->getPost());

            foreach($request->getPost() as $key => $value){
                if($key == 'idpropiedad'){
                    $articuloQuery = \ArticuloQuery::create()->filterByIdarticulo($value)->findOne();
                    // Validamos que exista el idarticulo.
                    if(!$articuloQuery){
                        return new ViewModel(array(
                            'Error' => array(
                                'Invalid idarticulo.' => 'Invalid idarticulo.'
                            ),
                        ));
                    }
                }
            }

            foreach($request->getPost() as $key => $value){
                if($key == 'idarticulo'){
                    $articuloQuery = \ArticuloQuery::create()->filterByIdarticulo($value)->findOne();
                    // Validamos que exista el idarticulo.
                    if(!$articuloQuery){
                        return new ViewModel(array(
                            'Error' => array(
                                'Invalid idarticulo.' => 'Invalid idarticulo.'
                            ),
                        ));
                    }
                }
            }

            if ($PropiedadvalorForm->isValid()) {
                $Propiedadvalor = new Propiedadvalor();
                foreach($PropiedadvalorForm->getData() as $PropiedadvalorKey => $PropiedadvalorValue){
                    if($PropiedadvalorKey != 'idpropiedadvalor' && $PropiedadvalorKey != 'submit'){
                        $Propiedadvalor->setByName($PropiedadvalorKey, $PropiedadvalorValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Propiedadvalor->save();
                return $this->redirect()->toRoute('propiedadvalor');
            }else{
                $messageArray = array();
                foreach ($PropiedadvalorForm->getMessages() as $key => $value){
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
        return array('PropiedadvalorForm' => $PropiedadvalorForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario propiedadvalorForm
        $propiedadvalorForm = new PropiedadvalorForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($propiedadvalorForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idpropiedadvalor';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $propiedadvalorQuery = new PropiedadvalorQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $propiedadvalorQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $propiedadvalorQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Propiedadvalors' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('propiedadvalor', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra propiedadvalorQuery
        $propiedadvalorQuery = PropiedadvalorQuery::create();

        //Verificamos que el Id propiedadvalor que se quiere modificar exista
        if($propiedadvalorQuery->create()->filterByIdpropiedadvalor($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra propiedadvalorQuery
            $propiedadvalorPKQuery = $propiedadvalorQuery->findPk($id);
            $propiedadvalorQueryArray = $propiedadvalorPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $PropiedadvalorForm = new PropiedadvalorForm();
            $ElementsPropiedadvalorForm = $PropiedadvalorForm->getElements();

            if ($request->isPost()){
                $PropiedadvalorArray = array();
                foreach($ElementsPropiedadvalorForm as $key=>$value){
                    if($key != 'submit'){
                        $PropiedadvalorArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $propiedadvalorQueryArray[$key];
                    }
                }
            }else{
                foreach($propiedadvalorQueryArray as $propiedadvalorQueryKey => $propiedadvalorQueryValue){
                    $PropiedadvalorArray[$propiedadvalorQueryKey] = $propiedadvalorQueryArray[$propiedadvalorQueryKey];

                }
            }

            $PropiedadvalorFilter = new PropiedadvalorFilter();
            $PropiedadvalorForm->setInputFilter($PropiedadvalorFilter->getInputFilter());
            $PropiedadvalorForm->setData($PropiedadvalorArray);

            if ($PropiedadvalorForm->isValid()) {
                foreach($PropiedadvalorForm->getData() as $PropiedadvalorKey => $PropiedadvalorValue){
                    if($PropiedadvalorKey != 'submit'){
                        $propiedadvalorPKQuery->setByName($PropiedadvalorKey, $PropiedadvalorValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($propiedadvalorPKQuery->isModified()){
                    $propiedadvalorPKQuery->save();
                    return $this->redirect()->toRoute('propiedadvalor');
                }
            }else{
                $messageArray = array();
                foreach ($PropiedadvalorForm->getMessages() as $key => $value){
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
            'PropiedadvalorForm' => $PropiedadvalorForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('propiedadvalor');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                PropiedadvalorQuery::create()->filterByIdpropiedadvalor($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('propiedadvalor');
        }

        $provedorEntity = PropiedadvalorQuery::create()->filterByIdpropiedadvalor($id)->findOne();
        return array(
            'id'    => $id,
            'propiedadvalor' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
