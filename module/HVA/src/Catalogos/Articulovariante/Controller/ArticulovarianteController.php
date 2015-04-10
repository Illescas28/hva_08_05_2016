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

                    $adapter->setDestination('/Applications/AMPPS/www/Project/HVA/public/img/articulovariante');
                    if ($adapter->receive($File['name'])) {
                        // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/public/img/articulovariante
                    }
                }

                $Articulovariante = new Articulovariante();
                foreach($ArticulovarianteForm->getData() as $ArticulovarianteKey => $ArticulovarianteValue){
                    if($ArticulovarianteKey != 'idarticulovariante' && $ArticulovarianteKey != 'submit'){
                        if($ArticulovarianteKey == 'articulovariante_imagen'){
                            $Articulovariante->setArticulovarianteImagen('/img/articulovariante/'.$ArticulovarianteValue);
                        }else{
                            $Articulovariante->setByName($ArticulovarianteKey, $ArticulovarianteValue, BasePeer::TYPE_FIELDNAME);

                        }
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
        $articulovarianteQuery = new \ArticulovarianteQuery();

        $result = $articulovarianteQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'articulosvariantes' => $dataCollection,
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

            $ArticulovarianteArray = array();
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
                if ($request->isPost()){
                    foreach($ArticulovarianteForm->getData() as $ArticulovarianteKey => $ArticulovarianteValue){
                        if($ArticulovarianteKey != 'submit'){
                            if($ArticulovarianteKey == 'articulovariante_imagen'){
                                if($ArticulovarianteValue){
                                    $articulovariantePKQuery->setArticulovarianteImagen('/img/articulovariante/'.$ArticulovarianteValue);
                                }else{
                                    // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                                    $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$articulovarianteQueryArray['articulovariante_imagen'];
                                    if(unlink($dirFile))//El archivo fue borrado.
                                    $articulovariantePKQuery->setArticulovarianteImagen($ArticulovarianteValue);
                                }
                            }else{
                                $articulovariantePKQuery->setByName($ArticulovarianteKey, $ArticulovarianteValue, BasePeer::TYPE_FIELDNAME);
                            }
                        }
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

                            // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                            $dirFile = '/Applications/AMPPS/www/Project/HVA/public/img/articulovariante'.$articulovarianteQueryArray['articulovariante_imagen'];
                            if(unlink($dirFile))//El archivo fue borrado.

                            // Seteamos la ruta en donde deseamos almacenar la imagen
                            $adapter->setDestination('/Applications/AMPPS/www/Project/HVA/public/img/articulovariante');
                            if ($adapter->receive($File['name'])) {
                                // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/public/img/articulovariante
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
                $ArticulovarianteQuery = ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->findOne();
                // Almacenamos la ruta en donde se encuentra el archivo que remplasaremos.
                $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$ArticulovarianteQuery->getArticulovarianteImagen();
                if(unlink($dirFile)){//El archivo fue borrado.
                    ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->delete();
                }else{
                    ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->delete();
                }
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