<?php

namespace Catalogos\Producto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Articulo\Form\ArticuloForm;

//// Filter ////
use Catalogos\Articulo\Filter\ArticuloFilter;

//// Propel ////
use Articulo;
use ArticuloQuery;
use BasePeer;

class ProductoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $tipo = \TipoQuery::create()->find();

        $productoForm = new ArticuloForm();

        $request = $this->getRequest();
        if ($request->isPost()) {

            $productoFilter = new ArticuloFilter();
            $productoForm->setInputFilter($productoFilter->getInputFilter());

            $productoForm->setData($request->getPost());

            if ($productoForm->isValid()) {
                $Producto = new \Articulo();
                foreach($productoForm->getData() as $ProductoKey => $ProductoValue){
                    if($ProductoKey != 'idarticulo' && $ProductoKey != 'submit'){
                        $Producto->setByName($ProductoKey, $ProductoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }

                $Producto->save();

                if($error =! null){
                    return $this->redirect()->toRoute('producto');
                }
            }
        }
        return array(
            'productoForm' => $productoForm,
            'tipos'  => $tipo,
        );
    }

    public function listarAction()
    {
        $productoQuery = new \ArticulovarianteQuery();

        $result = $productoQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'productos' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('producto', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra productoQuery
        $productoQuery = ProductoQuery::create();

        //Verificamos que el Id producto que se quiere modificar exista
        if($productoQuery->create()->filterByIdproducto($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra productoQuery
            $productoPKQuery = $productoQuery->findPk($id);
            $productoQueryArray = $productoPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $ProductoForm = new ProductoForm();
            $ElementsProductoForm = $ProductoForm->getElements();

            $ProductoArray = array();
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

                foreach($ElementsProductoForm as $key=>$value){
                    if($key != 'submit'){
                        $ProductoArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $productoQueryArray[$key];
                    }
                }
                // Obtenemos los detalles del archivo
                $File = $this->params()->fromFiles('producto_imagen');
                if($File != null){
                    $ProductoArray['producto_imagen'] = $File['name'];
                }else{
                    $ProductoArray['producto_imagen'] = $productoQueryArray['producto_imagen'];
                }
            }else{
                foreach($productoQueryArray as $productoQueryKey => $productoQueryValue){
                    $ProductoArray[$productoQueryKey] = $productoQueryArray[$productoQueryKey];

                }
            }

            $ProductoFilter = new ProductoFilter();
            $ProductoForm->setInputFilter($ProductoFilter->getInputFilter());
            $ProductoForm->setData($ProductoArray);

            if ($ProductoForm->isValid()) {
                if ($request->isPost()){
                    foreach($ProductoForm->getData() as $ProductoKey => $ProductoValue){
                        if($ProductoKey != 'submit'){
                            if($ProductoKey == 'producto_imagen'){
                                if($ProductoValue){
                                    $productoPKQuery->setProductoImagen('/img/producto/'.$ProductoValue);
                                }else{
                                    // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                                    $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$productoQueryArray['producto_imagen'];
                                    if(unlink($dirFile))//El archivo fue borrado.
                                    $productoPKQuery->setProductoImagen($ProductoValue);
                                }
                            }else{
                                $productoPKQuery->setByName($ProductoKey, $ProductoValue, BasePeer::TYPE_FIELDNAME);
                            }
                        }
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($productoPKQuery->isModified()){

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
                            $ProductoForm->setMessages(array('producto_imagen'=>$error ));
                        } else {

                            // Almacenamos la ruta en donde se encuentra el archivo que eliminaremos.
                            $dirFile = '/Applications/AMPPS/www/Project/HVA/public/img/producto'.$productoQueryArray['producto_imagen'];
                            if(unlink($dirFile))//El archivo fue borrado.

                            // Seteamos la ruta en donde deseamos almacenar la imagen
                            $adapter->setDestination('/Applications/AMPPS/www/Project/HVA/public/img/producto');
                            if ($adapter->receive($File['name'])) {
                                // Guardamos la imagen en /Applications/AMPPS/www/Project/HVA/public/img/producto
                            }
                        }
                    }

                    $productoPKQuery->save();
                    return $this->redirect()->toRoute('producto');
                }
            }else{
                $messageArray = array();
                foreach ($ProductoForm->getMessages() as $key => $value){
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
            'ProductoForm' => $ProductoForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('producto');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $ProductoQuery = ProductoQuery::create()->filterByIdproducto($id)->findOne();
                // Almacenamos la ruta en donde se encuentra el archivo que remplasaremos.
                $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$ProductoQuery->getProductoImagen();
                if(unlink($dirFile)){//El archivo fue borrado.
                    ProductoQuery::create()->filterByIdproducto($id)->delete();
                }else{
                    ProductoQuery::create()->filterByIdproducto($id)->delete();
                }
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('producto');
        }

        $provedorEntity = ProductoQuery::create()->filterByIdproducto($id)->findOne();
        return array(
            'id'    => $id,
            'producto' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}