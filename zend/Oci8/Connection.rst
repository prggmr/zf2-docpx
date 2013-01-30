.. Db/Adapter/Driver/Oci8/Connection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Oci8\\Connection
===========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|resource|null: 

    :throws \Zend\Db\Adapter\Exception\InvalidArgumentException: 



setDriver
+++++++++

.. function:: setDriver()


    @param Oci8 $driver

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

    :param resource: 

    :rtype: Connection 



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: \oci8 



connect
+++++++

.. function:: connect()


    Connect

    :rtype: null 



array
+++++

.. function:: array()



isConnected
+++++++++++

.. function:: isConnected()


    Is connected

    :rtype: boolean 



disconnect
++++++++++

.. function:: disconnect()


    Disconnect



beginTransaction
++++++++++++++++

.. function:: beginTransaction()


    Begin transaction



commit
++++++

.. function:: commit()


    Commit



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

    :rtype: Result 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    Get last generated id

    :param null: Ignored

    :rtype: integer 



