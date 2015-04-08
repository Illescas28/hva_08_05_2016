<?php


/**
 * Base class that represents a query for the 'paquetedetalle' table.
 *
 *
 *
 * @method PaquetedetalleQuery orderByIdpaquetedetalle($order = Criteria::ASC) Order by the idpaquetedetalle column
 * @method PaquetedetalleQuery orderByIdpaquete($order = Criteria::ASC) Order by the idpaquete column
 * @method PaquetedetalleQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method PaquetedetalleQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method PaquetedetalleQuery orderByPaquetedetalleTipo($order = Criteria::ASC) Order by the paquetedetalle_tipo column
 * @method PaquetedetalleQuery orderByPaquetedetalleCantidad($order = Criteria::ASC) Order by the paquetedetalle_cantidad column
 *
 * @method PaquetedetalleQuery groupByIdpaquetedetalle() Group by the idpaquetedetalle column
 * @method PaquetedetalleQuery groupByIdpaquete() Group by the idpaquete column
 * @method PaquetedetalleQuery groupByIdarticulo() Group by the idarticulo column
 * @method PaquetedetalleQuery groupByIdservicio() Group by the idservicio column
 * @method PaquetedetalleQuery groupByPaquetedetalleTipo() Group by the paquetedetalle_tipo column
 * @method PaquetedetalleQuery groupByPaquetedetalleCantidad() Group by the paquetedetalle_cantidad column
 *
 * @method PaquetedetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PaquetedetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PaquetedetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PaquetedetalleQuery leftJoinArticulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulo relation
 * @method PaquetedetalleQuery rightJoinArticulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulo relation
 * @method PaquetedetalleQuery innerJoinArticulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulo relation
 *
 * @method PaquetedetalleQuery leftJoinPaquete($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paquete relation
 * @method PaquetedetalleQuery rightJoinPaquete($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paquete relation
 * @method PaquetedetalleQuery innerJoinPaquete($relationAlias = null) Adds a INNER JOIN clause to the query using the Paquete relation
 *
 * @method Paquetedetalle findOne(PropelPDO $con = null) Return the first Paquetedetalle matching the query
 * @method Paquetedetalle findOneOrCreate(PropelPDO $con = null) Return the first Paquetedetalle matching the query, or a new Paquetedetalle object populated from the query conditions when no match is found
 *
 * @method Paquetedetalle findOneByIdpaquete(int $idpaquete) Return the first Paquetedetalle filtered by the idpaquete column
 * @method Paquetedetalle findOneByIdarticulo(int $idarticulo) Return the first Paquetedetalle filtered by the idarticulo column
 * @method Paquetedetalle findOneByIdservicio(int $idservicio) Return the first Paquetedetalle filtered by the idservicio column
 * @method Paquetedetalle findOneByPaquetedetalleTipo(string $paquetedetalle_tipo) Return the first Paquetedetalle filtered by the paquetedetalle_tipo column
 * @method Paquetedetalle findOneByPaquetedetalleCantidad(string $paquetedetalle_cantidad) Return the first Paquetedetalle filtered by the paquetedetalle_cantidad column
 *
 * @method array findByIdpaquetedetalle(int $idpaquetedetalle) Return Paquetedetalle objects filtered by the idpaquetedetalle column
 * @method array findByIdpaquete(int $idpaquete) Return Paquetedetalle objects filtered by the idpaquete column
 * @method array findByIdarticulo(int $idarticulo) Return Paquetedetalle objects filtered by the idarticulo column
 * @method array findByIdservicio(int $idservicio) Return Paquetedetalle objects filtered by the idservicio column
 * @method array findByPaquetedetalleTipo(string $paquetedetalle_tipo) Return Paquetedetalle objects filtered by the paquetedetalle_tipo column
 * @method array findByPaquetedetalleCantidad(string $paquetedetalle_cantidad) Return Paquetedetalle objects filtered by the paquetedetalle_cantidad column
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePaquetedetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePaquetedetalleQuery object.
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
            $modelName = 'Paquetedetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PaquetedetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PaquetedetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PaquetedetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PaquetedetalleQuery) {
            return $criteria;
        }
        $query = new PaquetedetalleQuery(null, null, $modelAlias);

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
     * @return   Paquetedetalle|Paquetedetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PaquetedetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PaquetedetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Paquetedetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpaquetedetalle($key, $con = null)
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
     * @return                 Paquetedetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpaquetedetalle`, `idpaquete`, `idarticulo`, `idservicio`, `paquetedetalle_tipo`, `paquetedetalle_cantidad` FROM `paquetedetalle` WHERE `idpaquetedetalle` = :p0';
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
            $obj = new Paquetedetalle();
            $obj->hydrate($row);
            PaquetedetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Paquetedetalle|Paquetedetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Paquetedetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpaquetedetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaquetedetalle(1234); // WHERE idpaquetedetalle = 1234
     * $query->filterByIdpaquetedetalle(array(12, 34)); // WHERE idpaquetedetalle IN (12, 34)
     * $query->filterByIdpaquetedetalle(array('min' => 12)); // WHERE idpaquetedetalle >= 12
     * $query->filterByIdpaquetedetalle(array('max' => 12)); // WHERE idpaquetedetalle <= 12
     * </code>
     *
     * @param     mixed $idpaquetedetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByIdpaquetedetalle($idpaquetedetalle = null, $comparison = null)
    {
        if (is_array($idpaquetedetalle)) {
            $useMinMax = false;
            if (isset($idpaquetedetalle['min'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $idpaquetedetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaquetedetalle['max'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $idpaquetedetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $idpaquetedetalle, $comparison);
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
     * @see       filterByPaquete()
     *
     * @param     mixed $idpaquete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByIdpaquete($idpaquete = null, $comparison = null)
    {
        if (is_array($idpaquete)) {
            $useMinMax = false;
            if (isset($idpaquete['min'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDPAQUETE, $idpaquete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaquete['max'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDPAQUETE, $idpaquete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::IDPAQUETE, $idpaquete, $comparison);
    }

    /**
     * Filter the query on the idarticulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulo(1234); // WHERE idarticulo = 1234
     * $query->filterByIdarticulo(array(12, 34)); // WHERE idarticulo IN (12, 34)
     * $query->filterByIdarticulo(array('min' => 12)); // WHERE idarticulo >= 12
     * $query->filterByIdarticulo(array('max' => 12)); // WHERE idarticulo <= 12
     * </code>
     *
     * @see       filterByArticulo()
     *
     * @param     mixed $idarticulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::IDARTICULO, $idarticulo, $comparison);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(PaquetedetallePeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the paquetedetalle_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByPaquetedetalleTipo('fooValue');   // WHERE paquetedetalle_tipo = 'fooValue'
     * $query->filterByPaquetedetalleTipo('%fooValue%'); // WHERE paquetedetalle_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paquetedetalleTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByPaquetedetalleTipo($paquetedetalleTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paquetedetalleTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paquetedetalleTipo)) {
                $paquetedetalleTipo = str_replace('*', '%', $paquetedetalleTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::PAQUETEDETALLE_TIPO, $paquetedetalleTipo, $comparison);
    }

    /**
     * Filter the query on the paquetedetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPaquetedetalleCantidad(1234); // WHERE paquetedetalle_cantidad = 1234
     * $query->filterByPaquetedetalleCantidad(array(12, 34)); // WHERE paquetedetalle_cantidad IN (12, 34)
     * $query->filterByPaquetedetalleCantidad(array('min' => 12)); // WHERE paquetedetalle_cantidad >= 12
     * $query->filterByPaquetedetalleCantidad(array('max' => 12)); // WHERE paquetedetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $paquetedetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function filterByPaquetedetalleCantidad($paquetedetalleCantidad = null, $comparison = null)
    {
        if (is_array($paquetedetalleCantidad)) {
            $useMinMax = false;
            if (isset($paquetedetalleCantidad['min'])) {
                $this->addUsingAlias(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD, $paquetedetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paquetedetalleCantidad['max'])) {
                $this->addUsingAlias(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD, $paquetedetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaquetedetallePeer::PAQUETEDETALLE_CANTIDAD, $paquetedetalleCantidad, $comparison);
    }

    /**
     * Filter the query by a related Articulo object
     *
     * @param   Articulo|PropelObjectCollection $articulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PaquetedetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulo($articulo, $comparison = null)
    {
        if ($articulo instanceof Articulo) {
            return $this
                ->addUsingAlias(PaquetedetallePeer::IDARTICULO, $articulo->getIdarticulo(), $comparison);
        } elseif ($articulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PaquetedetallePeer::IDARTICULO, $articulo->toKeyValue('PrimaryKey', 'Idarticulo'), $comparison);
        } else {
            throw new PropelException('filterByArticulo() only accepts arguments of type Articulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Articulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function joinArticulo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Articulo');

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
            $this->addJoinObject($join, 'Articulo');
        }

        return $this;
    }

    /**
     * Use the Articulo relation Articulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArticuloQuery A secondary query class using the current class as primary query
     */
    public function useArticuloQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinArticulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Articulo', 'ArticuloQuery');
    }

    /**
     * Filter the query by a related Paquete object
     *
     * @param   Paquete|PropelObjectCollection $paquete The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PaquetedetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaquete($paquete, $comparison = null)
    {
        if ($paquete instanceof Paquete) {
            return $this
                ->addUsingAlias(PaquetedetallePeer::IDPAQUETE, $paquete->getIdpaquete(), $comparison);
        } elseif ($paquete instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PaquetedetallePeer::IDPAQUETE, $paquete->toKeyValue('PrimaryKey', 'Idpaquete'), $comparison);
        } else {
            throw new PropelException('filterByPaquete() only accepts arguments of type Paquete or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paquete relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function joinPaquete($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paquete');

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
            $this->addJoinObject($join, 'Paquete');
        }

        return $this;
    }

    /**
     * Use the Paquete relation Paquete object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PaqueteQuery A secondary query class using the current class as primary query
     */
    public function usePaqueteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaquete($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paquete', 'PaqueteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Paquetedetalle $paquetedetalle Object to remove from the list of results
     *
     * @return PaquetedetalleQuery The current query, for fluid interface
     */
    public function prune($paquetedetalle = null)
    {
        if ($paquetedetalle) {
            $this->addUsingAlias(PaquetedetallePeer::IDPAQUETEDETALLE, $paquetedetalle->getIdpaquetedetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
