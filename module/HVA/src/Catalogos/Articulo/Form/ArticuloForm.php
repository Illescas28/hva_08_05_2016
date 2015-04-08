<?php

namespace Catalogos\Articulo\Form;

use Zend\Form\Form;

class ArticuloForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('ArticuloForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idarticulo',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idtipo',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Tipo',
            ),
        ));
        $this->add(array(
            'name' => 'idudm',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Unidad de Medida',
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
            'type' => 'Select',
            'name' => 'articulo_tipopresentacion',
            'options' => array(
                'label' => 'Tipo de Presentación',
                'value_options' => array(
                    '1' => 'Caja',
                ),
            ),
            'attributes' => array(
                'value' => '1' //set selected to '1'
            )
        ));

        $this->add(array(
            'name' => 'articulo_cantidadpresentacion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad',
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