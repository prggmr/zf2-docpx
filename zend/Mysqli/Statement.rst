.. /Db/Adapter/Driver/Mysqli/Statement.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Mysqli\\Statement
********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$bufferResults = false])


    @param  bool $bufferResults



setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Mysqli $driver: 

    :rtype: Statement 



initialize
----------

.. function:: initialize($mysqli)


    Initialize

    :param \mysqli $mysqli: 

    :rtype: Statement 



setSql
------

.. function:: setSql($sql)


    Set sql

    :param string $sql: 

    :rtype: Statement 



setParameterContainer
---------------------

.. function:: setParameterContainer($parameterContainer)


    Set Parameter container

    :param ParameterContainer $parameterContainer: 

    :rtype: Statement 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: mixed 



setResource
-----------

.. function:: setResource($mysqliStatement)


    Set resource

    :param \mysqli_stmt $mysqliStatement: 

    :rtype: Statement 



getSql
------

.. function:: getSql()


    Get sql

    :rtype: string 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    Get parameter count

    :rtype: ParameterContainer 



isPrepared
----------

.. function:: isPrepared()


    Is prepared

    :rtype: bool 



prepare
-------

.. function:: prepare([$sql = false])


    Prepare

    :param string $sql: 

    :throws Exception\InvalidQueryException: 
    :throws Exception\RuntimeException: 

    :rtype: Statement 



execute
-------

.. function:: execute([$parameters = false])


    Execute

    :param ParameterContainer $parameters: 

    :throws Exception\RuntimeException: 

    :rtype: mixed 



bindParametersFromContainer
---------------------------

.. function:: bindParametersFromContainer()


    Bind parameters from container

    :rtype: void 





