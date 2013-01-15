.. /Db/Adapter/Driver/Pgsql/Pgsql.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pgsql\\Pgsql
***************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($connection, [$statementPrototype = false, [$resultPrototype = false, [$options = false]]])


    Constructor

    :param array|Connection|resource $connection: 
    :param null|Statement $statementPrototype: 
    :param null|Result $resultPrototype: 
    :param array $options: 



registerConnection
------------------

.. function:: registerConnection($connection)


    Register connection

    :param Connection $connection: 

    :rtype: Pgsql 



registerStatementPrototype
--------------------------

.. function:: registerStatementPrototype($statement)


    Register statement prototype

    :param Statement $statement: 

    :rtype: Pgsql 



registerResultPrototype
-----------------------

.. function:: registerResultPrototype($result)


    Register result prototype

    :param Result $result: 

    :rtype: Pgsql 



getDatabasePlatformName
-----------------------

.. function:: getDatabasePlatformName([$nameFormat = "camelCase"])


    Get database platform name

    :param string $nameFormat: 

    :rtype: string 



checkEnvironment
----------------

.. function:: checkEnvironment()


    Check environment


    :rtype: bool 



getConnection
-------------

.. function:: getConnection()


    Get connection

    :rtype: Connection 



createStatement
---------------

.. function:: createStatement([$sqlOrResource = false])


    Create statement

    :param string|null $sqlOrResource: 

    :rtype: Statement 



createResult
------------

.. function:: createResult($resource)


    Create result

    :param resource $resource: 

    :rtype: Result 



getPrepareType
--------------

.. function:: getPrepareType()


    Get prepare Type

    :rtype: array 



formatParameterName
-------------------

.. function:: formatParameterName($name, [$type = false])


    Format parameter name

    :param string $name: 
    :param mixed $type: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    Get last generated value

    :rtype: mixed 





