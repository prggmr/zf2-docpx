.. /Db/Adapter/Driver/Mysqli/Mysqli.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Mysqli\\Mysqli
*****************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($connection, [$statementPrototype = false, [$resultPrototype = false, [$options = false]]])


    Constructor

    :param array|Connection|\mysqli $connection: 
    :param null|Statement $statementPrototype: 
    :param null|Result $resultPrototype: 
    :param array $options: 



registerConnection
------------------

.. function:: registerConnection($connection)


    Register connection

    :param Connection $connection: 

    :rtype: Mysqli 



registerStatementPrototype
--------------------------

.. function:: registerStatementPrototype($statementPrototype)


    Register statement prototype

    :param Statement $statementPrototype: 



getStatementPrototype
---------------------

.. function:: getStatementPrototype()


    Get statement prototype

    :rtype: null|Statement 



registerResultPrototype
-----------------------

.. function:: registerResultPrototype($resultPrototype)


    Register result prototype

    :param Result $resultPrototype: 



getResultPrototype
------------------

.. function:: getResultPrototype()


    @return null|Result



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


    :rtype: void 



getConnection
-------------

.. function:: getConnection()


    Get connection

    :rtype: Connection 



createStatement
---------------

.. function:: createStatement([$sqlOrResource = false])


    Create statement

    :param string $sqlOrResource: 

    :rtype: Statement 



createResult
------------

.. function:: createResult($resource, [$isBuffered = false])


    Create result

    :param resource $resource: 
    :param null|bool $isBuffered: 

    :rtype: Result 



getPrepareType
--------------

.. function:: getPrepareType()


    Get prepare type

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





