<?php

namespace Catalogos\Articulo\Controller;

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
use TipoQuery;
use Propiedad;
use Propiedadvalor;

class ArticuloController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Almacenamos en un arreglo todas los Tipos
        $tipoCollection = \TipoQuery::create()->find();
       
        $tipoArray = array();
        foreach ($tipoCollection as $tipo){
            $tipoArray[$tipo->getIdtipo()] = $tipo->getTipoNombre();
        }
       
        //Intanciamos nuestro formulario de Articulo
        $articuloForm = new ArticuloForm($tipoArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro de articulo
            $articuloFilter = new ArticuloFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $articuloForm->setInputFilter($articuloFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $articuloForm->setData($request->getPost());

            //Validamos nuestro formulario de articulo
            if($articuloForm->isValid()){ 
                var_dump($_POST);
                //Instanciamos un nuevo objeto de nuestro objeto Articulo
                $articulo = new Articulo();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                    $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos Articulo
                $articulo->save();
                
                //Verificamos si nos enviaron propiedades
                foreach($_POST as $key => $value){
                    if(strstr($key, 'propiedad') && $value['nombre'] != null){                      
                        //Guardamos las propiedades
                        $propiedad = new \Propiedad();
                        $propiedad->setIdarticulo($articulo->getIdarticulo());
                        $propiedad->setPropiedadNombre($value["nombre"]);
                        $propiedad->save();
                        
                        //Guardamos las variantes de la propiedad
                        foreach ($value as $varianteKey => $varianteValue){                            
                            if($varianteKey !== "nombre" && $varianteValue !=null){                           
                                $variante = new \Propiedadvalor();
                                $variante->setIdarticulo($articulo->getIdarticulo());
                                $variante->setIdpropiedad($propiedad->getIdpropiedad());
                                $variante->setPropiedadvalorNombre($varianteValue);
                                $variante->save();
                            }
                        }          
                    }
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Articulo guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('articulo');
                
            }
            
        }
        
        return new ViewModel(array(
            'articuloForm' => $articuloForm,
        ));

    }

    public function listarAction()
    {
        $articuloQuery = new ArticuloQuery();

        $result = $articuloQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        //Verificamos si el producto tiene porpiedades
        
        return new ViewModel(array(
            'articulos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id articulo que se quiere modificar exista
        if(!ArticuloQuery::create()->filterByIdarticulo($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('articulo', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro articulo
            $articulo = ArticuloQuery::create()->findPk($id);
            
            //Almacenamos en un arreglo todas las tipoes
            $tipoCollection = \EspecialidadQuery::create()->find();
            $tipoArray = array();
            foreach ($tipoCollection as $tipo){
                $tipoArray[$tipo->getIdtipo()] = $tipo->getEspecialidadNombre();
            }
            
            //Instanciamos nuestro formulario
            $articuloForm = new ArticuloForm($tipoArray);
            
            //Le ponemos los datos de nuestro articulo a nuestro formulario
            $articuloForm->setData($articulo->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $articuloFilter = new ArticuloFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $articuloForm->setInputFilter($articuloFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $articuloForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($articuloForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                    foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                        $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $articulo->save();
                    
                    //Guardamos las propiedades
                    echo '<pre>';var_dump($_POST); echo '</pre>';

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Articulo guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('articulo');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'articuloForm' => $articuloForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!ArticuloQuery::create()->filterByIdarticulo($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('articulo');
        }
        

            //Instanciamos nuestro articulo
            $articulo = ArticuloQuery::create()->findPk($id);
            
            $articulo->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Articulo eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('articulo');

    }
}