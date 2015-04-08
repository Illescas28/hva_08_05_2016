<?php


/**
 * Base class that represents a query for the 'empleadomodulo' table.
 *
 *
 *
 * @method EmpleadomoduloQuery orderByIdempleadomodulo($order = Criteria::ASC) Order by the idempleadomodulo column
 * @method EmpleadomoduloQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadomoduloQuery orderByIdmodulo($order = Criteria::ASC) Order by the idmodulo column
 *
 * @method EmpleadomoduloQuery groupByIdempleadomodulo() Group by the idempleadomodulo column
 * @method EmpleadomoduloQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadomoduloQuery groupByIdmodulo() Group by the idmodulo column
 *
 * @method EmpleadomoduloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadomoduloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadomoduloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadomoduloQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadomoduloQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadomoduloQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method EmpleadomoduloQuery leftJoinModulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Modulo relation
 * @method EmpleadomoduloQuery rightJoinModulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Modulo relation
 * @method EmpleadomoduloQuery innerJoinModulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Modulo relation
 *
 * @method Empleadomodulo findOne(PropelPDO $con = null) Return the first Empleadomodulo matching the query
 * @method Empleadomodulo findOneOrCreate(PropelPDO $con = null) Return the first Empleadomodulo matching the query, or a new Empleadomodulo object populated from the query conditions when no match is found
 *
 * @method Empleadomodulo findOneByIdempleado(int $idempleado) Return the first Empleadomodulo filtered by the idempleado column
 * @method Empleadomodulo findOneByIdmodulo(int $idmodulo) Return the first Empleadomodulo filtered by the idmodulo column
 *
 * @method array findByIdempleadomodulo(int $idempleadomodulo) Return Empleadomodulo objects filtered by the idempleadomodulo column
 * @method array findByIdempleado(int $idempleado) Return Empleadomodulo objects filtered by the idempleado column
 * @method array findByIdmodulo(int $idmodulo) Return Empleadomodulo objects filtered by the idmodulo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEmpleadomoduloQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadomoduloQuery object.
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
            $modelName = 'Empleadomodulo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadomoduloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadomoduloQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadomoduloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadomoduloQuery) {
            return $criteria;
        }
        $query = new EmpleadomoduloQuery(null, null, $modelAlias);

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
     * @return   Empleadomodulo|Empleadomodulo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadomoduloPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadomoduloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadomodulo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadomodulo($key, $con = null)
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
     * @return                 Empleadomodulo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadomodulo`, `idempleado`, `idmodulo` FROM `empleadomodulo` WHERE `idempleadomodulo` = :p0';
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
            $obj = new Empleadomodulo();
            $obj->hydrate($row);
            EmpleadomoduloPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadomodulo|Empleadomodulo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadomodulo[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadomodulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadomodulo(1234); // WHERE idempleadomodulo = 1234
     * $query->filterByIdempleadomodulo(array(12, 34)); // WHERE idempleadomodulo IN (12, 34)
     * $query->filterByIdempleadomodulo(array('min' => 12)); // WHERE idempleadomodulo >= 12
     * $query->filterByIdempleadomodulo(array('max' => 12)); // WHERE idempleadomodulo <= 12
     * </code>
     *
     * @param     mixed $idempleadomodulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function filterByIdempleadomodulo($idempleadomodulo = null, $comparison = null)
    {
        if (is_array($idempleadomodulo)) {
            $useMinMax = false;
            if (isset($idempleadomodulo['min'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $idempleadomodulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadomodulo['max'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $idempleadomodulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $idempleadomodulo, $comparison);
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
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idmodulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmodulo(1234); // WHERE idmodulo = 1234
     * $query->filterByIdmodulo(array(12, 34)); // WHERE idmodulo IN (12, 34)
     * $query->filterByIdmodulo(array('min' => 12)); // WHERE idmodulo >= 12
     * $query->filterByIdmodulo(array('max' => 12)); // WHERE idmodulo <= 12
     * </code>
     *
     * @see       filterByModulo()
     *
     * @param     mixed $idmodulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function filterByIdmodulo($idmodulo = null, $comparison = null)
    {
        if (is_array($idmodulo)) {
            $useMinMax = false;
            if (isset($idmodulo['min'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDMODULO, $idmodulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmodulo['max'])) {
                $this->addUsingAlias(EmpleadomoduloPeer::IDMODULO, $idmodulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadomoduloPeer::IDMODULO, $idmodulo, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadomoduloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return EmpleadomoduloQuery The current query, for fluid interface
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
     * Filter the query by a related Modulo object
     *
     * @param   Modulo|PropelObjectCollection $modulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadomoduloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByModulo($modulo, $comparison = null)
    {
        if ($modulo instanceof Modulo) {
            return $this
                ->addUsingAlias(EmpleadomoduloPeer::IDMODULO, $modulo->getIdmodulo(), $comparison);
        } elseif ($modulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadomoduloPeer::IDMODULO, $modulo->toKeyValue('PrimaryKey', 'Idmodulo'), $comparison);
        } else {
            throw new PropelException('filterByModulo() only accepts arguments of type Modulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Modulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function joinModulo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Modulo');

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
            $this->addJoinObject($join, 'Modulo');
        }

        return $this;
    }

    /**
     * Use the Modulo relation Modulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ModuloQuery A secondary query class using the current class as primary query
     */
    public function useModuloQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinModulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Modulo', 'ModuloQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleadomodulo $empleadomodulo Object to remove from the list of results
     *
     * @return EmpleadomoduloQuery The current query, for fluid interface
     */
    public function prune($empleadomodulo = null)
    {
        if ($empleadomodulo) {
            $this->addUsingAlias(EmpleadomoduloPeer::IDEMPLEADOMODULO, $empleadomodulo->getIdempleadomodulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
