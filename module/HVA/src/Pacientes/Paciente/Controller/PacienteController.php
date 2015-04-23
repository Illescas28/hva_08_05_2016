<?php
namespace Pacientes\Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Explode;
use Zend\View\Model\ViewModel;

//// Form ////
use Pacientes\Paciente\Form\PacienteForm;
use Pacientes\Paciente\Form\ConsultaForm;
use Pacientes\Paciente\Form\AdmisionForm;

//// Filter ////
use Pacientes\Paciente\Filter\PacienteFilter;
use Pacientes\Paciente\Filter\ConsultaFilter;
use Pacientes\Paciente\Filter\AdmisionFilter;

//// Propel ////
use Paciente;
use PacienteQuery;
use BasePeer;

class PacienteController extends AbstractActionController
{
    public function calculaEdad( $fecha ) {
        list($m,$d,$Y) = explode("/",$fecha);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }

    public function nuevoAction()
    {
        $request = $this->getRequest();

        //Intanciamos nuestro formulario
        $pacienteForm = new PacienteForm();

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $pacienteFilter = new PacienteFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $pacienteForm->setInputFilter($pacienteFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $pacienteForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($pacienteForm->isValid()){
                //Instanciamos un nuevo objeto de nuestro objeto Paciente
                $paciente = new Paciente();

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Paciente
                foreach ($pacienteForm->getData() as $pacienteKey => $pacienteValue){
                    if($pacienteKey != 'pacientefacturacion_rfc'){
                        $paciente->setByName($pacienteKey, $pacienteValue, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                //Guardamos en nuestra base de datos
                $paciente->save();

                // Si nos mandan RFC
                if($request->getPost()->pacientefacturacion_rfc != null){
                    $pacientefacturacion = new \Pacientefacturacion();
                    $pacientefacturacion->setIdpaciente($paciente->getIdpaciente());
                    $pacientefacturacion->setPacientefacturacionCalle($paciente->getPacienteCalle());
                    $pacientefacturacion->setPacientefacturacionNoexterior($paciente->getPacienteNoexterior());
                    $pacientefacturacion->setPacientefacturacionNointerior($paciente->getPacienteNointerior());
                    $pacientefacturacion->setPacientefacturacionColonia($paciente->getPacienteColonia());
                    $pacientefacturacion->setPacientefacturacionCiudad($paciente->getPacienteCiudad());
                    $pacientefacturacion->setPacientefacturacionCodigopostal($paciente->getPacienteCodigopostal());
                    $pacientefacturacion->setPacientefacturacionEstado($paciente->getPacienteEstado());
                    $pacientefacturacion->setPacientefacturacionPais($paciente->getPacientePais());
                    $pacientefacturacion->setPacientefacturacionRfc($request->getPost()->pacientefacturacion_rfc);
                    $pacientefacturacion->save();
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');
                $pacienteQuery = PacienteQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->findOne();
                return new ViewModel(array(
                    'pacienteQuery' => $pacienteQuery,
                    'pacienteForm' => $pacienteForm,
                    'flashMessages' => $this->flashMessenger()->getMessages(),
                ));

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            }
        }

        return new ViewModel(array(
            'consultaAdmision' => $consultaAdmision,
            'pacienteForm' => $pacienteForm,
        ));
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario pacienteForm
        $pacienteQuery = new PacienteQuery();
        $result = $pacienteQuery->paginate($page,$limit);
        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'pacientes' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }

    public function verAction(){

        $request = $this->getRequest();

        $id = (int) $this->params()->fromRoute('id', 0);
        $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();

        $medicoCollection = \MedicoQuery::create()->find();
        $medicoArray = array();
        foreach ($medicoCollection as $medicoEntity){
            $medicoArray[$medicoEntity->getIdmedico()] = $medicoEntity->getMedicoNombre();
        }

        $cuartoCollection = \CuartoQuery::create()->find();
        $cuartoArray = array();
        foreach ($cuartoCollection as $cuartoEntity){
            $cuartoArray[$cuartoEntity->getIdcuarto()] = $cuartoEntity->getCuartoNombre();
        }

        //Intanciamos nuestro formulario
        $consultaForm = new ConsultaForm($medicoArray, $cuartoArray);

        //Intanciamos nuestro formulario
        $admisionForm = new AdmisionForm($medicoArray, $cuartoArray);

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $consultaFilter = new ConsultaFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $consultaForm->setInputFilter($consultaFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $consultaForm->setData($request->getPost());


            //Validamos nuestro formulario
            if($consultaForm->isValid()){
                //Instanciamos un nuevo objeto de nuestro objeto Paciente
                $consulta = new \Consulta();

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                foreach ($consultaForm->getData() as $consultaKey => $consultaValue){
                    $consulta->setByName($consultaKey, $consultaValue, \BasePeer::TYPE_FIELDNAME);
                }
                //Guardamos en nuestra base de datos
                $consulta->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Consulta guardado exitosamente!');
                $consultaQuery = \ConsultaQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->findOne();
                return new ViewModel(array(
                    'consultaQuery' => $consultaQuery,
                    'consultaForm' => $consultaForm,
                    'flashMessages' => $this->flashMessenger()->getMessages(),
                ));

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            }

            //Instanciamos nuestro filtro
            $admisionFilter = new AdmisionFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $admisionForm->setInputFilter($admisionFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $admisionForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($admisionForm->isValid()){
                //Instanciamos un nuevo objeto de nuestro objeto Paciente
                $admision = new \Admision();

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                foreach ($admisionForm->getData() as $admisionKey => $admisionValue){
                    $admision->setByName($admisionKey, $admisionValue, \BasePeer::TYPE_FIELDNAME);
                }
                //Guardamos en nuestra base de datos
                $admision->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Consulta guardado exitosamente!');
                $admisionQuery = \AdmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->findOne();
                return new ViewModel(array(
                    'admisionQuery' => $admisionQuery,
                    'admisionForm' => $admisionForm,
                    'flashMessages' => $this->flashMessenger()->getMessages(),
                ));

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            }
        }

        return new ViewModel(array(
            'pacienteEntity' => $paciente,
            'edad' => $this->calculaEdad($paciente->getPacienteEdad()),
            'consultaForm' => $consultaForm,
            'admisionForm' => $admisionForm,
        ));
    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id', 0);
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('medico');
        }

        //Verificamos que el Id medico que se quiere eliminar exista
        if(MedicoQuery::create()->filterByIdmedico($id)->exists()){

            //Instanciamos nuestro medico
            $medico = MedicoQuery::create()->findPk($id);

            $medico->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Medico eliminado exitosamente!');
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('medico');

        }
    }
}