.. Db/Adapter/Driver/Mysqli/Statement.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Mysqli\\Statement
============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param  bool $bufferResults



setDriver
+++++++++

.. function:: setDriver()


    Set driver

    :param Mysqli: 

    :rtype: Statement 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Statement 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



initialize
++++++++++

.. function:: initialize()


    Initialize

    :param \mysqli: 

    :rtype: Statement 



setSql
++++++

.. function:: setSql()


    Set sql

    :param string: 

    :rtype: Statement 



setParameterContainer
+++++++++++++++++++++

.. function:: setParameterContainer()


    Set Parameter container

    :param ParameterContainer: 

    :rtype: Statement 



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: mixed 



setResource
+++++++++++

.. function:: setResource()


    Set resource

    :param \mysqli_stmt: 

    :rtype: Statement 



getSql
++++++

.. function:: getSql()


    Get sql

    :rtype: string 



getParameterContainer
+++++++++++++++++++++

.. function:: getParameterContainer()


    Get parameter count

    :rtype: ParameterContainer 



isPrepared
++++++++++

.. function:: isPrepared()


    Is prepared

    :rtype: bool 



prepare
+++++++

.. function:: prepare()


    Prepare

    :param string: 

    :throws Exception\InvalidQueryException: 
    :throws Exception\RuntimeException: 

    :rtype: Statement 



execute
+++++++

.. function:: execute()


    Execute

    :param ParameterContainer: 

    :throws Exception\RuntimeException: 

    :rtype: mixed 



bindParametersFromContainer
+++++++++++++++++++++++++++

.. function:: bindParametersFromContainer()


    Bind parameters from container

    :rtype: void 



