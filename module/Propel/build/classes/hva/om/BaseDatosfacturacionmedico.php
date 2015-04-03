<?php


/**
 * Base class that represents a row from the 'datosfacturacionmedico' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacionmedico extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DatosfacturacionmedicoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DatosfacturacionmedicoPeer
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
     * The value for the idmedico field.
     * @var        int
     */
    protected $idmedico;

    /**
     * The value for the datosfacturacionmedico_razonsocial field.
     * @var        string
     */
    protected $datosfacturacionmedico_razonsocial;

    /**
     * The value for the datosfacturacionmedico_rfc field.
     * @var        string
     */
    protected $datosfacturacionmedico_rfc;

    /**
     * The value for the datosfacturacionmedico_calle field.
     * @var        string
     */
    protected $datosfacturacionmedico_calle;

    /**
     * The value for the datosfacturacionmedico_noexterior field.
     * @var        string
     */
    protected $datosfacturacionmedico_noexterior;

    /**
     * The value for the datosfacturacionmedico_nointerior field.
     * @var        string
     */
    protected $datosfacturacionmedico_nointerior;

    /**
     * The value for the datosfacturacionmedico_colonia field.
     * @var        string
     */
    protected $datosfacturacionmedico_colonia;

    /**
     * The value for the datosfacturacionmedico_ciudad field.
     * @var        string
     */
    protected $datosfacturacionmedico_ciudad;

    /**
     * The value for the datosfacturacionmedico_estado field.
     * @var        string
     */
    protected $datosfacturacionmedico_estado;

    /**
     * The value for the datosfacturacionmedico_pais field.
     * @var        string
     */
    protected $datosfacturacionmedico_pais;

    /**
     * The value for the datosfacturacionmedico_codigopostal field.
     * @var        string
     */
    protected $datosfacturacionmedico_codigopostal;

    /**
     * The value for the datosfacturacionmedico_telefono field.
     * @var        string
     */
    protected $datosfacturacionmedico_telefono;

    /**
     * The value for the datosfacturacionmedico_email field.
     * @var        string
     */
    protected $datosfacturacionmedico_email;

    /**
     * @var        Medico
     */
    protected $aMedico;

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
     * Get the [iddatosfacturacion] column value.
     *
     * @return int
     */
    public function getIddatosfacturacion()
    {

        return $this->iddatosfacturacion;
    }

    /**
     * Get the [idmedico] column value.
     *
     * @return int
     */
    public function getIdmedico()
    {

        return $this->idmedico;
    }

    /**
     * Get the [datosfacturacionmedico_razonsocial] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoRazonsocial()
    {

        return $this->datosfacturacionmedico_razonsocial;
    }

    /**
     * Get the [datosfacturacionmedico_rfc] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoRfc()
    {

        return $this->datosfacturacionmedico_rfc;
    }

    /**
     * Get the [datosfacturacionmedico_calle] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoCalle()
    {

        return $this->datosfacturacionmedico_calle;
    }

    /**
     * Get the [datosfacturacionmedico_noexterior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoNoexterior()
    {

        return $this->datosfacturacionmedico_noexterior;
    }

    /**
     * Get the [datosfacturacionmedico_nointerior] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoNointerior()
    {

        return $this->datosfacturacionmedico_nointerior;
    }

    /**
     * Get the [datosfacturacionmedico_colonia] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoColonia()
    {

        return $this->datosfacturacionmedico_colonia;
    }

    /**
     * Get the [datosfacturacionmedico_ciudad] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoCiudad()
    {

        return $this->datosfacturacionmedico_ciudad;
    }

    /**
     * Get the [datosfacturacionmedico_estado] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoEstado()
    {

        return $this->datosfacturacionmedico_estado;
    }

    /**
     * Get the [datosfacturacionmedico_pais] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoPais()
    {

        return $this->datosfacturacionmedico_pais;
    }

    /**
     * Get the [datosfacturacionmedico_codigopostal] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoCodigopostal()
    {

        return $this->datosfacturacionmedico_codigopostal;
    }

    /**
     * Get the [datosfacturacionmedico_telefono] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoTelefono()
    {

        return $this->datosfacturacionmedico_telefono;
    }

    /**
     * Get the [datosfacturacionmedico_email] column value.
     *
     * @return string
     */
    public function getDatosfacturacionmedicoEmail()
    {

        return $this->datosfacturacionmedico_email;
    }

    /**
     * Set the value of [iddatosfacturacion] column.
     *
     * @param  int $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setIddatosfacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddatosfacturacion !== $v) {
            $this->iddatosfacturacion = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::IDDATOSFACTURACION;
        }


        return $this;
    } // setIddatosfacturacion()

    /**
     * Set the value of [idmedico] column.
     *
     * @param  int $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::IDMEDICO;
        }

        if ($this->aMedico !== null && $this->aMedico->getIdmedico() !== $v) {
            $this->aMedico = null;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [datosfacturacionmedico_razonsocial] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_razonsocial !== $v) {
            $this->datosfacturacionmedico_razonsocial = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL;
        }


        return $this;
    } // setDatosfacturacionmedicoRazonsocial()

    /**
     * Set the value of [datosfacturacionmedico_rfc] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_rfc !== $v) {
            $this->datosfacturacionmedico_rfc = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC;
        }


        return $this;
    } // setDatosfacturacionmedicoRfc()

    /**
     * Set the value of [datosfacturacionmedico_calle] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_calle !== $v) {
            $this->datosfacturacionmedico_calle = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE;
        }


        return $this;
    } // setDatosfacturacionmedicoCalle()

    /**
     * Set the value of [datosfacturacionmedico_noexterior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_noexterior !== $v) {
            $this->datosfacturacionmedico_noexterior = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR;
        }


        return $this;
    } // setDatosfacturacionmedicoNoexterior()

    /**
     * Set the value of [datosfacturacionmedico_nointerior] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_nointerior !== $v) {
            $this->datosfacturacionmedico_nointerior = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR;
        }


        return $this;
    } // setDatosfacturacionmedicoNointerior()

    /**
     * Set the value of [datosfacturacionmedico_colonia] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_colonia !== $v) {
            $this->datosfacturacionmedico_colonia = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA;
        }


        return $this;
    } // setDatosfacturacionmedicoColonia()

    /**
     * Set the value of [datosfacturacionmedico_ciudad] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_ciudad !== $v) {
            $this->datosfacturacionmedico_ciudad = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD;
        }


        return $this;
    } // setDatosfacturacionmedicoCiudad()

    /**
     * Set the value of [datosfacturacionmedico_estado] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_estado !== $v) {
            $this->datosfacturacionmedico_estado = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO;
        }


        return $this;
    } // setDatosfacturacionmedicoEstado()

    /**
     * Set the value of [datosfacturacionmedico_pais] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_pais !== $v) {
            $this->datosfacturacionmedico_pais = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS;
        }


        return $this;
    } // setDatosfacturacionmedicoPais()

    /**
     * Set the value of [datosfacturacionmedico_codigopostal] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_codigopostal !== $v) {
            $this->datosfacturacionmedico_codigopostal = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL;
        }


        return $this;
    } // setDatosfacturacionmedicoCodigopostal()

    /**
     * Set the value of [datosfacturacionmedico_telefono] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_telefono !== $v) {
            $this->datosfacturacionmedico_telefono = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO;
        }


        return $this;
    } // setDatosfacturacionmedicoTelefono()

    /**
     * Set the value of [datosfacturacionmedico_email] column.
     *
     * @param  string $v new value
     * @return Datosfacturacionmedico The current object (for fluent API support)
     */
    public function setDatosfacturacionmedicoEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->datosfacturacionmedico_email !== $v) {
            $this->datosfacturacionmedico_email = $v;
            $this->modifiedColumns[] = DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL;
        }


        return $this;
    } // setDatosfacturacionmedicoEmail()

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
            $this->idmedico = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->datosfacturacionmedico_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->datosfacturacionmedico_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->datosfacturacionmedico_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->datosfacturacionmedico_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->datosfacturacionmedico_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->datosfacturacionmedico_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->datosfacturacionmedico_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->datosfacturacionmedico_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->datosfacturacionmedico_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->datosfacturacionmedico_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->datosfacturacionmedico_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->datosfacturacionmedico_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = DatosfacturacionmedicoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Datosfacturacionmedico object", $e);
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

        if ($this->aMedico !== null && $this->idmedico !== $this->aMedico->getIdmedico()) {
            $this->aMedico = null;
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
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DatosfacturacionmedicoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMedico = null;
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
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DatosfacturacionmedicoQuery::create()
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
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DatosfacturacionmedicoPeer::addInstanceToPool($this);
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

            if ($this->aMedico !== null) {
                if ($this->aMedico->isModified() || $this->aMedico->isNew()) {
                    $affectedRows += $this->aMedico->save($con);
                }
                $this->setMedico($this->aMedico);
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

        $this->modifiedColumns[] = DatosfacturacionmedicoPeer::IDDATOSFACTURACION;
        if (null !== $this->iddatosfacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DatosfacturacionmedicoPeer::IDDATOSFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::IDDATOSFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`iddatosfacturacion`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_razonsocial`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_rfc`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_calle`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_noexterior`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_nointerior`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_colonia`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_ciudad`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_estado`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_pais`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_codigopostal`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_telefono`';
        }
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`datosfacturacionmedico_email`';
        }

        $sql = sprintf(
            'INSERT INTO `datosfacturacionmedico` (%s) VALUES (%s)',
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
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`datosfacturacionmedico_razonsocial`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_rfc`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_rfc, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_calle`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_calle, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_noexterior`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_noexterior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_nointerior`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_nointerior, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_colonia`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_colonia, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_ciudad`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_ciudad, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_estado`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_estado, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_pais`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_pais, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_codigopostal`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_telefono`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_telefono, PDO::PARAM_STR);
                        break;
                    case '`datosfacturacionmedico_email`':
                        $stmt->bindValue($identifier, $this->datosfacturacionmedico_email, PDO::PARAM_STR);
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

            if ($this->aMedico !== null) {
                if (!$this->aMedico->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMedico->getValidationFailures());
                }
            }


            if (($retval = DatosfacturacionmedicoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DatosfacturacionmedicoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmedico();
                break;
            case 2:
                return $this->getDatosfacturacionmedicoRazonsocial();
                break;
            case 3:
                return $this->getDatosfacturacionmedicoRfc();
                break;
            case 4:
                return $this->getDatosfacturacionmedicoCalle();
                break;
            case 5:
                return $this->getDatosfacturacionmedicoNoexterior();
                break;
            case 6:
                return $this->getDatosfacturacionmedicoNointerior();
                break;
            case 7:
                return $this->getDatosfacturacionmedicoColonia();
                break;
            case 8:
                return $this->getDatosfacturacionmedicoCiudad();
                break;
            case 9:
                return $this->getDatosfacturacionmedicoEstado();
                break;
            case 10:
                return $this->getDatosfacturacionmedicoPais();
                break;
            case 11:
                return $this->getDatosfacturacionmedicoCodigopostal();
                break;
            case 12:
                return $this->getDatosfacturacionmedicoTelefono();
                break;
            case 13:
                return $this->getDatosfacturacionmedicoEmail();
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
        if (isset($alreadyDumpedObjects['Datosfacturacionmedico'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Datosfacturacionmedico'][$this->getPrimaryKey()] = true;
        $keys = DatosfacturacionmedicoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddatosfacturacion(),
            $keys[1] => $this->getIdmedico(),
            $keys[2] => $this->getDatosfacturacionmedicoRazonsocial(),
            $keys[3] => $this->getDatosfacturacionmedicoRfc(),
            $keys[4] => $this->getDatosfacturacionmedicoCalle(),
            $keys[5] => $this->getDatosfacturacionmedicoNoexterior(),
            $keys[6] => $this->getDatosfacturacionmedicoNointerior(),
            $keys[7] => $this->getDatosfacturacionmedicoColonia(),
            $keys[8] => $this->getDatosfacturacionmedicoCiudad(),
            $keys[9] => $this->getDatosfacturacionmedicoEstado(),
            $keys[10] => $this->getDatosfacturacionmedicoPais(),
            $keys[11] => $this->getDatosfacturacionmedicoCodigopostal(),
            $keys[12] => $this->getDatosfacturacionmedicoTelefono(),
            $keys[13] => $this->getDatosfacturacionmedicoEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMedico) {
                $result['Medico'] = $this->aMedico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = DatosfacturacionmedicoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmedico($value);
                break;
            case 2:
                $this->setDatosfacturacionmedicoRazonsocial($value);
                break;
            case 3:
                $this->setDatosfacturacionmedicoRfc($value);
                break;
            case 4:
                $this->setDatosfacturacionmedicoCalle($value);
                break;
            case 5:
                $this->setDatosfacturacionmedicoNoexterior($value);
                break;
            case 6:
                $this->setDatosfacturacionmedicoNointerior($value);
                break;
            case 7:
                $this->setDatosfacturacionmedicoColonia($value);
                break;
            case 8:
                $this->setDatosfacturacionmedicoCiudad($value);
                break;
            case 9:
                $this->setDatosfacturacionmedicoEstado($value);
                break;
            case 10:
                $this->setDatosfacturacionmedicoPais($value);
                break;
            case 11:
                $this->setDatosfacturacionmedicoCodigopostal($value);
                break;
            case 12:
                $this->setDatosfacturacionmedicoTelefono($value);
                break;
            case 13:
                $this->setDatosfacturacionmedicoEmail($value);
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
        $keys = DatosfacturacionmedicoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddatosfacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdmedico($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDatosfacturacionmedicoRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatosfacturacionmedicoRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDatosfacturacionmedicoCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatosfacturacionmedicoNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDatosfacturacionmedicoNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatosfacturacionmedicoColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatosfacturacionmedicoCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatosfacturacionmedicoEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatosfacturacionmedicoPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatosfacturacionmedicoCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatosfacturacionmedicoTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatosfacturacionmedicoEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);

        if ($this->isColumnModified(DatosfacturacionmedicoPeer::IDDATOSFACTURACION)) $criteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $this->iddatosfacturacion);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::IDMEDICO)) $criteria->add(DatosfacturacionmedicoPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL, $this->datosfacturacionmedico_razonsocial);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC, $this->datosfacturacionmedico_rfc);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE, $this->datosfacturacionmedico_calle);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR, $this->datosfacturacionmedico_noexterior);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR, $this->datosfacturacionmedico_nointerior);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA, $this->datosfacturacionmedico_colonia);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD, $this->datosfacturacionmedico_ciudad);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO, $this->datosfacturacionmedico_estado);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS, $this->datosfacturacionmedico_pais);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL, $this->datosfacturacionmedico_codigopostal);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO, $this->datosfacturacionmedico_telefono);
        if ($this->isColumnModified(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL)) $criteria->add(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL, $this->datosfacturacionmedico_email);

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
        $criteria = new Criteria(DatosfacturacionmedicoPeer::DATABASE_NAME);
        $criteria->add(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $this->iddatosfacturacion);

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
     * @param object $copyObj An object of Datosfacturacionmedico (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdmedico($this->getIdmedico());
        $copyObj->setDatosfacturacionmedicoRazonsocial($this->getDatosfacturacionmedicoRazonsocial());
        $copyObj->setDatosfacturacionmedicoRfc($this->getDatosfacturacionmedicoRfc());
        $copyObj->setDatosfacturacionmedicoCalle($this->getDatosfacturacionmedicoCalle());
        $copyObj->setDatosfacturacionmedicoNoexterior($this->getDatosfacturacionmedicoNoexterior());
        $copyObj->setDatosfacturacionmedicoNointerior($this->getDatosfacturacionmedicoNointerior());
        $copyObj->setDatosfacturacionmedicoColonia($this->getDatosfacturacionmedicoColonia());
        $copyObj->setDatosfacturacionmedicoCiudad($this->getDatosfacturacionmedicoCiudad());
        $copyObj->setDatosfacturacionmedicoEstado($this->getDatosfacturacionmedicoEstado());
        $copyObj->setDatosfacturacionmedicoPais($this->getDatosfacturacionmedicoPais());
        $copyObj->setDatosfacturacionmedicoCodigopostal($this->getDatosfacturacionmedicoCodigopostal());
        $copyObj->setDatosfacturacionmedicoTelefono($this->getDatosfacturacionmedicoTelefono());
        $copyObj->setDatosfacturacionmedicoEmail($this->getDatosfacturacionmedicoEmail());

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
     * @return Datosfacturacionmedico Clone of current object.
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
     * @return DatosfacturacionmedicoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DatosfacturacionmedicoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Medico object.
     *
     * @param                  Medico $v
     * @return Datosfacturacionmedico The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMedico(Medico $v = null)
    {
        if ($v === null) {
            $this->setIdmedico(NULL);
        } else {
            $this->setIdmedico($v->getIdmedico());
        }

        $this->aMedico = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Medico object, it will not be re-added.
        if ($v !== null) {
            $v->addDatosfacturacionmedico($this);
        }


        return $this;
    }


    /**
     * Get the associated Medico object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Medico The associated Medico object.
     * @throws PropelException
     */
    public function getMedico(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMedico === null && ($this->idmedico !== null) && $doQuery) {
            $this->aMedico = MedicoQuery::create()->findPk($this->idmedico, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMedico->addDatosfacturacionmedicos($this);
             */
        }

        return $this->aMedico;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->iddatosfacturacion = null;
        $this->idmedico = null;
        $this->datosfacturacionmedico_razonsocial = null;
        $this->datosfacturacionmedico_rfc = null;
        $this->datosfacturacionmedico_calle = null;
        $this->datosfacturacionmedico_noexterior = null;
        $this->datosfacturacionmedico_nointerior = null;
        $this->datosfacturacionmedico_colonia = null;
        $this->datosfacturacionmedico_ciudad = null;
        $this->datosfacturacionmedico_estado = null;
        $this->datosfacturacionmedico_pais = null;
        $this->datosfacturacionmedico_codigopostal = null;
        $this->datosfacturacionmedico_telefono = null;
        $this->datosfacturacionmedico_email = null;
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
            if ($this->aMedico instanceof Persistent) {
              $this->aMedico->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aMedico = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DatosfacturacionmedicoPeer::DEFAULT_STRING_FORMAT);
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
