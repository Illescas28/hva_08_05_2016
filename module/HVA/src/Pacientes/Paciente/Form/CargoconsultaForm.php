<?php
namespace Pacientes\Paciente\Form;

use Zend\Form\Form;

class CargoconsultaForm extends Form
{
    public function __construct(array $consulta = null)
    {
        // we want to ignore the name passed
        parent::__construct('CargoconsultaForm');
        $this->setAttribute('method', 'post');

        // consulta
        $this->add(array(
            'name' => 'idconsulta',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Consultas',
                'empty_option' => 'Seleccione una consulta',
                'value_options' => $consulta,
            ),
        ));
        $this->add(array(
            'name' => 'idlugarinventario',
            'type' => 'Text',
        ));
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Text',
        ));
        $this->add(array(
            'name' => 'cargoconsulta_tipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('articulo' => 'articulo','servicio' => 'servicio'),
            ),
        ));
        $this->add(array(
            'name' => 'cargoconsulta_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
            ),
        ));
        $this->add(array(
            'name' => 'monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
        ));
    }
}