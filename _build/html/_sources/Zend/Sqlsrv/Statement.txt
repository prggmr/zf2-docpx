.. /Db/Adapter/Driver/Sqlsrv/Statement.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Statement
********************************************


@category   Zend



Methods
=======

setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Sqlsrv $driver: 

    :rtype: Statement 



initialize
----------

.. function:: initialize($resource)


    One of two resource types will be provided here:
    a) "SQL Server Connection" when a prepared statement needs to still be produced
    b) "SQL Server Statement" when a prepared statement has been already produced
    (there will need to already be a bound param set if it applies to this query)

    :param resource $resource: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Statement 



setParameterContainer
---------------------

.. function:: setParameterContainer($parameterContainer)


    Set parameter container

    :param ParameterContainer $parameterContainer: 

    :rtype: Statement 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    @return ParameterContainer



setResource
-----------

.. function:: setResource($resource)


    @param $resource

    :rtype: Statement 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: resource 



setSql
------

.. function:: setSql($sql)


    @param string $sql

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



prepare
-------

.. function:: prepare([$sql = false])


    @param string $sql


    :rtype: Statement 



isPrepared
----------

.. function:: isPrepared()


    @return bool



execute
-------

.. function:: execute([$parameters = false])


    Execute

    :param array|ParameterContainer $parameters: 

    :throws Exception\RuntimeException: 

    :rtype: Result 



bindParametersFromContainer
---------------------------

.. function:: bindParametersFromContainer()


    Bind parameters from container





