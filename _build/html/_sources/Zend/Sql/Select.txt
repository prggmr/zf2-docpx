.. /Db/Sql/Select.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Select
*********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$table = false])


    Constructor

    :param null|string $table: 



from
----

.. function:: from($table)


    Create from clause

    :param string|array|TableIdentifier $table: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



columns
-------

.. function:: columns($columns, [$prefixColumnsWithTable = true])


    Specify columns from which to select
    
    Possible valid states:
    
      array(*)
    
      array(value, ...)
        value can be strings or Expression objects
    
      array(string => value, ...)
        key string will be use as alias,
        value can be string or Expression objects

    :param array $columns: 
    :param bool $prefixColumnsWithTable: 

    :rtype: Select 



join
----

.. function:: join($name, $on, [$columns = "*", [$type = "inner"]])


    Create join clause

    :param string|array $name: 
    :param string $on: 
    :param string|array $columns: 
    :param string $type: one of the JOIN_* constants

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



where
-----

.. function:: where($predicate, [$combination = "AND"])


    Create where clause

    :param Where|\Closure|string|array $predicate: 
    :param string $combination: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Select 



group
-----

.. function:: group($group)



having
------

.. function:: having($predicate, [$combination = "AND"])


    Create where clause

    :param Where|\Closure|string|array $predicate: 
    :param string $combination: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Select 



order
-----

.. function:: order($order)


    @param string|array $order

    :rtype: Select 



limit
-----

.. function:: limit($limit)


    @param int $limit

    :rtype: Select 



offset
------

.. function:: offset($offset)


    @param int $offset

    :rtype: Select 



reset
-----

.. function:: reset($part)


    @param string $part

    :rtype: Select 

    :throws: Exception\InvalidArgumentException 



setSpecification
----------------

.. function:: setSpecification($index, $specification)



getRawState
-----------

.. function:: getRawState([$key = false])



prepareStatement
----------------

.. function:: prepareStatement($adapter, $statementContainer)


    Prepare statement

    :param Adapter $adapter: 
    :param StatementContainerInterface $statementContainer: 

    :rtype: void 



getSqlString
------------

.. function:: getSqlString([$adapterPlatform = false])


    Get SQL string for statement

    :param null|PlatformInterface $adapterPlatform: If null, defaults to Sql92

    :rtype: string 



processSelect
-------------

.. function:: processSelect($platform, [$adapter = false, [$parameterContainer = false]])



processJoins
------------

.. function:: processJoins($platform, [$adapter = false, [$parameterContainer = false]])



processWhere
------------

.. function:: processWhere($platform, [$adapter = false, [$parameterContainer = false]])



processGroup
------------

.. function:: processGroup($platform, [$adapter = false, [$parameterContainer = false]])



processHaving
-------------

.. function:: processHaving($platform, [$adapter = false, [$parameterContainer = false]])



processOrder
------------

.. function:: processOrder($platform, [$adapter = false, [$parameterContainer = false]])



processLimit
------------

.. function:: processLimit($platform, [$adapter = false, [$parameterContainer = false]])


    @var $orderParts \Zend\Db\Adapter\StatementContainer */



processOffset
-------------

.. function:: processOffset($platform, [$adapter = false, [$parameterContainer = false]])



__get
-----

.. function:: __get($name)


    Variable overloading

    :param string $name: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



__clone
-------

.. function:: __clone()


    __clone
    
    Resets the where object each time the Select is cloned.

    :rtype: void 





Constants
---------

SELECT
++++++

COLUMNS
+++++++

TABLE
+++++

JOINS
+++++

WHERE
+++++

GROUP
+++++

HAVING
++++++

ORDER
+++++

LIMIT
+++++

OFFSET
++++++

JOIN_INNER
++++++++++

JOIN_OUTER
++++++++++

JOIN_LEFT
+++++++++

JOIN_RIGHT
++++++++++

SQL_STAR
++++++++

ORDER_ASCENDING
+++++++++++++++

ORDER_DESCENDING
++++++++++++++++

