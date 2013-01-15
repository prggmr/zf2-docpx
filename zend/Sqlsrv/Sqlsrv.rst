.. /Db/Adapter/Driver/Sqlsrv/Sqlsrv.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Sqlsrv
*****************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($connection, [$statementPrototype = false, [$resultPrototype = false]])


    @param array|Connection|resource $connection

    :param null|Statement $statementPrototype: 
    :param null|Result $resultPrototype: 



registerConnection
------------------

.. function:: registerConnection($connection)


    Register connection

    :param Connection $connection: 

    :rtype: Sqlsrv 



registerStatementPrototype
--------------------------

.. function:: registerStatementPrototype($statementPrototype)


    Register statement prototype

    :param Statement $statementPrototype: 

    :rtype: Sqlsrv 



registerResultPrototype
-----------------------

.. function:: registerResultPrototype($resultPrototype)


    Register result prototype

    :param Result $resultPrototype: 

    :rtype: Sqlsrv 



getDatabasePlatformName
-----------------------

.. function:: getDatabasePlatformName([$nameFormat = "camelCase"])


    Get database paltform name

    :param string $nameFormat: 

    :rtype: string 



checkEnvironment
----------------

.. function:: checkEnvironment()


    Check environment


    :rtype: void 



getConnection
-------------

.. function:: getConnection()


    @return Connection



createStatement
---------------

.. function:: createStatement([$sqlOrResource = false])


    @param string|resource $sqlOrResource

    :rtype: Statement 



createResult
------------

.. function:: createResult($resource)


    @param resource $resource

    :rtype: Result 



getPrepareType
--------------

.. function:: getPrepareType()


    @return array



formatParameterName
-------------------

.. function:: formatParameterName($name, [$type = false])


    @param string $name

    :param mixed $type: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    @return mixed





