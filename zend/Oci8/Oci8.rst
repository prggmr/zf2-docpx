.. Db/Adapter/Driver/Oci8/Oci8.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Oci8\\Oci8
=====================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param array|Connection|\oci8 $connection

    :param null|Statement: 
    :param null|Result: 
    :param array: 



setProfiler
-----------

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Oci8 



getProfiler
-----------

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
------------------

.. function:: registerConnection()


    Register connection

    :param Connection: 

    :rtype: Oci8 



registerStatementPrototype
--------------------------

.. function:: registerStatementPrototype()


    Register statement prototype

    :param Statement: 



getStatementPrototype
---------------------

.. function:: getStatementPrototype()


    @return null|Statement



registerResultPrototype
-----------------------

.. function:: registerResultPrototype()


    Register result prototype

    :param Result: 



getResultPrototype
------------------

.. function:: getResultPrototype()


    @return null|Result



getDatabasePlatformName
-----------------------

.. function:: getDatabasePlatformName()


    Get database platform name

    :param string: 

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

.. function:: createStatement()


    @param string $sqlOrResource

    :rtype: Statement 



createResult
------------

.. function:: createResult()


    @param resource $resource

    :rtype: Result 



getPrepareType
--------------

.. function:: getPrepareType()


    @return array



formatParameterName
-------------------

.. function:: formatParameterName()


    @param string $name

    :param mixed: 

    :rtype: string 



getLastGeneratedValue
---------------------

.. function:: getLastGeneratedValue()


    @return mixed



