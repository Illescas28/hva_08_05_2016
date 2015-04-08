<?php



/**
 * This class defines the structure of the 'datosfacturacionempleado' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.hva.map
 */
class DatosfacturacionempleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.DatosfacturacionempleadoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('datosfacturacionempleado');
        $this->setPhpName('Datosfacturacionempleado');
        $this->setClassname('Datosfacturacionempleado');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddatosfacturacionempleado', 'Iddatosfacturacionempleado', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('datosfacturacionempleado_razonsocial', 'DatosfacturacionempleadoRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_rfc', 'DatosfacturacionempleadoRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_calle', 'DatosfacturacionempleadoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_noexterior', 'DatosfacturacionempleadoNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_nointerior', 'DatosfacturacionempleadoNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_colonia', 'DatosfacturacionempleadoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_ciudad', 'DatosfacturacionempleadoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_estado', 'DatosfacturacionempleadoEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_pais', 'DatosfacturacionempleadoPais', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_codigopostal', 'DatosfacturacionempleadoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_telefono', 'DatosfacturacionempleadoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionempleado_email', 'DatosfacturacionempleadoEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // DatosfacturacionempleadoTableMap
