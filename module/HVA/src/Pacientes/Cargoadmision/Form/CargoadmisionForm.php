<?php
namespace Pacientes\Cargoadmision\Form;

use Zend\Form\Form;

class CargoadmisionForm extends Form
{
    public function __construct(array $servicio = null)
    {
        // we want to ignore the name passed
        parent::__construct('CargoadmisionForm');
        $this->setAttribute('method', 'post');

        // Inicio columnas adicionales
        // busqueda
        $this->add(array(
            'name' => 'busqueda',
            'type' => 'Text',
            'options' => array(
                'label' => 'Busqueda',
            ),
            'attributes' => array(
                'id' => 'busqueda'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmisionarticulo_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre', 'código de barras' => 'código de barras', 'proveedor' => 'proveedor'),
            ),
            'attributes' => array(
                'id' => 'cargoadmisionarticulo_by'
            )
        ));
        $this->add(array(
            'name' => 'cargoconsultaservicio_by',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Buscar por',
                'value_options' => array('nombre' => 'nombre'),
            ),
            'attributes' => array(
                'id' => 'cargoconsultaservicio_by'
            )
        ));
        // Fin columnas adicionales

        // admision
        $this->add(array(
            'type' => 'Hidden',
            'name' => 'idadmision',
            'options' => array(
                'label' => 'idamision',
            ),
        ));

        /*
        // servicio
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Servicios',
                'empty_option' => 'Seleccione un servicio',
                'value_options' => $servicio,
            ),
            'attributes' => array(
                'id' => 'idservicio'
            )
        ));
        */

        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Servicio',
            ),
            'attributes' => array(
                'id' => 'idservicio'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el tipo de gasto',
                'value_options' => array('articulo' => 'articulo','servicio' => 'servicio'),
            ),
            'attributes' => array(
                'id' => 'cargoadmision_tipo'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_fecha'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_cantidad'
            )
        ));
        $this->add(array(
            'name' => 'cargoadmision_monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
            'attributes' => array(
                'id' => 'cargoadmision_monto'
            )
        ));
    }
}