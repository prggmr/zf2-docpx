.. /Db/Adapter/Driver/Pgsql/Connection.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pgsql\\Connection
********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$connectionInfo = false])


    Constructor

    :param resource|array|null $connectionInfo: 



setConnectionParameters
-----------------------

.. function:: setConnectionParameters($connectionParameters)


    Set connection parameters

    :param array $connectionParameters: 

    :rtype: Connection 



setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Pgsql $driver: 

    :rtype: Connection 



setResource
-----------

.. function:: setResource($resource)


    Set resource

    :param resource $resource: 

    :rtype: Connection 



getCurrentSchema
----------------

.. function:: getCurrentSchema()


    Get current schema

    :rtype: null|string 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: resource 



connect
-------

.. function:: connect()


    Connect to the database

    :rtype: void 

    :throws: Exception\RuntimeException on failure



array
-----

.. function:: array()



isConnected
-----------

.. function:: isConnected()


    @return bool



disconnect
----------

.. function:: disconnect()


    @return void



beginTransaction
----------------

.. function:: beginTransaction()


    @return void



commit
------

.. function:: commit()


    @return void



rollback
--------

.. function:: rollback()


    @return void



execute
-------

.. function:: execute($sql)


    @param  string $sql


    :rtype: resource|\Zend\Db\ResultSet\ResultSetInterface 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue([$name = false])


    @param  null $name Ignored

    :rtype: string 





