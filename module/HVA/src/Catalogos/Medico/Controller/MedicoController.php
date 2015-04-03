<?php

namespace Catalogos\Medico\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Medico\Form\MedicoForm;

//// Filter ////
use Catalogos\Medico\Filter\MedicoFilter;

//// Propel ////
use Medico;
use MedicoQuery;
use BasePeer;

class MedicoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $MedicoForm = new MedicoForm();
        $MedicoForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $MedicoFilter = new MedicoFilter();
            $MedicoForm->setInputFilter($MedicoFilter->getInputFilter());
            $MedicoForm->setData($request->getPost());

            foreach($request->getPost() as $key => $value){
                if($key == 'idespecialidad'){
                    $articuloQuery = \EspecialidadQuery::create()->filterByIdespecialidad($value)->findOne();
                    // Validamos que exista el idarticulo.
                    if(!$articuloQuery){
                        return new ViewModel(array(
                            'Error' => array(
                                'Invalid idespecialidad.' => 'Invalid idespecialidad.'
                            ),
                        ));
                    }
                }
            }

            if ($MedicoForm->isValid()) {
                $Medico = new Medico();
                foreach($MedicoForm->getData() as $MedicoKey => $MedicoValue){
                    if($MedicoKey != 'idmedico' && $MedicoKey != 'submit'){
                        $Medico->setByName($MedicoKey, $MedicoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Medico->save();
                return $this->redirect()->toRoute('medico');
            }else{
                $messageArray = array();
                foreach ($MedicoForm->getMessages() as $key => $value){
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
        return array('MedicoForm' => $MedicoForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario medicoForm
        $medicoForm = new MedicoForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($medicoForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idmedico';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $medicoQuery = new MedicoQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $medicoQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $medicoQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Medicos' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('medico', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra medicoQuery
        $medicoQuery = MedicoQuery::create();

        //Verificamos que el Id medico que se quiere modificar exista
        if($medicoQuery->create()->filterByIdmedico($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra medicoQuery
            $medicoPKQuery = $medicoQuery->findPk($id);
            $medicoQueryArray = $medicoPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $MedicoForm = new MedicoForm();
            $ElementsMedicoForm = $MedicoForm->getElements();

            if ($request->isPost()){
                $MedicoArray = array();
                foreach($ElementsMedicoForm as $key=>$value){
                    if($key != 'submit'){
                        $MedicoArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $medicoQueryArray[$key];
                    }
                }
            }else{
                foreach($medicoQueryArray as $medicoQueryKey => $medicoQueryValue){
                    $MedicoArray[$medicoQueryKey] = $medicoQueryArray[$medicoQueryKey];

                }
            }

            foreach($request->getPost() as $key => $value){
                if($key == 'idespecialidad'){
                    $articuloQuery = \EspecialidadQuery::create()->filterByIdespecialidad($value)->findOne();
                    // Validamos que exista el idarticulo.
                    if(!$articuloQuery){
                        return new ViewModel(array(
                            'Error' => array(
                                'Invalid idespecialidad.' => 'Invalid idespecialidad.'
                            ),
                        ));
                    }
                }
            }

            $MedicoFilter = new MedicoFilter();
            $MedicoForm->setInputFilter($MedicoFilter->getInputFilter());
            $MedicoForm->setData($MedicoArray);

            if ($MedicoForm->isValid()) {
                foreach($MedicoForm->getData() as $MedicoKey => $MedicoValue){
                    if($MedicoKey != 'submit'){
                        $medicoPKQuery->setByName($MedicoKey, $MedicoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($medicoPKQuery->isModified()){
                    $medicoPKQuery->save();
                    return $this->redirect()->toRoute('medico');
                }
            }else{
                $messageArray = array();
                foreach ($MedicoForm->getMessages() as $key => $value){
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
            'MedicoForm' => $MedicoForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('medico');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                MedicoQuery::create()->filterByIdmedico($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('medico');
        }

        $provedorEntity = MedicoQuery::create()->filterByIdmedico($id)->findOne();
        return array(
            'id'    => $id,
            'medico' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}