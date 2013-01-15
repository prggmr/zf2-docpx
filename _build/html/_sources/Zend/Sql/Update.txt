.. /Db/Sql/Update.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Update
*********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$table = false])


    Constructor

    :param null|string $table: 



table
-----

.. function:: table($table)


    Specify table for statement

    :param string $table: 

    :rtype: Update 



set
---

.. function:: set($values, [$flag = "set"])


    Set key/value pairs to update

    :param array $values: Associative array of key values
    :param string $flag: One of the VALUES_* constants

    :throws Exception\InvalidArgumentException: 

    :rtype: Update 



where
-----

.. function:: where($predicate, [$combination = "AND"])


    Create where clause

    :param Where|\Closure|string|array $predicate: 
    :param string $combination: One of the OP_* constants from Predicate\PredicateSet

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



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



__get
-----

.. function:: __get($name)


    Variable overloading
    
    Proxies to "where" only

    :param string $name: 

    :rtype: mixed 



__clone
-------

.. function:: __clone()


    __clone
    
    Resets the where object each time the Update is cloned.

    :rtype: void 





Constants
---------

SPECIFICATION_UPDATE
++++++++++++++++++++

SPECIFICATION_WHERE
+++++++++++++++++++

VALUES_MERGE
++++++++++++

VALUES_SET
++++++++++

