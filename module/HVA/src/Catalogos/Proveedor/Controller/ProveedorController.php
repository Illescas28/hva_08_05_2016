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

class ArticuloController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $articuloForm = new ArticuloForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $articuloFilter = new ArticuloFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $articuloForm->setInputFilter($articuloFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $articuloForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($articuloForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto articulo
                $articulo = new Articulo();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                    $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                }
              
                //Guardamos en nuestra base de datos
                $articulo->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Articulo guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('articulo');
                
            }else{
                
            }
        }
        
        return new ViewModel(array(
            'articuloForm' => $articuloForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario articuloForm
        $articuloForm = new articuloForm();

        $articuloQuery = new ArticuloQuery();

        $result = $articuloQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'articuloes' => $dataCollection,
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
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('articulo', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro articulo
            $articulo = ArticuloQuery::create()->findPk($id);

            //Instanciamos nuestro formulario
            $articuloForm = new ArticuloForm();
            
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
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto articulo
                    foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                        $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $articulo->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Articulo guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('articulo');

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