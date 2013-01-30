.. Db/Adapter/Driver/Pgsql/Connection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pgsql\\Connection
============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param resource|array|null: 



setConnectionParameters
+++++++++++++++++++++++

.. function:: setConnectionParameters()


    Set connection parameters

    :param array: 

    :rtype: Connection 



setDriver
+++++++++

.. function:: setDriver()


    Set driver

    :param Pgsql: 

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



setResource
+++++++++++

.. function:: setResource()


    Set resource

    :param resource: 

    :rtype: Connection 



getCurrentSchema
++++++++++++++++

.. function:: getCurrentSchema()


    Get current schema

    :rtype: null|string 



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: resource 



connect
+++++++

.. function:: connect()


    Connect to the database

    :rtype: void 

    :throws: Exception\RuntimeException on failure



array
+++++

.. function:: array()



isConnected
+++++++++++

.. function:: isConnected()


    @return bool



disconnect
++++++++++

.. function:: disconnect()


    @return void



beginTransaction
++++++++++++++++

.. function:: beginTransaction()


    @return void



commit
++++++

.. function:: commit()


    @return void



rollback
++++++++

.. function:: rollback()


    @return void



execute
+++++++

.. function:: execute()


    @param  string $sql


    :rtype: resource|\Zend\Db\ResultSet\ResultSetInterface 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    @param  null $name Ignored

    :rtype: string 



