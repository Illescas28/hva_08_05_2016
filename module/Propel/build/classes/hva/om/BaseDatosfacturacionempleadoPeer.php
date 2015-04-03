<?php


/**
 * Base static class for performing query and update operations on the 'datosfacturacionempleado' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseDatosfacturacionempleadoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'datosfacturacionempleado';

    /** the related Propel class for this table */
    const OM_CLASS = 'Datosfacturacionempleado';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DatosfacturacionempleadoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the iddatosfacturacionempleado field */
    const IDDATOSFACTURACIONEMPLEADO = 'datosfacturacionempleado.iddatosfacturacionempleado';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'datosfacturacionempleado.idempleado';

    /** the column name for the datosfacturacionempleado_razonsocial field */
    const DATOSFACTURACIONEMPLEADO_RAZONSOCIAL = 'datosfacturacionempleado.datosfacturacionempleado_razonsocial';

    /** the column name for the datosfacturacionempleado_rfc field */
    const DATOSFACTURACIONEMPLEADO_RFC = 'datosfacturacionempleado.datosfacturacionempleado_rfc';

    /** the column name for the datosfacturacionempleado_calle field */
    const DATOSFACTURACIONEMPLEADO_CALLE = 'datosfacturacionempleado.datosfacturacionempleado_calle';

    /** the column name for the datosfacturacionempleado_noexterior field */
    const DATOSFACTURACIONEMPLEADO_NOEXTERIOR = 'datosfacturacionempleado.datosfacturacionempleado_noexterior';

    /** the column name for the datosfacturacionempleado_nointerior field */
    const DATOSFACTURACIONEMPLEADO_NOINTERIOR = 'datosfacturacionempleado.datosfacturacionempleado_nointerior';

    /** the column name for the datosfacturacionempleado_colonia field */
    const DATOSFACTURACIONEMPLEADO_COLONIA = 'datosfacturacionempleado.datosfacturacionempleado_colonia';

    /** the column name for the datosfacturacionempleado_ciudad field */
    const DATOSFACTURACIONEMPLEADO_CIUDAD = 'datosfacturacionempleado.datosfacturacionempleado_ciudad';

    /** the column name for the datosfacturacionempleado_estado field */
    const DATOSFACTURACIONEMPLEADO_ESTADO = 'datosfacturacionempleado.datosfacturacionempleado_estado';

    /** the column name for the datosfacturacionempleado_pais field */
    const DATOSFACTURACIONEMPLEADO_PAIS = 'datosfacturacionempleado.datosfacturacionempleado_pais';

    /** the column name for the datosfacturacionempleado_codigopostal field */
    const DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL = 'datosfacturacionempleado.datosfacturacionempleado_codigopostal';

    /** the column name for the datosfacturacionempleado_telefono field */
    const DATOSFACTURACIONEMPLEADO_TELEFONO = 'datosfacturacionempleado.datosfacturacionempleado_telefono';

    /** the column name for the datosfacturacionempleado_email field */
    const DATOSFACTURACIONEMPLEADO_EMAIL = 'datosfacturacionempleado.datosfacturacionempleado_email';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Datosfacturacionempleado objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Datosfacturacionempleado[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionempleadoPeer::$fieldNames[DatosfacturacionempleadoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacionempleado', 'Idempleado', 'DatosfacturacionempleadoRazonsocial', 'DatosfacturacionempleadoRfc', 'DatosfacturacionempleadoCalle', 'DatosfacturacionempleadoNoexterior', 'DatosfacturacionempleadoNointerior', 'DatosfacturacionempleadoColonia', 'DatosfacturacionempleadoCiudad', 'DatosfacturacionempleadoEstado', 'DatosfacturacionempleadoPais', 'DatosfacturacionempleadoCodigopostal', 'DatosfacturacionempleadoTelefono', 'DatosfacturacionempleadoEmail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacionempleado', 'idempleado', 'datosfacturacionempleadoRazonsocial', 'datosfacturacionempleadoRfc', 'datosfacturacionempleadoCalle', 'datosfacturacionempleadoNoexterior', 'datosfacturacionempleadoNointerior', 'datosfacturacionempleadoColonia', 'datosfacturacionempleadoCiudad', 'datosfacturacionempleadoEstado', 'datosfacturacionempleadoPais', 'datosfacturacionempleadoCodigopostal', 'datosfacturacionempleadoTelefono', 'datosfacturacionempleadoEmail', ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, DatosfacturacionempleadoPeer::IDEMPLEADO, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACIONEMPLEADO', 'IDEMPLEADO', 'DATOSFACTURACIONEMPLEADO_RAZONSOCIAL', 'DATOSFACTURACIONEMPLEADO_RFC', 'DATOSFACTURACIONEMPLEADO_CALLE', 'DATOSFACTURACIONEMPLEADO_NOEXTERIOR', 'DATOSFACTURACIONEMPLEADO_NOINTERIOR', 'DATOSFACTURACIONEMPLEADO_COLONIA', 'DATOSFACTURACIONEMPLEADO_CIUDAD', 'DATOSFACTURACIONEMPLEADO_ESTADO', 'DATOSFACTURACIONEMPLEADO_PAIS', 'DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL', 'DATOSFACTURACIONEMPLEADO_TELEFONO', 'DATOSFACTURACIONEMPLEADO_EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacionempleado', 'idempleado', 'datosfacturacionempleado_razonsocial', 'datosfacturacionempleado_rfc', 'datosfacturacionempleado_calle', 'datosfacturacionempleado_noexterior', 'datosfacturacionempleado_nointerior', 'datosfacturacionempleado_colonia', 'datosfacturacionempleado_ciudad', 'datosfacturacionempleado_estado', 'datosfacturacionempleado_pais', 'datosfacturacionempleado_codigopostal', 'datosfacturacionempleado_telefono', 'datosfacturacionempleado_email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionempleadoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacionempleado' => 0, 'Idempleado' => 1, 'DatosfacturacionempleadoRazonsocial' => 2, 'DatosfacturacionempleadoRfc' => 3, 'DatosfacturacionempleadoCalle' => 4, 'DatosfacturacionempleadoNoexterior' => 5, 'DatosfacturacionempleadoNointerior' => 6, 'DatosfacturacionempleadoColonia' => 7, 'DatosfacturacionempleadoCiudad' => 8, 'DatosfacturacionempleadoEstado' => 9, 'DatosfacturacionempleadoPais' => 10, 'DatosfacturacionempleadoCodigopostal' => 11, 'DatosfacturacionempleadoTelefono' => 12, 'DatosfacturacionempleadoEmail' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacionempleado' => 0, 'idempleado' => 1, 'datosfacturacionempleadoRazonsocial' => 2, 'datosfacturacionempleadoRfc' => 3, 'datosfacturacionempleadoCalle' => 4, 'datosfacturacionempleadoNoexterior' => 5, 'datosfacturacionempleadoNointerior' => 6, 'datosfacturacionempleadoColonia' => 7, 'datosfacturacionempleadoCiudad' => 8, 'datosfacturacionempleadoEstado' => 9, 'datosfacturacionempleadoPais' => 10, 'datosfacturacionempleadoCodigopostal' => 11, 'datosfacturacionempleadoTelefono' => 12, 'datosfacturacionempleadoEmail' => 13, ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO => 0, DatosfacturacionempleadoPeer::IDEMPLEADO => 1, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL => 2, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC => 3, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE => 4, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR => 5, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR => 6, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA => 7, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD => 8, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO => 9, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS => 10, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL => 11, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO => 12, DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACIONEMPLEADO' => 0, 'IDEMPLEADO' => 1, 'DATOSFACTURACIONEMPLEADO_RAZONSOCIAL' => 2, 'DATOSFACTURACIONEMPLEADO_RFC' => 3, 'DATOSFACTURACIONEMPLEADO_CALLE' => 4, 'DATOSFACTURACIONEMPLEADO_NOEXTERIOR' => 5, 'DATOSFACTURACIONEMPLEADO_NOINTERIOR' => 6, 'DATOSFACTURACIONEMPLEADO_COLONIA' => 7, 'DATOSFACTURACIONEMPLEADO_CIUDAD' => 8, 'DATOSFACTURACIONEMPLEADO_ESTADO' => 9, 'DATOSFACTURACIONEMPLEADO_PAIS' => 10, 'DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL' => 11, 'DATOSFACTURACIONEMPLEADO_TELEFONO' => 12, 'DATOSFACTURACIONEMPLEADO_EMAIL' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacionempleado' => 0, 'idempleado' => 1, 'datosfacturacionempleado_razonsocial' => 2, 'datosfacturacionempleado_rfc' => 3, 'datosfacturacionempleado_calle' => 4, 'datosfacturacionempleado_noexterior' => 5, 'datosfacturacionempleado_nointerior' => 6, 'datosfacturacionempleado_colonia' => 7, 'datosfacturacionempleado_ciudad' => 8, 'datosfacturacionempleado_estado' => 9, 'datosfacturacionempleado_pais' => 10, 'datosfacturacionempleado_codigopostal' => 11, 'datosfacturacionempleado_telefono' => 12, 'datosfacturacionempleado_email' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = DatosfacturacionempleadoPeer::getFieldNames($toType);
        $key = isset(DatosfacturacionempleadoPeer::$fieldKeys[$fromType][$name]) ? DatosfacturacionempleadoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DatosfacturacionempleadoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, DatosfacturacionempleadoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DatosfacturacionempleadoPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. DatosfacturacionempleadoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DatosfacturacionempleadoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO);
            $criteria->addSelectColumn(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.iddatosfacturacionempleado');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_razonsocial');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_rfc');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_calle');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_noexterior');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_nointerior');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_colonia');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_ciudad');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_estado');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_pais');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_codigopostal');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_telefono');
            $criteria->addSelectColumn($alias . '.datosfacturacionempleado_email');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatosfacturacionempleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Datosfacturacionempleado
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DatosfacturacionempleadoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return DatosfacturacionempleadoPeer::populateObjects(DatosfacturacionempleadoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Datosfacturacionempleado $obj A Datosfacturacionempleado object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddatosfacturacionempleado();
            } // if key === null
            DatosfacturacionempleadoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Datosfacturacionempleado object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Datosfacturacionempleado) {
                $key = (string) $value->getIddatosfacturacionempleado();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Datosfacturacionempleado object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DatosfacturacionempleadoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Datosfacturacionempleado Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DatosfacturacionempleadoPeer::$instances[$key])) {
                return DatosfacturacionempleadoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (DatosfacturacionempleadoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DatosfacturacionempleadoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to datosfacturacionempleado
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = DatosfacturacionempleadoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DatosfacturacionempleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DatosfacturacionempleadoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DatosfacturacionempleadoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Datosfacturacionempleado object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DatosfacturacionempleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DatosfacturacionempleadoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DatosfacturacionempleadoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DatosfacturacionempleadoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DatosfacturacionempleadoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatosfacturacionempleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionempleadoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Datosfacturacionempleado objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacionempleado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);
        }

        DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        $startcol = DatosfacturacionempleadoPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(DatosfacturacionempleadoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionempleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionempleadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DatosfacturacionempleadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionempleadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Datosfacturacionempleado) to $obj2 (Empleado)
                $obj2->addDatosfacturacionempleado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatosfacturacionempleadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionempleadoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Datosfacturacionempleado objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacionempleado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);
        }

        DatosfacturacionempleadoPeer::addSelectColumns($criteria);
        $startcol2 = DatosfacturacionempleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DatosfacturacionempleadoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionempleadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionempleadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DatosfacturacionempleadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionempleadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Empleado rows

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Datosfacturacionempleado) to the collection in $obj2 (Empleado)
                $obj2->addDatosfacturacionempleado($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(DatosfacturacionempleadoPeer::DATABASE_NAME)->getTable(DatosfacturacionempleadoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDatosfacturacionempleadoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDatosfacturacionempleadoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DatosfacturacionempleadoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return DatosfacturacionempleadoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Datosfacturacionempleado or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacionempleado object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Datosfacturacionempleado object
        }

        if ($criteria->containsKey(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO) && $criteria->keyContainsValue(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Datosfacturacionempleado or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacionempleado object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO);
            $value = $criteria->remove(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO);
            if ($value) {
                $selectCriteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DatosfacturacionempleadoPeer::TABLE_NAME);
            }

        } else { // $values is Datosfacturacionempleado object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the datosfacturacionempleado table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DatosfacturacionempleadoPeer::TABLE_NAME, $con, DatosfacturacionempleadoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DatosfacturacionempleadoPeer::clearInstancePool();
            DatosfacturacionempleadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Datosfacturacionempleado or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Datosfacturacionempleado object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DatosfacturacionempleadoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Datosfacturacionempleado) { // it's a model object
            // invalidate the cache for this single object
            DatosfacturacionempleadoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DatosfacturacionempleadoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionempleadoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DatosfacturacionempleadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Datosfacturacionempleado object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Datosfacturacionempleado $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DatosfacturacionempleadoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DatosfacturacionempleadoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(DatosfacturacionempleadoPeer::DATABASE_NAME, DatosfacturacionempleadoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacionempleado
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DatosfacturacionempleadoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $pk);

        $v = DatosfacturacionempleadoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacionempleado[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $pks, Criteria::IN);
            $objs = DatosfacturacionempleadoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDatosfacturacionempleadoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDatosfacturacionempleadoPeer::buildTableMap();

