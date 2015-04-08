<?php


/**
 * Base static class for performing query and update operations on the 'datosfacturacion' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseDatosfacturacionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'datosfacturacion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Datosfacturacion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DatosfacturacionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the iddatosfacturacion field */
    const IDDATOSFACTURACION = 'datosfacturacion.iddatosfacturacion';

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'datosfacturacion.idpaciente';

    /** the column name for the datosfacturacion_razonsocial field */
    const DATOSFACTURACION_RAZONSOCIAL = 'datosfacturacion.datosfacturacion_razonsocial';

    /** the column name for the datosfacturacion_rfc field */
    const DATOSFACTURACION_RFC = 'datosfacturacion.datosfacturacion_rfc';

    /** the column name for the datosfacturacion_calle field */
    const DATOSFACTURACION_CALLE = 'datosfacturacion.datosfacturacion_calle';

    /** the column name for the datosfacturacion_noexterior field */
    const DATOSFACTURACION_NOEXTERIOR = 'datosfacturacion.datosfacturacion_noexterior';

    /** the column name for the datosfacturacion_nointerior field */
    const DATOSFACTURACION_NOINTERIOR = 'datosfacturacion.datosfacturacion_nointerior';

    /** the column name for the datosfacturacion_colonia field */
    const DATOSFACTURACION_COLONIA = 'datosfacturacion.datosfacturacion_colonia';

    /** the column name for the datosfacturacion_ciudad field */
    const DATOSFACTURACION_CIUDAD = 'datosfacturacion.datosfacturacion_ciudad';

    /** the column name for the datosfacturacion_estado field */
    const DATOSFACTURACION_ESTADO = 'datosfacturacion.datosfacturacion_estado';

    /** the column name for the datosfacturacion_pais field */
    const DATOSFACTURACION_PAIS = 'datosfacturacion.datosfacturacion_pais';

    /** the column name for the datosfacturacion_codigopostal field */
    const DATOSFACTURACION_CODIGOPOSTAL = 'datosfacturacion.datosfacturacion_codigopostal';

    /** the column name for the datosfacturacion_telefono field */
    const DATOSFACTURACION_TELEFONO = 'datosfacturacion.datosfacturacion_telefono';

    /** the column name for the datosfacturacion_email field */
    const DATOSFACTURACION_EMAIL = 'datosfacturacion.datosfacturacion_email';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Datosfacturacion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Datosfacturacion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionPeer::$fieldNames[DatosfacturacionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacion', 'Idpaciente', 'DatosfacturacionRazonsocial', 'DatosfacturacionRfc', 'DatosfacturacionCalle', 'DatosfacturacionNoexterior', 'DatosfacturacionNointerior', 'DatosfacturacionColonia', 'DatosfacturacionCiudad', 'DatosfacturacionEstado', 'DatosfacturacionPais', 'DatosfacturacionCodigopostal', 'DatosfacturacionTelefono', 'DatosfacturacionEmail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacion', 'idpaciente', 'datosfacturacionRazonsocial', 'datosfacturacionRfc', 'datosfacturacionCalle', 'datosfacturacionNoexterior', 'datosfacturacionNointerior', 'datosfacturacionColonia', 'datosfacturacionCiudad', 'datosfacturacionEstado', 'datosfacturacionPais', 'datosfacturacionCodigopostal', 'datosfacturacionTelefono', 'datosfacturacionEmail', ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionPeer::IDDATOSFACTURACION, DatosfacturacionPeer::IDPACIENTE, DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL, DatosfacturacionPeer::DATOSFACTURACION_RFC, DatosfacturacionPeer::DATOSFACTURACION_CALLE, DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR, DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR, DatosfacturacionPeer::DATOSFACTURACION_COLONIA, DatosfacturacionPeer::DATOSFACTURACION_CIUDAD, DatosfacturacionPeer::DATOSFACTURACION_ESTADO, DatosfacturacionPeer::DATOSFACTURACION_PAIS, DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL, DatosfacturacionPeer::DATOSFACTURACION_TELEFONO, DatosfacturacionPeer::DATOSFACTURACION_EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACION', 'IDPACIENTE', 'DATOSFACTURACION_RAZONSOCIAL', 'DATOSFACTURACION_RFC', 'DATOSFACTURACION_CALLE', 'DATOSFACTURACION_NOEXTERIOR', 'DATOSFACTURACION_NOINTERIOR', 'DATOSFACTURACION_COLONIA', 'DATOSFACTURACION_CIUDAD', 'DATOSFACTURACION_ESTADO', 'DATOSFACTURACION_PAIS', 'DATOSFACTURACION_CODIGOPOSTAL', 'DATOSFACTURACION_TELEFONO', 'DATOSFACTURACION_EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacion', 'idpaciente', 'datosfacturacion_razonsocial', 'datosfacturacion_rfc', 'datosfacturacion_calle', 'datosfacturacion_noexterior', 'datosfacturacion_nointerior', 'datosfacturacion_colonia', 'datosfacturacion_ciudad', 'datosfacturacion_estado', 'datosfacturacion_pais', 'datosfacturacion_codigopostal', 'datosfacturacion_telefono', 'datosfacturacion_email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DatosfacturacionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddatosfacturacion' => 0, 'Idpaciente' => 1, 'DatosfacturacionRazonsocial' => 2, 'DatosfacturacionRfc' => 3, 'DatosfacturacionCalle' => 4, 'DatosfacturacionNoexterior' => 5, 'DatosfacturacionNointerior' => 6, 'DatosfacturacionColonia' => 7, 'DatosfacturacionCiudad' => 8, 'DatosfacturacionEstado' => 9, 'DatosfacturacionPais' => 10, 'DatosfacturacionCodigopostal' => 11, 'DatosfacturacionTelefono' => 12, 'DatosfacturacionEmail' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddatosfacturacion' => 0, 'idpaciente' => 1, 'datosfacturacionRazonsocial' => 2, 'datosfacturacionRfc' => 3, 'datosfacturacionCalle' => 4, 'datosfacturacionNoexterior' => 5, 'datosfacturacionNointerior' => 6, 'datosfacturacionColonia' => 7, 'datosfacturacionCiudad' => 8, 'datosfacturacionEstado' => 9, 'datosfacturacionPais' => 10, 'datosfacturacionCodigopostal' => 11, 'datosfacturacionTelefono' => 12, 'datosfacturacionEmail' => 13, ),
        BasePeer::TYPE_COLNAME => array (DatosfacturacionPeer::IDDATOSFACTURACION => 0, DatosfacturacionPeer::IDPACIENTE => 1, DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL => 2, DatosfacturacionPeer::DATOSFACTURACION_RFC => 3, DatosfacturacionPeer::DATOSFACTURACION_CALLE => 4, DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR => 5, DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR => 6, DatosfacturacionPeer::DATOSFACTURACION_COLONIA => 7, DatosfacturacionPeer::DATOSFACTURACION_CIUDAD => 8, DatosfacturacionPeer::DATOSFACTURACION_ESTADO => 9, DatosfacturacionPeer::DATOSFACTURACION_PAIS => 10, DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL => 11, DatosfacturacionPeer::DATOSFACTURACION_TELEFONO => 12, DatosfacturacionPeer::DATOSFACTURACION_EMAIL => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDATOSFACTURACION' => 0, 'IDPACIENTE' => 1, 'DATOSFACTURACION_RAZONSOCIAL' => 2, 'DATOSFACTURACION_RFC' => 3, 'DATOSFACTURACION_CALLE' => 4, 'DATOSFACTURACION_NOEXTERIOR' => 5, 'DATOSFACTURACION_NOINTERIOR' => 6, 'DATOSFACTURACION_COLONIA' => 7, 'DATOSFACTURACION_CIUDAD' => 8, 'DATOSFACTURACION_ESTADO' => 9, 'DATOSFACTURACION_PAIS' => 10, 'DATOSFACTURACION_CODIGOPOSTAL' => 11, 'DATOSFACTURACION_TELEFONO' => 12, 'DATOSFACTURACION_EMAIL' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('iddatosfacturacion' => 0, 'idpaciente' => 1, 'datosfacturacion_razonsocial' => 2, 'datosfacturacion_rfc' => 3, 'datosfacturacion_calle' => 4, 'datosfacturacion_noexterior' => 5, 'datosfacturacion_nointerior' => 6, 'datosfacturacion_colonia' => 7, 'datosfacturacion_ciudad' => 8, 'datosfacturacion_estado' => 9, 'datosfacturacion_pais' => 10, 'datosfacturacion_codigopostal' => 11, 'datosfacturacion_telefono' => 12, 'datosfacturacion_email' => 13, ),
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
        $toNames = DatosfacturacionPeer::getFieldNames($toType);
        $key = isset(DatosfacturacionPeer::$fieldKeys[$fromType][$name]) ? DatosfacturacionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DatosfacturacionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DatosfacturacionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DatosfacturacionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DatosfacturacionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DatosfacturacionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DatosfacturacionPeer::IDDATOSFACTURACION);
            $criteria->addSelectColumn(DatosfacturacionPeer::IDPACIENTE);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_RFC);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_CALLE);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_COLONIA);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_CIUDAD);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_ESTADO);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_PAIS);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_TELEFONO);
            $criteria->addSelectColumn(DatosfacturacionPeer::DATOSFACTURACION_EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.iddatosfacturacion');
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.datosfacturacion_razonsocial');
            $criteria->addSelectColumn($alias . '.datosfacturacion_rfc');
            $criteria->addSelectColumn($alias . '.datosfacturacion_calle');
            $criteria->addSelectColumn($alias . '.datosfacturacion_noexterior');
            $criteria->addSelectColumn($alias . '.datosfacturacion_nointerior');
            $criteria->addSelectColumn($alias . '.datosfacturacion_colonia');
            $criteria->addSelectColumn($alias . '.datosfacturacion_ciudad');
            $criteria->addSelectColumn($alias . '.datosfacturacion_estado');
            $criteria->addSelectColumn($alias . '.datosfacturacion_pais');
            $criteria->addSelectColumn($alias . '.datosfacturacion_codigopostal');
            $criteria->addSelectColumn($alias . '.datosfacturacion_telefono');
            $criteria->addSelectColumn($alias . '.datosfacturacion_email');
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
        $criteria->setPrimaryTableName(DatosfacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Datosfacturacion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DatosfacturacionPeer::doSelect($critcopy, $con);
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
        return DatosfacturacionPeer::populateObjects(DatosfacturacionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DatosfacturacionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

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
     * @param Datosfacturacion $obj A Datosfacturacion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddatosfacturacion();
            } // if key === null
            DatosfacturacionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Datosfacturacion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Datosfacturacion) {
                $key = (string) $value->getIddatosfacturacion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Datosfacturacion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DatosfacturacionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Datosfacturacion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DatosfacturacionPeer::$instances[$key])) {
                return DatosfacturacionPeer::$instances[$key];
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
        foreach (DatosfacturacionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DatosfacturacionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to datosfacturacion
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in FacturaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        FacturaPeer::clearInstancePool();
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
        $cls = DatosfacturacionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DatosfacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DatosfacturacionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DatosfacturacionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Datosfacturacion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DatosfacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DatosfacturacionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DatosfacturacionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DatosfacturacionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DatosfacturacionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Paciente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPaciente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatosfacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Datosfacturacion objects pre-filled with their Paciente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);
        }

        DatosfacturacionPeer::addSelectColumns($criteria);
        $startcol = DatosfacturacionPeer::NUM_HYDRATE_COLUMNS;
        PacientePeer::addSelectColumns($criteria);

        $criteria->addJoin(DatosfacturacionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DatosfacturacionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PacientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PacientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PacientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Datosfacturacion) to $obj2 (Paciente)
                $obj2->addDatosfacturacion($obj1);

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
        $criteria->setPrimaryTableName(DatosfacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatosfacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatosfacturacionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Datosfacturacion objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datosfacturacion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);
        }

        DatosfacturacionPeer::addSelectColumns($criteria);
        $startcol2 = DatosfacturacionPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DatosfacturacionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatosfacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatosfacturacionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DatosfacturacionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatosfacturacionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Paciente rows

            $key2 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PacientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PacientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PacientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Datosfacturacion) to the collection in $obj2 (Paciente)
                $obj2->addDatosfacturacion($obj1);
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
        return Propel::getDatabaseMap(DatosfacturacionPeer::DATABASE_NAME)->getTable(DatosfacturacionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDatosfacturacionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDatosfacturacionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DatosfacturacionTableMap());
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
        return DatosfacturacionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Datosfacturacion or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Datosfacturacion object
        }

        if ($criteria->containsKey(DatosfacturacionPeer::IDDATOSFACTURACION) && $criteria->keyContainsValue(DatosfacturacionPeer::IDDATOSFACTURACION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DatosfacturacionPeer::IDDATOSFACTURACION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Datosfacturacion or Criteria object.
     *
     * @param      mixed $values Criteria or Datosfacturacion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DatosfacturacionPeer::IDDATOSFACTURACION);
            $value = $criteria->remove(DatosfacturacionPeer::IDDATOSFACTURACION);
            if ($value) {
                $selectCriteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DatosfacturacionPeer::TABLE_NAME);
            }

        } else { // $values is Datosfacturacion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the datosfacturacion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += DatosfacturacionPeer::doOnDeleteCascade(new Criteria(DatosfacturacionPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(DatosfacturacionPeer::TABLE_NAME, $con, DatosfacturacionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DatosfacturacionPeer::clearInstancePool();
            DatosfacturacionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Datosfacturacion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Datosfacturacion object or primary key or array of primary keys
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
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Datosfacturacion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(DatosfacturacionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += DatosfacturacionPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                DatosfacturacionPeer::clearInstancePool();
            } elseif ($values instanceof Datosfacturacion) { // it's a model object
                DatosfacturacionPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    DatosfacturacionPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DatosfacturacionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = DatosfacturacionPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Factura objects
            $criteria = new Criteria(FacturaPeer::DATABASE_NAME);

            $criteria->add(FacturaPeer::IDDATOSFACTURACION, $obj->getIddatosfacturacion());
            $affectedRows += FacturaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Datosfacturacion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Datosfacturacion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DatosfacturacionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DatosfacturacionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DatosfacturacionPeer::DATABASE_NAME, DatosfacturacionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DatosfacturacionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, $pk);

        $v = DatosfacturacionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Datosfacturacion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);
            $criteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, $pks, Criteria::IN);
            $objs = DatosfacturacionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDatosfacturacionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDatosfacturacionPeer::buildTableMap();

