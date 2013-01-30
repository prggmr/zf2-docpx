.. Db/Adapter/Driver/Pgsql/Statement.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pgsql\\Statement
===========================================

Methods
-------

setDriver
+++++++++

.. function:: setDriver()


    @param  Pgsql $driver

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

    :param resource: 

    :rtype: void 

    :throws: Exception\RuntimeException for invalid or missing postgresql connection



getResource
+++++++++++

.. function:: getResource()


    Get resource

    :rtype: resource 



setSql
++++++

.. function:: setSql()


    Set sql

    :param string: 

    :rtype: Statement 



getSql
++++++

.. function:: getSql()


    Get sql

    :rtype: string 



setParameterContainer
+++++++++++++++++++++

.. function:: setParameterContainer()


    Set parameter container

    :param ParameterContainer: 

    :rtype: Statement 



getParameterContainer
+++++++++++++++++++++

.. function:: getParameterContainer()


    Get parameter container

    :rtype: ParameterContainer 



prepare
+++++++

.. function:: prepare()


    Prepare

    :param string: 



isPrepared
++++++++++

.. function:: isPrepared()


    Is prepared

    :rtype: bool 



execute
+++++++

.. function:: execute()


    Execute

    :param ParameterContainer|null: 

    :throws Exception\InvalidQueryException: 

    :rtype: Result 



