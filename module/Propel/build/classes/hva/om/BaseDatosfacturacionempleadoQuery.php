<?php


/**
 * Base class that represents a query for the 'datosfacturacionempleado' table.
 *
 *
 *
 * @method DatosfacturacionempleadoQuery orderByIddatosfacturacionempleado($order = Criteria::ASC) Order by the iddatosfacturacionempleado column
 * @method DatosfacturacionempleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoRazonsocial($order = Criteria::ASC) Order by the datosfacturacionempleado_razonsocial column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoRfc($order = Criteria::ASC) Order by the datosfacturacionempleado_rfc column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoCalle($order = Criteria::ASC) Order by the datosfacturacionempleado_calle column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoNoexterior($order = Criteria::ASC) Order by the datosfacturacionempleado_noexterior column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoNointerior($order = Criteria::ASC) Order by the datosfacturacionempleado_nointerior column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoColonia($order = Criteria::ASC) Order by the datosfacturacionempleado_colonia column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoCiudad($order = Criteria::ASC) Order by the datosfacturacionempleado_ciudad column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoEstado($order = Criteria::ASC) Order by the datosfacturacionempleado_estado column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoPais($order = Criteria::ASC) Order by the datosfacturacionempleado_pais column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoCodigopostal($order = Criteria::ASC) Order by the datosfacturacionempleado_codigopostal column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoTelefono($order = Criteria::ASC) Order by the datosfacturacionempleado_telefono column
 * @method DatosfacturacionempleadoQuery orderByDatosfacturacionempleadoEmail($order = Criteria::ASC) Order by the datosfacturacionempleado_email column
 *
 * @method DatosfacturacionempleadoQuery groupByIddatosfacturacionempleado() Group by the iddatosfacturacionempleado column
 * @method DatosfacturacionempleadoQuery groupByIdempleado() Group by the idempleado column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoRazonsocial() Group by the datosfacturacionempleado_razonsocial column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoRfc() Group by the datosfacturacionempleado_rfc column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoCalle() Group by the datosfacturacionempleado_calle column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoNoexterior() Group by the datosfacturacionempleado_noexterior column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoNointerior() Group by the datosfacturacionempleado_nointerior column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoColonia() Group by the datosfacturacionempleado_colonia column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoCiudad() Group by the datosfacturacionempleado_ciudad column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoEstado() Group by the datosfacturacionempleado_estado column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoPais() Group by the datosfacturacionempleado_pais column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoCodigopostal() Group by the datosfacturacionempleado_codigopostal column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoTelefono() Group by the datosfacturacionempleado_telefono column
 * @method DatosfacturacionempleadoQuery groupByDatosfacturacionempleadoEmail() Group by the datosfacturacionempleado_email column
 *
 * @method DatosfacturacionempleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DatosfacturacionempleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DatosfacturacionempleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DatosfacturacionempleadoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method DatosfacturacionempleadoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method DatosfacturacionempleadoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Datosfacturacionempleado findOne(PropelPDO $con = null) Return the first Datosfacturacionempleado matching the query
 * @method Datosfacturacionempleado findOneOrCreate(PropelPDO $con = null) Return the first Datosfacturacionempleado matching the query, or a new Datosfacturacionempleado object populated from the query conditions when no match is found
 *
 * @method Datosfacturacionempleado findOneByIdempleado(int $idempleado) Return the first Datosfacturacionempleado filtered by the idempleado column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoRazonsocial(string $datosfacturacionempleado_razonsocial) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_razonsocial column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoRfc(string $datosfacturacionempleado_rfc) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_rfc column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoCalle(string $datosfacturacionempleado_calle) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_calle column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoNoexterior(string $datosfacturacionempleado_noexterior) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_noexterior column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoNointerior(string $datosfacturacionempleado_nointerior) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_nointerior column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoColonia(string $datosfacturacionempleado_colonia) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_colonia column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoCiudad(string $datosfacturacionempleado_ciudad) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_ciudad column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoEstado(string $datosfacturacionempleado_estado) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_estado column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoPais(string $datosfacturacionempleado_pais) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_pais column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoCodigopostal(string $datosfacturacionempleado_codigopostal) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_codigopostal column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoTelefono(string $datosfacturacionempleado_telefono) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_telefono column
 * @method Datosfacturacionempleado findOneByDatosfacturacionempleadoEmail(string $datosfacturacionempleado_email) Return the first Datosfacturacionempleado filtered by the datosfacturacionempleado_email column
 *
 * @method array findByIddatosfacturacionempleado(int $iddatosfacturacionempleado) Return Datosfacturacionempleado objects filtered by the iddatosfacturacionempleado column
 * @method array findByIdempleado(int $idempleado) Return Datosfacturacionempleado objects filtered by the idempleado column
 * @method array findByDatosfacturacionempleadoRazonsocial(string $datosfacturacionempleado_razonsocial) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_razonsocial column
 * @method array findByDatosfacturacionempleadoRfc(string $datosfacturacionempleado_rfc) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_rfc column
 * @method array findByDatosfacturacionempleadoCalle(string $datosfacturacionempleado_calle) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_calle column
 * @method array findByDatosfacturacionempleadoNoexterior(string $datosfacturacionempleado_noexterior) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_noexterior column
 * @method array findByDatosfacturacionempleadoNointerior(string $datosfacturacionempleado_nointerior) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_nointerior column
 * @method array findByDatosfacturacionempleadoColonia(string $datosfacturacionempleado_colonia) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_colonia column
 * @method array findByDatosfacturacionempleadoCiudad(string $datosfacturacionempleado_ciudad) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_ciudad column
 * @method array findByDatosfacturacionempleadoEstado(string $datosfacturacionempleado_estado) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_estado column
 * @method array findByDatosfacturacionempleadoPais(string $datosfacturacionempleado_pais) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_pais column
 * @method array findByDatosfacturacionempleadoCodigopostal(string $datosfacturacionempleado_codigopostal) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_codigopostal column
 * @method array findByDatosfacturacionempleadoTelefono(string $datosfacturacionempleado_telefono) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_telefono column
 * @method array findByDatosfacturacionempleadoEmail(string $datosfacturacionempleado_email) Return Datosfacturacionempleado objects filtered by the datosfacturacionempleado_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacionempleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDatosfacturacionempleadoQuery object.
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
            $modelName = 'Datosfacturacionempleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DatosfacturacionempleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DatosfacturacionempleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DatosfacturacionempleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DatosfacturacionempleadoQuery) {
            return $criteria;
        }
        $query = new DatosfacturacionempleadoQuery(null, null, $modelAlias);

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
     * @return   Datosfacturacionempleado|Datosfacturacionempleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DatosfacturacionempleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Datosfacturacionempleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddatosfacturacionempleado($key, $con = null)
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
     * @return                 Datosfacturacionempleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddatosfacturacionempleado`, `idempleado`, `datosfacturacionempleado_razonsocial`, `datosfacturacionempleado_rfc`, `datosfacturacionempleado_calle`, `datosfacturacionempleado_noexterior`, `datosfacturacionempleado_nointerior`, `datosfacturacionempleado_colonia`, `datosfacturacionempleado_ciudad`, `datosfacturacionempleado_estado`, `datosfacturacionempleado_pais`, `datosfacturacionempleado_codigopostal`, `datosfacturacionempleado_telefono`, `datosfacturacionempleado_email` FROM `datosfacturacionempleado` WHERE `iddatosfacturacionempleado` = :p0';
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
            $obj = new Datosfacturacionempleado();
            $obj->hydrate($row);
            DatosfacturacionempleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Datosfacturacionempleado|Datosfacturacionempleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Datosfacturacionempleado[]|mixed the list of results, formatted by the current formatter
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
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddatosfacturacionempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIddatosfacturacionempleado(1234); // WHERE iddatosfacturacionempleado = 1234
     * $query->filterByIddatosfacturacionempleado(array(12, 34)); // WHERE iddatosfacturacionempleado IN (12, 34)
     * $query->filterByIddatosfacturacionempleado(array('min' => 12)); // WHERE iddatosfacturacionempleado >= 12
     * $query->filterByIddatosfacturacionempleado(array('max' => 12)); // WHERE iddatosfacturacionempleado <= 12
     * </code>
     *
     * @param     mixed $iddatosfacturacionempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByIddatosfacturacionempleado($iddatosfacturacionempleado = null, $comparison = null)
    {
        if (is_array($iddatosfacturacionempleado)) {
            $useMinMax = false;
            if (isset($iddatosfacturacionempleado['min'])) {
                $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $iddatosfacturacionempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddatosfacturacionempleado['max'])) {
                $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $iddatosfacturacionempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $iddatosfacturacionempleado, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(DatosfacturacionempleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(DatosfacturacionempleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoRazonsocial('fooValue');   // WHERE datosfacturacionempleado_razonsocial = 'fooValue'
     * $query->filterByDatosfacturacionempleadoRazonsocial('%fooValue%'); // WHERE datosfacturacionempleado_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoRazonsocial($datosfacturacionempleadoRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoRazonsocial)) {
                $datosfacturacionempleadoRazonsocial = str_replace('*', '%', $datosfacturacionempleadoRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RAZONSOCIAL, $datosfacturacionempleadoRazonsocial, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoRfc('fooValue');   // WHERE datosfacturacionempleado_rfc = 'fooValue'
     * $query->filterByDatosfacturacionempleadoRfc('%fooValue%'); // WHERE datosfacturacionempleado_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoRfc($datosfacturacionempleadoRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoRfc)) {
                $datosfacturacionempleadoRfc = str_replace('*', '%', $datosfacturacionempleadoRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_RFC, $datosfacturacionempleadoRfc, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoCalle('fooValue');   // WHERE datosfacturacionempleado_calle = 'fooValue'
     * $query->filterByDatosfacturacionempleadoCalle('%fooValue%'); // WHERE datosfacturacionempleado_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoCalle($datosfacturacionempleadoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoCalle)) {
                $datosfacturacionempleadoCalle = str_replace('*', '%', $datosfacturacionempleadoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CALLE, $datosfacturacionempleadoCalle, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoNoexterior('fooValue');   // WHERE datosfacturacionempleado_noexterior = 'fooValue'
     * $query->filterByDatosfacturacionempleadoNoexterior('%fooValue%'); // WHERE datosfacturacionempleado_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoNoexterior($datosfacturacionempleadoNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoNoexterior)) {
                $datosfacturacionempleadoNoexterior = str_replace('*', '%', $datosfacturacionempleadoNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOEXTERIOR, $datosfacturacionempleadoNoexterior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoNointerior('fooValue');   // WHERE datosfacturacionempleado_nointerior = 'fooValue'
     * $query->filterByDatosfacturacionempleadoNointerior('%fooValue%'); // WHERE datosfacturacionempleado_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoNointerior($datosfacturacionempleadoNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoNointerior)) {
                $datosfacturacionempleadoNointerior = str_replace('*', '%', $datosfacturacionempleadoNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_NOINTERIOR, $datosfacturacionempleadoNointerior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoColonia('fooValue');   // WHERE datosfacturacionempleado_colonia = 'fooValue'
     * $query->filterByDatosfacturacionempleadoColonia('%fooValue%'); // WHERE datosfacturacionempleado_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoColonia($datosfacturacionempleadoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoColonia)) {
                $datosfacturacionempleadoColonia = str_replace('*', '%', $datosfacturacionempleadoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_COLONIA, $datosfacturacionempleadoColonia, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoCiudad('fooValue');   // WHERE datosfacturacionempleado_ciudad = 'fooValue'
     * $query->filterByDatosfacturacionempleadoCiudad('%fooValue%'); // WHERE datosfacturacionempleado_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoCiudad($datosfacturacionempleadoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoCiudad)) {
                $datosfacturacionempleadoCiudad = str_replace('*', '%', $datosfacturacionempleadoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CIUDAD, $datosfacturacionempleadoCiudad, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoEstado('fooValue');   // WHERE datosfacturacionempleado_estado = 'fooValue'
     * $query->filterByDatosfacturacionempleadoEstado('%fooValue%'); // WHERE datosfacturacionempleado_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoEstado($datosfacturacionempleadoEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoEstado)) {
                $datosfacturacionempleadoEstado = str_replace('*', '%', $datosfacturacionempleadoEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_ESTADO, $datosfacturacionempleadoEstado, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoPais('fooValue');   // WHERE datosfacturacionempleado_pais = 'fooValue'
     * $query->filterByDatosfacturacionempleadoPais('%fooValue%'); // WHERE datosfacturacionempleado_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoPais($datosfacturacionempleadoPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoPais)) {
                $datosfacturacionempleadoPais = str_replace('*', '%', $datosfacturacionempleadoPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_PAIS, $datosfacturacionempleadoPais, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoCodigopostal('fooValue');   // WHERE datosfacturacionempleado_codigopostal = 'fooValue'
     * $query->filterByDatosfacturacionempleadoCodigopostal('%fooValue%'); // WHERE datosfacturacionempleado_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoCodigopostal($datosfacturacionempleadoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoCodigopostal)) {
                $datosfacturacionempleadoCodigopostal = str_replace('*', '%', $datosfacturacionempleadoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_CODIGOPOSTAL, $datosfacturacionempleadoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoTelefono('fooValue');   // WHERE datosfacturacionempleado_telefono = 'fooValue'
     * $query->filterByDatosfacturacionempleadoTelefono('%fooValue%'); // WHERE datosfacturacionempleado_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoTelefono($datosfacturacionempleadoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoTelefono)) {
                $datosfacturacionempleadoTelefono = str_replace('*', '%', $datosfacturacionempleadoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_TELEFONO, $datosfacturacionempleadoTelefono, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionempleado_email column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionempleadoEmail('fooValue');   // WHERE datosfacturacionempleado_email = 'fooValue'
     * $query->filterByDatosfacturacionempleadoEmail('%fooValue%'); // WHERE datosfacturacionempleado_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionempleadoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionempleadoEmail($datosfacturacionempleadoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionempleadoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionempleadoEmail)) {
                $datosfacturacionempleadoEmail = str_replace('*', '%', $datosfacturacionempleadoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionempleadoPeer::DATOSFACTURACIONEMPLEADO_EMAIL, $datosfacturacionempleadoEmail, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DatosfacturacionempleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(DatosfacturacionempleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DatosfacturacionempleadoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

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
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Datosfacturacionempleado $datosfacturacionempleado Object to remove from the list of results
     *
     * @return DatosfacturacionempleadoQuery The current query, for fluid interface
     */
    public function prune($datosfacturacionempleado = null)
    {
        if ($datosfacturacionempleado) {
            $this->addUsingAlias(DatosfacturacionempleadoPeer::IDDATOSFACTURACIONEMPLEADO, $datosfacturacionempleado->getIddatosfacturacionempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
