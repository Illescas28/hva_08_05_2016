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

            // Almacenamos en una variable de tipo array los datos que nos mandan por post (no almacena archivos)
            $nonFile = $request->getPost()->toArray();
            // Obtenemos los detalles del archivo
            $File = $this->params()->fromFiles('articulovariante_imagen');
            // Creamos un array conjuntando los datos del post y el archivo
            $data = array_merge(
                $nonFile, //POST
                array('articulovariante_imagen'=> $File['name']) //FILE...
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

                $size = new \Zend\Validator\File\Size(array('max'=>2000000)); //maximo bytes filesize
                $adapter = new \Zend\File\Transfer\Adapter\Http();
                $adapter->setValidators(array($size), $File['name']);

                if (!$adapter->isValid()){
                    $dataError = $adapter->getMessages();
                    $error = array();
                    foreach($dataError as $key=>$row)
                    {
                        $error[] = $row;
                    } //seteamos formElementErrors
                    $ArticulovarianteForm->setMessages(array('articulovariante_imagen'=>$error ));
                } else {
                    // dirname(__DIR__) = /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante
                    $adapter->setDestination(dirname(__DIR__).'/images');
                    if ($adapter->receive($File['name'])) {
                        // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante/images
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

                // Validamos que el idarticulo
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

                $ArticulovarianteArray = array();
                foreach($ElementsArticulovarianteForm as $key=>$value){
                    if($key != 'submit'){
                        $ArticulovarianteArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $articulovarianteQueryArray[$key];
                    }
                }
                // Obtenemos los detalles del archivo
                $File = $this->params()->fromFiles('articulovariante_imagen');
                if($File != null){
                    $ArticulovarianteArray['articulovariante_imagen'] = $File['name'];
                }else{
                    $ArticulovarianteArray['articulovariante_imagen'] = $articulovarianteQueryArray['articulovariante_imagen'];
                }
            }else{
                foreach($articulovarianteQueryArray as $articulovarianteQueryKey => $articulovarianteQueryValue){
                    $ArticulovarianteArray[$articulovarianteQueryKey] = $articulovarianteQueryArray[$articulovarianteQueryKey];

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

                    if($File != null){

                        $size = new \Zend\Validator\File\Size(array('max'=>2000000)); //maximo bytes filesize
                        $adapter = new \Zend\File\Transfer\Adapter\Http();
                        $adapter->setValidators(array($size), $File['name']);

                        if (!$adapter->isValid()){
                            $dataError = $adapter->getMessages();
                            $error = array();
                            foreach($dataError as $key=>$row)
                            {
                                $error[] = $row;
                            } //seteamos formElementErrors
                            $ArticulovarianteForm->setMessages(array('articulovariante_imagen'=>$error ));
                        } else {
                            /*
                             * Si existe otro producto que utilice la misma imagen???
                             *
                            // Almacenamos la ruta en donde se encuentra el archivo que remplasaremos.
                            $dirFile = dirname(__DIR__).'/images/'.$articulovarianteQueryArray['articulovariante_imagen'];
                            if(unlink($dirFile))//El archivo fue borrado.
                            */

                            // dirname(__DIR__) = /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante
                            $adapter->setDestination(dirname(__DIR__).'/images');
                            if ($adapter->receive($File['name'])) {
                                // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/module/HVA/src/Catalogos/Articulovariante/images
                            }
                        }
                    }

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