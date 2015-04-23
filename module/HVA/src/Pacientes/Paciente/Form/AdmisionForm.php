<?php
namespace Pacientes\Paciente\Form;

use Zend\Form\Form;

class AdmisionForm extends Form
{
    public function __construct(array $medico = null, array $cuarto = null)
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
        // cuarto
        $this->add(array(
            'name' => 'idcuarto',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Cuarto',
                'empty_option' => 'Seleccione un cuarto',
                'value_options' => $cuarto,
            ),
        ));
        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Text',
        ));

        $this->add(array(
            'name' => 'admision_fechaadmision',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de admisión',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'admision_fechasalida',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de salida',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'admision_diagnostico',
            'type' => 'Text',
            'options' => array(
                'label' => 'Diagnostico',
            ),
        ));
        $this->add(array(
            'name' => 'admision_observaciones',
            'type' => 'Text',
            'options' => array(
                'label' => 'Observaciones',
            ),
        ));
        $this->add(array(
            'name' => 'admision_status',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado Civil',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('pagada' => 'pagada','no pagada' => 'no pagada','pendiente' => 'pendiente'),
            ),
        ));
        $this->add(array(
            'name' => 'admision_total',
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
        $this->add(array(
            'name' => 'admision_pagadaen',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
    }
}