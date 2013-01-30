.. Db/Adapter/Driver/Pdo/Pdo.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pdo\\Pdo
===================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param array|Connection|\PDO $connection

    :param null|Statement: 
    :param null|Result: 
    :param string: 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Pdo 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
++++++++++++++++++

.. function:: registerConnection()


    Register connection

    :param Connection: 

    :rtype: Pdo 



registerStatementPrototype
++++++++++++++++++++++++++

.. function:: registerStatementPrototype()


    Register statement prototype

    :param Statement: 



registerResultPrototype
+++++++++++++++++++++++

.. function:: registerResultPrototype()


    Register result prototype

    :param Result: 



addFeature
++++++++++

.. function:: addFeature()


    Add feature

    :param string: 
    :param AbstractFeature: 

    :rtype: Pdo 



setupDefaultFeatures
++++++++++++++++++++

.. function:: setupDefaultFeatures()


    Setup the default features for Pdo

    :rtype: Pdo 



getFeature
++++++++++

.. function:: getFeature()


    Get feature

    :param $name: 

    :rtype: AbstractFeature|false 



getDatabasePlatformName
+++++++++++++++++++++++

.. function:: getDatabasePlatformName()


    Get database platform name

    :param string: 

    :rtype: string 



checkEnvironment
++++++++++++++++

.. function:: checkEnvironment()


    Check environment



getConnection
+++++++++++++

.. function:: getConnection()


    @return Connection



createStatement
+++++++++++++++

.. function:: createStatement()


    @param string|PDOStatement $sqlOrResource

    :rtype: Statement 



createResult
++++++++++++

.. function:: createResult()


    @param resource $resource

    :param mixed: 

    :rtype: Result 



getPrepareType
++++++++++++++

.. function:: getPrepareType()


    @return array



formatParameterName
+++++++++++++++++++

.. function:: formatParameterName()


    @param string $name

    :param string|null: 

    :rtype: string 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    @return mixed





Constants
---------

FEATURES_DEFAULT
++++++++++++++++

@const

