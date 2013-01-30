.. Db/Adapter/Driver/Oci8/Statement.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Oci8\\Statement
==========================================

Methods
+++++++

setDriver
---------

.. function:: setDriver()


    Set driver

    :param Oci8: 

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


    Initialize

    :param resource: 

    :rtype: Statement 



setSql
------

.. function:: setSql()


    Set sql

    :param string: 

    :rtype: Statement 



setParameterContainer
---------------------

.. function:: setParameterContainer()


    Set Parameter container

    :param ParameterContainer: 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: mixed 



setResource
-----------

.. function:: setResource()


    Set resource

    :param resource: 

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    @return ParameterContainer



isPrepared
----------

.. function:: isPrepared()


    @return bool



prepare
-------

.. function:: prepare()


    @param string $sql



execute
-------

.. function:: execute()


    Execute

    :param ParameterContainer: 

    :rtype: mixed 



bindParametersFromContainer
---------------------------

.. function:: bindParametersFromContainer()


    Bind parameters from container

    :param ParameterContainer: 



