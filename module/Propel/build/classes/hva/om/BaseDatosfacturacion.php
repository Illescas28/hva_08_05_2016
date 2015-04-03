<?php


/**
 * Base class that represents a row from the 'datosfacturacion' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DatosfacturacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DatosfacturacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the iddatosfacturacion field.
     * @var        int
     */
    protected $iddatosfacturacion;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the datosfacturacion_razonsocial field.
     * @var        string
     */
    protected $datosfacturacion_razonsocial;

    /**
     * The value for the datosfacturacion_rfc field.
     * @var        string
     */
    protected $datosfacturacion_rfc;

    /**
     * The value for the datosfacturacion_calle field.
     * @var        string
     */
    protected $datosfacturacion_calle;

    /**
     * The value for the datosfacturacion_noexterior field.
     * @var        string
     */
    protected $datosfacturacion_noexterior;

    /**
     * The value for the datosfacturacion_nointerior field.
     * @var        string
     */
    protected $datosfacturacion_nointerior;

    /**
     * The value for the datosfacturacion_colonia field.
     * @var        string
     */
    protected $datosfacturacion_colonia;

    /**
     * The value for the datosfacturacion_ciudad field.
     * @var        string
     */
    protected $datosfacturacion_ciudad;

    /**
     * The value for the datosfacturacion_estado field.
     * @var        string
     */
    protected $datosfacturacion_estado;

    /**
     * The value for the datosfacturacion_pais field.
     * @var        string
     */
    protected $datosfacturacion_pais;

    /**
     * The value for the datosfacturacion_codigopostal field.
     * @var        string
     */
    protected $datosfacturacion_codigopostal;

    /**
     * The value for the datosfacturacion_telefono field.
     * @var        string
     */
    protected $datosfacturacion_telefono;

    /**
     * The value for the datosfacturacion_email field.
     * @var        string
     */
    protected $datosfacturacion_email;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Factura[] Collection to store aggregation of Factura objects.
     */
    protected $collFacturas;
    protected $collFacturasPartial;

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
    protected $facturasScheduledForDeletion = null;

    /**
     * Get the [iddatosfacturacion] column value.
     *
     * @return int
     */
    public function getIddatosfacturacion()
    {

        return $this->iddatosfacturacion;
    }

    /**
     * Get the [idpaciente] column value.
     *
     * @return int
     */
    public function getIdpaciente()
    {

        return $this->idpaciente;
    }

    /**
     * Get the [datosfacturacion_razonsocial] column value.
     *
     * @return string
     */
    public function getDatosfacturacionRazonsocial()
    {

        return $this->datosfacturacion_razonsocial;
    }

    /**
     * Get the [datosfacturacion_rfc] column value.
     *
     * @return string
     */
    public function getDatosfacturacionRfc()
    {

        return $this->datosfacturacion_rfc;
    }

    /**
     * Get the [datosfacturacion_calle] column value.
     *
     * @return string
     */
    public function getDatosfacturacionCalle()
    {

        return $this->datosfacturacion_calle;
    }

    /**
     * Get the [datosfacturacion_noexterior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionNoexterior()
    {

        return $this->datosfacturacion_noexterior;
    }

    /**
     * Get the [datosfacturacion_nointerior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionNointerior()
    {

        return $this->datosfacturacion_nointerior;
    }

    /**
     * Get the [datosfacturacion_colonia] column value.
     *
     * @return string
     */
    public function getDatosfacturacionColonia()
    {

        return $this->datosfacturacion_colonia;
    }

    /**
     * Get the [datosfacturacion_ciudad] column value.
     *
     * @return string
     */
    public function getDatosfacturacionCiudad()
    {

        return $this->datosfacturacion_ciudad;
    }

    /**
     * Get the [datosfacturacion_estado] column value.
     *
     * @return string
     */
    public function getDatosfacturacionEstado()
    {

        return $this->datosfacturacion_estado;
    }

    /**
     * Get the [datosfacturacion_pais] column value.
     *
     * @return string
     */
    public function getDatosfacturacionPais()
    {

        return $this->datosfacturacion_pais;
    }

    /**
     * Get the [datosfacturacion_codigopostal] column value.
     *
     * @return string
     */
    public function getDatosfacturacionCodigopostal()
    {

        return $this->datosfacturacion_codigopostal;
    }

    /**
     * Get the [datosfacturacion_telefono] column value.
     *
     * @return string
     */
    public function getDatosfacturacionTelefono()
    {

        return $this->datosfacturacion_telefono;
    }

    /**
     * Get the [datosfacturacion_email] column value.
     *
     * @return string
     */
    public function getDatosfacturacionEmail()
    {

        return $this->datosfacturacion_email;
    }

    /**
     * Set the value of [iddatosfacturacion] column.
     *
     * @param  int $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setIddatosfacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddatosfacturacion !== $v) {
            $this->iddatosfacturacion = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::IDDATOSFACTURACION;
        }


        return $this;
    } // setIddatosfacturacion()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [datosfacturacion_razonsocial] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_razonsocial !== $v) {
            $this->datosfacturacion_razonsocial = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL;
        }


        return $this;
    } // setDatosfacturacionRazonsocial()

    /**
     * Set the value of [datosfacturacion_rfc] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_rfc !== $v) {
            $this->datosfacturacion_rfc = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_RFC;
        }


        return $this;
    } // setDatosfacturacionRfc()

    /**
     * Set the value of [datosfacturacion_calle] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_calle !== $v) {
            $this->datosfacturacion_calle = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_CALLE;
        }


        return $this;
    } // setDatosfacturacionCalle()

    /**
     * Set the value of [datosfacturacion_noexterior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_noexterior !== $v) {
            $this->datosfacturacion_noexterior = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR;
        }


        return $this;
    } // setDatosfacturacionNoexterior()

    /**
     * Set the value of [datosfacturacion_nointerior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_nointerior !== $v) {
            $this->datosfacturacion_nointerior = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR;
        }


        return $this;
    } // setDatosfacturacionNointerior()

    /**
     * Set the value of [datosfacturacion_colonia] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_colonia !== $v) {
            $this->datosfacturacion_colonia = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_COLONIA;
        }


        return $this;
    } // setDatosfacturacionColonia()

    /**
     * Set the value of [datosfacturacion_ciudad] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_ciudad !== $v) {
            $this->datosfacturacion_ciudad = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_CIUDAD;
        }


        return $this;
    } // setDatosfacturacionCiudad()

    /**
     * Set the value of [datosfacturacion_estado] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_estado !== $v) {
            $this->datosfacturacion_estado = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_ESTADO;
        }


        return $this;
    } // setDatosfacturacionEstado()

    /**
     * Set the value of [datosfacturacion_pais] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_pais !== $v) {
            $this->datosfacturacion_pais = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_PAIS;
        }


        return $this;
    } // setDatosfacturacionPais()

    /**
     * Set the value of [datosfacturacion_codigopostal] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_codigopostal !== $v) {
            $this->datosfacturacion_codigopostal = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL;
        }


        return $this;
    } // setDatosfacturacionCodigopostal()

    /**
     * Set the value of [datosfacturacion_telefono] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_telefono !== $v) {
            $this->datosfacturacion_telefono = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_TELEFONO;
        }


        return $this;
    } // setDatosfacturacionTelefono()

    /**
     * Set the value of [datosfacturacion_email] column.
     *
     * @param  string $v new value
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setDatosfacturacionEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacion_email !== $v) {
            $this->datosfacturacion_email = $v;
            $this->modifiedColumns[] = DatosfacturacionPeer::DATOSFACTURACION_EMAIL;
        }


        return $this;
    } // setDatosfacturacionEmail()

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

            $this->iddatosfacturacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->datosfacturacion_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->datosfacturacion_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->datosfacturacion_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->datosfacturacion_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->datosfacturacion_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->datosfacturacion_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->datosfacturacion_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->datosfacturacion_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->datosfacturacion_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->datosfacturacion_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->datosfacturacion_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->datosfacturacion_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = DatosfacturacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Datosfacturacion object", $e);
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

        if ($this->aPaciente !== null && $this->idpaciente !== $this->aPaciente->getIdpaciente()) {
            $this->aPaciente = null;
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
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DatosfacturacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPaciente = null;
            $this->collFacturas = null;

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
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DatosfacturacionQuery::create()
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
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DatosfacturacionPeer::addInstanceToPool($this);
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

            if ($this->aPaciente !== null) {
                if ($this->aPaciente->isModified() || $this->aPaciente->isNew()) {
                    $affectedRows += $this->aPaciente->save($con);
                }
                $this->setPaciente($this->aPaciente);
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

            if ($this->facturasScheduledForDeletion !== null) {
                if (!$this->facturasScheduledForDeletion->isEmpty()) {
                    FacturaQuery::create()
                        ->filterByPrimaryKeys($this->facturasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->facturasScheduledForDeletion = null;
                }
            }

            if ($this->collFacturas !== null) {
                foreach ($this->collFacturas as $referrerFK) {
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

        $this->modifiedColumns[] = DatosfacturacionPeer::IDDATOSFACTURACION;
        if (null !== $this->iddatosfacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DatosfacturacionPeer::IDDATOSFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DatosfacturacionPeer::IDDATOSFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`iddatosfacturacion`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_razonsocial`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_rfc`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_calle`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_noexterior`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_nointerior`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_colonia`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_ciudad`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_estado`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_pais`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_codigopostal`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_telefono`';
        }
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacion_email`';
        }

        $sql = sprintf(
            'INSERT INTO `datosfacturacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`iddatosfacturacion`':
                        $stmt->bindValue($identifier, $this->iddatosfacturacion, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`datosfacturacion_razonsocial`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_rfc`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_rfc, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_calle`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_calle, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_noexterior`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_noexterior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_nointerior`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_nointerior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_colonia`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_colonia, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_ciudad`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_ciudad, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_estado`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_estado, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_pais`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_pais, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_codigopostal`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_telefono`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_telefono, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacion_email`':
                        $stmt->bindValue($identifier, $this->datosfacturacion_email, PDO::PARAM_STR);
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
        $this->setIddatosfacturacion($pk);

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

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = DatosfacturacionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturas !== null) {
                    foreach ($this->collFacturas as $referrerFK) {
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
        $pos = DatosfacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIddatosfacturacion();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getDatosfacturacionRazonsocial();
                break;
            case 3:
                return $this->getDatosfacturacionRfc();
                break;
            case 4:
                return $this->getDatosfacturacionCalle();
                break;
            case 5:
                return $this->getDatosfacturacionNoexterior();
                break;
            case 6:
                return $this->getDatosfacturacionNointerior();
                break;
            case 7:
                return $this->getDatosfacturacionColonia();
                break;
            case 8:
                return $this->getDatosfacturacionCiudad();
                break;
            case 9:
                return $this->getDatosfacturacionEstado();
                break;
            case 10:
                return $this->getDatosfacturacionPais();
                break;
            case 11:
                return $this->getDatosfacturacionCodigopostal();
                break;
            case 12:
                return $this->getDatosfacturacionTelefono();
                break;
            case 13:
                return $this->getDatosfacturacionEmail();
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
        if (isset($alreadyDumpedObjects['Datosfacturacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Datosfacturacion'][$this->getPrimaryKey()] = true;
        $keys = DatosfacturacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddatosfacturacion(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getDatosfacturacionRazonsocial(),
            $keys[3] => $this->getDatosfacturacionRfc(),
            $keys[4] => $this->getDatosfacturacionCalle(),
            $keys[5] => $this->getDatosfacturacionNoexterior(),
            $keys[6] => $this->getDatosfacturacionNointerior(),
            $keys[7] => $this->getDatosfacturacionColonia(),
            $keys[8] => $this->getDatosfacturacionCiudad(),
            $keys[9] => $this->getDatosfacturacionEstado(),
            $keys[10] => $this->getDatosfacturacionPais(),
            $keys[11] => $this->getDatosfacturacionCodigopostal(),
            $keys[12] => $this->getDatosfacturacionTelefono(),
            $keys[13] => $this->getDatosfacturacionEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturas) {
                $result['Facturas'] = $this->collFacturas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DatosfacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIddatosfacturacion($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setDatosfacturacionRazonsocial($value);
                break;
            case 3:
                $this->setDatosfacturacionRfc($value);
                break;
            case 4:
                $this->setDatosfacturacionCalle($value);
                break;
            case 5:
                $this->setDatosfacturacionNoexterior($value);
                break;
            case 6:
                $this->setDatosfacturacionNointerior($value);
                break;
            case 7:
                $this->setDatosfacturacionColonia($value);
                break;
            case 8:
                $this->setDatosfacturacionCiudad($value);
                break;
            case 9:
                $this->setDatosfacturacionEstado($value);
                break;
            case 10:
                $this->setDatosfacturacionPais($value);
                break;
            case 11:
                $this->setDatosfacturacionCodigopostal($value);
                break;
            case 12:
                $this->setDatosfacturacionTelefono($value);
                break;
            case 13:
                $this->setDatosfacturacionEmail($value);
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
        $keys = DatosfacturacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddatosfacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDatosfacturacionRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatosfacturacionRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDatosfacturacionCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatosfacturacionNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDatosfacturacionNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatosfacturacionColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatosfacturacionCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatosfacturacionEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatosfacturacionPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatosfacturacionCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatosfacturacionTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatosfacturacionEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(DatosfacturacionPeer::IDDATOSFACTURACION)) $criteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, $this->iddatosfacturacion);
        if ($this->isColumnModified(DatosfacturacionPeer::IDPACIENTE)) $criteria->add(DatosfacturacionPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL, $this->datosfacturacion_razonsocial);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_RFC)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_RFC, $this->datosfacturacion_rfc);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CALLE)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_CALLE, $this->datosfacturacion_calle);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR, $this->datosfacturacion_noexterior);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR, $this->datosfacturacion_nointerior);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_COLONIA)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_COLONIA, $this->datosfacturacion_colonia);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CIUDAD)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_CIUDAD, $this->datosfacturacion_ciudad);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_ESTADO)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_ESTADO, $this->datosfacturacion_estado);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_PAIS)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_PAIS, $this->datosfacturacion_pais);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL, $this->datosfacturacion_codigopostal);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_TELEFONO)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_TELEFONO, $this->datosfacturacion_telefono);
        if ($this->isColumnModified(DatosfacturacionPeer::DATOSFACTURACION_EMAIL)) $criteria->add(DatosfacturacionPeer::DATOSFACTURACION_EMAIL, $this->datosfacturacion_email);

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
        $criteria = new Criteria(DatosfacturacionPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionPeer::IDDATOSFACTURACION, $this->iddatosfacturacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIddatosfacturacion();
    }

    /**
     * Generic method to set the primary key (iddatosfacturacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIddatosfacturacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIddatosfacturacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Datosfacturacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setDatosfacturacionRazonsocial($this->getDatosfacturacionRazonsocial());
        $copyObj->setDatosfacturacionRfc($this->getDatosfacturacionRfc());
        $copyObj->setDatosfacturacionCalle($this->getDatosfacturacionCalle());
        $copyObj->setDatosfacturacionNoexterior($this->getDatosfacturacionNoexterior());
        $copyObj->setDatosfacturacionNointerior($this->getDatosfacturacionNointerior());
        $copyObj->setDatosfacturacionColonia($this->getDatosfacturacionColonia());
        $copyObj->setDatosfacturacionCiudad($this->getDatosfacturacionCiudad());
        $copyObj->setDatosfacturacionEstado($this->getDatosfacturacionEstado());
        $copyObj->setDatosfacturacionPais($this->getDatosfacturacionPais());
        $copyObj->setDatosfacturacionCodigopostal($this->getDatosfacturacionCodigopostal());
        $copyObj->setDatosfacturacionTelefono($this->getDatosfacturacionTelefono());
        $copyObj->setDatosfacturacionEmail($this->getDatosfacturacionEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFacturas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactura($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIddatosfacturacion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Datosfacturacion Clone of current object.
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
     * @return DatosfacturacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DatosfacturacionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Datosfacturacion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPaciente(Paciente $v = null)
    {
        if ($v === null) {
            $this->setIdpaciente(NULL);
        } else {
            $this->setIdpaciente($v->getIdpaciente());
        }

        $this->aPaciente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Paciente object, it will not be re-added.
        if ($v !== null) {
            $v->addDatosfacturacion($this);
        }


        return $this;
    }


    /**
     * Get the associated Paciente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paciente The associated Paciente object.
     * @throws PropelException
     */
    public function getPaciente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaciente === null && ($this->idpaciente !== null) && $doQuery) {
            $this->aPaciente = PacienteQuery::create()->findPk($this->idpaciente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPaciente->addDatosfacturacions($this);
             */
        }

        return $this->aPaciente;
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
        if ('Factura' == $relationName) {
            $this->initFacturas();
        }
    }

    /**
     * Clears out the collFacturas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Datosfacturacion The current object (for fluent API support)
     * @see        addFacturas()
     */
    public function clearFacturas()
    {
        $this->collFacturas = null; // important to set this to null since that means it is uninitialized
        $this->collFacturasPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturas collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturas($v = true)
    {
        $this->collFacturasPartial = $v;
    }

    /**
     * Initializes the collFacturas collection.
     *
     * By default this just sets the collFacturas collection to an empty array (like clearcollFacturas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturas($overrideExisting = true)
    {
        if (null !== $this->collFacturas && !$overrideExisting) {
            return;
        }
        $this->collFacturas = new PropelObjectCollection();
        $this->collFacturas->setModel('Factura');
    }

    /**
     * Gets an array of Factura objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Datosfacturacion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Factura[] List of Factura objects
     * @throws PropelException
     */
    public function getFacturas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturasPartial && !$this->isNew();
        if (null === $this->collFacturas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturas) {
                // return empty collection
                $this->initFacturas();
            } else {
                $collFacturas = FacturaQuery::create(null, $criteria)
                    ->filterByDatosfacturacion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturasPartial && count($collFacturas)) {
                      $this->initFacturas(false);

                      foreach ($collFacturas as $obj) {
                        if (false == $this->collFacturas->contains($obj)) {
                          $this->collFacturas->append($obj);
                        }
                      }

                      $this->collFacturasPartial = true;
                    }

                    $collFacturas->getInternalIterator()->rewind();

                    return $collFacturas;
                }

                if ($partial && $this->collFacturas) {
                    foreach ($this->collFacturas as $obj) {
                        if ($obj->isNew()) {
                            $collFacturas[] = $obj;
                        }
                    }
                }

                $this->collFacturas = $collFacturas;
                $this->collFacturasPartial = false;
            }
        }

        return $this->collFacturas;
    }

    /**
     * Sets a collection of Factura objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function setFacturas(PropelCollection $facturas, PropelPDO $con = null)
    {
        $facturasToDelete = $this->getFacturas(new Criteria(), $con)->diff($facturas);


        $this->facturasScheduledForDeletion = $facturasToDelete;

        foreach ($facturasToDelete as $facturaRemoved) {
            $facturaRemoved->setDatosfacturacion(null);
        }

        $this->collFacturas = null;
        foreach ($facturas as $factura) {
            $this->addFactura($factura);
        }

        $this->collFacturas = $facturas;
        $this->collFacturasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Factura objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Factura objects.
     * @throws PropelException
     */
    public function countFacturas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturasPartial && !$this->isNew();
        if (null === $this->collFacturas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturas());
            }
            $query = FacturaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDatosfacturacion($this)
                ->count($con);
        }

        return count($this->collFacturas);
    }

    /**
     * Method called to associate a Factura object to this object
     * through the Factura foreign key attribute.
     *
     * @param    Factura $l Factura
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function addFactura(Factura $l)
    {
        if ($this->collFacturas === null) {
            $this->initFacturas();
            $this->collFacturasPartial = true;
        }

        if (!in_array($l, $this->collFacturas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactura($l);

            if ($this->facturasScheduledForDeletion and $this->facturasScheduledForDeletion->contains($l)) {
                $this->facturasScheduledForDeletion->remove($this->facturasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Factura $factura The factura object to add.
     */
    protected function doAddFactura($factura)
    {
        $this->collFacturas[]= $factura;
        $factura->setDatosfacturacion($this);
    }

    /**
     * @param	Factura $factura The factura object to remove.
     * @return Datosfacturacion The current object (for fluent API support)
     */
    public function removeFactura($factura)
    {
        if ($this->getFacturas()->contains($factura)) {
            $this->collFacturas->remove($this->collFacturas->search($factura));
            if (null === $this->facturasScheduledForDeletion) {
                $this->facturasScheduledForDeletion = clone $this->collFacturas;
                $this->facturasScheduledForDeletion->clear();
            }
            $this->facturasScheduledForDeletion[]= clone $factura;
            $factura->setDatosfacturacion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Datosfacturacion is new, it will return
     * an empty collection; or if this Datosfacturacion has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Datosfacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factura[] List of Factura objects
     */
    public function getFacturasJoinConsulta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturaQuery::create(null, $criteria);
        $query->joinWith('Consulta', $join_behavior);

        return $this->getFacturas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->iddatosfacturacion = null;
        $this->idpaciente = null;
        $this->datosfacturacion_razonsocial = null;
        $this->datosfacturacion_rfc = null;
        $this->datosfacturacion_calle = null;
        $this->datosfacturacion_noexterior = null;
        $this->datosfacturacion_nointerior = null;
        $this->datosfacturacion_colonia = null;
        $this->datosfacturacion_ciudad = null;
        $this->datosfacturacion_estado = null;
        $this->datosfacturacion_pais = null;
        $this->datosfacturacion_codigopostal = null;
        $this->datosfacturacion_telefono = null;
        $this->datosfacturacion_email = null;
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
            if ($this->collFacturas) {
                foreach ($this->collFacturas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturas instanceof PropelCollection) {
            $this->collFacturas->clearIterator();
        }
        $this->collFacturas = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DatosfacturacionPeer::DEFAULT_STRING_FORMAT);
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
