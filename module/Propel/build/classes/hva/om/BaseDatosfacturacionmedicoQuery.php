<?php


/**
 * Base class that represents a query for the 'datosfacturacionmedico' table.
 *
 *
 *
 * @method DatosfacturacionmedicoQuery orderByIddatosfacturacion($order = Criteria::ASC) Order by the iddatosfacturacion column
 * @method DatosfacturacionmedicoQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoRazonsocial($order = Criteria::ASC) Order by the datosfacturacionmedico_razonsocial column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoRfc($order = Criteria::ASC) Order by the datosfacturacionmedico_rfc column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoCalle($order = Criteria::ASC) Order by the datosfacturacionmedico_calle column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoNoexterior($order = Criteria::ASC) Order by the datosfacturacionmedico_noexterior column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoNointerior($order = Criteria::ASC) Order by the datosfacturacionmedico_nointerior column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoColonia($order = Criteria::ASC) Order by the datosfacturacionmedico_colonia column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoCiudad($order = Criteria::ASC) Order by the datosfacturacionmedico_ciudad column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoEstado($order = Criteria::ASC) Order by the datosfacturacionmedico_estado column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoPais($order = Criteria::ASC) Order by the datosfacturacionmedico_pais column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoCodigopostal($order = Criteria::ASC) Order by the datosfacturacionmedico_codigopostal column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoTelefono($order = Criteria::ASC) Order by the datosfacturacionmedico_telefono column
 * @method DatosfacturacionmedicoQuery orderByDatosfacturacionmedicoEmail($order = Criteria::ASC) Order by the datosfacturacionmedico_email column
 *
 * @method DatosfacturacionmedicoQuery groupByIddatosfacturacion() Group by the iddatosfacturacion column
 * @method DatosfacturacionmedicoQuery groupByIdmedico() Group by the idmedico column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoRazonsocial() Group by the datosfacturacionmedico_razonsocial column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoRfc() Group by the datosfacturacionmedico_rfc column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoCalle() Group by the datosfacturacionmedico_calle column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoNoexterior() Group by the datosfacturacionmedico_noexterior column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoNointerior() Group by the datosfacturacionmedico_nointerior column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoColonia() Group by the datosfacturacionmedico_colonia column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoCiudad() Group by the datosfacturacionmedico_ciudad column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoEstado() Group by the datosfacturacionmedico_estado column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoPais() Group by the datosfacturacionmedico_pais column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoCodigopostal() Group by the datosfacturacionmedico_codigopostal column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoTelefono() Group by the datosfacturacionmedico_telefono column
 * @method DatosfacturacionmedicoQuery groupByDatosfacturacionmedicoEmail() Group by the datosfacturacionmedico_email column
 *
 * @method DatosfacturacionmedicoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DatosfacturacionmedicoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DatosfacturacionmedicoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DatosfacturacionmedicoQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method DatosfacturacionmedicoQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method DatosfacturacionmedicoQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method Datosfacturacionmedico findOne(PropelPDO $con = null) Return the first Datosfacturacionmedico matching the query
 * @method Datosfacturacionmedico findOneOrCreate(PropelPDO $con = null) Return the first Datosfacturacionmedico matching the query, or a new Datosfacturacionmedico object populated from the query conditions when no match is found
 *
 * @method Datosfacturacionmedico findOneByIdmedico(int $idmedico) Return the first Datosfacturacionmedico filtered by the idmedico column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoRazonsocial(string $datosfacturacionmedico_razonsocial) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_razonsocial column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoRfc(string $datosfacturacionmedico_rfc) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_rfc column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoCalle(string $datosfacturacionmedico_calle) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_calle column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoNoexterior(string $datosfacturacionmedico_noexterior) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_noexterior column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoNointerior(string $datosfacturacionmedico_nointerior) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_nointerior column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoColonia(string $datosfacturacionmedico_colonia) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_colonia column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoCiudad(string $datosfacturacionmedico_ciudad) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_ciudad column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoEstado(string $datosfacturacionmedico_estado) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_estado column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoPais(string $datosfacturacionmedico_pais) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_pais column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoCodigopostal(string $datosfacturacionmedico_codigopostal) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_codigopostal column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoTelefono(string $datosfacturacionmedico_telefono) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_telefono column
 * @method Datosfacturacionmedico findOneByDatosfacturacionmedicoEmail(string $datosfacturacionmedico_email) Return the first Datosfacturacionmedico filtered by the datosfacturacionmedico_email column
 *
 * @method array findByIddatosfacturacion(int $iddatosfacturacion) Return Datosfacturacionmedico objects filtered by the iddatosfacturacion column
 * @method array findByIdmedico(int $idmedico) Return Datosfacturacionmedico objects filtered by the idmedico column
 * @method array findByDatosfacturacionmedicoRazonsocial(string $datosfacturacionmedico_razonsocial) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_razonsocial column
 * @method array findByDatosfacturacionmedicoRfc(string $datosfacturacionmedico_rfc) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_rfc column
 * @method array findByDatosfacturacionmedicoCalle(string $datosfacturacionmedico_calle) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_calle column
 * @method array findByDatosfacturacionmedicoNoexterior(string $datosfacturacionmedico_noexterior) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_noexterior column
 * @method array findByDatosfacturacionmedicoNointerior(string $datosfacturacionmedico_nointerior) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_nointerior column
 * @method array findByDatosfacturacionmedicoColonia(string $datosfacturacionmedico_colonia) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_colonia column
 * @method array findByDatosfacturacionmedicoCiudad(string $datosfacturacionmedico_ciudad) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_ciudad column
 * @method array findByDatosfacturacionmedicoEstado(string $datosfacturacionmedico_estado) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_estado column
 * @method array findByDatosfacturacionmedicoPais(string $datosfacturacionmedico_pais) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_pais column
 * @method array findByDatosfacturacionmedicoCodigopostal(string $datosfacturacionmedico_codigopostal) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_codigopostal column
 * @method array findByDatosfacturacionmedicoTelefono(string $datosfacturacionmedico_telefono) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_telefono column
 * @method array findByDatosfacturacionmedicoEmail(string $datosfacturacionmedico_email) Return Datosfacturacionmedico objects filtered by the datosfacturacionmedico_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseDatosfacturacionmedicoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDatosfacturacionmedicoQuery object.
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
            $modelName = 'Datosfacturacionmedico';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DatosfacturacionmedicoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DatosfacturacionmedicoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DatosfacturacionmedicoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DatosfacturacionmedicoQuery) {
            return $criteria;
        }
        $query = new DatosfacturacionmedicoQuery(null, null, $modelAlias);

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
     * @return   Datosfacturacionmedico|Datosfacturacionmedico[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DatosfacturacionmedicoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DatosfacturacionmedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Datosfacturacionmedico A model object, or null if the key is not found
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
     * @return                 Datosfacturacionmedico A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddatosfacturacion`, `idmedico`, `datosfacturacionmedico_razonsocial`, `datosfacturacionmedico_rfc`, `datosfacturacionmedico_calle`, `datosfacturacionmedico_noexterior`, `datosfacturacionmedico_nointerior`, `datosfacturacionmedico_colonia`, `datosfacturacionmedico_ciudad`, `datosfacturacionmedico_estado`, `datosfacturacionmedico_pais`, `datosfacturacionmedico_codigopostal`, `datosfacturacionmedico_telefono`, `datosfacturacionmedico_email` FROM `datosfacturacionmedico` WHERE `iddatosfacturacion` = :p0';
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
            $obj = new Datosfacturacionmedico();
            $obj->hydrate($row);
            DatosfacturacionmedicoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Datosfacturacionmedico|Datosfacturacionmedico[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Datosfacturacionmedico[]|mixed the list of results, formatted by the current formatter
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
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $keys, Criteria::IN);
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
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByIddatosfacturacion($iddatosfacturacion = null, $comparison = null)
    {
        if (is_array($iddatosfacturacion)) {
            $useMinMax = false;
            if (isset($iddatosfacturacion['min'])) {
                $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $iddatosfacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddatosfacturacion['max'])) {
                $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $iddatosfacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $iddatosfacturacion, $comparison);
    }

    /**
     * Filter the query on the idmedico column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedico(1234); // WHERE idmedico = 1234
     * $query->filterByIdmedico(array(12, 34)); // WHERE idmedico IN (12, 34)
     * $query->filterByIdmedico(array('min' => 12)); // WHERE idmedico >= 12
     * $query->filterByIdmedico(array('max' => 12)); // WHERE idmedico <= 12
     * </code>
     *
     * @see       filterByMedico()
     *
     * @param     mixed $idmedico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(DatosfacturacionmedicoPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(DatosfacturacionmedicoPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoRazonsocial('fooValue');   // WHERE datosfacturacionmedico_razonsocial = 'fooValue'
     * $query->filterByDatosfacturacionmedicoRazonsocial('%fooValue%'); // WHERE datosfacturacionmedico_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoRazonsocial($datosfacturacionmedicoRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoRazonsocial)) {
                $datosfacturacionmedicoRazonsocial = str_replace('*', '%', $datosfacturacionmedicoRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RAZONSOCIAL, $datosfacturacionmedicoRazonsocial, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoRfc('fooValue');   // WHERE datosfacturacionmedico_rfc = 'fooValue'
     * $query->filterByDatosfacturacionmedicoRfc('%fooValue%'); // WHERE datosfacturacionmedico_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoRfc($datosfacturacionmedicoRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoRfc)) {
                $datosfacturacionmedicoRfc = str_replace('*', '%', $datosfacturacionmedicoRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_RFC, $datosfacturacionmedicoRfc, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoCalle('fooValue');   // WHERE datosfacturacionmedico_calle = 'fooValue'
     * $query->filterByDatosfacturacionmedicoCalle('%fooValue%'); // WHERE datosfacturacionmedico_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoCalle($datosfacturacionmedicoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoCalle)) {
                $datosfacturacionmedicoCalle = str_replace('*', '%', $datosfacturacionmedicoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CALLE, $datosfacturacionmedicoCalle, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoNoexterior('fooValue');   // WHERE datosfacturacionmedico_noexterior = 'fooValue'
     * $query->filterByDatosfacturacionmedicoNoexterior('%fooValue%'); // WHERE datosfacturacionmedico_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoNoexterior($datosfacturacionmedicoNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoNoexterior)) {
                $datosfacturacionmedicoNoexterior = str_replace('*', '%', $datosfacturacionmedicoNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOEXTERIOR, $datosfacturacionmedicoNoexterior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoNointerior('fooValue');   // WHERE datosfacturacionmedico_nointerior = 'fooValue'
     * $query->filterByDatosfacturacionmedicoNointerior('%fooValue%'); // WHERE datosfacturacionmedico_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoNointerior($datosfacturacionmedicoNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoNointerior)) {
                $datosfacturacionmedicoNointerior = str_replace('*', '%', $datosfacturacionmedicoNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_NOINTERIOR, $datosfacturacionmedicoNointerior, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoColonia('fooValue');   // WHERE datosfacturacionmedico_colonia = 'fooValue'
     * $query->filterByDatosfacturacionmedicoColonia('%fooValue%'); // WHERE datosfacturacionmedico_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoColonia($datosfacturacionmedicoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoColonia)) {
                $datosfacturacionmedicoColonia = str_replace('*', '%', $datosfacturacionmedicoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_COLONIA, $datosfacturacionmedicoColonia, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoCiudad('fooValue');   // WHERE datosfacturacionmedico_ciudad = 'fooValue'
     * $query->filterByDatosfacturacionmedicoCiudad('%fooValue%'); // WHERE datosfacturacionmedico_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoCiudad($datosfacturacionmedicoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoCiudad)) {
                $datosfacturacionmedicoCiudad = str_replace('*', '%', $datosfacturacionmedicoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CIUDAD, $datosfacturacionmedicoCiudad, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoEstado('fooValue');   // WHERE datosfacturacionmedico_estado = 'fooValue'
     * $query->filterByDatosfacturacionmedicoEstado('%fooValue%'); // WHERE datosfacturacionmedico_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoEstado($datosfacturacionmedicoEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoEstado)) {
                $datosfacturacionmedicoEstado = str_replace('*', '%', $datosfacturacionmedicoEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_ESTADO, $datosfacturacionmedicoEstado, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoPais('fooValue');   // WHERE datosfacturacionmedico_pais = 'fooValue'
     * $query->filterByDatosfacturacionmedicoPais('%fooValue%'); // WHERE datosfacturacionmedico_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoPais($datosfacturacionmedicoPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoPais)) {
                $datosfacturacionmedicoPais = str_replace('*', '%', $datosfacturacionmedicoPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_PAIS, $datosfacturacionmedicoPais, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoCodigopostal('fooValue');   // WHERE datosfacturacionmedico_codigopostal = 'fooValue'
     * $query->filterByDatosfacturacionmedicoCodigopostal('%fooValue%'); // WHERE datosfacturacionmedico_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoCodigopostal($datosfacturacionmedicoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoCodigopostal)) {
                $datosfacturacionmedicoCodigopostal = str_replace('*', '%', $datosfacturacionmedicoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_CODIGOPOSTAL, $datosfacturacionmedicoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoTelefono('fooValue');   // WHERE datosfacturacionmedico_telefono = 'fooValue'
     * $query->filterByDatosfacturacionmedicoTelefono('%fooValue%'); // WHERE datosfacturacionmedico_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoTelefono($datosfacturacionmedicoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoTelefono)) {
                $datosfacturacionmedicoTelefono = str_replace('*', '%', $datosfacturacionmedicoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_TELEFONO, $datosfacturacionmedicoTelefono, $comparison);
    }

    /**
     * Filter the query on the datosfacturacionmedico_email column
     *
     * Example usage:
     * <code>
     * $query->filterByDatosfacturacionmedicoEmail('fooValue');   // WHERE datosfacturacionmedico_email = 'fooValue'
     * $query->filterByDatosfacturacionmedicoEmail('%fooValue%'); // WHERE datosfacturacionmedico_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datosfacturacionmedicoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function filterByDatosfacturacionmedicoEmail($datosfacturacionmedicoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datosfacturacionmedicoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datosfacturacionmedicoEmail)) {
                $datosfacturacionmedicoEmail = str_replace('*', '%', $datosfacturacionmedicoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatosfacturacionmedicoPeer::DATOSFACTURACIONMEDICO_EMAIL, $datosfacturacionmedicoEmail, $comparison);
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DatosfacturacionmedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(DatosfacturacionmedicoPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DatosfacturacionmedicoPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
        } else {
            throw new PropelException('filterByMedico() only accepts arguments of type Medico or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medico relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function joinMedico($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medico');

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
            $this->addJoinObject($join, 'Medico');
        }

        return $this;
    }

    /**
     * Use the Medico relation Medico object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedicoQuery A secondary query class using the current class as primary query
     */
    public function useMedicoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedico($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medico', 'MedicoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Datosfacturacionmedico $datosfacturacionmedico Object to remove from the list of results
     *
     * @return DatosfacturacionmedicoQuery The current query, for fluid interface
     */
    public function prune($datosfacturacionmedico = null)
    {
        if ($datosfacturacionmedico) {
            $this->addUsingAlias(DatosfacturacionmedicoPeer::IDDATOSFACTURACION, $datosfacturacionmedico->getIddatosfacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
