.. Db/Adapter/Driver/Sqlsrv/Sqlsrv.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Sqlsrv
=========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param array|Connection|resource $connection

    :param null|Statement: 
    :param null|Result: 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Sqlsrv 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
++++++++++++++++++

.. function:: registerConnection()


    Register connection

    :param Connection: 

    :rtype: Sqlsrv 



registerStatementPrototype
++++++++++++++++++++++++++

.. function:: registerStatementPrototype()


    Register statement prototype

    :param Statement: 

    :rtype: Sqlsrv 



registerResultPrototype
+++++++++++++++++++++++

.. function:: registerResultPrototype()


    Register result prototype

    :param Result: 

    :rtype: Sqlsrv 



getDatabasePlatformName
+++++++++++++++++++++++

.. function:: getDatabasePlatformName()


    Get database paltform name

    :param string: 

    :rtype: string 



checkEnvironment
++++++++++++++++

.. function:: checkEnvironment()


    Check environment


    :rtype: void 



getConnection
+++++++++++++

.. function:: getConnection()


    @return Connection



createStatement
+++++++++++++++

.. function:: createStatement()


    @param string|resource $sqlOrResource

    :rtype: Statement 



createResult
++++++++++++

.. function:: createResult()


    @param resource $resource

    :rtype: Result 



getPrepareType
++++++++++++++

.. function:: getPrepareType()


    @return array



formatParameterName
+++++++++++++++++++

.. function:: formatParameterName()


    @param string $name

    :param mixed: 

    :rtype: string 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    @return mixed



