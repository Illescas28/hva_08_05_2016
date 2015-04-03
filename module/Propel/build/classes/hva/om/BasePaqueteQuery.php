<?php


/**
 * Base class that represents a query for the 'paquete' table.
 *
 *
 *
 * @method PaqueteQuery orderByIdpaquete($order = Criteria::ASC) Order by the idpaquete column
 * @method PaqueteQuery orderByPaqueteNombre($order = Criteria::ASC) Order by the paquete_nombre column
 * @method PaqueteQuery orderByPaqueteDescripcion($order = Criteria::ASC) Order by the paquete_descripcion column
 *
 * @method PaqueteQuery groupByIdpaquete() Group by the idpaquete column
 * @method PaqueteQuery groupByPaqueteNombre() Group by the paquete_nombre column
 * @method PaqueteQuery groupByPaqueteDescripcion() Group by the paquete_descripcion column
 *
 * @method PaqueteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PaqueteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PaqueteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PaqueteQuery leftJoinPaquetedetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paquetedetalle relation
 * @method PaqueteQuery rightJoinPaquetedetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paquetedetalle relation
 * @method PaqueteQuery innerJoinPaquetedetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Paquetedetalle relation
 *
 * @method Paquete findOne(PropelPDO $con = null) Return the first Paquete matching the query
 * @method Paquete findOneOrCreate(PropelPDO $con = null) Return the first Paquete matching the query, or a new Paquete object populated from the query conditions when no match is found
 *
 * @method Paquete findOneByPaqueteNombre(string $paquete_nombre) Return the first Paquete filtered by the paquete_nombre column
 * @method Paquete findOneByPaqueteDescripcion(string $paquete_descripcion) Return the first Paquete filtered by the paquete_descripcion column
 *
 * @method array findByIdpaquete(int $idpaquete) Return Paquete objects filtered by the idpaquete column
 * @method array findByPaqueteNombre(string $paquete_nombre) Return Paquete objects filtered by the paquete_nombre column
 * @method array findByPaqueteDescripcion(string $paquete_descripcion) Return Paquete objects filtered by the paquete_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePaqueteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePaqueteQuery object.
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
            $modelName = 'Paquete';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PaqueteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PaqueteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PaqueteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PaqueteQuery) {
            return $criteria;
        }
        $query = new PaqueteQuery(null, null, $modelAlias);

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
     * @return   Paquete|Paquete[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PaquetePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PaquetePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Paquete A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpaquete($key, $con = null)
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
     * @return                 Paquete A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpaquete`, `paquete_nombre`, `paquete_descripcion` FROM `paquete` WHERE `idpaquete` = :p0';
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
            $obj = new Paquete();
            $obj->hydrate($row);
            PaquetePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Paquete|Paquete[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Paquete[]|mixed the list of results, formatted by the current formatter
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
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PaquetePeer::IDPAQUETE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PaquetePeer::IDPAQUETE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpaquete column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaquete(1234); // WHERE idpaquete = 1234
     * $query->filterByIdpaquete(array(12, 34)); // WHERE idpaquete IN (12, 34)
     * $query->filterByIdpaquete(array('min' => 12)); // WHERE idpaquete >= 12
     * $query->filterByIdpaquete(array('max' => 12)); // WHERE idpaquete <= 12
     * </code>
     *
     * @param     mixed $idpaquete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function filterByIdpaquete($idpaquete = null, $comparison = null)
    {
        if (is_array($idpaquete)) {
            $useMinMax = false;
            if (isset($idpaquete['min'])) {
                $this->addUsingAlias(PaquetePeer::IDPAQUETE, $idpaquete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaquete['max'])) {
                $this->addUsingAlias(PaquetePeer::IDPAQUETE, $idpaquete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetePeer::IDPAQUETE, $idpaquete, $comparison);
    }

    /**
     * Filter the query on the paquete_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPaqueteNombre('fooValue');   // WHERE paquete_nombre = 'fooValue'
     * $query->filterByPaqueteNombre('%fooValue%'); // WHERE paquete_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paqueteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function filterByPaqueteNombre($paqueteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paqueteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paqueteNombre)) {
                $paqueteNombre = str_replace('*', '%', $paqueteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PaquetePeer::PAQUETE_NOMBRE, $paqueteNombre, $comparison);
    }

    /**
     * Filter the query on the paquete_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByPaqueteDescripcion('fooValue');   // WHERE paquete_descripcion = 'fooValue'
     * $query->filterByPaqueteDescripcion('%fooValue%'); // WHERE paquete_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paqueteDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function filterByPaqueteDescripcion($paqueteDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paqueteDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paqueteDescripcion)) {
                $paqueteDescripcion = str_replace('*', '%', $paqueteDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PaquetePeer::PAQUETE_DESCRIPCION, $paqueteDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Paquetedetalle object
     *
     * @param   Paquetedetalle|PropelObjectCollection $paquetedetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PaqueteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaquetedetalle($paquetedetalle, $comparison = null)
    {
        if ($paquetedetalle instanceof Paquetedetalle) {
            return $this
                ->addUsingAlias(PaquetePeer::IDPAQUETE, $paquetedetalle->getIdpaquete(), $comparison);
        } elseif ($paquetedetalle instanceof PropelObjectCollection) {
            return $this
                ->usePaquetedetalleQuery()
                ->filterByPrimaryKeys($paquetedetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPaquetedetalle() only accepts arguments of type Paquetedetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paquetedetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function joinPaquetedetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paquetedetalle');

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
            $this->addJoinObject($join, 'Paquetedetalle');
        }

        return $this;
    }

    /**
     * Use the Paquetedetalle relation Paquetedetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PaquetedetalleQuery A secondary query class using the current class as primary query
     */
    public function usePaquetedetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaquetedetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paquetedetalle', 'PaquetedetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Paquete $paquete Object to remove from the list of results
     *
     * @return PaqueteQuery The current query, for fluid interface
     */
    public function prune($paquete = null)
    {
        if ($paquete) {
            $this->addUsingAlias(PaquetePeer::IDPAQUETE, $paquete->getIdpaquete(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
