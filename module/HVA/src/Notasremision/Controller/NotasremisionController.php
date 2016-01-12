<?php

namespace Notasremision\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class NotasremisionController extends AbstractActionController
{
    public function indexAction()
    {
        
         $movimiento_array = array();
         $historico_array = array();
        
        $admisiones = \AdmisionQuery::create()->orderByIdadmision('desc')->filterByAdmisionStatus('pagada')->find();
        foreach ($admisiones as $admision){
            $tmp['fecha'] =  $admision->getAdmisionFechaadmision('d-m-Y H:i');
            $tmp['id'] = 'ADM-'.$admision->getIdadmision();
            $tmp['paciente'] = $admision->getPaciente()->getPacienteNombre().' '.$admision->getPaciente()->getPacienteAp().' '.$admision->getPaciente()->getPacienteAm();
            $tmp['medico'] = $admision->getMedico()->getMedicoNombre().' '.$admision->getMedico()->getMedicoApellidopaterno().' '.$admision->getMedico()->getMedicoApellidomaterno();
            $tmp['pagada'] = $admision->getAdmisionPagadaen('d-m-Y H:i');
            $tmp['tipo_pago'] = $admision->getAdmisionTipodepago();
            $tmp['total'] = $admision->getAdmisionTotal();
            $tmp['tipo'] = 'admision';
            $movimiento_array['ADM-'.$admision->getIdadmision()] = 'ADM-'.$admision->getIdadmision();
            $historico_array[] = $tmp;
        }
        
        $consultas = \ConsultaQuery::create()->orderByIdconsulta('desc')->find();
        foreach ($consultas as $consulta){
            $tmp['fecha'] =  $consulta->getConsultaFecha('d-m-Y');
            $tmp['fecha'].= ' '.$consulta->getConsultaHora();
            $tmp['id'] = 'CON-'.$consulta->getIdconsulta();
            $tmp['paciente'] = $consulta->getPaciente()->getPacienteNombre().' '.$consulta->getPaciente()->getPacienteAp().' '.$consulta->getPaciente()->getPacienteAm();
            $tmp['medico'] = $consulta->getMedico()->getMedicoNombre().' '.$consulta->getMedico()->getMedicoApellidopaterno().' '.$consulta->getMedico()->getMedicoApellidomaterno();
            $tmp['pagada'] = $consulta->getConsultaFecha('d-m-Y');
            $tmp['pagada'].= ' '.$consulta->getConsultaHora();
            $tmp['tipo_pago'] = $consulta->getConsultaTipodepago();
            $tmp['total'] = $consulta->getConsultaTotal();
            $tmp['tipo'] = 'consulta';
            $movimiento_array['CON-'.$consulta->getIdconsulta()] = 'ADM-'.$consulta->getIdconsulta();
            $historico_array[] = $tmp;
        }
        
        $ventas = \VentaQuery::create()->orderByIdventa('desc')->find();
        
        foreach ($ventas as $venta){
            $tmp['fecha'] =  $venta->getVentaFecha('d-m-Y H:i');
            $tmp['id'] = 'VP-'.$venta->getIdventa();
            $tmp['paciente'] = $venta->getPaciente()->getPacienteNombre().' '.$venta->getPaciente()->getPacienteAp().' '.$venta->getPaciente()->getPacienteAm();
            $tmp['medico'] = 'N/A';
            $tmp['pagada'] = $venta->getVentaFecha('d-m-Y H:i');
            $tmp['tipo_pago'] = $venta->getVentaTipodepago();
            $tmp['total'] = $venta->getVentaTotal();
            $tmp['tipo'] = 'venta al publico';
            $movimiento_array['VP-'.$venta->getIdventa()] = 'VP-'.$venta->getIdventa();
            $historico_array[] = $tmp;
        }
        
        return new ViewModel(array(
            'movimientos' => json_encode($movimiento_array),
            'collection' => $historico_array
        ));
        
    }
    
    
    public function generarAction(){
        
        if($this->params()->fromQuery('id')){
            $param = $this->params()->fromQuery('id');
            $type = explode('-', $param); $type = $type[0];
            $idmovimiento = explode('-', $param); $idmovimiento = $idmovimiento[1];
           
            switch ($type){
                case 'ADM':{
                    
                    $admision = \AdmisionQuery::create()->findPk($idmovimiento)->toArray(\BasePeer::TYPE_FIELDNAME);

                    //Los "items"
                    $admision_detalles_servicios = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('servicio')->filterByIdadmision($idmovimiento)->find();
                    
                    foreach ($admision_detalles_servicios as $detalle){ 
                       $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                      
                       $servicio_nombre = $detalle->getServicio()->getServicioNombre();
                       $servicio_valorunitario = $detalle->getServicio()->getServicioPrecio();
                       $item['servicio_tasa'] = $detalle->getServicio()->getServicioIva();
                       $item['servicio_nombre'] = $servicio_nombre;
                       $item['servicio_valorunitario'] = $servicio_valorunitario;
                       $item['servicio_unidad'] = 'No aplica';
                       
                       $admision['detalles'][] = $item;
                       
                    }
                   
                    $admision_detalles_articulo = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('articulo')->filterByIdadmision($idmovimiento)->find();
                    foreach ($admision_detalles_articulo as $detalle){ 

                        $articulo = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante()->getArticulo();
                        $articulo_variante = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante();
                        
                        $articulo_nombre = '';
                        $articulo_nombre.=$articulo->getArticuloNombre().' ';
                        
                        //Descripcion
                        $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articulo_variante->getIdarticulovariante())->find();
                        
                        $propiedadCount = 0;
                        foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                            $propiedadCount ++;
                            $articulo_nombre.= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                            $articulo_nombre.= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                            if($propiedadCount<$articuloVarianteValorCollection->count()){
                                $articulo_nombre.=' - ';
                            }
                        }
                       
                        $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                        $item['articulo_nombre'] = $articulo_nombre;
                        $item['articulo_unidad']  = 'pieza';
                        $item['articulo_valorunitario']  = $articulo_variante->getArticulovariantePrecio();
                         $item['articulo_tasa']  = $articulo_variante->getArticulovarianteIva();
                       
                        $admision['detalles'][] = $item;
                       
                    }
                    $generalOrder = $admision;
                    break;
                }
                
                case 'CON':{
                    
                    $consulta = \ConsultaQuery::create()->findPk($idmovimiento)->toArray(\BasePeer::TYPE_FIELDNAME);

                    //Los "items"
                    $consulta_detalles_servicios = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('servicio')->filterByIdconsulta($idmovimiento)->find();
                    
                    foreach ($consulta_detalles_servicios as $detalle){ 
                       $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                      
                       $servicio_nombre = $detalle->getServicio()->getServicioNombre();
                       $servicio_valorunitario = $detalle->getServicio()->getServicioPrecio();
                       $item['servicio_tasa'] = $detalle->getServicio()->getServicioIva();
                       $item['servicio_nombre'] = $servicio_nombre;
                       $item['servicio_valorunitario'] = $servicio_valorunitario;
                       $item['servicio_unidad'] = 'No aplica';
                       
                       $consulta['detalles'][] = $item;
                       
                    }
                   
                    $consulta_detalles_articulo = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('articulo')->filterByIdconsulta($idmovimiento)->find();
                    foreach ($consulta_detalles_articulo as $detalle){ 

                        $articulo = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante()->getArticulo();
                        $articulo_variante = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante();
                        
                        $articulo_nombre = '';
                        $articulo_nombre.=$articulo->getArticuloNombre().' ';
                        
                        //Descripcion
                        $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articulo_variante->getIdarticulovariante())->find();
                        
                        $propiedadCount = 0;
                        foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                            $propiedadCount ++;
                            $articulo_nombre.= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                            $articulo_nombre.= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                            if($propiedadCount<$articuloVarianteValorCollection->count()){
                                $articulo_nombre.=' - ';
                            }
                        }
                       
                        $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                        $item['articulo_nombre'] = $articulo_nombre;
                        $item['articulo_unidad']  = 'pieza';
                        $item['articulo_valorunitario']  = $articulo_variante->getArticulovariantePrecio();
                         $item['articulo_tasa']  = $articulo_variante->getArticulovarianteIva();
                       
                        $consulta['detalles'][] = $item;
                       
                    }
                    $generalOrder = $consulta;
                    break;
                }
                
                case 'VP':{
                    
                    $venta = \VentaQuery::create()->findPk($idmovimiento)->toArray(\BasePeer::TYPE_FIELDNAME);

                    //Los "items"
                    $venta_detalles_servicios = \CargoventaQuery::create()->filterByCargoventaTipo('servicio')->filterByIdventa($idmovimiento)->find();
                    
                    foreach ($venta_detalles_servicios as $detalle){ 
                       $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                      
                       $servicio_nombre = $detalle->getServicio()->getServicioNombre();
                       $servicio_valorunitario = $detalle->getServicio()->getServicioPrecio();
                       $item['servicio_tasa'] = $detalle->getServicio()->getServicioIva();
                       $item['servicio_nombre'] = $servicio_nombre;
                       $item['servicio_valorunitario'] = $servicio_valorunitario;
                       $item['servicio_unidad'] = 'No aplica';
                       
                       $venta['detalles'][] = $item;
                       
                    }
                   
                    $venta_detalles_articulo = \CargoventaQuery::create()->filterByCargoventaTipo('articulo')->filterByIdventa($idmovimiento)->find();
                    foreach ($venta_detalles_articulo as $detalle){ 

                        $articulo = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante()->getArticulo();
                        $articulo_variante = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante();
                        
                        $articulo_nombre = '';
                        $articulo_nombre.=$articulo->getArticuloNombre().' ';
                        
                        //Descripcion
                        $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articulo_variante->getIdarticulovariante())->find();
                        
                        $propiedadCount = 0;
                        foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                            $propiedadCount ++;
                            $articulo_nombre.= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                            $articulo_nombre.= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                            if($propiedadCount<$articuloVarianteValorCollection->count()){
                                $articulo_nombre.=' - ';
                            }
                        }
                       
                        $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                        $item['articulo_nombre'] = $articulo_nombre;
                        $item['articulo_unidad']  = 'pieza';
                        $item['articulo_valorunitario']  = $articulo_variante->getArticulovariantePrecio();
                         $item['articulo_tasa']  = $articulo_variante->getArticulovarianteIva();
                       
                        $venta['detalles'][] = $item;
                       
                    }
                    $generalOrder = $venta;
                    break;
                }
            }
            
            //PDF
            
             $filePathPDF = '/tmp/pdf/notaremision_' . $param . '.pdf';
            
             $pdf = new \Notasremision\PdfGenerator\PdfGenerator($generalOrder);
             $pdf->AliasNbPages();
             $pdf->AddPage();
             $pdf->FancyTable();
             $pdf->Output($_SERVER['DOCUMENT_ROOT'].$filePathPDF,'F');
             
             $base64_pdf = base64_encode(file_get_contents($_SERVER['DOCUMENT_ROOT'].$filePathPDF,'F'));
             
             return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'base64' => $base64_pdf, 'base64_name' => $filePathPDF)));
        }
        
    }
    
}
