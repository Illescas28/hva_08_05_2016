<?php
namespace Pacientes\Paciente\Form;

use Zend\Form\Form;

class ConsultaForm extends Form
{
    public function __construct(array $medico = null, array $consultorio = null)
    {
        // we want to ignore the name passed
        parent::__construct('ConsultaForm');
        $this->setAttribute('method', 'post');

        // medicos
        $this->add(array(
            'name' => 'idmedico',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Medicos',
                'empty_option' => 'Seleccione un medico',
                'value_options' => $medico,
            ),
        ));
        // consultorio
        $this->add(array(
            'name' => 'idconsultorio',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Consultorio',
                'empty_option' => 'Seleccione un consultorio',
                'value_options' => $consultorio,
            ),
        ));
        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'consulta_fechaadmision',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de consulta',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'consulta_fechasalida',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de salida',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'consulta_diagnostico',
            'type' => 'Text',
            'options' => array(
                'label' => 'Diagnostico',
            ),
        ));
        $this->add(array(
            'name' => 'consulta_observaciones',
            'type' => 'Text',
            'options' => array(
                'label' => 'Observaciones',
            ),
        ));
        $this->add(array(
            'name' => 'consulta_status',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado Civil',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('pagada' => 'pagada','no pagada' => 'no pagada','pendiente' => 'pendiente'),
            ),
        ));
        $this->add(array(
            'name' => 'consulta_total',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Float',
                    'options' => array(
                        'min' => 0,
                        'locale' => 'es_MX',
                    ),
                ),
            ),
            'options' => array(
                'label' => 'Consulta Total'
            )
        ));

    }
}