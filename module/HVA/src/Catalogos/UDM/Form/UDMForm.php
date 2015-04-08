<?php

namespace Catalogos\UDM\Form;

use Zend\Form\Form;

class UDMForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('UDMForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idudm',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'udm_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'udm_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Guargar',
                'id' => 'submitbutton',
                'class' => 'btn waves-effect waves-light',
            ),
            'options' => array(
                'label' => 'Guardar',
            ),
        ));
    }
}