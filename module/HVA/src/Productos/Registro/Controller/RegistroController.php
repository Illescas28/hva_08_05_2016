<?php

namespace Productos\Registro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class RegistroController extends AbstractActionController
{   
    public $target_dir = "/img/productos/";
    
    public function viewAction(){
        
         $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
         $modalName = 'modal-producto-'.$idarticulovariante;
         
         $fullName = '';
         
         $articuloVariante = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
         $fullName.=$articuloVariante->getArticulo()->getArticuloNombre();
         
         $articulo_variante_valor = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($idarticulovariante)->find();
         $variantes_counr = $articulo_variante_valor->count();
         $count = 1;
         $variante = new \Articulovariantevalor();
         foreach ($articulo_variante_valor as $key => $variante){
              
              $fullName.=' '.$variante->getPropiedad()->getPropiedadNombre() . ': '.$variante->getPropiedadvalor()->getPropiedadvalorNombre();
              if($count<$variantes_counr){
                $fullName.=' -'; 
              }
              $count++;
              
         }

        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName' => $modalName,
            'producto'     => $articuloVariante,
            'fullName' => $fullName,
            'articulo_variante_valor' => $articulo_variante_valor,
        ));
        return $viewModel;
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $lugarCollectionArray = array();
          
           
            //Comenzamos hacer la query
            $query = new \ArticulovarianteQuery();
            
            //JOIN
            $query->useArticuloQuery()->orderByArticuloNombre(\Criteria::ASC)->endUse()->withColumn('articulo_nombre');
  
            //SEARCH
            if(!empty($post_data['search']['value'])){
                $search_value = $post_data['search']['value'];
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('articulo.articulo_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $query->addAnd($c1);

            }

           
            //PAGINACION
            $recordsFiltered = $query->count();
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            $productos = array();
            $articuloVariante = new \Articulovariante();
            foreach ($query->find() as $articuloVariante){
                
                $tmp = $articuloVariante->toArray(\BasePeer::TYPE_FIELDNAME);
        
                //DESCRIPCION
                $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articuloVariante->getIdarticulovariante())->find();
                $tmp['descripcion'] = '';
                $propiedadCount = 0;
                foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                    $propiedadCount ++;
                    $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                    $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                    if($propiedadCount<$articuloVarianteValorCollection->count()){
                        $tmp['descripcion'].=' - ';
                    }
                }
                // END DESCRIPCION
                
                array_push($productos, $tmp);

            }
            
          
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $productos,
               
            );
            
            return $this->getResponse()->setContent(json_encode($json_data));
           
        }
    }

    
    public function indexAction()
    {
        
        $request = $this->request;

        if($request->isPost()){//Si envian el formulario

             $post_data = $request->getPost();

             $id = $post_data['idproducto'];           
            if($id){
                
                //Creamos una instacia de nuestro articulovariante
                $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($id);
                $articuloVariante->setArticulovarianteCodigobarras($request->getPost()->articulovariante_codigobarras);
                $articuloVariante->setArticulovarianteCosto($request->getPost()->articulovariante_costo);
                $articuloVariante->setArticulovarianteCostocaja($request->getPost()->articulovariante_costocaja);
                $articuloVariante->setArticulovariantePrecio($request->getPost()->articulovariante_precio);
                $articuloVariante->setArticulovarianteIva($request->getPost()->articulovariante_iva);
                if($articuloVariante->isModified()){
                    $articuloVariante->save();
                }
            }else{
                //Comenzamos a itinerar sobre nuestro los elementos enviados
                foreach ($request->getPost() as $key => $value){
                    if(strpos($key, 'producto') !== false){
                        $idArticuloVariante = explode("-", $key);
                        $idArticuloVariante = $idArticuloVariante[1];

                        //Creamos una instacia de nuestro articulovariante
                        $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($idArticuloVariante);

                        $articuloVariante->setArticulovarianteCodigobarras($value["codigobarras"]);
                        $articuloVariante->setArticulovarianteCosto($value["costo"]);
                        $articuloVariante->setArticulovariantePrecio($value["precio"]);
                        $articuloVariante->setArticulovarianteIva($value["iva"]);

                        if($articuloVariante->isModified()){
                            $articuloVariante->save();
                        }
                    }
                }
            }
            
            //Ahora las imagen
            if(!empty($_FILES)){
                $upload_folder ='/img/productos/';

                $imagen = $_FILES['articulovariante_imagen'];
                $tipo_archivo = $_FILES['articulovariante_imagen']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];
                $nombre_archivo = 'producto_'.$post_data['idproducto'].'.'.$tipo_archivo;
                $tmp_archivo = $imagen['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)){
                    $articuloVariante->setArticulovarianteImagen($archivador);
                    $articuloVariante->save();
                }

            }
            else{
                $oldulr = $_SERVER["DOCUMENT_ROOT"].$articuloVariante->getArticulovarianteImagen();
                unlink($oldulr);
                $articuloVariante->setArticulovarianteImagen('');   
                if($articuloVariante->isModified()){
                    $articuloVariante->save();

                }
            }
            //Agregamos un mensaje
            //$this->flashMessenger()->addMessage('Registro de productos guardados exitosamente!');
        }

        //var_dump($this->flashMessenger()->getMessages());
        return new ViewModel(array(
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));

    }
    
    public function eliminarAction()
    {
        
        if ($this->params()->fromQuery('html')) {

            $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
            $modalName = 'delete-modal-articulo-' . $idarticulovariante;

            $fullName = '';

            $articuloVariante = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
            $fullName.=$articuloVariante->getArticulo()->getArticuloNombre();

            $articulo_variante_valor = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($idarticulovariante)->find();
            $variantes_counr = $articulo_variante_valor->count();
            $count = 1;
            $variante = new \Articulovariantevalor();
            foreach ($articulo_variante_valor as $key => $variante) {

                $fullName.=' ' . $variante->getPropiedad()->getPropiedadNombre() . ': ' . $variante->getPropiedadvalor()->getPropiedadvalorNombre();
                if ($count < $variantes_counr) {
                    $fullName.=' -';
                }
                $count++;
            }

            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariables(array(
                'modalName' => $modalName,
                'producto' => $articuloVariante,
                'fullName' => $fullName,
                'articulo_variante_valor' => $articulo_variante_valor,
            ));
            return $viewModel;
        }

        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!\ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('productos-registro');
        }
        
            //Instanciamos nuestro articulo
            $articulovariante = \ArticulovarianteQuery::create()->findPk($id);
            
            $articulovariante->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Producto eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('productos-registro');

    }
      
}
