.. Db/Adapter/Driver/IbmDb2/IbmDb2.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\IbmDb2\\IbmDb2
=========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param array|Connection|resource $connection

    :param null|Statement: 
    :param null|Result: 
    :param string: 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: IbmDb2 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
++++++++++++++++++

.. function:: registerConnection()


    @param  Connection $connection

    :rtype: IbmDb2 



registerStatementPrototype
++++++++++++++++++++++++++

.. function:: registerStatementPrototype()


    @param  Statement $statementPrototype

    :rtype: IbmDb2 



registerResultPrototype
+++++++++++++++++++++++

.. function:: registerResultPrototype()


    @param  Result $resultPrototype

    :rtype: IbmDb2 



getDatabasePlatformName
+++++++++++++++++++++++

.. function:: getDatabasePlatformName()


    Get database platform name

    :param string: 

    :rtype: string 



checkEnvironment
++++++++++++++++

.. function:: checkEnvironment()


    Check environment

    :rtype: bool 



getConnection
+++++++++++++

.. function:: getConnection()


    Get connection

    :rtype: Connection 



createStatement
+++++++++++++++

.. function:: createStatement()


    Create statement

    :param string|resource: 

    :rtype: Statement 



createResult
++++++++++++

.. function:: createResult()


    Create result

    :param resource: 

    :rtype: Result 



getPrepareType
++++++++++++++

.. function:: getPrepareType()


    Get prepare type

    :rtype: array 



formatParameterName
+++++++++++++++++++

.. function:: formatParameterName()


    Format parameter name

    :param string: 
    :param mixed: 

    :rtype: string 



getLastGeneratedValue
+++++++++++++++++++++

.. function:: getLastGeneratedValue()


    Get last generated value

    :rtype: mixed 



