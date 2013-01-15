.. /Db/Adapter/Driver/Pdo/Statement.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Driver\\Pdo\\Statement
*****************************************


@category   Zend



Methods
=======

setDriver
---------

.. function:: setDriver($driver)


    Set driver

    :param Pdo $driver: 

    :rtype: Statement 



initialize
----------

.. function:: initialize($connectionResource)


    Initialize

    :param \PDO $connectionResource: 

    :rtype: Statement 



setResource
-----------

.. function:: setResource($pdoStatement)


    Set resource

    :param \PDOStatement $pdoStatement: 

    :rtype: Statement 



getResource
-----------

.. function:: getResource()


    Get resource

    :rtype: mixed 



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


    @param ParameterContainer $parameterContainer

    :rtype: Statement 



getParameterContainer
---------------------

.. function:: getParameterContainer()


    @return ParameterContainer



prepare
-------

.. function:: prepare([$sql = false])


    @param string $sql




isPrepared
----------

.. function:: isPrepared()


    @return bool



execute
-------

.. function:: execute([$parameters = false])


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





