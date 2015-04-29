<?php

namespace Catalogos\Propiedadvalor\Form;

use Zend\Form\Form;

class PropiedadvalorForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('PropiedadvalorForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idpropiedadvalor',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idpropiedad',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Propiedad',
            ),
        ));
        $this->add(array(
            'name' => 'idarticulo',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Artículo',
            ),
        ));
        $this->add(array(
            'name' => 'propiedadvalor_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
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