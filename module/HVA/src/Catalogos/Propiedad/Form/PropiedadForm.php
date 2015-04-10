<?php

namespace Catalogos\Propiedad\Form;

use Zend\Form\Form;

class PropiedadForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('PropiedadForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idpropiedad',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idarticulo',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Artículo',
            ),
        ));
        $this->add(array(
            'name' => 'propiedad_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
<<<<<<< HEAD
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Guargar',
                'id' => 'submitbutton',
                'class' => 'btn waves-effect waves-light',
            ),
            'options' => array(
                'label' => 'Guardar',
=======
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
>>>>>>> bb88dc96898b60d3f134e6ecdaa843cb26ca8968
            ),
        ));
    }
}