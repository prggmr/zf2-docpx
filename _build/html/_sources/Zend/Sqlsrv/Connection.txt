.. /Db/Adapter/Driver/Sqlsrv/Connection.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Connection
*********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($connectionInfo)


    Constructor

    :param array|resource $connectionInfo: 

    :throws \Zend\Db\Adapter\Exception\InvalidArgumentException: 



setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Sqlsrv $driver: 

    :rtype: Connection 



setConnectionParameters
-----------------------

.. function:: setConnectionParameters($connectionParameters)


    Set connection parameters

    :param array $connectionParameters: 

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

.. function:: setResource($resource)


    Set resource

    :param resource $resource: 

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

.. function:: execute($sql)


    Execute

    :param string $sql: 

    :throws Exception\RuntimeException: 

    :rtype: mixed 



prepare
-------

.. function:: prepare($sql)


    Prepare

    :param string $sql: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue([$name = false])


    Get last generated id

    :param string $name: 

    :rtype: mixed 





