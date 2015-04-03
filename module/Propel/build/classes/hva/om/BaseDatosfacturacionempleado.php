<?php


/**
 * Base class that represents a row from the 'datosfacturacionempleado' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacionempleado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DatosfacturacionempleadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DatosfacturacionempleadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the iddatosfacturacionempleado field.
     * @var        int
     */
    protected $iddatosfacturacionempleado;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the datosfacturacionempleado_razonsocial field.
     * @var        string
     */
    protected $datosfacturacionempleado_razonsocial;

    /**
     * The value for the datosfacturacionempleado_rfc field.
     * @var        string
     */
    protected $datosfacturacionempleado_rfc;

    /**
     * The value for the datosfacturacionempleado_calle field.
     * @var        string
     */
    protected $datosfacturacionempleado_calle;

    /**
     * The value for the datosfacturacionempleado_noexterior field.
     * @var        string
     */
    protected $datosfacturacionempleado_noexterior;

    /**
     * The value for the datosfacturacionempleado_nointerior field.
     * @var        string
     */
    protected $datosfacturacionempleado_nointerior;

    /**
     * The value for the datosfacturacionempleado_colonia field.
     * @var        string
     */
    protected $datosfacturacionempleado_colonia;

    /**
     * The value for the datosfacturacionempleado_ciudad field.
     * @var        string
     */
    protected $datosfacturacionempleado_ciudad;

    /**
     * The value for the datosfacturacionempleado_estado field.
     * @var        string
     */
    protected $datosfacturacionempleado_estado;

    /**
     * The value for the datosfacturacionempleado_pais field.
     * @var        string
     */
    protected $datosfacturacionempleado_pais;

    /**
     * The value for the datosfacturacionempleado_codigopostal field.
     * @var        string
     */
    protected $datosfacturacionempleado_codigopostal;

    /**
     * The value for the datosfacturacionempleado_telefono field.
     * @var        string
     */
    protected $datosfacturacionempleado_telefono;

    /**
     * The value for the datosfacturacionempleado_email field.
     * @var        string
     */
    protected $datosfacturacionempleado_email;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

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
     * Get the [iddatosfacturacionempleado] column value.
     *
     * @return int
     */
    public function getIddatosfacturacionempleado()
    {

        return $this->iddatosfacturacionempleado;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [datosfacturacionempleado_razonsocial] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoRazonsocial()
    {

        return $this->datosfacturacionempleado_razonsocial;
    }

    /**
     * Get the [datosfacturacionempleado_rfc] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoRfc()
    {

        return $this->datosfacturacionempleado_rfc;
    }

    /**
     * Get the [datosfacturacionempleado_calle] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoCalle()
    {

        return $this->datosfacturacionempleado_calle;
    }

    /**
     * Get the [datosfacturacionempleado_noexterior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoNoexterior()
    {

        return $this->datosfacturacionempleado_noexterior;
    }

    /**
     * Get the [datosfacturacionempleado_nointerior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoNointerior()
    {

        return $this->datosfacturacionempleado_nointerior;
    }

    /**
     * Get the [datosfacturacionempleado_colonia] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoColonia()
    {

        return $this->datosfacturacionempleado_colonia;
    }

    /**
     * Get the [datosfacturacionempleado_ciudad] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoCiudad()
    {

        return $this->datosfacturacionempleado_ciudad;
    }

    /**
     * Get the [datosfacturacionempleado_estado] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoEstado()
    {

        return $this->datosfacturacionempleado_estado;
    }

    /**
     * Get the [datosfacturacionempleado_pais] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoPais()
    {

        return $this->datosfacturacionempleado_pais;
    }

    /**
     * Get the [datosfacturacionempleado_codigopostal] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoCodigopostal()
    {

        return $this->datosfacturacionempleado_codigopostal;
    }

    /**
     * Get the [datosfacturacionempleado_telefono] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoTelefono()
    {

        return $this->datosfacturacionempleado_telefono;
    }

    /**
     * Get the [datosfacturacionempleado_email] column value.
     *
     * @return string
     */
    public function getDatosfacturacionempleadoEmail()
    {

        return $this->datosfacturacionempleado_email;
    }

    /**
     * Set the value of [iddatosfacturacionempleado] column.
     *
     * @param  int $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setIddatosfacturacionempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddatosfacturacionempleado !== $v) {
            $this->iddatosfacturacionempleado = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO;
        }


        return $this;
    } // setIddatosfacturacionempleado()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [datosfacturacionempleado_razonsocial] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_razonsocial !== $v) {
            $this->datosfacturacionempleado_razonsocial = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL;
        }


        return $this;
    } // setDatosfacturacionempleadoRazonsocial()

    /**
     * Set the value of [datosfacturacionempleado_rfc] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_rfc !== $v) {
            $this->datosfacturacionempleado_rfc = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC;
        }


        return $this;
    } // setDatosfacturacionempleadoRfc()

    /**
     * Set the value of [datosfacturacionempleado_calle] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_calle !== $v) {
            $this->datosfacturacionempleado_calle = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE;
        }


        return $this;
    } // setDatosfacturacionempleadoCalle()

    /**
     * Set the value of [datosfacturacionempleado_noexterior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_noexterior !== $v) {
            $this->datosfacturacionempleado_noexterior = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR;
        }


        return $this;
    } // setDatosfacturacionempleadoNoexterior()

    /**
     * Set the value of [datosfacturacionempleado_nointerior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_nointerior !== $v) {
            $this->datosfacturacionempleado_nointerior = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR;
        }


        return $this;
    } // setDatosfacturacionempleadoNointerior()

    /**
     * Set the value of [datosfacturacionempleado_colonia] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_colonia !== $v) {
            $this->datosfacturacionempleado_colonia = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA;
        }


        return $this;
    } // setDatosfacturacionempleadoColonia()

    /**
     * Set the value of [datosfacturacionempleado_ciudad] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_ciudad !== $v) {
            $this->datosfacturacionempleado_ciudad = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD;
        }


        return $this;
    } // setDatosfacturacionempleadoCiudad()

    /**
     * Set the value of [datosfacturacionempleado_estado] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_estado !== $v) {
            $this->datosfacturacionempleado_estado = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO;
        }


        return $this;
    } // setDatosfacturacionempleadoEstado()

    /**
     * Set the value of [datosfacturacionempleado_pais] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_pais !== $v) {
            $this->datosfacturacionempleado_pais = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS;
        }


        return $this;
    } // setDatosfacturacionempleadoPais()

    /**
     * Set the value of [datosfacturacionempleado_codigopostal] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_codigopostal !== $v) {
            $this->datosfacturacionempleado_codigopostal = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL;
        }


        return $this;
    } // setDatosfacturacionempleadoCodigopostal()

    /**
     * Set the value of [datosfacturacionempleado_telefono] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_telefono !== $v) {
            $this->datosfacturacionempleado_telefono = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO;
        }


        return $this;
    } // setDatosfacturacionempleadoTelefono()

    /**
     * Set the value of [datosfacturacionempleado_email] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionempleado The current object (for fluent API support)
     */
    public function setDatosfacturacionempleadoEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionempleado_email !== $v) {
            $this->datosfacturacionempleado_email = $v;
            $this->modifiedColumns[] = DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL;
        }


        return $this;
    } // setDatosfacturacionempleadoEmail()

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

            $this->iddatosfacturacionempleado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->datosfacturacionempleado_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->datosfacturacionempleado_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->datosfacturacionempleado_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->datosfacturacionempleado_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->datosfacturacionempleado_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->datosfacturacionempleado_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->datosfacturacionempleado_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->datosfacturacionempleado_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->datosfacturacionempleado_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->datosfacturacionempleado_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->datosfacturacionempleado_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->datosfacturacionempleado_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = DatosfacturacionempleadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Datosfacturacionempleado object", $e);
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

        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
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
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DatosfacturacionempleadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
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
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DatosfacturacionempleadoQuery::create()
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
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DatosfacturacionempleadoPeer::addInstanceToPool($this);
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

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
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

        $this->modifiedColumns[] = DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO;
        if (null !== $this->iddatosfacturacionempleado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`iddatosfacturacionempleado`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_razonsocial`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_rfc`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_calle`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_noexterior`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_nointerior`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_colonia`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_ciudad`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_estado`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_pais`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_codigopostal`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_telefono`';
        }
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionempleado_email`';
        }

        $sql = sprintf(
            'INSERT INTO `datosfacturacionempleado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`iddatosfacturacionempleado`':
                        $stmt->bindValue($identifier, $this->iddatosfacturacionempleado, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`datosfacturacionempleado_razonsocial`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_rfc`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_rfc, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_calle`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_calle, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_noexterior`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_noexterior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_nointerior`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_nointerior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_colonia`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_colonia, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_ciudad`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_ciudad, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_estado`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_estado, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_pais`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_pais, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_codigopostal`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_telefono`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_telefono, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionempleado_email`':
                        $stmt->bindValue($identifier, $this->datosfacturacionempleado_email, PDO::PARAM_STR);
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
        $this->setIddatosfacturacionempleado($pk);

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

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = DatosfacturacionempleadoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DatosfacturacionempleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIddatosfacturacionempleado();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getDatosfacturacionempleadoRazonsocial();
                break;
            case 3:
                return $this->getDatosfacturacionempleadoRfc();
                break;
            case 4:
                return $this->getDatosfacturacionempleadoCalle();
                break;
            case 5:
                return $this->getDatosfacturacionempleadoNoexterior();
                break;
            case 6:
                return $this->getDatosfacturacionempleadoNointerior();
                break;
            case 7:
                return $this->getDatosfacturacionempleadoColonia();
                break;
            case 8:
                return $this->getDatosfacturacionempleadoCiudad();
                break;
            case 9:
                return $this->getDatosfacturacionempleadoEstado();
                break;
            case 10:
                return $this->getDatosfacturacionempleadoPais();
                break;
            case 11:
                return $this->getDatosfacturacionempleadoCodigopostal();
                break;
            case 12:
                return $this->getDatosfacturacionempleadoTelefono();
                break;
            case 13:
                return $this->getDatosfacturacionempleadoEmail();
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
        if (isset($alreadyDumpedObjects['Datosfacturacionempleado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Datosfacturacionempleado'][$this->getPrimaryKey()] = true;
        $keys = DatosfacturacionempleadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddatosfacturacionempleado(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getDatosfacturacionempleadoRazonsocial(),
            $keys[3] => $this->getDatosfacturacionempleadoRfc(),
            $keys[4] => $this->getDatosfacturacionempleadoCalle(),
            $keys[5] => $this->getDatosfacturacionempleadoNoexterior(),
            $keys[6] => $this->getDatosfacturacionempleadoNointerior(),
            $keys[7] => $this->getDatosfacturacionempleadoColonia(),
            $keys[8] => $this->getDatosfacturacionempleadoCiudad(),
            $keys[9] => $this->getDatosfacturacionempleadoEstado(),
            $keys[10] => $this->getDatosfacturacionempleadoPais(),
            $keys[11] => $this->getDatosfacturacionempleadoCodigopostal(),
            $keys[12] => $this->getDatosfacturacionempleadoTelefono(),
            $keys[13] => $this->getDatosfacturacionempleadoEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = DatosfacturacionempleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIddatosfacturacionempleado($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setDatosfacturacionempleadoRazonsocial($value);
                break;
            case 3:
                $this->setDatosfacturacionempleadoRfc($value);
                break;
            case 4:
                $this->setDatosfacturacionempleadoCalle($value);
                break;
            case 5:
                $this->setDatosfacturacionempleadoNoexterior($value);
                break;
            case 6:
                $this->setDatosfacturacionempleadoNointerior($value);
                break;
            case 7:
                $this->setDatosfacturacionempleadoColonia($value);
                break;
            case 8:
                $this->setDatosfacturacionempleadoCiudad($value);
                break;
            case 9:
                $this->setDatosfacturacionempleadoEstado($value);
                break;
            case 10:
                $this->setDatosfacturacionempleadoPais($value);
                break;
            case 11:
                $this->setDatosfacturacionempleadoCodigopostal($value);
                break;
            case 12:
                $this->setDatosfacturacionempleadoTelefono($value);
                break;
            case 13:
                $this->setDatosfacturacionempleadoEmail($value);
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
        $keys = DatosfacturacionempleadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddatosfacturacionempleado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDatosfacturacionempleadoRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatosfacturacionempleadoRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDatosfacturacionempleadoCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatosfacturacionempleadoNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDatosfacturacionempleadoNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatosfacturacionempleadoColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatosfacturacionempleadoCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatosfacturacionempleadoEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatosfacturacionempleadoPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatosfacturacionempleadoCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatosfacturacionempleadoTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatosfacturacionempleadoEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO)) $criteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $this->iddatosfacturacionempleado);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::IDEMPLEADO)) $criteria->add(DatosfacturacionempleadoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL, $this->datosfacturacionempleado_razonsocial);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC, $this->datosfacturacionempleado_rfc);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE, $this->datosfacturacionempleado_calle);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR, $this->datosfacturacionempleado_noexterior);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR, $this->datosfacturacionempleado_nointerior);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA, $this->datosfacturacionempleado_colonia);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD, $this->datosfacturacionempleado_ciudad);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO, $this->datosfacturacionempleado_estado);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS, $this->datosfacturacionempleado_pais);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL, $this->datosfacturacionempleado_codigopostal);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO, $this->datosfacturacionempleado_telefono);
        if ($this->isColumnModified(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL)) $criteria->add(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL, $this->datosfacturacionempleado_email);

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
        $criteria = new Criteria(DatosfacturacionempleadoPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $this->iddatosfacturacionempleado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIddatosfacturacionempleado();
    }

    /**
     * Generic method to set the primary key (iddatosfacturacionempleado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIddatosfacturacionempleado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIddatosfacturacionempleado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Datosfacturacionempleado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setDatosfacturacionempleadoRazonsocial($this->getDatosfacturacionempleadoRazonsocial());
        $copyObj->setDatosfacturacionempleadoRfc($this->getDatosfacturacionempleadoRfc());
        $copyObj->setDatosfacturacionempleadoCalle($this->getDatosfacturacionempleadoCalle());
        $copyObj->setDatosfacturacionempleadoNoexterior($this->getDatosfacturacionempleadoNoexterior());
        $copyObj->setDatosfacturacionempleadoNointerior($this->getDatosfacturacionempleadoNointerior());
        $copyObj->setDatosfacturacionempleadoColonia($this->getDatosfacturacionempleadoColonia());
        $copyObj->setDatosfacturacionempleadoCiudad($this->getDatosfacturacionempleadoCiudad());
        $copyObj->setDatosfacturacionempleadoEstado($this->getDatosfacturacionempleadoEstado());
        $copyObj->setDatosfacturacionempleadoPais($this->getDatosfacturacionempleadoPais());
        $copyObj->setDatosfacturacionempleadoCodigopostal($this->getDatosfacturacionempleadoCodigopostal());
        $copyObj->setDatosfacturacionempleadoTelefono($this->getDatosfacturacionempleadoTelefono());
        $copyObj->setDatosfacturacionempleadoEmail($this->getDatosfacturacionempleadoEmail());

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
            $copyObj->setIddatosfacturacionempleado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Datosfacturacionempleado Clone of current object.
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
     * @return DatosfacturacionempleadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DatosfacturacionempleadoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Datosfacturacionempleado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addDatosfacturacionempleado($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addDatosfacturacionempleados($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->iddatosfacturacionempleado = null;
        $this->idempleado = null;
        $this->datosfacturacionempleado_razonsocial = null;
        $this->datosfacturacionempleado_rfc = null;
        $this->datosfacturacionempleado_calle = null;
        $this->datosfacturacionempleado_noexterior = null;
        $this->datosfacturacionempleado_nointerior = null;
        $this->datosfacturacionempleado_colonia = null;
        $this->datosfacturacionempleado_ciudad = null;
        $this->datosfacturacionempleado_estado = null;
        $this->datosfacturacionempleado_pais = null;
        $this->datosfacturacionempleado_codigopostal = null;
        $this->datosfacturacionempleado_telefono = null;
        $this->datosfacturacionempleado_email = null;
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
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DatosfacturacionempleadoPeer::DEFAULT_STRING_FORMAT);
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
