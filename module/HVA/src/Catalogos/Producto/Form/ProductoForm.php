<?php

namespace Catalogos\Producto\Form;

use Zend\Form\Form;

class ProductoForm extends Form
{
    public function __construct(array $tipos = null)
    {
        // we want to ignore the name passed
        parent::__construct('ProductoForm');
        $this->setAttribute('method', 'post');
        //$this->setAttribute('onsubmit', 'return nuevapropiedad()');

        $this->add(array(
            'name' => 'idarticulo',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idtipo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione un tipo',
                'value_options' => $tipos,
            ),
        ));
        $this->add(array(
            'name' => 'articulo_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'articulo_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        $this->add(array(
            'name' => 'propiedad_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Propiedad',
            ),
        ));

        $this->add(array(
            'name' => 'idpropiedad',
            'type' => 'text',
        ));
        $this->add(array(
            'name' => 'propiedadvalor_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Valor',
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