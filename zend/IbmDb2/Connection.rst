.. Db/Adapter/Driver/IbmDb2/Connection.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\IbmDb2\\Connection
=============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|resource|null: (ibm_db2 connection resource)

    :throws Exception\InvalidArgumentException: 



setDriver
+++++++++

.. function:: setDriver()


    Set driver

    :param IbmDb2: 

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


    @param array $connectionParameters

    :rtype: Connection 



getConnectionParameters
+++++++++++++++++++++++

.. function:: getConnectionParameters()


    @return array



setResource
+++++++++++

.. function:: setResource()


    @param  resource $resource DB2 resource

    :rtype: Connection 



getCurrentSchema
++++++++++++++++

.. function:: getCurrentSchema()


    Get current schema

    :rtype: string 



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: mixed 



connect
+++++++

.. function:: connect()


    Connect

    :rtype: ConnectionInterface 



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

    :rtype: ConnectionInterface 



beginTransaction
++++++++++++++++

.. function:: beginTransaction()


    Begin transaction

    :rtype: ConnectionInterface 



commit
++++++

.. function:: commit()


    Commit

    :rtype: ConnectionInterface 



rollback
++++++++

.. function:: rollback()


    Rollback

    :rtype: ConnectionInterface 



execute
+++++++

.. function:: execute()


    Execute

    :param string: 

    :rtype: ResultInterface 



E_WARNING
+++++++++

.. function:: E_WARNING()



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    Get last generated id

    :param null: Ignored

    :rtype: integer 



