.. /Db/Adapter/Driver/Pgsql/Statement.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pgsql\\Statement
*******************************************


@category   Zend



Methods
=======

setDriver
---------

.. function:: setDriver($driver)


    @param  Pgsql $driver

    :rtype: Statement 



initialize
----------

.. function:: initialize($pgsql)


    Initialize

    :param resource $pgsql: 

    :rtype: void 

    :throws: Exception\RuntimeException for invalid or missing postgresql connection



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: resource 



setSql
------

.. function:: setSql($sql)


    Set sql

    :param string $sql: 

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



setParameterContainer
---------------------

.. function:: setParameterContainer($parameterContainer)


    Set parameter container

    :param ParameterContainer $parameterContainer: 

    :rtype: Statement 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    Get parameter container

    :rtype: ParameterContainer 



prepare
-------

.. function:: prepare([$sql = false])


    Prepare

    :param string $sql: 



$foo
----

.. function:: $foo()



isPrepared
----------

.. function:: isPrepared()


    Is prepared

    :rtype: bool 



execute
-------

.. function:: execute([$parameters = false])


    Execute

    :param ParameterContainer|null $parameters: 

    :throws Exception\InvalidQueryException: 

    :rtype: Result 





