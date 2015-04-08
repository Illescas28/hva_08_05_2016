<?php


/**
 * Base class that represents a row from the 'cuarto' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCuarto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CuartoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CuartoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcuarto field.
     * @var        int
     */
    protected $idcuarto;

    /**
     * The value for the cuarto_nombre field.
     * @var        string
     */
    protected $cuarto_nombre;

    /**
     * The value for the cuarto_descripcion field.
     * @var        string
     */
    protected $cuarto_descripcion;

    /**
     * The value for the cuarto_enuso field.
     * @var        boolean
     */
    protected $cuarto_enuso;

    /**
     * The value for the cuarto_extension field.
     * @var        string
     */
    protected $cuarto_extension;

    /**
     * @var        PropelObjectCollection|Admision[] Collection to store aggregation of Admision objects.
     */
    protected $collAdmisions;
    protected $collAdmisionsPartial;

    /**
     * @var        PropelObjectCollection|Consulta[] Collection to store aggregation of Consulta objects.
     */
    protected $collConsultas;
    protected $collConsultasPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $admisionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $consultasScheduledForDeletion = null;

    /**
     * Get the [idcuarto] column value.
     *
     * @return int
     */
    public function getIdcuarto()
    {

        return $this->idcuarto;
    }

    /**
     * Get the [cuarto_nombre] column value.
     *
     * @return string
     */
    public function getCuartoNombre()
    {

        return $this->cuarto_nombre;
    }

    /**
     * Get the [cuarto_descripcion] column value.
     *
     * @return string
     */
    public function getCuartoDescripcion()
    {

        return $this->cuarto_descripcion;
    }

    /**
     * Get the [cuarto_enuso] column value.
     *
     * @return boolean
     */
    public function getCuartoEnuso()
    {

        return $this->cuarto_enuso;
    }

    /**
     * Get the [cuarto_extension] column value.
     *
     * @return string
     */
    public function getCuartoExtension()
    {

        return $this->cuarto_extension;
    }

    /**
     * Set the value of [idcuarto] column.
     *
     * @param  int $v new value
     * @return Cuarto The current object (for fluent API support)
     */
    public function setIdcuarto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuarto !== $v) {
            $this->idcuarto = $v;
            $this->modifiedColumns[] = CuartoPeer::IDCUARTO;
        }


        return $this;
    } // setIdcuarto()

    /**
     * Set the value of [cuarto_nombre] column.
     *
     * @param  string $v new value
     * @return Cuarto The current object (for fluent API support)
     */
    public function setCuartoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuarto_nombre !== $v) {
            $this->cuarto_nombre = $v;
            $this->modifiedColumns[] = CuartoPeer::CUARTO_NOMBRE;
        }


        return $this;
    } // setCuartoNombre()

    /**
     * Set the value of [cuarto_descripcion] column.
     *
     * @param  string $v new value
     * @return Cuarto The current object (for fluent API support)
     */
    public function setCuartoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuarto_descripcion !== $v) {
            $this->cuarto_descripcion = $v;
            $this->modifiedColumns[] = CuartoPeer::CUARTO_DESCRIPCION;
        }


        return $this;
    } // setCuartoDescripcion()

    /**
     * Sets the value of the [cuarto_enuso] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Cuarto The current object (for fluent API support)
     */
    public function setCuartoEnuso($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cuarto_enuso !== $v) {
            $this->cuarto_enuso = $v;
            $this->modifiedColumns[] = CuartoPeer::CUARTO_ENUSO;
        }


        return $this;
    } // setCuartoEnuso()

    /**
     * Set the value of [cuarto_extension] column.
     *
     * @param  string $v new value
     * @return Cuarto The current object (for fluent API support)
     */
    public function setCuartoExtension($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuarto_extension !== $v) {
            $this->cuarto_extension = $v;
            $this->modifiedColumns[] = CuartoPeer::CUARTO_EXTENSION;
        }


        return $this;
    } // setCuartoExtension()

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

            $this->idcuarto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cuarto_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cuarto_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cuarto_enuso = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->cuarto_extension = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CuartoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cuarto object", $e);
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
            $con = Propel::getConnection(CuartoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CuartoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAdmisions = null;

            $this->collConsultas = null;

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
            $con = Propel::getConnection(CuartoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CuartoQuery::create()
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
            $con = Propel::getConnection(CuartoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CuartoPeer::addInstanceToPool($this);
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

            if ($this->admisionsScheduledForDeletion !== null) {
                if (!$this->admisionsScheduledForDeletion->isEmpty()) {
                    AdmisionQuery::create()
                        ->filterByPrimaryKeys($this->admisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->admisionsScheduledForDeletion = null;
                }
            }

            if ($this->collAdmisions !== null) {
                foreach ($this->collAdmisions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->consultasScheduledForDeletion !== null) {
                if (!$this->consultasScheduledForDeletion->isEmpty()) {
                    ConsultaQuery::create()
                        ->filterByPrimaryKeys($this->consultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->consultasScheduledForDeletion = null;
                }
            }

            if ($this->collConsultas !== null) {
                foreach ($this->collConsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CuartoPeer::IDCUARTO;
        if (null !== $this->idcuarto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CuartoPeer::IDCUARTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CuartoPeer::IDCUARTO)) {
            $modifiedColumns[':p' . $index++]  = '`idcuarto`';
        }
        if ($this->isColumnModified(CuartoPeer::CUARTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`cuarto_nombre`';
        }
        if ($this->isColumnModified(CuartoPeer::CUARTO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`cuarto_descripcion`';
        }
        if ($this->isColumnModified(CuartoPeer::CUARTO_ENUSO)) {
            $modifiedColumns[':p' . $index++]  = '`cuarto_enuso`';
        }
        if ($this->isColumnModified(CuartoPeer::CUARTO_EXTENSION)) {
            $modifiedColumns[':p' . $index++]  = '`cuarto_extension`';
        }

        $sql = sprintf(
            'INSERT INTO `cuarto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcuarto`':
                        $stmt->bindValue($identifier, $this->idcuarto, PDO::PARAM_INT);
                        break;
                    case '`cuarto_nombre`':
                        $stmt->bindValue($identifier, $this->cuarto_nombre, PDO::PARAM_STR);
                        break;
                    case '`cuarto_descripcion`':
                        $stmt->bindValue($identifier, $this->cuarto_descripcion, PDO::PARAM_STR);
                        break;
                    case '`cuarto_enuso`':
                        $stmt->bindValue($identifier, (int) $this->cuarto_enuso, PDO::PARAM_INT);
                        break;
                    case '`cuarto_extension`':
                        $stmt->bindValue($identifier, $this->cuarto_extension, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdcuarto($pk);

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


            if (($retval = CuartoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAdmisions !== null) {
                    foreach ($this->collAdmisions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collConsultas !== null) {
                    foreach ($this->collConsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CuartoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcuarto();
                break;
            case 1:
                return $this->getCuartoNombre();
                break;
            case 2:
                return $this->getCuartoDescripcion();
                break;
            case 3:
                return $this->getCuartoEnuso();
                break;
            case 4:
                return $this->getCuartoExtension();
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
        if (isset($alreadyDumpedObjects['Cuarto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cuarto'][$this->getPrimaryKey()] = true;
        $keys = CuartoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcuarto(),
            $keys[1] => $this->getCuartoNombre(),
            $keys[2] => $this->getCuartoDescripcion(),
            $keys[3] => $this->getCuartoEnuso(),
            $keys[4] => $this->getCuartoExtension(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collAdmisions) {
                $result['Admisions'] = $this->collAdmisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collConsultas) {
                $result['Consultas'] = $this->collConsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CuartoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcuarto($value);
                break;
            case 1:
                $this->setCuartoNombre($value);
                break;
            case 2:
                $this->setCuartoDescripcion($value);
                break;
            case 3:
                $this->setCuartoEnuso($value);
                break;
            case 4:
                $this->setCuartoExtension($value);
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
        $keys = CuartoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcuarto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCuartoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCuartoDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuartoEnuso($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCuartoExtension($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CuartoPeer::DATABASE_NAME);

        if ($this->isColumnModified(CuartoPeer::IDCUARTO)) $criteria->add(CuartoPeer::IDCUARTO, $this->idcuarto);
        if ($this->isColumnModified(CuartoPeer::CUARTO_NOMBRE)) $criteria->add(CuartoPeer::CUARTO_NOMBRE, $this->cuarto_nombre);
        if ($this->isColumnModified(CuartoPeer::CUARTO_DESCRIPCION)) $criteria->add(CuartoPeer::CUARTO_DESCRIPCION, $this->cuarto_descripcion);
        if ($this->isColumnModified(CuartoPeer::CUARTO_ENUSO)) $criteria->add(CuartoPeer::CUARTO_ENUSO, $this->cuarto_enuso);
        if ($this->isColumnModified(CuartoPeer::CUARTO_EXTENSION)) $criteria->add(CuartoPeer::CUARTO_EXTENSION, $this->cuarto_extension);

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
        $criteria = new Criteria(CuartoPeer::DATABASE_NAME);
        $criteria->add(CuartoPeer::IDCUARTO, $this->idcuarto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcuarto();
    }

    /**
     * Generic method to set the primary key (idcuarto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcuarto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcuarto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cuarto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCuartoNombre($this->getCuartoNombre());
        $copyObj->setCuartoDescripcion($this->getCuartoDescripcion());
        $copyObj->setCuartoEnuso($this->getCuartoEnuso());
        $copyObj->setCuartoExtension($this->getCuartoExtension());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAdmisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAdmision($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getConsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addConsulta($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcuarto(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cuarto Clone of current object.
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
     * @return CuartoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CuartoPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Admision' == $relationName) {
            $this->initAdmisions();
        }
        if ('Consulta' == $relationName) {
            $this->initConsultas();
        }
    }

    /**
     * Clears out the collAdmisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuarto The current object (for fluent API support)
     * @see        addAdmisions()
     */
    public function clearAdmisions()
    {
        $this->collAdmisions = null; // important to set this to null since that means it is uninitialized
        $this->collAdmisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collAdmisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialAdmisions($v = true)
    {
        $this->collAdmisionsPartial = $v;
    }

    /**
     * Initializes the collAdmisions collection.
     *
     * By default this just sets the collAdmisions collection to an empty array (like clearcollAdmisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAdmisions($overrideExisting = true)
    {
        if (null !== $this->collAdmisions && !$overrideExisting) {
            return;
        }
        $this->collAdmisions = new PropelObjectCollection();
        $this->collAdmisions->setModel('Admision');
    }

    /**
     * Gets an array of Admision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuarto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Admision[] List of Admision objects
     * @throws PropelException
     */
    public function getAdmisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                // return empty collection
                $this->initAdmisions();
            } else {
                $collAdmisions = AdmisionQuery::create(null, $criteria)
                    ->filterByCuarto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAdmisionsPartial && count($collAdmisions)) {
                      $this->initAdmisions(false);

                      foreach ($collAdmisions as $obj) {
                        if (false == $this->collAdmisions->contains($obj)) {
                          $this->collAdmisions->append($obj);
                        }
                      }

                      $this->collAdmisionsPartial = true;
                    }

                    $collAdmisions->getInternalIterator()->rewind();

                    return $collAdmisions;
                }

                if ($partial && $this->collAdmisions) {
                    foreach ($this->collAdmisions as $obj) {
                        if ($obj->isNew()) {
                            $collAdmisions[] = $obj;
                        }
                    }
                }

                $this->collAdmisions = $collAdmisions;
                $this->collAdmisionsPartial = false;
            }
        }

        return $this->collAdmisions;
    }

    /**
     * Sets a collection of Admision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $admisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuarto The current object (for fluent API support)
     */
    public function setAdmisions(PropelCollection $admisions, PropelPDO $con = null)
    {
        $admisionsToDelete = $this->getAdmisions(new Criteria(), $con)->diff($admisions);


        $this->admisionsScheduledForDeletion = $admisionsToDelete;

        foreach ($admisionsToDelete as $admisionRemoved) {
            $admisionRemoved->setCuarto(null);
        }

        $this->collAdmisions = null;
        foreach ($admisions as $admision) {
            $this->addAdmision($admision);
        }

        $this->collAdmisions = $admisions;
        $this->collAdmisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Admision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Admision objects.
     * @throws PropelException
     */
    public function countAdmisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAdmisions());
            }
            $query = AdmisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuarto($this)
                ->count($con);
        }

        return count($this->collAdmisions);
    }

    /**
     * Method called to associate a Admision object to this object
     * through the Admision foreign key attribute.
     *
     * @param    Admision $l Admision
     * @return Cuarto The current object (for fluent API support)
     */
    public function addAdmision(Admision $l)
    {
        if ($this->collAdmisions === null) {
            $this->initAdmisions();
            $this->collAdmisionsPartial = true;
        }

        if (!in_array($l, $this->collAdmisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAdmision($l);

            if ($this->admisionsScheduledForDeletion and $this->admisionsScheduledForDeletion->contains($l)) {
                $this->admisionsScheduledForDeletion->remove($this->admisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Admision $admision The admision object to add.
     */
    protected function doAddAdmision($admision)
    {
        $this->collAdmisions[]= $admision;
        $admision->setCuarto($this);
    }

    /**
     * @param	Admision $admision The admision object to remove.
     * @return Cuarto The current object (for fluent API support)
     */
    public function removeAdmision($admision)
    {
        if ($this->getAdmisions()->contains($admision)) {
            $this->collAdmisions->remove($this->collAdmisions->search($admision));
            if (null === $this->admisionsScheduledForDeletion) {
                $this->admisionsScheduledForDeletion = clone $this->collAdmisions;
                $this->admisionsScheduledForDeletion->clear();
            }
            $this->admisionsScheduledForDeletion[]= clone $admision;
            $admision->setCuarto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuarto is new, it will return
     * an empty collection; or if this Cuarto has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuarto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getAdmisions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuarto is new, it will return
     * an empty collection; or if this Cuarto has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuarto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getAdmisions($query, $con);
    }

    /**
     * Clears out the collConsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuarto The current object (for fluent API support)
     * @see        addConsultas()
     */
    public function clearConsultas()
    {
        $this->collConsultas = null; // important to set this to null since that means it is uninitialized
        $this->collConsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collConsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialConsultas($v = true)
    {
        $this->collConsultasPartial = $v;
    }

    /**
     * Initializes the collConsultas collection.
     *
     * By default this just sets the collConsultas collection to an empty array (like clearcollConsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initConsultas($overrideExisting = true)
    {
        if (null !== $this->collConsultas && !$overrideExisting) {
            return;
        }
        $this->collConsultas = new PropelObjectCollection();
        $this->collConsultas->setModel('Consulta');
    }

    /**
     * Gets an array of Consulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuarto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     * @throws PropelException
     */
    public function getConsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                // return empty collection
                $this->initConsultas();
            } else {
                $collConsultas = ConsultaQuery::create(null, $criteria)
                    ->filterByCuarto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collConsultasPartial && count($collConsultas)) {
                      $this->initConsultas(false);

                      foreach ($collConsultas as $obj) {
                        if (false == $this->collConsultas->contains($obj)) {
                          $this->collConsultas->append($obj);
                        }
                      }

                      $this->collConsultasPartial = true;
                    }

                    $collConsultas->getInternalIterator()->rewind();

                    return $collConsultas;
                }

                if ($partial && $this->collConsultas) {
                    foreach ($this->collConsultas as $obj) {
                        if ($obj->isNew()) {
                            $collConsultas[] = $obj;
                        }
                    }
                }

                $this->collConsultas = $collConsultas;
                $this->collConsultasPartial = false;
            }
        }

        return $this->collConsultas;
    }

    /**
     * Sets a collection of Consulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $consultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuarto The current object (for fluent API support)
     */
    public function setConsultas(PropelCollection $consultas, PropelPDO $con = null)
    {
        $consultasToDelete = $this->getConsultas(new Criteria(), $con)->diff($consultas);


        $this->consultasScheduledForDeletion = $consultasToDelete;

        foreach ($consultasToDelete as $consultaRemoved) {
            $consultaRemoved->setCuarto(null);
        }

        $this->collConsultas = null;
        foreach ($consultas as $consulta) {
            $this->addConsulta($consulta);
        }

        $this->collConsultas = $consultas;
        $this->collConsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Consulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Consulta objects.
     * @throws PropelException
     */
    public function countConsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getConsultas());
            }
            $query = ConsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuarto($this)
                ->count($con);
        }

        return count($this->collConsultas);
    }

    /**
     * Method called to associate a Consulta object to this object
     * through the Consulta foreign key attribute.
     *
     * @param    Consulta $l Consulta
     * @return Cuarto The current object (for fluent API support)
     */
    public function addConsulta(Consulta $l)
    {
        if ($this->collConsultas === null) {
            $this->initConsultas();
            $this->collConsultasPartial = true;
        }

        if (!in_array($l, $this->collConsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddConsulta($l);

            if ($this->consultasScheduledForDeletion and $this->consultasScheduledForDeletion->contains($l)) {
                $this->consultasScheduledForDeletion->remove($this->consultasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Consulta $consulta The consulta object to add.
     */
    protected function doAddConsulta($consulta)
    {
        $this->collConsultas[]= $consulta;
        $consulta->setCuarto($this);
    }

    /**
     * @param	Consulta $consulta The consulta object to remove.
     * @return Cuarto The current object (for fluent API support)
     */
    public function removeConsulta($consulta)
    {
        if ($this->getConsultas()->contains($consulta)) {
            $this->collConsultas->remove($this->collConsultas->search($consulta));
            if (null === $this->consultasScheduledForDeletion) {
                $this->consultasScheduledForDeletion = clone $this->collConsultas;
                $this->consultasScheduledForDeletion->clear();
            }
            $this->consultasScheduledForDeletion[]= clone $consulta;
            $consulta->setCuarto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuarto is new, it will return
     * an empty collection; or if this Cuarto has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuarto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getConsultas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuarto is new, it will return
     * an empty collection; or if this Cuarto has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuarto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getConsultas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcuarto = null;
        $this->cuarto_nombre = null;
        $this->cuarto_descripcion = null;
        $this->cuarto_enuso = null;
        $this->cuarto_extension = null;
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
            if ($this->collAdmisions) {
                foreach ($this->collAdmisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collConsultas) {
                foreach ($this->collConsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAdmisions instanceof PropelCollection) {
            $this->collAdmisions->clearIterator();
        }
        $this->collAdmisions = null;
        if ($this->collConsultas instanceof PropelCollection) {
            $this->collConsultas->clearIterator();
        }
        $this->collConsultas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CuartoPeer::DEFAULT_STRING_FORMAT);
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
