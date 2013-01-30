.. Db/Adapter/Driver/Sqlsrv/Statement.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Statement
============================================

Methods
+++++++

setDriver
---------

.. function:: setDriver()


    Set driver

    :param Sqlsrv: 

    :rtype: Statement 



setProfiler
-----------

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Statement 



getProfiler
-----------

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



initialize
----------

.. function:: initialize()


    One of two resource types will be provided here:
    a) "SQL Server Connection" when a prepared statement needs to still be produced
    b) "SQL Server Statement" when a prepared statement has been already produced
    (there will need to already be a bound param set if it applies to this query)

    :param resource: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Statement 



setParameterContainer
---------------------

.. function:: setParameterContainer()


    Set parameter container

    :param ParameterContainer: 

    :rtype: Statement 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    @return ParameterContainer



setResource
-----------

.. function:: setResource()


    @param $resource

    :rtype: Statement 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: resource 



setSql
------

.. function:: setSql()


    @param string $sql

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



prepare
-------

.. function:: prepare()


    @param string $sql


    :rtype: Statement 



isPrepared
----------

.. function:: isPrepared()


    @return bool



execute
-------

.. function:: execute()


    Execute

    :param array|ParameterContainer: 

    :throws Exception\RuntimeException: 

    :rtype: Result 



bindParametersFromContainer
---------------------------

.. function:: bindParametersFromContainer()


    Bind parameters from container



