.. Db/Sql/Select.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Sql\\Select
=====================

@property Where $where

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|string: 



from
----

.. function:: from()


    Create from clause

    :param string|array|TableIdentifier: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



columns
-------

.. function:: columns()


    Specify columns from which to select
    
    Possible valid states:
    
      array(*)
    
      array(value, ...)
        value can be strings or Expression objects
    
      array(string => value, ...)
        key string will be use as alias,
        value can be string or Expression objects

    :param array: 
    :param bool: 

    :rtype: Select 



join
----

.. function:: join()


    Create join clause

    :param string|array: 
    :param string: 
    :param string|array: 
    :param string: one of the JOIN_* constants

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



where
-----

.. function:: where()


    Create where clause

    :param Where|\Closure|string|array|Predicate\PredicateInterface: 
    :param string: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Select 



group
-----

.. function:: group()



having
------

.. function:: having()


    Create where clause

    :param Where|\Closure|string|array: 
    :param string: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Select 



order
-----

.. function:: order()


    @param string|array $order

    :rtype: Select 



limit
-----

.. function:: limit()


    @param int $limit

    :rtype: Select 



offset
------

.. function:: offset()


    @param int $offset

    :rtype: Select 



reset
-----

.. function:: reset()


    @param string $part

    :rtype: Select 

    :throws: Exception\InvalidArgumentException 



setSpecification
----------------

.. function:: setSpecification()



getRawState
-----------

.. function:: getRawState()



prepareStatement
----------------

.. function:: prepareStatement()


    Prepare statement

    :param AdapterInterface: 
    :param StatementContainerInterface: 

    :rtype: void 



getSqlString
------------

.. function:: getSqlString()


    Get SQL string for statement

    :param null|PlatformInterface: If null, defaults to Sql92

    :rtype: string 



isTableReadOnly
---------------

.. function:: isTableReadOnly()


    Returns whether the table is read only or not.

    :rtype: boolean 



processSelect
-------------

.. function:: processSelect()



processJoins
------------

.. function:: processJoins()



processWhere
------------

.. function:: processWhere()



processGroup
------------

.. function:: processGroup()



processHaving
-------------

.. function:: processHaving()



processOrder
------------

.. function:: processOrder()



processLimit
------------

.. function:: processLimit()


    @var $orderParts \Zend\Db\Adapter\StatementContainer */



processOffset
-------------

.. function:: processOffset()



__get
-----

.. function:: __get()


    Variable overloading

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



__clone
-------

.. function:: __clone()


    __clone
    
    Resets the where object each time the Select is cloned.

    :rtype: void 





Constants
+++++++++

SELECT
======

COLUMNS
=======

TABLE
=====

JOINS
=====

WHERE
=====

GROUP
=====

HAVING
======

ORDER
=====

LIMIT
=====

OFFSET
======

JOIN_INNER
==========

JOIN_OUTER
==========

JOIN_LEFT
=========

JOIN_RIGHT
==========

SQL_STAR
========

ORDER_ASCENDING
===============

ORDER_DESCENDING
================

