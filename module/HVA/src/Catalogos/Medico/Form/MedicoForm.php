<?php

namespace Catalogos\Medico\Form;

use Zend\Form\Form;

class MedicoForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('MedicoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idmedico',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idespecialidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'ID Especialidad',
            ),
        ));
        $this->add(array(
            'name' => 'medico_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'medico_apellidopaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Paterno',
            ),
        ));
        $this->add(array(
            'name' => 'medico_apellidomaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Aoellido Materno',
            ),
        ));
        $this->add(array(
            'name' => 'medico_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
        ));
        $this->add(array(
            'name' => 'medico_noexterior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Exterior',
            ),
        ));
        $this->add(array(
            'name' => 'medico_nointerior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Interior',
            ),
        ));
        $this->add(array(
            'name' => 'medico_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
        ));
        $this->add(array(
            'name' => 'medico_codigopostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'C.P.',
            ),
        ));
        $this->add(array(
            'name' => 'medico_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
        ));
        $this->add(array(
            'name' => 'medico_estado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Estado',
            ),
        ));
        $this->add(array(
            'name' => 'medico_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
        ));
        $this->add(array(
            'name' => 'medico_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono',
            ),
        ));
        $this->add(array(
            'name' => 'medico_telefonocelular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Celular',
            ),
        ));
        $this->add(array(
            'name' => 'medico_clave',
            'type' => 'Text',
            'options' => array(
                'label' => 'Clave',
            ),
        ));
        $this->add(array(
            'name' => 'medico_dgp',
            'type' => 'Text',
            'options' => array(
                'label' => 'DGP',
            ),
        ));
        $this->add(array(
            'name' => 'medico_ssa',
            'type' => 'Text',
            'options' => array(
                'label' => 'SSA',
            ),
        ));
        $this->add(array(
            'name' => 'medico_ae',
            'type' => 'Text',
            'options' => array(
                'label' => 'AE',
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