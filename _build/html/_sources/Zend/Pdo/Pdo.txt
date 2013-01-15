.. /Db/Adapter/Driver/Pdo/Pdo.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pdo\\Pdo
***********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($connection, [$statementPrototype = false, [$resultPrototype = false, [$features = "default"]]])


    @param array|Connection|\PDO $connection

    :param null|Statement $statementPrototype: 
    :param null|Result $resultPrototype: 
    :param string $features: 



registerConnection
------------------

.. function:: registerConnection($connection)


    Register connection

    :param Connection $connection: 

    :rtype: Pdo 



registerStatementPrototype
--------------------------

.. function:: registerStatementPrototype($statementPrototype)


    Register statement prototype

    :param Statement $statementPrototype: 



registerResultPrototype
-----------------------

.. function:: registerResultPrototype($resultPrototype)


    Register result prototype

    :param Result $resultPrototype: 



addFeature
----------

.. function:: addFeature($name, $feature)


    Add feature

    :param string $name: 
    :param AbstractFeature $feature: 

    :rtype: Pdo 



setupDefaultFeatures
--------------------

.. function:: setupDefaultFeatures()


    Setup the default features for Pdo

    :rtype: Pdo 



getFeature
----------

.. function:: getFeature($name)


    Get feature

    :param $name: 

    :rtype: AbstractFeature|false 



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



getConnection
-------------

.. function:: getConnection()


    @return Connection



createStatement
---------------

.. function:: createStatement([$sqlOrResource = false])


    @param string|PDOStatement $sqlOrResource

    :rtype: Statement 



createResult
------------

.. function:: createResult($resource, [$context = false])


    @param resource $resource

    :param mixed $context: 

    :rtype: Result 



getPrepareType
--------------

.. function:: getPrepareType()


    @return array



formatParameterName
-------------------

.. function:: formatParameterName($name, [$type = false])


    @param string $name

    :param string|null $type: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    @return mixed





Constants
---------

FEATURES_DEFAULT
++++++++++++++++

@const

