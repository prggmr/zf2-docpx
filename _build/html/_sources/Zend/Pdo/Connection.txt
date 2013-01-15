.. /Db/Adapter/Driver/Pdo/Connection.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pdo\\Connection
******************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$connectionParameters = false])


    Constructor

    :param array|\PDO|null $connectionParameters: 

    :throws Exception\InvalidArgumentException: 



setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Pdo $driver: 

    :rtype: Connection 



getDriverName
-------------

.. function:: getDriverName()


    Get driver name

    :rtype: null|string 



setConnectionParameters
-----------------------

.. function:: setConnectionParameters($connectionParameters)


    Set connection parameters

    :param array $connectionParameters: 

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

.. function:: setResource($resource)


    Set resource

    :param \PDO $resource: 

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

.. function:: execute($sql)


    Execute

    :param $sql: 

    :rtype: Result 

    :throws: Exception\InvalidQueryException 



prepare
-------

.. function:: prepare($sql)


    Prepare

    :param string $sql: 

    :rtype: Statement 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue([$name = false])


    Get last generated id

    :param string $name: 

    :rtype: integer|null|false 





