<?php

namespace Catalogos\Articulovariante\Filter;

// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class ArticulovarianteFilter implements InputFilterAwareInterface
{
    protected $inputFilter;                       // <-- Add this variable

    // Add content to these methods:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {

        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $inputFilter->add(array(
                'name'     => 'idarticulovariante',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'idarticulo',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_codigobarras',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_costo',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Float',
                        'options' => array(
                            'min' => 0,
                            'locale' => 'es-MX'
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_precio',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Float',
                        'options' => array(
                            'min' => 0,
                            'locale' => 'es-MX'
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_iva',
                'required' => false,
                'validators' => array(
                    array(
                        'name'    => 'InArray',
                        'options' => array(
                            'haystack' => array('exento' => 'exento','cero' => 'cero','16' => '16'),
                            'messages' => array(
                                'notInArray' => 'is not a valid input. Valid inputs: exento | cero | 16 '
                            ),
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_imagen',
                'required' => false,
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_minimo',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Float',
                        'options' => array(
                            'min' => 0,
                            'locale' => 'es-MX'
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_maximo',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Float',
                        'options' => array(
                            'min' => 0,
                            'locale' => 'es-MX'
                        ),
                    ),
                ),
            ));

            $inputFilter->add(array(
                'name'     => 'articulovariante_reorden',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Float',
                        'options' => array(
                            'min' => 0,
                            'locale' => 'es-MX'
                        ),
                    ),
                ),
            ));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
}
