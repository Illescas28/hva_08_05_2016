<?php

namespace Pacientes\Consultorio\Form;

use Zend\Form\Form;

class ConsultorioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ConsultorioForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'consultorio_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'consultorio_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'consultorio_enuso',
            'options' => array(
                'label' => 'Consultorio en uso',
                'use_hidden_element' => true,
                'checked_value' => 'si',
                'unchecked_value' => 'no'
            )
        ));
        /*
        $this->add(array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'consultorio_enuso',
            'options' => array(
                'label' => 'Consultorio en uso',
                'value_options' => array(
                    'no' => 'no',
                    'si' => 'si',
                ),
            ),
            'attributes' => array(
                'value' => 'no', //set checked to '1'
            )
        ));
        */
        $this->add(array(
            'name' => 'consultorio_extension',
            'type' => 'Text',
            'options' => array(
                'label' => 'Extensión',
            ),
        ));

    }
}