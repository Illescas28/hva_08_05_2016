<?php


/**
 * Base class that represents a row from the 'servicio' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseServicio extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ServicioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ServicioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idservicio field.
     * @var        int
     */
    protected $idservicio;

    /**
     * The value for the servicio_nombre field.
     * @var        string
     */
    protected $servicio_nombre;

    /**
     * The value for the servicio_descripcion field.
     * @var        string
     */
    protected $servicio_descripcion;

    /**
     * The value for the servicio_precio field.
     * @var        string
     */
    protected $servicio_precio;

    /**
     * The value for the servicio_iva field.
     * @var        string
     */
    protected $servicio_iva;

    /**
     * @var        PropelObjectCollection|Cargoadmision[] Collection to store aggregation of Cargoadmision objects.
     */
    protected $collCargoadmisions;
    protected $collCargoadmisionsPartial;

    /**
     * @var        PropelObjectCollection|Cargoconsulta[] Collection to store aggregation of Cargoconsulta objects.
     */
    protected $collCargoconsultas;
    protected $collCargoconsultasPartial;

    /**
     * @var        PropelObjectCollection|Cargoventa[] Collection to store aggregation of Cargoventa objects.
     */
    protected $collCargoventas;
    protected $collCargoventasPartial;

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
    protected $cargoadmisionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $cargoconsultasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $cargoventasScheduledForDeletion = null;

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
     * Get the [servicio_nombre] column value.
     *
     * @return string
     */
    public function getServicioNombre()
    {

        return $this->servicio_nombre;
    }

    /**
     * Get the [servicio_descripcion] column value.
     *
     * @return string
     */
    public function getServicioDescripcion()
    {

        return $this->servicio_descripcion;
    }

    /**
     * Get the [servicio_precio] column value.
     *
     * @return string
     */
    public function getServicioPrecio()
    {

        return $this->servicio_precio;
    }

    /**
     * Get the [servicio_iva] column value.
     *
     * @return string
     */
    public function getServicioIva()
    {

        return $this->servicio_iva;
    }

    /**
     * Set the value of [idservicio] column.
     *
     * @param  int $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setIdservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicio !== $v) {
            $this->idservicio = $v;
            $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        }


        return $this;
    } // setIdservicio()

    /**
     * Set the value of [servicio_nombre] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_nombre !== $v) {
            $this->servicio_nombre = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_NOMBRE;
        }


        return $this;
    } // setServicioNombre()

    /**
     * Set the value of [servicio_descripcion] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_descripcion !== $v) {
            $this->servicio_descripcion = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_DESCRIPCION;
        }


        return $this;
    } // setServicioDescripcion()

    /**
     * Set the value of [servicio_precio] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioPrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicio_precio !== $v) {
            $this->servicio_precio = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_PRECIO;
        }


        return $this;
    } // setServicioPrecio()

    /**
     * Set the value of [servicio_iva] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioIva($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_iva !== $v) {
            $this->servicio_iva = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_IVA;
        }


        return $this;
    } // setServicioIva()

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

            $this->idservicio = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->servicio_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->servicio_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->servicio_precio = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->servicio_iva = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ServicioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Servicio object", $e);
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ServicioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCargoadmisions = null;

            $this->collCargoconsultas = null;

            $this->collCargoventas = null;

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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ServicioQuery::create()
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ServicioPeer::addInstanceToPool($this);
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

            if ($this->cargoadmisionsScheduledForDeletion !== null) {
                if (!$this->cargoadmisionsScheduledForDeletion->isEmpty()) {
                    CargoadmisionQuery::create()
                        ->filterByPrimaryKeys($this->cargoadmisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoadmisionsScheduledForDeletion = null;
                }
            }

            if ($this->collCargoadmisions !== null) {
                foreach ($this->collCargoadmisions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->cargoconsultasScheduledForDeletion !== null) {
                if (!$this->cargoconsultasScheduledForDeletion->isEmpty()) {
                    CargoconsultaQuery::create()
                        ->filterByPrimaryKeys($this->cargoconsultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoconsultasScheduledForDeletion = null;
                }
            }

            if ($this->collCargoconsultas !== null) {
                foreach ($this->collCargoconsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->cargoventasScheduledForDeletion !== null) {
                if (!$this->cargoventasScheduledForDeletion->isEmpty()) {
                    CargoventaQuery::create()
                        ->filterByPrimaryKeys($this->cargoventasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoventasScheduledForDeletion = null;
                }
            }

            if ($this->collCargoventas !== null) {
                foreach ($this->collCargoventas as $referrerFK) {
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

        $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        if (null !== $this->idservicio) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ServicioPeer::IDSERVICIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicio`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_nombre`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_descripcion`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_precio`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_iva`';
        }

        $sql = sprintf(
            'INSERT INTO `servicio` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idservicio`':
                        $stmt->bindValue($identifier, $this->idservicio, PDO::PARAM_INT);
                        break;
                    case '`servicio_nombre`':
                        $stmt->bindValue($identifier, $this->servicio_nombre, PDO::PARAM_STR);
                        break;
                    case '`servicio_descripcion`':
                        $stmt->bindValue($identifier, $this->servicio_descripcion, PDO::PARAM_STR);
                        break;
                    case '`servicio_precio`':
                        $stmt->bindValue($identifier, $this->servicio_precio, PDO::PARAM_STR);
                        break;
                    case '`servicio_iva`':
                        $stmt->bindValue($identifier, $this->servicio_iva, PDO::PARAM_STR);
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
        $this->setIdservicio($pk);

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


            if (($retval = ServicioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCargoadmisions !== null) {
                    foreach ($this->collCargoadmisions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCargoconsultas !== null) {
                    foreach ($this->collCargoconsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCargoventas !== null) {
                    foreach ($this->collCargoventas as $referrerFK) {
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdservicio();
                break;
            case 1:
                return $this->getServicioNombre();
                break;
            case 2:
                return $this->getServicioDescripcion();
                break;
            case 3:
                return $this->getServicioPrecio();
                break;
            case 4:
                return $this->getServicioIva();
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
        if (isset($alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()] = true;
        $keys = ServicioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdservicio(),
            $keys[1] => $this->getServicioNombre(),
            $keys[2] => $this->getServicioDescripcion(),
            $keys[3] => $this->getServicioPrecio(),
            $keys[4] => $this->getServicioIva(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCargoadmisions) {
                $result['Cargoadmisions'] = $this->collCargoadmisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCargoconsultas) {
                $result['Cargoconsultas'] = $this->collCargoconsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCargoventas) {
                $result['Cargoventas'] = $this->collCargoventas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdservicio($value);
                break;
            case 1:
                $this->setServicioNombre($value);
                break;
            case 2:
                $this->setServicioDescripcion($value);
                break;
            case 3:
                $this->setServicioPrecio($value);
                break;
            case 4:
                $this->setServicioIva($value);
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
        $keys = ServicioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdservicio($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setServicioNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setServicioDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setServicioPrecio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setServicioIva($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);

        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) $criteria->add(ServicioPeer::SERVICIO_NOMBRE, $this->servicio_nombre);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) $criteria->add(ServicioPeer::SERVICIO_DESCRIPCION, $this->servicio_descripcion);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_PRECIO)) $criteria->add(ServicioPeer::SERVICIO_PRECIO, $this->servicio_precio);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_IVA)) $criteria->add(ServicioPeer::SERVICIO_IVA, $this->servicio_iva);

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
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);
        $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdservicio();
    }

    /**
     * Generic method to set the primary key (idservicio column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdservicio($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdservicio();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Servicio (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setServicioNombre($this->getServicioNombre());
        $copyObj->setServicioDescripcion($this->getServicioDescripcion());
        $copyObj->setServicioPrecio($this->getServicioPrecio());
        $copyObj->setServicioIva($this->getServicioIva());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCargoadmisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoadmision($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCargoconsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoconsulta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCargoventas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoventa($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdservicio(NULL); // this is a auto-increment column, so set to default value
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
     * @return Servicio Clone of current object.
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
     * @return ServicioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ServicioPeer();
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
        if ('Cargoadmision' == $relationName) {
            $this->initCargoadmisions();
        }
        if ('Cargoconsulta' == $relationName) {
            $this->initCargoconsultas();
        }
        if ('Cargoventa' == $relationName) {
            $this->initCargoventas();
        }
    }

    /**
     * Clears out the collCargoadmisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addCargoadmisions()
     */
    public function clearCargoadmisions()
    {
        $this->collCargoadmisions = null; // important to set this to null since that means it is uninitialized
        $this->collCargoadmisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoadmisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoadmisions($v = true)
    {
        $this->collCargoadmisionsPartial = $v;
    }

    /**
     * Initializes the collCargoadmisions collection.
     *
     * By default this just sets the collCargoadmisions collection to an empty array (like clearcollCargoadmisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoadmisions($overrideExisting = true)
    {
        if (null !== $this->collCargoadmisions && !$overrideExisting) {
            return;
        }
        $this->collCargoadmisions = new PropelObjectCollection();
        $this->collCargoadmisions->setModel('Cargoadmision');
    }

    /**
     * Gets an array of Cargoadmision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     * @throws PropelException
     */
    public function getCargoadmisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoadmisionsPartial && !$this->isNew();
        if (null === $this->collCargoadmisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoadmisions) {
                // return empty collection
                $this->initCargoadmisions();
            } else {
                $collCargoadmisions = CargoadmisionQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoadmisionsPartial && count($collCargoadmisions)) {
                      $this->initCargoadmisions(false);

                      foreach ($collCargoadmisions as $obj) {
                        if (false == $this->collCargoadmisions->contains($obj)) {
                          $this->collCargoadmisions->append($obj);
                        }
                      }

                      $this->collCargoadmisionsPartial = true;
                    }

                    $collCargoadmisions->getInternalIterator()->rewind();

                    return $collCargoadmisions;
                }

                if ($partial && $this->collCargoadmisions) {
                    foreach ($this->collCargoadmisions as $obj) {
                        if ($obj->isNew()) {
                            $collCargoadmisions[] = $obj;
                        }
                    }
                }

                $this->collCargoadmisions = $collCargoadmisions;
                $this->collCargoadmisionsPartial = false;
            }
        }

        return $this->collCargoadmisions;
    }

    /**
     * Sets a collection of Cargoadmision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoadmisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setCargoadmisions(PropelCollection $cargoadmisions, PropelPDO $con = null)
    {
        $cargoadmisionsToDelete = $this->getCargoadmisions(new Criteria(), $con)->diff($cargoadmisions);


        $this->cargoadmisionsScheduledForDeletion = $cargoadmisionsToDelete;

        foreach ($cargoadmisionsToDelete as $cargoadmisionRemoved) {
            $cargoadmisionRemoved->setServicio(null);
        }

        $this->collCargoadmisions = null;
        foreach ($cargoadmisions as $cargoadmision) {
            $this->addCargoadmision($cargoadmision);
        }

        $this->collCargoadmisions = $cargoadmisions;
        $this->collCargoadmisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoadmision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoadmision objects.
     * @throws PropelException
     */
    public function countCargoadmisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoadmisionsPartial && !$this->isNew();
        if (null === $this->collCargoadmisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoadmisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoadmisions());
            }
            $query = CargoadmisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collCargoadmisions);
    }

    /**
     * Method called to associate a Cargoadmision object to this object
     * through the Cargoadmision foreign key attribute.
     *
     * @param    Cargoadmision $l Cargoadmision
     * @return Servicio The current object (for fluent API support)
     */
    public function addCargoadmision(Cargoadmision $l)
    {
        if ($this->collCargoadmisions === null) {
            $this->initCargoadmisions();
            $this->collCargoadmisionsPartial = true;
        }

        if (!in_array($l, $this->collCargoadmisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoadmision($l);

            if ($this->cargoadmisionsScheduledForDeletion and $this->cargoadmisionsScheduledForDeletion->contains($l)) {
                $this->cargoadmisionsScheduledForDeletion->remove($this->cargoadmisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoadmision $cargoadmision The cargoadmision object to add.
     */
    protected function doAddCargoadmision($cargoadmision)
    {
        $this->collCargoadmisions[]= $cargoadmision;
        $cargoadmision->setServicio($this);
    }

    /**
     * @param	Cargoadmision $cargoadmision The cargoadmision object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeCargoadmision($cargoadmision)
    {
        if ($this->getCargoadmisions()->contains($cargoadmision)) {
            $this->collCargoadmisions->remove($this->collCargoadmisions->search($cargoadmision));
            if (null === $this->cargoadmisionsScheduledForDeletion) {
                $this->cargoadmisionsScheduledForDeletion = clone $this->collCargoadmisions;
                $this->cargoadmisionsScheduledForDeletion->clear();
            }
            $this->cargoadmisionsScheduledForDeletion[]= $cargoadmision;
            $cargoadmision->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoadmisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     */
    public function getCargoadmisionsJoinAdmision($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoadmisionQuery::create(null, $criteria);
        $query->joinWith('Admision', $join_behavior);

        return $this->getCargoadmisions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoadmisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     */
    public function getCargoadmisionsJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoadmisionQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoadmisions($query, $con);
    }

    /**
     * Clears out the collCargoconsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addCargoconsultas()
     */
    public function clearCargoconsultas()
    {
        $this->collCargoconsultas = null; // important to set this to null since that means it is uninitialized
        $this->collCargoconsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoconsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoconsultas($v = true)
    {
        $this->collCargoconsultasPartial = $v;
    }

    /**
     * Initializes the collCargoconsultas collection.
     *
     * By default this just sets the collCargoconsultas collection to an empty array (like clearcollCargoconsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoconsultas($overrideExisting = true)
    {
        if (null !== $this->collCargoconsultas && !$overrideExisting) {
            return;
        }
        $this->collCargoconsultas = new PropelObjectCollection();
        $this->collCargoconsultas->setModel('Cargoconsulta');
    }

    /**
     * Gets an array of Cargoconsulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     * @throws PropelException
     */
    public function getCargoconsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoconsultasPartial && !$this->isNew();
        if (null === $this->collCargoconsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoconsultas) {
                // return empty collection
                $this->initCargoconsultas();
            } else {
                $collCargoconsultas = CargoconsultaQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoconsultasPartial && count($collCargoconsultas)) {
                      $this->initCargoconsultas(false);

                      foreach ($collCargoconsultas as $obj) {
                        if (false == $this->collCargoconsultas->contains($obj)) {
                          $this->collCargoconsultas->append($obj);
                        }
                      }

                      $this->collCargoconsultasPartial = true;
                    }

                    $collCargoconsultas->getInternalIterator()->rewind();

                    return $collCargoconsultas;
                }

                if ($partial && $this->collCargoconsultas) {
                    foreach ($this->collCargoconsultas as $obj) {
                        if ($obj->isNew()) {
                            $collCargoconsultas[] = $obj;
                        }
                    }
                }

                $this->collCargoconsultas = $collCargoconsultas;
                $this->collCargoconsultasPartial = false;
            }
        }

        return $this->collCargoconsultas;
    }

    /**
     * Sets a collection of Cargoconsulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoconsultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setCargoconsultas(PropelCollection $cargoconsultas, PropelPDO $con = null)
    {
        $cargoconsultasToDelete = $this->getCargoconsultas(new Criteria(), $con)->diff($cargoconsultas);


        $this->cargoconsultasScheduledForDeletion = $cargoconsultasToDelete;

        foreach ($cargoconsultasToDelete as $cargoconsultaRemoved) {
            $cargoconsultaRemoved->setServicio(null);
        }

        $this->collCargoconsultas = null;
        foreach ($cargoconsultas as $cargoconsulta) {
            $this->addCargoconsulta($cargoconsulta);
        }

        $this->collCargoconsultas = $cargoconsultas;
        $this->collCargoconsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoconsulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoconsulta objects.
     * @throws PropelException
     */
    public function countCargoconsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoconsultasPartial && !$this->isNew();
        if (null === $this->collCargoconsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoconsultas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoconsultas());
            }
            $query = CargoconsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collCargoconsultas);
    }

    /**
     * Method called to associate a Cargoconsulta object to this object
     * through the Cargoconsulta foreign key attribute.
     *
     * @param    Cargoconsulta $l Cargoconsulta
     * @return Servicio The current object (for fluent API support)
     */
    public function addCargoconsulta(Cargoconsulta $l)
    {
        if ($this->collCargoconsultas === null) {
            $this->initCargoconsultas();
            $this->collCargoconsultasPartial = true;
        }

        if (!in_array($l, $this->collCargoconsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoconsulta($l);

            if ($this->cargoconsultasScheduledForDeletion and $this->cargoconsultasScheduledForDeletion->contains($l)) {
                $this->cargoconsultasScheduledForDeletion->remove($this->cargoconsultasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoconsulta $cargoconsulta The cargoconsulta object to add.
     */
    protected function doAddCargoconsulta($cargoconsulta)
    {
        $this->collCargoconsultas[]= $cargoconsulta;
        $cargoconsulta->setServicio($this);
    }

    /**
     * @param	Cargoconsulta $cargoconsulta The cargoconsulta object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeCargoconsulta($cargoconsulta)
    {
        if ($this->getCargoconsultas()->contains($cargoconsulta)) {
            $this->collCargoconsultas->remove($this->collCargoconsultas->search($cargoconsulta));
            if (null === $this->cargoconsultasScheduledForDeletion) {
                $this->cargoconsultasScheduledForDeletion = clone $this->collCargoconsultas;
                $this->cargoconsultasScheduledForDeletion->clear();
            }
            $this->cargoconsultasScheduledForDeletion[]= $cargoconsulta;
            $cargoconsulta->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoconsultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     */
    public function getCargoconsultasJoinConsulta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoconsultaQuery::create(null, $criteria);
        $query->joinWith('Consulta', $join_behavior);

        return $this->getCargoconsultas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoconsultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     */
    public function getCargoconsultasJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoconsultaQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoconsultas($query, $con);
    }

    /**
     * Clears out the collCargoventas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addCargoventas()
     */
    public function clearCargoventas()
    {
        $this->collCargoventas = null; // important to set this to null since that means it is uninitialized
        $this->collCargoventasPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoventas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoventas($v = true)
    {
        $this->collCargoventasPartial = $v;
    }

    /**
     * Initializes the collCargoventas collection.
     *
     * By default this just sets the collCargoventas collection to an empty array (like clearcollCargoventas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoventas($overrideExisting = true)
    {
        if (null !== $this->collCargoventas && !$overrideExisting) {
            return;
        }
        $this->collCargoventas = new PropelObjectCollection();
        $this->collCargoventas->setModel('Cargoventa');
    }

    /**
     * Gets an array of Cargoventa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     * @throws PropelException
     */
    public function getCargoventas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoventasPartial && !$this->isNew();
        if (null === $this->collCargoventas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoventas) {
                // return empty collection
                $this->initCargoventas();
            } else {
                $collCargoventas = CargoventaQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoventasPartial && count($collCargoventas)) {
                      $this->initCargoventas(false);

                      foreach ($collCargoventas as $obj) {
                        if (false == $this->collCargoventas->contains($obj)) {
                          $this->collCargoventas->append($obj);
                        }
                      }

                      $this->collCargoventasPartial = true;
                    }

                    $collCargoventas->getInternalIterator()->rewind();

                    return $collCargoventas;
                }

                if ($partial && $this->collCargoventas) {
                    foreach ($this->collCargoventas as $obj) {
                        if ($obj->isNew()) {
                            $collCargoventas[] = $obj;
                        }
                    }
                }

                $this->collCargoventas = $collCargoventas;
                $this->collCargoventasPartial = false;
            }
        }

        return $this->collCargoventas;
    }

    /**
     * Sets a collection of Cargoventa objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoventas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setCargoventas(PropelCollection $cargoventas, PropelPDO $con = null)
    {
        $cargoventasToDelete = $this->getCargoventas(new Criteria(), $con)->diff($cargoventas);


        $this->cargoventasScheduledForDeletion = $cargoventasToDelete;

        foreach ($cargoventasToDelete as $cargoventaRemoved) {
            $cargoventaRemoved->setServicio(null);
        }

        $this->collCargoventas = null;
        foreach ($cargoventas as $cargoventa) {
            $this->addCargoventa($cargoventa);
        }

        $this->collCargoventas = $cargoventas;
        $this->collCargoventasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoventa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoventa objects.
     * @throws PropelException
     */
    public function countCargoventas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoventasPartial && !$this->isNew();
        if (null === $this->collCargoventas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoventas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoventas());
            }
            $query = CargoventaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collCargoventas);
    }

    /**
     * Method called to associate a Cargoventa object to this object
     * through the Cargoventa foreign key attribute.
     *
     * @param    Cargoventa $l Cargoventa
     * @return Servicio The current object (for fluent API support)
     */
    public function addCargoventa(Cargoventa $l)
    {
        if ($this->collCargoventas === null) {
            $this->initCargoventas();
            $this->collCargoventasPartial = true;
        }

        if (!in_array($l, $this->collCargoventas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoventa($l);

            if ($this->cargoventasScheduledForDeletion and $this->cargoventasScheduledForDeletion->contains($l)) {
                $this->cargoventasScheduledForDeletion->remove($this->cargoventasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoventa $cargoventa The cargoventa object to add.
     */
    protected function doAddCargoventa($cargoventa)
    {
        $this->collCargoventas[]= $cargoventa;
        $cargoventa->setServicio($this);
    }

    /**
     * @param	Cargoventa $cargoventa The cargoventa object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeCargoventa($cargoventa)
    {
        if ($this->getCargoventas()->contains($cargoventa)) {
            $this->collCargoventas->remove($this->collCargoventas->search($cargoventa));
            if (null === $this->cargoventasScheduledForDeletion) {
                $this->cargoventasScheduledForDeletion = clone $this->collCargoventas;
                $this->cargoventasScheduledForDeletion->clear();
            }
            $this->cargoventasScheduledForDeletion[]= $cargoventa;
            $cargoventa->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     */
    public function getCargoventasJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoventaQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoventas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Cargoventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     */
    public function getCargoventasJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoventaQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getCargoventas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idservicio = null;
        $this->servicio_nombre = null;
        $this->servicio_descripcion = null;
        $this->servicio_precio = null;
        $this->servicio_iva = null;
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
            if ($this->collCargoadmisions) {
                foreach ($this->collCargoadmisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCargoconsultas) {
                foreach ($this->collCargoconsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCargoventas) {
                foreach ($this->collCargoventas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCargoadmisions instanceof PropelCollection) {
            $this->collCargoadmisions->clearIterator();
        }
        $this->collCargoadmisions = null;
        if ($this->collCargoconsultas instanceof PropelCollection) {
            $this->collCargoconsultas->clearIterator();
        }
        $this->collCargoconsultas = null;
        if ($this->collCargoventas instanceof PropelCollection) {
            $this->collCargoventas->clearIterator();
        }
        $this->collCargoventas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ServicioPeer::DEFAULT_STRING_FORMAT);
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
