.. /Db/Sql/Insert.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Sql\\Insert
*********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$table = false])


    Constructor

    :param null|string $table: 



into
----

.. function:: into($table)


    Crete INTO clause

    :param string $table: 

    :rtype: Insert 



columns
-------

.. function:: columns($columns)


    Specify columns

    :param array $columns: 

    :rtype: Insert 



values
------

.. function:: values($values, [$flag = "set"])


    Specify values to insert

    :param array $values: 
    :param string $flag: one of VALUES_MERGE or VALUES_SET; defaults to VALUES_SET

    :throws Exception\InvalidArgumentException: 

    :rtype: Insert 



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


    Get SQL string for this statement

    :param null|PlatformInterface $adapterPlatform: Defaults to Sql92 if none provided

    :rtype: string 



__set
-----

.. function:: __set($name, $value)


    Overloading: variable setting
    
    Proxies to values, using VALUES_MERGE strategy

    :param string $name: 
    :param mixed $value: 

    :rtype: Insert 



__unset
-------

.. function:: __unset($name)


    Overloading: variable unset
    
    Proxies to values and columns

    :param string $name: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



__isset
-------

.. function:: __isset($name)


    Overloading: variable isset
    
    Proxies to columns; does a column of that name exist?

    :param string $name: 

    :rtype: bool 



__get
-----

.. function:: __get($name)


    Overloading: variable retrieval
    
    Retrieves value by column name

    :param string $name: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 





Constants
---------

SPECIFICATION_INSERT
++++++++++++++++++++

VALUES_MERGE
++++++++++++

VALUES_SET
++++++++++

