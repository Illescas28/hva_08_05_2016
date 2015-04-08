<?php


/**
 * Base class that represents a query for the 'datosfacturacion' table.
 *
 *
 *
 * @method DatosfacturacionQuery orderByIddatosfacturacion($order = Criteria::ASC) Order by the iddatosfacturacion column
 * @method DatosfacturacionQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method DatosfacturacionQuery orderByDatosfacturacionRazonsocial($order = Criteria::ASC) Order by the datosfacturacion_razonsocial column
 * @method DatosfacturacionQuery orderByDatosfacturacionRfc($order = Criteria::ASC) Order by the datosfacturacion_rfc column
 * @method DatosfacturacionQuery orderByDatosfacturacionCalle($order = Criteria::ASC) Order by the datosfacturacion_calle column
 * @method DatosfacturacionQuery orderByDatosfacturacionNoexterior($order = Criteria::ASC) Order by the datosfacturacion_noexterior column
 * @method DatosfacturacionQuery orderByDatosfacturacionNointerior($order = Criteria::ASC) Order by the datosfacturacion_nointerior column
 * @method DatosfacturacionQuery orderByDatosfacturacionColonia($order = Criteria::ASC) Order by the datosfacturacion_colonia column
 * @method DatosfacturacionQuery orderByDatosfacturacionCiudad($order = Criteria::ASC) Order by the datosfacturacion_ciudad column
 * @method DatosfacturacionQuery orderByDatosfacturacionEstado($order = Criteria::ASC) Order by the datosfacturacion_estado column
 * @method DatosfacturacionQuery orderByDatosfacturacionPais($order = Criteria::ASC) Order by the datosfacturacion_pais column
 * @method DatosfacturacionQuery orderByDatosfacturacionCodigopostal($order = Criteria::ASC) Order by the datosfacturacion_codigopostal column
 * @method DatosfacturacionQuery orderByDatosfacturacionTelefono($order = Criteria::ASC) Order by the datosfacturacion_telefono column
 * @method DatosfacturacionQuery orderByDatosfacturacionEmail($order = Criteria::ASC) Order by the datosfacturacion_email column
 *
 * @method DatosfacturacionQuery groupByIddatosfacturacion() Group by the iddatosfacturacion column
 * @method DatosfacturacionQuery groupByIdpaciente() Group by the idpaciente column
 * @method DatosfacturacionQuery groupByDatosfacturacionRazonsocial() Group by the datosfacturacion_razonsocial column
 * @method DatosfacturacionQuery groupByDatosfacturacionRfc() Group by the datosfacturacion_rfc column
 * @method DatosfacturacionQuery groupByDatosfacturacionCalle() Group by the datosfacturacion_calle column
 * @method DatosfacturacionQuery groupByDatosfacturacionNoexterior() Group by the datosfacturacion_noexterior column
 * @method DatosfacturacionQuery groupByDatosfacturacionNointerior() Group by the datosfacturacion_nointerior column
 * @method DatosfacturacionQuery groupByDatosfacturacionColonia() Group by the datosfacturacion_colonia column
 * @method DatosfacturacionQuery groupByDatosfacturacionCiudad() Group by the datosfacturacion_ciudad column
 * @method DatosfacturacionQuery groupByDatosfacturacionEstado() Group by the datosfacturacion_estado column
 * @method DatosfacturacionQuery groupByDatosfacturacionPais() Group by the datosfacturacion_pais column
 * @method DatosfacturacionQuery groupByDatosfacturacionCodigopostal() Group by the datosfacturacion_codigopostal column
 * @method DatosfacturacionQuery groupByDatosfacturacionTelefono() Group by the datosfacturacion_telefono column
 * @method DatosfacturacionQuery groupByDatosfacturacionEmail() Group by the datosfacturacion_email column
 *
 * @method DatosfacturacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DatosfacturacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DatosfacturacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DatosfacturacionQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method DatosfacturacionQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method DatosfacturacionQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method DatosfacturacionQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method DatosfacturacionQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method DatosfacturacionQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method Datosfacturacion findOne(PropelPDO $con = null) Return the first Datosfacturacion matching the query
 * @method Datosfacturacion findOneOrCreate(PropelPDO $con = null) Return the first Datosfacturacion matching the query, or a new Datosfacturacion object populated from the query conditions when no match is found
 *
 * @method Datosfacturacion findOneByIdpaciente(int $idpaciente) Return the first Datosfacturacion filtered by the idpaciente column
 * @method Datosfacturacion findOneByDatosfacturacionRazonsocial(string $datosfacturacion_razonsocial) Return the first Datosfacturacion filtered by the datosfacturacion_razonsocial column
 * @method Datosfacturacion findOneByDatosfacturacionRfc(string $datosfacturacion_rfc) Return the first Datosfacturacion filtered by the datosfacturacion_rfc column
 * @method Datosfacturacion findOneByDatosfacturacionCalle(string $datosfacturacion_calle) Return the first Datosfacturacion filtered by the datosfacturacion_calle column
 * @method Datosfacturacion findOneByDatosfacturacionNoexterior(string $datosfacturacion_noexterior) Return the first Datosfacturacion filtered by the datosfacturacion_noexterior column
 * @method Datosfacturacion findOneByDatosfacturacionNointerior(string $datosfacturacion_nointerior) Return the first Datosfacturacion filtered by the datosfacturacion_nointerior column
 * @method Datosfacturacion findOneByDatosfacturacionColonia(string $datosfacturacion_colonia) Return the first Datosfacturacion filtered by the datosfacturacion_colonia column
 * @method Datosfacturacion findOneByDatosfacturacionCiudad(string $datosfacturacion_ciudad) Return the first Datosfacturacion filtered by the datosfacturacion_ciudad column
 * @method Datosfacturacion findOneByDatosfacturacionEstado(string $datosfacturacion_estado) Return the first Datosfacturacion filtered by the datosfacturacion_estado column
 * @method Datosfacturacion findOneByDatosfacturacionPais(string $datosfacturacion_pais) Return the first Datosfacturacion filtered by the datosfacturacion_pais column
 * @method Datosfacturacion findOneByDatosfacturacionCodigopostal(string $datosfacturacion_codigopostal) Return the first Datosfacturacion filtered by the datosfacturacion_codigopostal column
 * @method Datosfacturacion findOneByDatosfacturacionTelefono(string $datosfacturacion_telefono) Return the first Datosfacturacion filtered by the datosfacturacion_telefono column
 * @method Datosfacturacion findOneByDatosfacturacionEmail(string $datosfacturacion_email) Return the first Datosfacturacion filtered by the datosfacturacion_email column
 *
 * @method array findByIddatosfacturacion(int $iddatosfacturacion) Return Datosfacturacion objects filtered by the iddatosfacturacion column
 * @method array findByIdpaciente(int $idpaciente) Return Datosfacturacion objects filtered by the idpaciente column
 * @method array findByDatosfacturacionRazonsocial(string $datosfacturacion_razonsocial) Return Datosfacturacion objects filtered by the datosfacturacion_razonsocial column
 * @method array findByDatosfacturacionRfc(string $datosfacturacion_rfc) Return Datosfacturacion objects filtered by the datosfacturacion_rfc column
 * @method array findByDatosfacturacionCalle(string $datosfacturacion_calle) Return Datosfacturacion objects filtered by the datosfacturacion_calle column
 * @method array findByDatosfacturacionNoexterior(string $datosfacturacion_noexterior) Return Datosfacturacion objects filtered by the datosfacturacion_noexterior column
 * @method array findByDatosfacturacionNointerior(string $datosfacturacion_nointerior) Return Datosfacturacion objects filtered by the datosfacturacion_nointerior column
 * @method array findByDatosfacturacionColonia(string $datosfacturacion_colonia) Return Datosfacturacion objects filtered by the datosfacturacion_colonia column
 * @method array findByDatosfacturacionCiudad(string $datosfacturacion_ciudad) Return Datosfacturacion objects filtered by the datosfacturacion_ciudad column
 * @method array findByDatosfacturacionEstado(string $datosfacturacion_estado) Return Datosfacturacion objects filtered by the datosfacturacion_estado column
 * @method array findByDatosfacturacionPais(string $datosfacturacion_pais) Return Datosfacturacion objects filtered by the datosfacturacion_pais column
 * @method array findByDatosfacturacionCodigopostal(string $datosfacturacion_codigopostal) Return Datosfacturacion objects filtered by the datosfacturacion_codigopostal column
 * @method array findByDatosfacturacionTelefono(string $datosfacturacion_telefono) Return Datosfacturacion objects filtered by the datosfacturacion_telefono column
 * @method array findByDatosfacturacionEmail(string $datosfacturacion_email) Return Datosfacturacion objects filtered by the datosfacturacion_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDatosfacturacionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'hva';
        }
        if (null === $modelName) {
            $modelName = 'Datosfacturacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DatosfacturacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DatosfacturacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DatosfacturacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DatosfacturacionQuery) {
            return $criteria;
        }
        $query = new DatosfacturacionQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Datosfacturacion|Datosfacturacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DatosfacturacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Datosfacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddatosfacturacion($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Datosfacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddatosfacturacion`, `idpaciente`, `datosfacturacion_razonsocial`, `datosfacturacion_rfc`, `datosfacturacion_calle`, `datosfacturacion_noexterior`, `datosfacturacion_nointerior`, `datosfacturacion_colonia`, `datosfacturacion_ciudad`, `datosfacturacion_estado`, `datosfacturacion_pais`, `datosfacturacion_codigopostal`, `datosfacturacion_telefono`, `datosfacturacion_email` FROM `datosfacturacion` WHERE `iddatosfacturacion` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Datosfacturacion();
            $obj->hydrate($row);
            DatosfacturacionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Datosfacturacion|Datosfacturacion[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Datosfacturacion[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddatosfacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddatosfacturacion(1234); // WHERE iddatosfacturacion = 1234
     * $query->filterByIddatosfacturacion(array(12, 34)); // WHERE iddatosfacturacion IN (12, 34)
     * $query->filterByIddatosfacturacion(array('min' => 12)); // WHERE iddatosfacturacion >= 12
     * $query->filterByIddatosfacturacion(array('max' => 12)); // WHERE iddatosfacturacion <= 12
     * </code>
     *
     * @param     mixed $iddatosfacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByIddatosfacturacion($iddatosfacturacion = null, $comparison = null)
    {
        if (is_array($iddatosfacturacion)) {
            $useMinMax = false;
            if (isset($iddatosfacturacion['min'])) {
                $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $iddatosfacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddatosfacturacion['max'])) {
                $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $iddatosfacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $iddatosfacturacion, $comparison);
    }

    /**
     * Filter the query on the idpaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaciente(1234); // WHERE idpaciente = 1234
     * $query->filterByIdpaciente(array(12, 34)); // WHERE idpaciente IN (12, 34)
     * $query->filterByIdpaciente(array('min' => 12)); // WHERE idpaciente >= 12
     * $query->filterByIdpaciente(array('max' => 12)); // WHERE idpaciente <= 12
     * </code>
     *
     * @see       filterByPaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(DatosfacturacionPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(DatosfacturacionPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionRazonsocial('fooValue');   // WHERE datosfacturacion_razonsocial = 'fooValue'
     * $query->filterByDatosfacturacionRazonsocial('%fooValue%'); // WHERE datosfacturacion_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionRazonsocial($datosfacturacionRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionRazonsocial)) {
                $datosfacturacionRazonsocial = str_replace('*', '%', $datosfacturacionRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_RAZONSOCIAL, $datosfacturacionRazonsocial, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionRfc('fooValue');   // WHERE datosfacturacion_rfc = 'fooValue'
     * $query->filterByDatosfacturacionRfc('%fooValue%'); // WHERE datosfacturacion_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionRfc($datosfacturacionRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionRfc)) {
                $datosfacturacionRfc = str_replace('*', '%', $datosfacturacionRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_RFC, $datosfacturacionRfc, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionCalle('fooValue');   // WHERE datosfacturacion_calle = 'fooValue'
     * $query->filterByDatosfacturacionCalle('%fooValue%'); // WHERE datosfacturacion_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionCalle($datosfacturacionCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionCalle)) {
                $datosfacturacionCalle = str_replace('*', '%', $datosfacturacionCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_CALLE, $datosfacturacionCalle, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionNoexterior('fooValue');   // WHERE datosfacturacion_noexterior = 'fooValue'
     * $query->filterByDatosfacturacionNoexterior('%fooValue%'); // WHERE datosfacturacion_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionNoexterior($datosfacturacionNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionNoexterior)) {
                $datosfacturacionNoexterior = str_replace('*', '%', $datosfacturacionNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_NOEXTERIOR, $datosfacturacionNoexterior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionNointerior('fooValue');   // WHERE datosfacturacion_nointerior = 'fooValue'
     * $query->filterByDatosfacturacionNointerior('%fooValue%'); // WHERE datosfacturacion_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionNointerior($datosfacturacionNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionNointerior)) {
                $datosfacturacionNointerior = str_replace('*', '%', $datosfacturacionNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_NOINTERIOR, $datosfacturacionNointerior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionColonia('fooValue');   // WHERE datosfacturacion_colonia = 'fooValue'
     * $query->filterByDatosfacturacionColonia('%fooValue%'); // WHERE datosfacturacion_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionColonia($datosfacturacionColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionColonia)) {
                $datosfacturacionColonia = str_replace('*', '%', $datosfacturacionColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_COLONIA, $datosfacturacionColonia, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionCiudad('fooValue');   // WHERE datosfacturacion_ciudad = 'fooValue'
     * $query->filterByDatosfacturacionCiudad('%fooValue%'); // WHERE datosfacturacion_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionCiudad($datosfacturacionCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionCiudad)) {
                $datosfacturacionCiudad = str_replace('*', '%', $datosfacturacionCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_CIUDAD, $datosfacturacionCiudad, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionEstado('fooValue');   // WHERE datosfacturacion_estado = 'fooValue'
     * $query->filterByDatosfacturacionEstado('%fooValue%'); // WHERE datosfacturacion_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionEstado($datosfacturacionEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionEstado)) {
                $datosfacturacionEstado = str_replace('*', '%', $datosfacturacionEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_ESTADO, $datosfacturacionEstado, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionPais('fooValue');   // WHERE datosfacturacion_pais = 'fooValue'
     * $query->filterByDatosfacturacionPais('%fooValue%'); // WHERE datosfacturacion_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionPais($datosfacturacionPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionPais)) {
                $datosfacturacionPais = str_replace('*', '%', $datosfacturacionPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_PAIS, $datosfacturacionPais, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionCodigopostal('fooValue');   // WHERE datosfacturacion_codigopostal = 'fooValue'
     * $query->filterByDatosfacturacionCodigopostal('%fooValue%'); // WHERE datosfacturacion_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionCodigopostal($datosfacturacionCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionCodigopostal)) {
                $datosfacturacionCodigopostal = str_replace('*', '%', $datosfacturacionCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_CODIGOPOSTAL, $datosfacturacionCodigopostal, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionTelefono('fooValue');   // WHERE datosfacturacion_telefono = 'fooValue'
     * $query->filterByDatosfacturacionTelefono('%fooValue%'); // WHERE datosfacturacion_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionTelefono($datosfacturacionTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionTelefono)) {
                $datosfacturacionTelefono = str_replace('*', '%', $datosfacturacionTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_TELEFONO, $datosfacturacionTelefono, $comparison);
    }

    /**
     * Filter the query on the datosfacturacion_email column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionEmail('fooValue');   // WHERE datosfacturacion_email = 'fooValue'
     * $query->filterByDatosfacturacionEmail('%fooValue%'); // WHERE datosfacturacion_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionEmail($datosfacturacionEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionEmail)) {
                $datosfacturacionEmail = str_replace('*', '%', $datosfacturacionEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionPeer::DATOSFACTURACION_EMAIL, $datosfacturacionEmail, $comparison);
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DatosfacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(DatosfacturacionPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DatosfacturacionPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Filter the query by a related Factura object
     *
     * @param   Factura|PropelObjectCollection $factura  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DatosfacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactura($factura, $comparison = null)
    {
        if ($factura instanceof Factura) {
            return $this
                ->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $factura->getIddatosfacturacion(), $comparison);
        } elseif ($factura instanceof PropelObjectCollection) {
            return $this
                ->useFacturaQuery()
                ->filterByPrimaryKeys($factura->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factura relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function joinFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factura');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Factura');
        }

        return $this;
    }

    /**
     * Use the Factura relation Factura object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturaQuery A secondary query class using the current class as primary query
     */
    public function useFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactura($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Datosfacturacion $datosfacturacion Object to remove from the list of results
     *
     * @return DatosfacturacionQuery The current query, for fluid interface
     */
    public function prune($datosfacturacion = null)
    {
        if ($datosfacturacion) {
            $this->addUsingAlias(DatosfacturacionPeer::IDDATOSFACTURACION, $datosfacturacion->getIddatosfacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
