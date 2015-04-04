<?php

namespace Catalogos\Articulovariante\Form;

use Zend\Form\Form;

class ArticulovarianteForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('ArticulovarianteForm');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');

        $this->add(array(
            'name' => 'idarticulovariante',
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
            'name' => 'articulovariante_codigobarras',
            'type' => 'Text',
            'options' => array(
                'label' => 'Código de Barras',
            ),
        ));
        $this->add(array(
            'name' => 'articulovariante_costo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Costo',
            ),
        ));
        $this->add(array(
            'name' => 'articulovariante_precio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Precio',
            ),
        ));
        $this->add(array(
            'type' => 'Select',
            'name' => 'articulovariante_iva',
            'options' => array(
                'label' => 'IVA',
                'value_options' => array(
                    'exento' => 'exento',
                    'cero' => 'cero',
                    '16' => '16',
                ),
            ),
            'attributes' => array(
                'value' => '16' //set selected to '16'
            )
        ));
        $this->add(array(
            'name' => 'articulovariante_imagen',
            'attributes' => array(
                'type'  => 'file',
            ),
            'options' => array(
                'label' => 'Imagen',
            ),
        ));
        $this->add(array(
            'name' => 'articulovariante_minimo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Mínimo',
            ),
        ));
        $this->add(array(
            'name' => 'articulovariante_maximo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Máximo',
            ),
        ));
        $this->add(array(
            'name' => 'articulovariante_reorden',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ordenar más',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}