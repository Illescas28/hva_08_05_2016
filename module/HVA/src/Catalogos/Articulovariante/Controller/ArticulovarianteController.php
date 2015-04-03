<?php

namespace Catalogos\Articulovariante\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Articulovariante\Form\ArticulovarianteForm;

//// Filter ////
use Catalogos\Articulovariante\Filter\ArticulovarianteFilter;

//// Propel ////
use Articulovariante;
use ArticulovarianteQuery;
use BasePeer;

class ArticulovarianteController extends AbstractActionController
{
    public function nuevoAction()
    {
        $ArticulovarianteForm = new ArticulovarianteForm();
        $ArticulovarianteForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $ArticulovarianteFilter = new ArticulovarianteFilter();
            $ArticulovarianteForm->setInputFilter($ArticulovarianteFilter->getInputFilter());
            $data = $request->getPost()->toArray();
            $upload = new \Zend\File\Transfer\Adapter\Http();
            $files  = $upload->getFileInfo();

            foreach($files as $file => $fileInfo) {
                $fileName = $fileInfo['name'];
            }
            $data = array_merge(
                $data, //POST
                array('articulovariante_imagen'=> $fileName) //Guardamos el nombre del archivo...
            );
            $ArticulovarianteForm->setData($data);

            foreach($data as $key => $value){

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

            if ($ArticulovarianteForm->isValid()) {

                $size = new \Zend\Validator\File\Size(array('max'=>5000000)); //maximo de bytes permitidos tamañpo de imagen
                $uploads = new \Zend\File\Transfer\Adapter\Http();
                $files  = $uploads->getFileInfo();

                foreach($files as $file => $fileInfo) {
                    $fileName = $fileInfo['name'];
                    $uploads->setValidators(array($size), $fileName);
                    if ($uploads->isUploaded($file)) {
                        if (!$uploads->isValid($file)){
                            $dataError = $uploads->getMessages();
                            $error = array();
                            foreach($dataError as $key=>$row)
                            {
                                $error[] = $row;
                            } //seteamos formElementErrors
                            $ArticulovarianteForm->setMessages(array('articulovariante_imagen'=>$error ));
                        } else {
                            // dirname(__DIR__) = /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante
                            $uploads->setDestination(dirname(__DIR__).'/images');
                            if ($uploads->receive($file)) {
                                // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante/images
                            }
                        }
                    }
                }

                $Articulovariante = new Articulovariante();
                foreach($ArticulovarianteForm->getData() as $ArticulovarianteKey => $ArticulovarianteValue){
                    if($ArticulovarianteKey != 'idarticulovariante' && $ArticulovarianteKey != 'submit'){
                        $Articulovariante->setByName($ArticulovarianteKey, $ArticulovarianteValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Articulovariante->save();

                if($error =! null){
                    return $this->redirect()->toRoute('articulovariante');
                }
            }else{
                $messageArray = array();
                foreach ($ArticulovarianteForm->getMessages() as $key => $value){
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
        return array('ArticulovarianteForm' => $ArticulovarianteForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario articulovarianteForm
        $articulovarianteForm = new ArticulovarianteForm();

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

        $articulovarianteQuery = new ArticulovarianteQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $articulovarianteQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $articulovarianteQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Articulovariantes' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('articulovariante', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra articulovarianteQuery
        $articulovarianteQuery = ArticulovarianteQuery::create();

        //Verificamos que el Id articulovariante que se quiere modificar exista
        if($articulovarianteQuery->create()->filterByIdarticulovariante($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra articulovarianteQuery
            $articulovariantePKQuery = $articulovarianteQuery->findPk($id);
            $articulovarianteQueryArray = $articulovariantePKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $ArticulovarianteForm = new ArticulovarianteForm();
            $ElementsArticulovarianteForm = $ArticulovarianteForm->getElements();

            if ($request->isPost()){
                $upload = new \Zend\File\Transfer\Adapter\Http();
                $files  = $upload->getFileInfo();

                foreach($files as $file => $fileInfo) {
                    $fileName = $fileInfo['name'];
                }

                if($fileName != null){
                    $size = new \Zend\Validator\File\Size(array('max'=>5000000)); //maximo de bytes permitidos tamañpo de imagen
                    $uploads = new \Zend\File\Transfer\Adapter\Http();
                    $files  = $uploads->getFileInfo();

                    foreach($files as $file => $fileInfo) {
                        $fileName = $fileInfo['name'];
                        $uploads->setValidators(array($size), $fileName);
                        if ($uploads->isUploaded($file)) {
                            if (!$uploads->isValid($file)){
                                $dataError = $uploads->getMessages();
                                $error = array();
                                foreach($dataError as $key=>$row)
                                {
                                    $error[] = $row;
                                } //seteamos formElementErrors
                                $ArticulovarianteForm->setMessages(array('articulovariante_imagen'=>$error ));
                            } else {
                                // dirname(__DIR__) = /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante
                                $uploads->setDestination(dirname(__DIR__).'/images');
                                if ($uploads->receive($file)) {
                                    // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante/images
                                }
                            }
                        }
                    }
                }
                $ArticulovarianteArray = array();
                foreach($ElementsArticulovarianteForm as $key=>$value){
                    if($key != 'submit'){
                        $ArticulovarianteArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $articulovarianteQueryArray[$key];
                    }
                }
            }else{
                foreach($articulovarianteQueryArray as $articulovarianteQueryKey => $articulovarianteQueryValue){
                    $ArticulovarianteArray[$articulovarianteQueryKey] = $articulovarianteQueryArray[$articulovarianteQueryKey];

                }
            }

            $ArticulovarianteArray = array_merge(
                $ArticulovarianteArray, //POST
                array('articulovariante_imagen'=> $fileName) //Guardamos el nombre del archivo...
            );

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

            $ArticulovarianteFilter = new ArticulovarianteFilter();
            $ArticulovarianteForm->setInputFilter($ArticulovarianteFilter->getInputFilter());
            $ArticulovarianteForm->setData($ArticulovarianteArray);

            if ($ArticulovarianteForm->isValid()) {
                foreach($ArticulovarianteForm->getData() as $ArticulovarianteKey => $ArticulovarianteValue){
                    if($ArticulovarianteKey != 'submit'){
                        $articulovariantePKQuery->setByName($ArticulovarianteKey, $ArticulovarianteValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($articulovariantePKQuery->isModified()){
                    $articulovariantePKQuery->save();
                    return $this->redirect()->toRoute('articulovariante');
                }
            }else{
                $messageArray = array();
                foreach ($ArticulovarianteForm->getMessages() as $key => $value){
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
            'ArticulovarianteForm' => $ArticulovarianteForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('articulovariante');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('articulovariante');
        }

        $provedorEntity = ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->findOne();
        return array(
            'id'    => $id,
            'articulovariante' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}