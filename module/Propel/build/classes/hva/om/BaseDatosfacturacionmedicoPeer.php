<?php


/**
 * Base static class for performing query and update operations on the 'datosfacturacionmedico' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseDatosfacturacionmedicoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'datosfacturacionmedico';

    /** the related Propel class for this table */
    const OM_CLASS = 'Datosfacturacionmedico';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DatosfacturacionmedicoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the iddatosfacturacion field */
    const IDDATOSFACTURACION = 'datosfacturacionmedico.iddatosfacturacion';

    /** the column name for the idmedico field */
    const IDMEDICO = 'datosfacturacionmedico.idmedico';

    /** the column name for the datosfacturacionmedico_razonsocial field */
    const DATOSFACTURACIONMEDICO_RAZONSOCIAL = 'datosfacturacionmedico.datosfacturacionmedico_razonsocial';

    /** the column name for the datosfacturacionmedico_rfc field */
    const DATOSFACTURACIONMEDICO_RFC = 'datosfacturacionmedico.datosfacturacionmedico_rfc';

    /** the column name for the datosfacturacionmedico_calle field */
    const DATOSFACTURACIONMEDICO_CALLE = 'datosfacturacionmedico.datosfacturacionmedico_calle';

    /** the column name for the datosfacturacionmedico_noexterior field */
    const DATOSFACTURACIONMEDICO_NOEXTERIOR = 'datosfacturacionmedico.datosfacturacionmedico_noexterior';

    /** the column name for the datosfacturacionmedico_nointerior field */
    const DATOSFACTURACIONMEDICO_NOINTERIOR = 'datosfacturacionmedico.datosfacturacionmedico_nointerior';

    /** the column name for the datosfacturacionmedico_colonia field */
    const DATOSFACTURACIONMEDICO_COLONIA = 'datosfacturacionmedico.datosfacturacionmedico_colonia';

    /** the column name for the datosfacturacionmedico_ciudad field */
    const DATOSFACTURACIONMEDICO_CIUDAD = 'datosfacturacionmedico.datosfacturacionmedico_ciudad';

    /** the column name for the datosfacturacionmedico_estado field */
    const DATOSFACTURACIONMEDICO_ESTADO = 'datosfacturacionmedico.datosfacturacionmedico_estado';

    /** the column name for the datosfacturacionmedico_pais field */
    const DATOSFACTURACIONMEDICO_PAIS = 'datosfacturacionmedico.datosfacturacionmedico_pais';

    /** the column name for the datosfacturacionmedico_codigopostal field */
    const DATOSFACTURACIONMEDICO_CODIGOPOSTAL = 'datosfacturacionmedico.datosfacturacionmedico_codigopostal';

    /** the column name for the datosfacturacionmedico_telefono field */
    const DATOSFACTURACIONMEDICO_TELEFONO = 'datosfacturacionmedico.datosfacturacionmedico_telefono';

    /** the column name for the datosfacturacionmedico_email field */
    const DATOSFACTURACIONMEDICO_EMAIL = 'datosfacturacionmedico.datosfacturacionmedico_email';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Datosfacturacionmedico objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Datosfacturacionmedico[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionmedicoPeer::$fieldNames[DatosfacturacionmedicoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacion', 'Idmedico', 'DatosfacturacionmedicoRazonsocial', 'DatosfacturacionmedicoRfc', 'DatosfacturacionmedicoCalle', 'DatosfacturacionmedicoNoexterior', 'DatosfacturacionmedicoNointerior', 'DatosfacturacionmedicoColonia', 'DatosfacturacionmedicoCiudad', 'DatosfacturacionmedicoEstado', 'DatosfacturacionmedicoPais', 'DatosfacturacionmedicoCodigopostal', 'DatosfacturacionmedicoTelefono', 'DatosfacturacionmedicoEmail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacion', 'idmedico', 'datosfacturacionmedicoRazonsocial', 'datosfacturacionmedicoRfc', 'datosfacturacionmedicoCalle', 'datosfacturacionmedicoNoexterior', 'datosfacturacionmedicoNointerior', 'datosfacturacionmedicoColonia', 'datosfacturacionmedicoCiudad', 'datosfacturacionmedicoEstado', 'datosfacturacionmedicoPais', 'datosfacturacionmedicoCodigopostal', 'datosfacturacionmedicoTelefono', 'datosfacturacionmedicoEmail', ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionmedicoPeer::IDDATOSFACTURACION, DatosfacturacionmedicoPeer::IDMEDICO, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACION', 'IDMEDICO', 'DATOSFACTURACIONMEDICO_RAZONSOCIAL', 'DATOSFACTURACIONMEDICO_RFC', 'DATOSFACTURACIONMEDICO_CALLE', 'DATOSFACTURACIONMEDICO_NOEXTERIOR', 'DATOSFACTURACIONMEDICO_NOINTERIOR', 'DATOSFACTURACIONMEDICO_COLONIA', 'DATOSFACTURACIONMEDICO_CIUDAD', 'DATOSFACTURACIONMEDICO_ESTADO', 'DATOSFACTURACIONMEDICO_PAIS', 'DATOSFACTURACIONMEDICO_CODIGOPOSTAL', 'DATOSFACTURACIONMEDICO_TELEFONO', 'DATOSFACTURACIONMEDICO_EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacion', 'idmedico', 'datosfacturacionmedico_razonsocial', 'datosfacturacionmedico_rfc', 'datosfacturacionmedico_calle', 'datosfacturacionmedico_noexterior', 'datosfacturacionmedico_nointerior', 'datosfacturacionmedico_colonia', 'datosfacturacionmedico_ciudad', 'datosfacturacionmedico_estado', 'datosfacturacionmedico_pais', 'datosfacturacionmedico_codigopostal', 'datosfacturacionmedico_telefono', 'datosfacturacionmedico_email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionmedicoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacion' => 0, 'Idmedico' => 1, 'DatosfacturacionmedicoRazonsocial' => 2, 'DatosfacturacionmedicoRfc' => 3, 'DatosfacturacionmedicoCalle' => 4, 'DatosfacturacionmedicoNoexterior' => 5, 'DatosfacturacionmedicoNointerior' => 6, 'DatosfacturacionmedicoColonia' => 7, 'DatosfacturacionmedicoCiudad' => 8, 'DatosfacturacionmedicoEstado' => 9, 'DatosfacturacionmedicoPais' => 10, 'DatosfacturacionmedicoCodigopostal' => 11, 'DatosfacturacionmedicoTelefono' => 12, 'DatosfacturacionmedicoEmail' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacion' => 0, 'idmedico' => 1, 'datosfacturacionmedicoRazonsocial' => 2, 'datosfacturacionmedicoRfc' => 3, 'datosfacturacionmedicoCalle' => 4, 'datosfacturacionmedicoNoexterior' => 5, 'datosfacturacionmedicoNointerior' => 6, 'datosfacturacionmedicoColonia' => 7, 'datosfacturacionmedicoCiudad' => 8, 'datosfacturacionmedicoEstado' => 9, 'datosfacturacionmedicoPais' => 10, 'datosfacturacionmedicoCodigopostal' => 11, 'datosfacturacionmedicoTelefono' => 12, 'datosfacturacionmedicoEmail' => 13, ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionmedicoPeer::IDDATOSFACTURACION => 0, DatosfacturacionmedicoPeer::IDMEDICO => 1, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL => 2, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC => 3, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE => 4, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR => 5, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR => 6, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA => 7, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD => 8, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO => 9, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS => 10, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL => 11, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO => 12, DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACION' => 0, 'IDMEDICO' => 1, 'DATOSFACTURACIONMEDICO_RAZONSOCIAL' => 2, 'DATOSFACTURACIONMEDICO_RFC' => 3, 'DATOSFACTURACIONMEDICO_CALLE' => 4, 'DATOSFACTURACIONMEDICO_NOEXTERIOR' => 5, 'DATOSFACTURACIONMEDICO_NOINTERIOR' => 6, 'DATOSFACTURACIONMEDICO_COLONIA' => 7, 'DATOSFACTURACIONMEDICO_CIUDAD' => 8, 'DATOSFACTURACIONMEDICO_ESTADO' => 9, 'DATOSFACTURACIONMEDICO_PAIS' => 10, 'DATOSFACTURACIONMEDICO_CODIGOPOSTAL' => 11, 'DATOSFACTURACIONMEDICO_TELEFONO' => 12, 'DATOSFACTURACIONMEDICO_EMAIL' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacion' => 0, 'idmedico' => 1, 'datosfacturacionmedico_razonsocial' => 2, 'datosfacturacionmedico_rfc' => 3, 'datosfacturacionmedico_calle' => 4, 'datosfacturacionmedico_noexterior' => 5, 'datosfacturacionmedico_nointerior' => 6, 'datosfacturacionmedico_colonia' => 7, 'datosfacturacionmedico_ciudad' => 8, 'datosfacturacionmedico_estado' => 9, 'datosfacturacionmedico_pais' => 10, 'datosfacturacionmedico_codigopostal' => 11, 'datosfacturacionmedico_telefono' => 12, 'datosfacturacionmedico_email' => 13, ),
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
        $toNames = DatosfacturacionmedicoPeer::getFieldNames($toType);
        $key = isset(DatosfacturacionmedicoPeer::$fieldKeys[$fromType][$name]) ? DatosfacturacionmedicoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DatosfacturacionmedicoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DatosfacturacionmedicoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DatosfacturacionmedicoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DatosfacturacionmedicoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DatosfacturacionmedicoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::IDDATOSFACTURACION);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::IDMEDICO);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO);
            $criteria->addSelectColumn(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.iddatosfacturacion');
            $criteria->addSelectColumn($alias . '.idmedico');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_razonsocial');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_rfc');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_calle');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_noexterior');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_nointerior');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_colonia');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_ciudad');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_estado');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_pais');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_codigopostal');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_telefono');
            $criteria->addSelectColumn($alias . '.datosfacturacionmedico_email');
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
        $criteria->setPrimaryTableName(DatosfacturacionmedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Datosfacturacionmedico
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DatosfacturacionmedicoPeer::doSelect($critcopy, $con);
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
        return DatosfacturacionmedicoPeer::populateObjects(DatosfacturacionmedicoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

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
     * @param Datosfacturacionmedico $obj A Datosfacturacionmedico object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddatosfacturacion();
            } // if key === null
            DatosfacturacionmedicoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Datosfacturacionmedico object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Datosfacturacionmedico) {
                $key = (string) $value->getIddatosfacturacion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Datosfacturacionmedico object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DatosfacturacionmedicoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Datosfacturacionmedico Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DatosfacturacionmedicoPeer::$instances[$key])) {
                return DatosfacturacionmedicoPeer::$instances[$key];
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
        foreach (DatosfacturacionmedicoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DatosfacturacionmedicoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to datosfacturacionmedico
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
        $cls = DatosfacturacionmedicoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DatosfacturacionmedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DatosfacturacionmedicoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DatosfacturacionmedicoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Datosfacturacionmedico object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DatosfacturacionmedicoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DatosfacturacionmedicoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DatosfacturacionmedicoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DatosfacturacionmedicoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DatosfacturacionmedicoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Medico table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMedico(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatosfacturacionmedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionmedicoPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
     * Selects a collection of Datosfacturacionmedico objects pre-filled with their Medico objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacionmedico objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMedico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);
        }

        DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        $startcol = DatosfacturacionmedicoPeer::NUM_HYDRATE_COLUMNS;
        MedicoPeer::addSelectColumns($criteria);

        $criteria->addJoin(DatosfacturacionmedicoPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionmedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionmedicoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DatosfacturacionmedicoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionmedicoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = MedicoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MedicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    MedicoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Datosfacturacionmedico) to $obj2 (Medico)
                $obj2->addDatosfacturacionmedico($obj1);

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
        $criteria->setPrimaryTableName(DatosfacturacionmedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionmedicoPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
     * Selects a collection of Datosfacturacionmedico objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacionmedico objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);
        }

        DatosfacturacionmedicoPeer::addSelectColumns($criteria);
        $startcol2 = DatosfacturacionmedicoPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DatosfacturacionmedicoPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionmedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionmedicoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DatosfacturacionmedicoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionmedicoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Medico rows

            $key2 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = MedicoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MedicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MedicoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Datosfacturacionmedico) to the collection in $obj2 (Medico)
                $obj2->addDatosfacturacionmedico($obj1);
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
        return Propel::getDatabaseMap(DatosfacturacionmedicoPeer::DATABASE_NAME)->getTable(DatosfacturacionmedicoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDatosfacturacionmedicoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDatosfacturacionmedicoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DatosfacturacionmedicoTableMap());
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
        return DatosfacturacionmedicoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Datosfacturacionmedico or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacionmedico object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Datosfacturacionmedico object
        }

        if ($criteria->containsKey(DatosfacturacionmedicoPeer::IDDATOSFACTURACION) && $criteria->keyContainsValue(DatosfacturacionmedicoPeer::IDDATOSFACTURACION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DatosfacturacionmedicoPeer::IDDATOSFACTURACION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Datosfacturacionmedico or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacionmedico object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DatosfacturacionmedicoPeer::IDDATOSFACTURACION);
            $value = $criteria->remove(DatosfacturacionmedicoPeer::IDDATOSFACTURACION);
            if ($value) {
                $selectCriteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DatosfacturacionmedicoPeer::TABLE_NAME);
            }

        } else { // $values is Datosfacturacionmedico object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the datosfacturacionmedico table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DatosfacturacionmedicoPeer::TABLE_NAME, $con, DatosfacturacionmedicoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DatosfacturacionmedicoPeer::clearInstancePool();
            DatosfacturacionmedicoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Datosfacturacionmedico or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Datosfacturacionmedico object or primary key or array of primary keys
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
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DatosfacturacionmedicoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Datosfacturacionmedico) { // it's a model object
            // invalidate the cache for this single object
            DatosfacturacionmedicoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DatosfacturacionmedicoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionmedicoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DatosfacturacionmedicoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Datosfacturacionmedico object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Datosfacturacionmedico $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DatosfacturacionmedicoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DatosfacturacionmedicoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DatosfacturacionmedicoPeer::DATABASE_NAME, DatosfacturacionmedicoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacionmedico
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DatosfacturacionmedicoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $pk);

        $v = DatosfacturacionmedicoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacionmedico[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $pks, Criteria::IN);
            $objs = DatosfacturacionmedicoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDatosfacturacionmedicoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDatosfacturacionmedicoPeer::buildTableMap();

