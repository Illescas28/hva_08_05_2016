<?php

namespace Productos\Producto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class ProductoController extends AbstractActionController
{   
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $lugarCollectionArray = array();
          
           
            //Comenzamos hacer la query
            $query = new \ArticulovarianteQuery();
            
            //JOIN
            $query->joinArticulo()->withColumn('articulo_nombre');
  
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
                
                //Comenzamos a itinerar sobre los lugares disponibles
                $lugarCollection = \LugarQuery::create()->find();
                 $lugarCollectionArray = array();
                foreach ($lugarCollection as $kl => $vl){
                    $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
                }
                foreach ($lugarCollection as $kl => $vl){
                    //Los agregamos a nuestro arreglo
                    $tmp['lugar'][$vl->getLugarNombre()] =NULL;
                }

                //Obtenemos las compras que se han realizado del articulo variante
                $compraDetalleCollection = \OrdencompradetalleQuery::create()->findByIdarticulovariante($articuloVariante->getIdArticuloVariante());

                //Itineramos en la coleccion de compras
                foreach ($compraDetalleCollection as $kcd => $vcd) {

                    $idCompraDetalle = $vcd->getIdOrdenCompraDetalle();
                    
                    //por cada compra detalle la buscamos en lugar inventario
                    $lugarInventarioCollection = \LugarinventarioQuery::create()->findByIdordencompradetalle($idCompraDetalle);
                    //empezamos a itinerar en los registros para irlos sumando a nuestro lugar
                    foreach ($lugarInventarioCollection as $kli => $vli) {

                        $lugarNombre = $vli->getLugar()->getLugarNombre();
                        $cantidad = $vli->getLugarinventarioCantidad();
                        $tmp['lugar'][$lugarNombre] += $cantidad;
                    }
                }
                
                

