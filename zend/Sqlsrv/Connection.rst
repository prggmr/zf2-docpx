.. Db/Adapter/Driver/Sqlsrv/Connection.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Connection
=============================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array|resource: 

    :throws \Zend\Db\Adapter\Exception\InvalidArgumentException: 



setDriver
---------

.. function:: setDriver()


    Set driver

    :param Sqlsrv: 

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



setConnectionParameters
-----------------------

.. function:: setConnectionParameters()


    Set connection parameters

    :param array: 

    :rtype: Connection 



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

    :param resource: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Connection 



getResource
-----------

.. function:: getResource()


    @return resource



connect
-------

.. function:: connect()


    Connect


    :rtype: null 



isConnected
-----------

.. function:: isConnected()


    Is connected

    :rtype: bool 



disconnect
----------

.. function:: disconnect()


    Disconnect



beginTransaction
----------------

.. function:: beginTransaction()


    Begin transaction



commit
------

.. function:: commit()


    Commit



rollback
--------

.. function:: rollback()


    Rollback



execute
-------

.. function:: execute()


    Execute

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: mixed 



prepare
-------

.. function:: prepare()


    Prepare

    :param string: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    Get last generated id

    :param string: 

    :rtype: mixed 



