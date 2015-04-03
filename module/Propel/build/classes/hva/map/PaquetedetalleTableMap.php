<?php



/**
 * This class defines the structure of the 'paquetedetalle' table.
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
class PaquetedetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.PaquetedetalleTableMap';

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
        $this->setName('paquetedetalle');
        $this->setPhpName('Paquetedetalle');
        $this->setClassname('Paquetedetalle');
        $this->setPackage('hva');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('idpaquetedetalle', 'Idpaquetedetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaquete', 'Idpaquete', 'INTEGER', 'paquete', 'idpaquete', true, null, null);
        $this->addForeignKey('idarticulo', 'Idarticulo', 'INTEGER', 'articulo', 'idarticulo', false, null, null);
        $this->addColumn('idservicio', 'Idservicio', 'INTEGER', false, null, null);
        $this->addColumn('paquetedetalle_tipo', 'PaquetedetalleTipo', 'CHAR', true, null, null);
        $this->getColumn('paquetedetalle_tipo', false)->setValueSet(array (
  0 => 'articulo',
  1 => 'servicio',
));
        $this->addColumn('paquetedetalle_cantidad', 'PaquetedetalleCantidad', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::MANY_TO_ONE, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paquete', 'Paquete', RelationMap::MANY_TO_ONE, array('idpaquete' => 'idpaquete', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PaquetedetalleTableMap
