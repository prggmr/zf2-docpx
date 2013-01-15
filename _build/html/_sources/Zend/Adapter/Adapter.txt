.. /Db/Adapter/Adapter.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Adapter\\Adapter
**************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($driver, [$platform = false, [$queryResultPrototype = false]])


    @param Driver\DriverInterface|array $driver

    :param Platform\PlatformInterface $platform: 
    :param ResultSet\ResultSetInterface $queryResultPrototype: 

    :throws Exception\InvalidArgumentException: 



getDriver
---------

.. function:: getDriver()


    getDriver()


    :rtype: Driver\DriverInterface 



getPlatform
-----------

.. function:: getPlatform()


    @return Platform\PlatformInterface



getQueryResultSetPrototype
--------------------------

.. function:: getQueryResultSetPrototype()


    @return ResultSet\ResultSetInterface



getCurrentSchema
----------------

.. function:: getCurrentSchema()



query
-----

.. function:: query($sql, [$parametersOrQueryMode = "prepare"])


    query() is a convenience function

    :param string $sql: 
    :param string|array $parametersOrQueryMode: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Driver\StatementInterface|ResultSet\ResultSet 



createStatement
---------------

.. function:: createStatement([$initialSql = false, [$initialParameters = false]])


    Create statement

    :param string $initialSql: 
    :param ParameterContainer $initialParameters: 

    :rtype: Driver\StatementInterface 



getHelpers
----------

.. function:: getHelpers()



$value
------

.. function:: $value()



$value
------

.. function:: $value()



__get
-----

.. function:: __get($name)


    @param $name


    :rtype: Driver\DriverInterface|Platform\PlatformInterface 



createDriverFromParameters
--------------------------

.. function:: createDriverFromParameters($parameters)


    @param array $parameters

    :rtype: Driver\DriverInterface 

    :throws: \InvalidArgumentException 
    :throws: Exception\InvalidArgumentException 



createPlatformFromDriver
------------------------

.. function:: createPlatformFromDriver($driver)


    @param Driver\DriverInterface $driver

    :rtype: Platform\PlatformInterface 





Constants
---------

QUERY_MODE_EXECUTE
++++++++++++++++++

Query Mode Constants

QUERY_MODE_PREPARE
++++++++++++++++++

PREPARE_TYPE_POSITIONAL
+++++++++++++++++++++++

Prepare Type Constants

PREPARE_TYPE_NAMED
++++++++++++++++++

FUNCTION_FORMAT_PARAMETER_NAME
++++++++++++++++++++++++++++++

FUNCTION_QUOTE_IDENTIFIER
+++++++++++++++++++++++++

FUNCTION_QUOTE_VALUE
++++++++++++++++++++

VALUE_QUOTE_SEPARATOR
+++++++++++++++++++++

