<?php


/**
 * Base class that represents a row from the 'paquetedetalle' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePaquetedetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PaquetedetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PaquetedetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpaquetedetalle field.
     * @var        int
     */
    protected $idpaquetedetalle;

    /**
     * The value for the idpaquete field.
     * @var        int
     */
    protected $idpaquete;

    /**
     * The value for the idarticulo field.
     * @var        int
     */
    protected $idarticulo;

    /**
     * The value for the idservicio field.
     * @var        int
     */
    protected $idservicio;

    /**
     * The value for the paquetedetalle_tipo field.
     * @var        string
     */
    protected $paquetedetalle_tipo;

    /**
     * The value for the paquetedetalle_cantidad field.
     * @var        string
     */
    protected $paquetedetalle_cantidad;

    /**
     * @var        Articulo
     */
    protected $aArticulo;

    /**
     * @var        Paquete
     */
    protected $aPaquete;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [idpaquetedetalle] column value.
     *
     * @return int
     */
    public function getIdpaquetedetalle()
    {

        return $this->idpaquetedetalle;
    }

    /**
     * Get the [idpaquete] column value.
     *
     * @return int
     */
    public function getIdpaquete()
    {

        return $this->idpaquete;
    }

    /**
     * Get the [idarticulo] column value.
     *
     * @return int
     */
    public function getIdarticulo()
    {

        return $this->idarticulo;
    }

    /**
     * Get the [idservicio] column value.
     *
     * @return int
     */
    public function getIdservicio()
    {

        return $this->idservicio;
    }

    /**
     * Get the [paquetedetalle_tipo] column value.
     *
     * @return string
     */
    public function getPaquetedetalleTipo()
    {

        return $this->paquetedetalle_tipo;
    }

    /**
     * Get the [paquetedetalle_cantidad] column value.
     *
     * @return string
     */
    public function getPaquetedetalleCantidad()
    {

        return $this->paquetedetalle_cantidad;
    }

    /**
     * Set the value of [idpaquetedetalle] column.
     *
     * @param  int $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setIdpaquetedetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaquetedetalle !== $v) {
            $this->idpaquetedetalle = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::IDPAQUETEDETALLE;
        }


        return $this;
    } // setIdpaquetedetalle()

    /**
     * Set the value of [idpaquete] column.
     *
     * @param  int $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setIdpaquete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaquete !== $v) {
            $this->idpaquete = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::IDPAQUETE;
        }

        if ($this->aPaquete !== null && $this->aPaquete->getIdpaquete() !== $v) {
            $this->aPaquete = null;
        }


        return $this;
    } // setIdpaquete()

    /**
     * Set the value of [idarticulo] column.
     *
     * @param  int $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setIdarticulo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulo !== $v) {
            $this->idarticulo = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::IDARTICULO;
        }

        if ($this->aArticulo !== null && $this->aArticulo->getIdarticulo() !== $v) {
            $this->aArticulo = null;
        }


        return $this;
    } // setIdarticulo()

    /**
     * Set the value of [idservicio] column.
     *
     * @param  int $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setIdservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicio !== $v) {
            $this->idservicio = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::IDSERVICIO;
        }


        return $this;
    } // setIdservicio()

    /**
     * Set the value of [paquetedetalle_tipo] column.
     *
     * @param  string $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setPaquetedetalleTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paquetedetalle_tipo !== $v) {
            $this->paquetedetalle_tipo = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::PAQUETEDETALLE_TIPO;
        }


        return $this;
    } // setPaquetedetalleTipo()

    /**
     * Set the value of [paquetedetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Paquetedetalle The current object (for fluent API support)
     */
    public function setPaquetedetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paquetedetalle_cantidad !== $v) {
            $this->paquetedetalle_cantidad = $v;
            $this->modifiedColumns[] = PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD;
        }


        return $this;
    } // setPaquetedetalleCantidad()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idpaquetedetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaquete = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idarticulo = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idservicio = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->paquetedetalle_tipo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->paquetedetalle_cantidad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = PaquetedetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Paquetedetalle object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aPaquete !== null && $this->idpaquete !== $this->aPaquete->getIdpaquete()) {
            $this->aPaquete = null;
        }
        if ($this->aArticulo !== null && $this->idarticulo !== $this->aArticulo->getIdarticulo()) {
            $this->aArticulo = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PaquetedetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PaquetedetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArticulo = null;
            $this->aPaquete = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PaquetedetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PaquetedetalleQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PaquetedetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                PaquetedetallePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aArticulo !== null) {
                if ($this->aArticulo->isModified() || $this->aArticulo->isNew()) {
                    $affectedRows += $this->aArticulo->save($con);
                }
                $this->setArticulo($this->aArticulo);
            }

            if ($this->aPaquete !== null) {
                if ($this->aPaquete->isModified() || $this->aPaquete->isNew()) {
                    $affectedRows += $this->aPaquete->save($con);
                }
                $this->setPaquete($this->aPaquete);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PaquetedetallePeer::IDPAQUETEDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaquetedetalle`';
        }
        if ($this->isColumnModified(PaquetedetallePeer::IDPAQUETE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaquete`';
        }
        if ($this->isColumnModified(PaquetedetallePeer::IDARTICULO)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulo`';
        }
        if ($this->isColumnModified(PaquetedetallePeer::IDSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicio`';
        }
        if ($this->isColumnModified(PaquetedetallePeer::PAQUETEDETALLE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`paquetedetalle_tipo`';
        }
        if ($this->isColumnModified(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`paquetedetalle_cantidad`';
        }

        $sql = sprintf(
            'INSERT INTO `paquetedetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpaquetedetalle`':
                        $stmt->bindValue($identifier, $this->idpaquetedetalle, PDO::PARAM_INT);
                        break;
                    case '`idpaquete`':
                        $stmt->bindValue($identifier, $this->idpaquete, PDO::PARAM_INT);
                        break;
                    case '`idarticulo`':
                        $stmt->bindValue($identifier, $this->idarticulo, PDO::PARAM_INT);
                        break;
                    case '`idservicio`':
                        $stmt->bindValue($identifier, $this->idservicio, PDO::PARAM_INT);
                        break;
                    case '`paquetedetalle_tipo`':
                        $stmt->bindValue($identifier, $this->paquetedetalle_tipo, PDO::PARAM_STR);
                        break;
                    case '`paquetedetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->paquetedetalle_cantidad, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aArticulo !== null) {
                if (!$this->aArticulo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArticulo->getValidationFailures());
                }
            }

            if ($this->aPaquete !== null) {
                if (!$this->aPaquete->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaquete->getValidationFailures());
                }
            }


            if (($retval = PaquetedetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PaquetedetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdpaquetedetalle();
                break;
            case 1:
                return $this->getIdpaquete();
                break;
            case 2:
                return $this->getIdarticulo();
                break;
            case 3:
                return $this->getIdservicio();
                break;
            case 4:
                return $this->getPaquetedetalleTipo();
                break;
            case 5:
                return $this->getPaquetedetalleCantidad();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Paquetedetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Paquetedetalle'][$this->getPrimaryKey()] = true;
        $keys = PaquetedetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpaquetedetalle(),
            $keys[1] => $this->getIdpaquete(),
            $keys[2] => $this->getIdarticulo(),
            $keys[3] => $this->getIdservicio(),
            $keys[4] => $this->getPaquetedetalleTipo(),
            $keys[5] => $this->getPaquetedetalleCantidad(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArticulo) {
                $result['Articulo'] = $this->aArticulo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaquete) {
                $result['Paquete'] = $this->aPaquete->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PaquetedetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdpaquetedetalle($value);
                break;
            case 1:
                $this->setIdpaquete($value);
                break;
            case 2:
                $this->setIdarticulo($value);
                break;
            case 3:
                $this->setIdservicio($value);
                break;
            case 4:
                $this->setPaquetedetalleTipo($value);
                break;
            case 5:
                $this->setPaquetedetalleCantidad($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PaquetedetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpaquetedetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaquete($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdarticulo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdservicio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPaquetedetalleTipo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPaquetedetalleCantidad($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PaquetedetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(PaquetedetallePeer::IDPAQUETEDETALLE)) $criteria->add(PaquetedetallePeer::IDPAQUETEDETALLE, $this->idpaquetedetalle);
        if ($this->isColumnModified(PaquetedetallePeer::IDPAQUETE)) $criteria->add(PaquetedetallePeer::IDPAQUETE, $this->idpaquete);
        if ($this->isColumnModified(PaquetedetallePeer::IDARTICULO)) $criteria->add(PaquetedetallePeer::IDARTICULO, $this->idarticulo);
        if ($this->isColumnModified(PaquetedetallePeer::IDSERVICIO)) $criteria->add(PaquetedetallePeer::IDSERVICIO, $this->idservicio);
        if ($this->isColumnModified(PaquetedetallePeer::PAQUETEDETALLE_TIPO)) $criteria->add(PaquetedetallePeer::PAQUETEDETALLE_TIPO, $this->paquetedetalle_tipo);
        if ($this->isColumnModified(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD)) $criteria->add(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD, $this->paquetedetalle_cantidad);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PaquetedetallePeer::DATABASE_NAME);
        $criteria->add(PaquetedetallePeer::IDPAQUETEDETALLE, $this->idpaquetedetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpaquetedetalle();
    }

    /**
     * Generic method to set the primary key (idpaquetedetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpaquetedetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpaquetedetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Paquetedetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaquete($this->getIdpaquete());
        $copyObj->setIdarticulo($this->getIdarticulo());
        $copyObj->setIdservicio($this->getIdservicio());
        $copyObj->setPaquetedetalleTipo($this->getPaquetedetalleTipo());
        $copyObj->setPaquetedetalleCantidad($this->getPaquetedetalleCantidad());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpaquetedetalle(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Paquetedetalle Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return PaquetedetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PaquetedetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Articulo object.
     *
     * @param                  Articulo $v
     * @return Paquetedetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArticulo(Articulo $v = null)
    {
        if ($v === null) {
            $this->setIdarticulo(NULL);
        } else {
            $this->setIdarticulo($v->getIdarticulo());
        }

        $this->aArticulo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Articulo object, it will not be re-added.
        if ($v !== null) {
            $v->addPaquetedetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Articulo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Articulo The associated Articulo object.
     * @throws PropelException
     */
    public function getArticulo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArticulo === null && ($this->idarticulo !== null) && $doQuery) {
            $this->aArticulo = ArticuloQuery::create()->findPk($this->idarticulo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArticulo->addPaquetedetalles($this);
             */
        }

        return $this->aArticulo;
    }

    /**
     * Declares an association between this object and a Paquete object.
     *
     * @param                  Paquete $v
     * @return Paquetedetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPaquete(Paquete $v = null)
    {
        if ($v === null) {
            $this->setIdpaquete(NULL);
        } else {
            $this->setIdpaquete($v->getIdpaquete());
        }

        $this->aPaquete = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Paquete object, it will not be re-added.
        if ($v !== null) {
            $v->addPaquetedetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Paquete object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paquete The associated Paquete object.
     * @throws PropelException
     */
    public function getPaquete(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaquete === null && ($this->idpaquete !== null) && $doQuery) {
            $this->aPaquete = PaqueteQuery::create()->findPk($this->idpaquete, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPaquete->addPaquetedetalles($this);
             */
        }

        return $this->aPaquete;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpaquetedetalle = null;
        $this->idpaquete = null;
        $this->idarticulo = null;
        $this->idservicio = null;
        $this->paquetedetalle_tipo = null;
        $this->paquetedetalle_cantidad = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aArticulo instanceof Persistent) {
              $this->aArticulo->clearAllReferences($deep);
            }
            if ($this->aPaquete instanceof Persistent) {
              $this->aPaquete->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aArticulo = null;
        $this->aPaquete = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PaquetedetallePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
