.. Db/Adapter/Driver/Mysqli/Connection.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Mysqli\\Connection
=============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|mysqli|null: 

    :throws \Zend\Db\Adapter\Exception\InvalidArgumentException: 



setDriver
+++++++++

.. function:: setDriver()


    @param Mysqli $driver

    :rtype: Connection 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Connection 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



setConnectionParameters
+++++++++++++++++++++++

.. function:: setConnectionParameters()


    Set connection parameters

    :param array: 

    :rtype: Connection 



getConnectionParameters
+++++++++++++++++++++++

.. function:: getConnectionParameters()


    Get connection parameters

    :rtype: array 



getCurrentSchema
++++++++++++++++

.. function:: getCurrentSchema()


    Get current schema

    :rtype: string 



setResource
+++++++++++

.. function:: setResource()


    Set resource

    :param mysqli: 

    :rtype: Connection 



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: \mysqli 



connect
+++++++

.. function:: connect()


    Connect


    :rtype: void 



array
+++++

.. function:: array()



isConnected
+++++++++++

.. function:: isConnected()


    Is connected

    :rtype: bool 



disconnect
++++++++++

.. function:: disconnect()


    Disconnect

    :rtype: void 



beginTransaction
++++++++++++++++

.. function:: beginTransaction()


    Begin transaction

    :rtype: void 



commit
++++++

.. function:: commit()


    Commit

    :rtype: void 



rollback
++++++++

.. function:: rollback()


    Rollback


    :rtype: Connection 



execute
+++++++

.. function:: execute()


    Execute

    :param string: 

    :throws Exception\InvalidQueryException: 

    :rtype: Result 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    Get last generated id

    :param null: Ignored

    :rtype: integer 