                array_push($productos, $tmp);

            }
            
          
           
            
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $recordsFiltered,
                "data"            => $productos,
                'lugares' => $lugarCollectionArray,
            );
            
            return $this->getResponse()->setContent(json_encode($json_data));
           
        }
    }

    public function indexAction()
    {
        
        //obtenemos nuestros almacenes
        $lugarCollection = \LugarQuery::create()->find();
        $lugarCollectionArray = array();
        foreach ($lugarCollection as $kl => $vl){
            $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
        }
        
        return new ViewModel(array(
            'lugares' => $lugarCollectionArray,
            //'productos' => $productos,
            
        ));

//        //Obtenemos nuestros productos
//        $articuloCollection = \ArticuloQuery::create()->find();
//        
//        //obtenemos nuestros almacenes
//        $lugarCollection = \LugarQuery::create()->find();
//        $lugarCollectionArray = array();
//        foreach ($lugarCollection as $kl => $vl){
//            $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
//        }
//
//        //De cada articulo obtenemos sus variaciones (articulovariante)
//        $productos = array();
//        foreach ($articuloCollection as $ka => $av){    
//            $tmp['nombre'] = $av->getArticuloNombre();
//            $articulovarianteCollection = $av->getArticulovariantes();
//            //Comenzamos a itinerar sobre las variaciones
//            foreach ($articulovarianteCollection as $kav => $vav){
//                $tmp['id'] = $vav->getIdarticulovariante();
//                $tmp['codigo_barras'] = !is_null($vav->getArticuloVarianteCodigobarras()) ? $vav->getArticuloVarianteCodigobarras() : '';
//                $tmp['precio'] = !is_null($vav->getArticuloVariantePrecio()) ? $vav->getArticuloVariantePrecio() : 0.00;      
//                $tmp['imagen'] = $vav->getArticuloVarianteImagen();
//                
//                //Comenzamos a itinerar sobre los lugares disponibles
//                foreach ($lugarCollection as $kl => $vl){
//                    //Los agregamos a nuestro arreglo
//                    $tmp['lugar'][$vl->getLugarNombre()] =NULL;
//                }

                       
//                //Obtenemos las compras que se han realizado del articulo variante
//                $compraDetalleCollection = \OrdencompradetalleQuery::create()->findByIdarticulovariante($vav->getIdArticuloVariante());
//                
//                //Itineramos en la coleccion de compras
//                foreach ($compraDetalleCollection as $kcd => $vcd){
//                    
//                    $idCompraDetalle = $vcd->getIdOrdenCompraDetalle();
//                    
//                    //por cada compra detalle la buscamos en lugar inventario
//                    $lugarInventarioCollection = \LugarinventarioQuery::create()->findByIdordencompradetalle($idCompraDetalle);
//                    //empezamos a itinerar en los registros para irlos sumando a nuestro lugar
//                    foreach ($lugarInventarioCollection as $kli => $vli){
//                         
//                        $lugarNombre = $vli->getLugar()->getLugarNombre();
//                        $cantidad = $vli->getLugarinventarioCantidad();
//                        $tmp['lugar'][$lugarNombre] += $cantidad;
//
//                    }
//                    
//                }

//                //Por cada valor obtenemos su variaciones
//                $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($vav->getIdarticulovariante())->find();
//                //Comenzamos a itinerar sobre articulovariantevalor para obtener sus resultado
//                $tmp['descripcion'] = '';
//                $propiedadCount = 0;
//                foreach ($articuloVarianteValorCollection as $kavv => $vavv){
//                    $propiedadCount ++;
//                    $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
//                    $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
//                    if($propiedadCount<$articuloVarianteValorCollection->count()){
//                        $tmp['descripcion'].=' - ';
//                    }
//                }
//               
//                array_push($productos, $tmp);
//            }  
//        }
//
//        //var_dump($this->flashMessenger()->getMessages());
//        return new ViewModel(array(
//            'lugares' => $lugarCollectionArray,
//            'productos' => $productos,
//        ));
        
    }
    
    public function caducidadbylugarAction(){
        
        //Cachamos los datos de la url
        $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
        $idlugar = $this->params()->fromQuery('idlugar');
        $descripcion = $this->params()->fromQuery('descripcion');
        $existencias = $this->params()->fromQuery('existencias');
        $lugarNombre = $this->params()->fromQuery('lugarNombre');
        $modalName = 'modal-producto-'.$idarticulovariante.'-lugar-'.$idlugar;
        
        $modal = array(
            'nombre' => \ArticulovarianteQuery::create()->findOneByIdarticulovariante($idarticulovariante)->getArticulo()->getArticuloNombre(),
            'descripcion' => $descripcion,
            'caducidad' => array(),
            'existencias' => $existencias,
            'lugar_nombre' => $lugarNombre,
        );
        
        //Obtenemos todas las ordenes de compra por idarticulovariante
        $ordenCompraDetalleCollection = \OrdencompradetalleQuery::create()->findByIdarticulovariante($idarticulovariante);
        //Comenzamos a itinerar
        foreach($ordenCompraDetalleCollection as $kocd => $vocd){
            $date = new \DateTime($vocd->getOrdencompradetalleCaducidad());   
            $tmp['caducidad'] = $date->format('m/y'); 
            $tmp['id'] = $vocd->getIdOrdencompradetalle();
            
            //Por cada item de articulovariante revisamos su lugar en el inventrario
            $idodencompreadetalle = $vocd->getIdordencompradetalle();
            $lugarinventarioCollection = \LugarinventarioQuery::create()->filterByIdlugar($idlugar)->filterByIdordencompradetalle($idodencompreadetalle)->find();
            //Itineramos en lugarInventario
            foreach ($lugarinventarioCollection as $kli => $vli){
                $tmp['cantidad'] = $vli->getLugarinventarioCantidad();
                $modal['caducidad'][] = $tmp;
            }
           
        }
        
        
               
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName' => $modalName,
            'modal'     => $modal,
        ));
        

        return $viewModel;
            
    }
   
}
