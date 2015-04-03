<?php



/**
 * This class defines the structure of the 'datosfacturacionmedico' table.
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
class DatosfacturacionmedicoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.DatosfacturacionmedicoTableMap';

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
        $this->setName('datosfacturacionmedico');
        $this->setPhpName('Datosfacturacionmedico');
        $this->setClassname('Datosfacturacionmedico');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddatosfacturacion', 'Iddatosfacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', true, null, null);
        $this->addColumn('datosfacturacionmedico_razonsocial', 'DatosfacturacionmedicoRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_rfc', 'DatosfacturacionmedicoRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_calle', 'DatosfacturacionmedicoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_noexterior', 'DatosfacturacionmedicoNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_nointerior', 'DatosfacturacionmedicoNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_colonia', 'DatosfacturacionmedicoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_ciudad', 'DatosfacturacionmedicoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_estado', 'DatosfacturacionmedicoEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_pais', 'DatosfacturacionmedicoPais', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_codigopostal', 'DatosfacturacionmedicoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_telefono', 'DatosfacturacionmedicoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('datosfacturacionmedico_email', 'DatosfacturacionmedicoEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // DatosfacturacionmedicoTableMap
