.. /Db/Adapter/Driver/Mysqli/Connection.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Mysqli\\Connection
*********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$connectionInfo = false])


    Constructor

    :param array|mysqli|null $connectionInfo: 

    :throws \Zend\Db\Adapter\Exception\InvalidArgumentException: 



setDriver
---------

.. function:: setDriver($driver)


    @param Mysqli $driver

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

    :param mysqli $resource: 

    :rtype: Connection 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: \mysqli 



connect
-------

.. function:: connect()


    Connect


    :rtype: void 



array
-----

.. function:: array()



isConnected
-----------

.. function:: isConnected()


    Is connected

    :rtype: bool 



disconnect
----------

.. function:: disconnect()


    Disconnect

    :rtype: void 



beginTransaction
----------------

.. function:: beginTransaction()


    Begin transaction

    :rtype: void 



commit
------

.. function:: commit()


    Commit

    :rtype: void 



rollback
--------

.. function:: rollback()


    Rollback


    :rtype: Connection 



execute
-------

.. function:: execute($sql)


    Execute

    :param string $sql: 

    :throws Exception\InvalidQueryException: 

    :rtype: Result 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue([$name = false])


    Get last generated id

    :param null $name: Ignored

    :rtype: integer 





