.. Db/Adapter/Driver/Pdo/Statement.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Adapter\\Driver\\Pdo\\Statement
=========================================

Methods
+++++++

setDriver
---------

.. function:: setDriver()


    Set driver

    :param Pdo: 

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

    :param \PDO: 

    :rtype: Statement 



setResource
-----------

.. function:: setResource()


    Set resource

    :param \PDOStatement: 

    :rtype: Statement 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: mixed 



setSql
------

.. function:: setSql()


    Set sql

    :param string: 

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



setParameterContainer
---------------------

.. function:: setParameterContainer()


    @param ParameterContainer $parameterContainer

    :rtype: Statement 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    @return ParameterContainer



prepare
-------

.. function:: prepare()


    @param string $sql




isPrepared
----------

.. function:: isPrepared()


    @return bool



execute
-------

.. function:: execute()


    @param mixed $parameters


    :rtype: Result 



bindParametersFromContainer
---------------------------

.. function:: bindParametersFromContainer()


    Bind parameters from container



__clone
-------

.. function:: __clone()


    Perform a deep clone

    :rtype: Statement A cloned statement



