<?php



/**
 * This class defines the structure of the 'datosfacturacion' table.
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
class DatosfacturacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.DatosfacturacionTableMap';

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
        $this->setName('datosfacturacion');
        $this->setPhpName('Datosfacturacion');
        $this->setClassname('Datosfacturacion');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddatosfacturacion', 'Iddatosfacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addColumn('datosfacturacion_razonsocial', 'DatosfacturacionRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_rfc', 'DatosfacturacionRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_calle', 'DatosfacturacionCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_noexterior', 'DatosfacturacionNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_nointerior', 'DatosfacturacionNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_colonia', 'DatosfacturacionColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_ciudad', 'DatosfacturacionCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_estado', 'DatosfacturacionEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_pais', 'DatosfacturacionPais', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_codigopostal', 'DatosfacturacionCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_telefono', 'DatosfacturacionTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacion_email', 'DatosfacturacionEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Factura', 'Factura', RelationMap::ONE_TO_MANY, array('iddatosfacturacion' => 'iddatosfacturacion', ), 'CASCADE', 'CASCADE', 'Facturas');
    } // buildRelations()

} // DatosfacturacionTableMap
