<?php

namespace Catalogos\Productovariante\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Productovariante\Form\ProductovarianteForm;

//// Filter ////
use Catalogos\Productovariante\Filter\ProductovarianteFilter;

//// Propel ////
use Articulo;
use ArticuloQuery;
use BasePeer;

class ProductovarianteController extends AbstractActionController
{
    public function nuevoAction()
    {
        $tipoQuery = \TipoQuery::create()->find();

        $tipoArray = array();
        foreach($tipoQuery as $tipo){
            $tipoArray[$tipo->getIdtipo()] = $tipo->getTipoNombre();
        }
        $productovarianteForm = new ProductovarianteForm($tipoArray);

        $request = $this->getRequest();
        if ($request->isPost()) {

            $productovarianteFilter = new ProductovarianteFilter();
            $productovarianteForm->setInputFilter($productovarianteFilter->getInputFilter());

            // Almacenamos en una variable de tipo array los datos que nos mandan por post (no almacena archivos)
            $nonFile = $request->getPost()->toArray();
            // Obtenemos los detalles del archivo
            $File = $this->params()->fromFiles('articulovariante_imagen');
            // Creamos un array conjuntando los datos del post y el archivo
            $data = array_merge(
                $nonFile, //POST
                array('articulovariante_imagen'=> $File['name']) //FILE...
            );

            $productovarianteForm->setData($data);

            if ($productovarianteForm->isValid()) {
                if(\ArticuloQuery::create()->filterByArticuloNombre($request->getPost()->articulo_nombre)->exists()){
                    $ProductovarianteQuery = \ArticuloQuery::create()->filterByArticuloNombre($request->getPost()->articulo_nombre)->findOne();

                    if(\PropiedadQuery::create()->filterByPropiedadNombre($request->getPost()->propiedad_nombre)->exists()){
                        $PropiedadQuery = \PropiedadQuery::create()->filterByPropiedadNombre($request->getPost()->propiedad_nombre)->findOne();

                        $Propiedadvalor = new \Propiedadvalor();
                        $Propiedadvalor->setIdarticulo($ProductovarianteQuery->getIdarticulo());
                        $Propiedadvalor->setIdpropiedad($PropiedadQuery->getIdpropiedad());
                        $Propiedadvalor->setPropiedadvalorNombre($request->getPost()->propiedadvalor_nombre);
                        $Propiedadvalor->save();

                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdarticulo($ProductovarianteQuery->getIdarticulo())->filterByIdpropiedad($PropiedadQuery->getIdpropiedad())->find();

                        return array(
                            'productovarianteForm' => $productovarianteForm,
                            'propiedadvalor' => $propiedadvalorQuery,
                        );
                    }
                }
                $Productovariante = new \Articulo();
                foreach($productovarianteForm->getData() as $ProductovarianteKey => $ProductovarianteValue){
                    if($ProductovarianteKey != 'idarticulo' && $ProductovarianteKey != 'propiedad_nombre' && $ProductovarianteKey != 'propiedadvalor_nombre' && $ProductovarianteKey != 'articulovariante_codigobarras' && $ProductovarianteKey != 'articulovariante_costo' && $ProductovarianteKey != 'articulovariante_precio' && $ProductovarianteKey != 'articulovariante_iva' && $ProductovarianteKey != 'articulovariante_imagen' && $ProductovarianteKey != 'minimo' && $ProductovarianteKey != 'maximo' && $ProductovarianteKey != 'reorden' && $ProductovarianteKey != 'submit'){
                        $Productovariante->setByName($ProductovarianteKey, $ProductovarianteValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Productovariante->save();

                $Propiedad = new \Propiedad();
                $Propiedad->setIdarticulo($Productovariante->getIdarticulo());
                $Propiedad->setPropiedadNombre($data['propiedad_nombre']);
                $Propiedad->save();

                $Propiedadvalor = new \Propiedadvalor();
                $Propiedadvalor->setIdarticulo($Productovariante->getIdarticulo());
                $Propiedadvalor->setIdpropiedad($Propiedad->getIdpropiedad());
                $Propiedadvalor->setPropiedadvalorNombre($data['propiedadvalor_nombre']);
                $Propiedadvalor->save();

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
                    $productovarianteForm->setMessages(array('articulovariante_imagen'=>$error ));
                } else {
                    $adapter->setDestination('/Applications/AMPPS/www/Project/HVA/public/img/articulovariante');
                    if ($adapter->receive($File['name'])) {
                        // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/public/img/articulovariante
                    }
                }

                $Articulovariante = new \Articulovariante();
                $Articulovariante->setIdarticulo($Productovariante->getIdarticulo());
                $Articulovariante->setArticulovarianteCodigobarras($data['articulovariante_codigobarras']);
                $Articulovariante->setArticulovarianteCosto($data['articulovariante_costo']);
                $Articulovariante->setArticulovariantePrecio($data['articulovariante_precio']);
                $Articulovariante->setArticulovarianteIva($data['articulovariante_iva']);
                $Articulovariante->setArticulovarianteImagen('/img/articulovariante/'.$data['articulovariante_imagen']);
                $Articulovariante->save();

                $lugars = \LugarQuery::create()->find();
                foreach($lugars as $lugar){
                    $Articulovariantereorden = new \Articulovariantereorden();
                    $Articulovariantereorden->setIdlugar($lugar->getIdlugar());
                    $Articulovariantereorden->setIdarticulovariante($Articulovariante->getIdarticulovariante());
                    $Articulovariantereorden->setMinimo($data['minimo']);
                    $Articulovariantereorden->setMaximo($data['maximo']);
                    $Articulovariantereorden->setReorden($data['reorden']);
                    $Articulovariantereorden->save();
                }

                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByPropiedadvalorNombre($Propiedadvalor->getPropiedadvalorNombre())->find();
                $propiedadvalorArray = array();
                foreach($propiedadvalorQuery as $propiedadvalorEntity){
                    $propiedadvalorArray[$propiedadvalorEntity->getIdpropiedadvalor()] = $propiedadvalorEntity->getPropiedadvalorNombre();
                }
                return array(
                    'productovarianteForm' => $productovarianteForm,
                    'propiedadvalor' => $propiedadvalorArray,
                );

                /*
                if($error =! null){
                    return $this->redirect()->toRoute('productovariante');
                }
                */

            }
        }
        return array(
            'productovarianteForm' => $productovarianteForm,
        );
    }

    public function listarAction()
    {
        $productovarianteQuery = new \ArticulovarianteQuery();

        $result = $productovarianteQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'productovariante' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('productovariante', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra productovarianteQuery
        $productovarianteQuery = ArticuloQuery::create();

        //Verificamos que el Id productovariante que se quiere modificar exista
        if($productovarianteQuery->create()->filterByIdproductovariante($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra productovarianteQuery
            $productovariantePKQuery = $productovarianteQuery->findPk($id);
            $productovarianteQueryArray = $productovariantePKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $ProductovarianteForm = new ProductovarianteForm();
            $ElementsProductovarianteForm = $ProductovarianteForm->getElements();

            $ProductovarianteArray = array();
            if ($request->isPost()){

                // Validamos que el idproductovariante
                foreach($request->getPost() as $key => $value){
                    if($key == 'idproductovariante'){
                        $productovarianteQuery = \ArticuloQuery::create()->filterByIdproductovariante($value)->findOne();
                        // Validamos que exista el idproductovariante.
                        if(!$productovarianteQuery){
                            return new ViewModel(array(
                                'Error' => array(
                                    'Invalid idproductovariante.' => 'Invalid idproductovariante.'
                                ),
                            ));
                        }
                    }
                }

                foreach($ElementsProductovarianteForm as $key=>$value){
                    if($key != 'submit'){
                        $ProductovarianteArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $productovarianteQueryArray[$key];
                    }
                }
                // Obtenemos los detalles del archivo
                $File = $this->params()->fromFiles('productovariante_imagen');
                if($File != null){
                    $ProductovarianteArray['productovariante_imagen'] = $File['name'];
                }else{
                    $ProductovarianteArray['productovariante_imagen'] = $productovarianteQueryArray['productovariante_imagen'];
                }
            }else{
                foreach($productovarianteQueryArray as $productovarianteQueryKey => $productovarianteQueryValue){
                    $ProductovarianteArray[$productovarianteQueryKey] = $productovarianteQueryArray[$productovarianteQueryKey];

                }
            }

            $ProductovarianteFilter = new ProductovarianteFilter();
            $ProductovarianteForm->setInputFilter($ProductovarianteFilter->getInputFilter());
            $ProductovarianteForm->setData($ProductovarianteArray);

            if ($ProductovarianteForm->isValid()) {
                if ($request->isPost()){
                    foreach($ProductovarianteForm->getData() as $ProductovarianteKey => $ProductovarianteValue){
                        if($ProductovarianteKey != 'submit'){
                            if($ProductovarianteKey == 'productovariante_imagen'){
                                if($ProductovarianteValue){
                                    $productovariantePKQuery->setProductovarianteImagen('/img/productovariante/'.$ProductovarianteValue);
                                }else{
                                    // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                                    $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$productovarianteQueryArray['productovariante_imagen'];
                                    if(unlink($dirFile))//El archivo fue borrado.
                                    $productovariantePKQuery->setProductovarianteImagen($ProductovarianteValue);
                                }
                            }else{
                                $productovariantePKQuery->setByName($ProductovarianteKey, $ProductovarianteValue, BasePeer::TYPE_FIELDNAME);
                            }
                        }
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($productovariantePKQuery->isModified()){

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
                            $ProductovarianteForm->setMessages(array('productovariante_imagen'=>$error ));
                        } else {

                            // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                            $dirFile = '/Applications/AMPPS/www/Project/HVA/public/img/productovariante'.$productovarianteQueryArray['productovariante_imagen'];
                            if(unlink($dirFile))//El archivo fue borrado.

                            // Seteamos la ruta en donde deseamos almacenar la imagen
                            $adapter->setDestination('/Applications/AMPPS/www/Project/HVA/public/img/productovariante');
                            if ($adapter->receive($File['name'])) {
                                // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/public/img/productovariante
                            }
                        }
                    }

                    $productovariantePKQuery->save();
                    return $this->redirect()->toRoute('productovariante');
                }
            }else{
                $messageArray = array();
                foreach ($ProductovarianteForm->getMessages() as $key => $value){
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
            'ProductovarianteForm' => $ProductovarianteForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('productovariante');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $ProductovarianteQuery = ProductovarianteQuery::create()->filterByIdproductovariante($id)->findOne();
                // Almacenamos la ruta en donde se encuentra el archivo que remplasaremos.
                $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$ProductovarianteQuery->getProductovarianteImagen();
                if(unlink($dirFile)){//El archivo fue borrado.
                    ProductovarianteQuery::create()->filterByIdproductovariante($id)->delete();
                }else{
                    ProductovarianteQuery::create()->filterByIdproductovariante($id)->delete();
                }
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('productovariante');
        }

        $provedorEntity = ProductovarianteQuery::create()->filterByIdproductovariante($id)->findOne();
        return array(
            'id'    => $id,
            'productovariante' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}