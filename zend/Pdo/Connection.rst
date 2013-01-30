.. Db/Adapter/Driver/Pdo/Connection.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Pdo\\Connection
==========================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array|\PDO|null: 

    :throws Exception\InvalidArgumentException: 



setDriver
---------

.. function:: setDriver()


    Set driver

    :param Pdo: 

    :rtype: Connection 



setProfiler
-----------

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Connection 



getProfiler
-----------

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



getDriverName
-------------

.. function:: getDriverName()


    Get driver name

    :rtype: null|string 



setConnectionParameters
-----------------------

.. function:: setConnectionParameters()


    Set connection parameters

    :param array: 

    :rtype: void 



getConnectionParameters
-----------------------

.. function:: getConnectionParameters()


    Get connection parameters

    :rtype: array 



getCurrentSchema
----------------

.. function:: getCurrentSchema()


    Get current schema

    :rtype: string 



setResource
-----------

.. function:: setResource()


    Set resource

    :param \PDO: 

    :rtype: Connection 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: \PDO 



connect
-------

.. function:: connect()


    Connect

    :rtype: Connection 

    :throws: Exception\InvalidConnectionParametersException 
    :throws: Exception\RuntimeException 



isConnected
-----------

.. function:: isConnected()


    Is connected

    :rtype: bool 



disconnect
----------

.. function:: disconnect()


    Disconnect

    :rtype: Connection 



beginTransaction
----------------

.. function:: beginTransaction()


    Begin transaction

    :rtype: Connection 



commit
------

.. function:: commit()


    Commit

    :rtype: Connection 



rollback
--------

.. function:: rollback()


    Rollback

    :rtype: Connection 

    :throws: Exception\RuntimeException 



execute
-------

.. function:: execute()


    Execute

    :param $sql: 

    :rtype: Result 

    :throws: Exception\InvalidQueryException 



prepare
-------

.. function:: prepare()


    Prepare

    :param string: 

    :rtype: Statement 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    Get last generated id

    :param string: 

    :rtype: integer|null|false 



