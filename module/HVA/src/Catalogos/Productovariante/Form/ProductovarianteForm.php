<?php

namespace Catalogos\Productovariante\Form;

use Zend\Form\Form;

class ProductovarianteForm extends Form
{
    public function __construct(array $tipos = null)
    {
        // we want to ignore the name passed
        parent::__construct('ProductovarianteForm');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');

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
            'name' => 'propiedadvalor_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Valor',
            ),
        ));

        $this->add(array(
            'name' => 'articulovariante_costo',
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
                'label' => 'Costo'
            )
        ));
        $this->add(array(
            'name' => 'articulovariante_precio',
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
                'label' => 'Precio'
            )
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
            'name' => 'minimo',
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
                'label' => 'Cantidad mínima'
            )
        ));
        $this->add(array(
            'name' => 'maximo',
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
                'label' => 'Cantidad máxima'
            )
        ));
        $this->add(array(
            'name' => 'reorden',
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
                'label' => 'Punto de orden'
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