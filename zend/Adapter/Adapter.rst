.. Db/Adapter/Adapter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Adapter
==========================

@property Driver\DriverInterface $driver

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param Driver\DriverInterface|array $driver

    :param Platform\PlatformInterface: 
    :param ResultSet\ResultSetInterface: 
    :param Profiler\ProfilerInterface: 

    :throws Exception\InvalidArgumentException: 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Adapter 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



getDriver
+++++++++

.. function:: getDriver()


    getDriver()


    :rtype: Driver\DriverInterface 



getPlatform
+++++++++++

.. function:: getPlatform()


    @return Platform\PlatformInterface



getQueryResultSetPrototype
++++++++++++++++++++++++++

.. function:: getQueryResultSetPrototype()


    @return ResultSet\ResultSetInterface



getCurrentSchema
++++++++++++++++

.. function:: getCurrentSchema()



query
+++++

.. function:: query()


    query() is a convenience function

    :param string: 
    :param string|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Driver\StatementInterface|ResultSet\ResultSet 



createStatement
+++++++++++++++

.. function:: createStatement()


    Create statement

    :param string: 
    :param ParameterContainer: 

    :rtype: Driver\StatementInterface 



getHelpers
++++++++++

.. function:: getHelpers()



__get
+++++

.. function:: __get()


    @param $name


    :rtype: Driver\DriverInterface|Platform\PlatformInterface 



createDriver
++++++++++++

.. function:: createDriver()


    @param array $parameters

    :rtype: Driver\DriverInterface 

    :throws: \InvalidArgumentException 
    :throws: Exception\InvalidArgumentException 



createPlatform
++++++++++++++

.. function:: createPlatform()


    @param Driver\DriverInterface $driver

    :rtype: Platform\PlatformInterface 



createProfiler
++++++++++++++

.. function:: createProfiler()



createDriverFromParameters
++++++++++++++++++++++++++

.. function:: createDriverFromParameters()


    @param array $parameters

    :rtype: Driver\DriverInterface 

    :throws: \InvalidArgumentException 
    :throws: Exception\InvalidArgumentException 

    :deprecated:  



createPlatformFromDriver
++++++++++++++++++++++++

.. function:: createPlatformFromDriver()


    @param Driver\DriverInterface $driver

    :rtype: Platform\PlatformInterface 

    :deprecated:  





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

