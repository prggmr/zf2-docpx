.. Db/Adapter/Driver/Mysqli/Mysqli.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Mysqli\\Mysqli
=========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Connection|\mysqli: 
    :param null|Statement: 
    :param null|Result: 
    :param array: 



setProfiler
+++++++++++

.. function:: setProfiler()


    @param Profiler\ProfilerInterface $profiler

    :rtype: Mysqli 



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
++++++++++++++++++

.. function:: registerConnection()


    Register connection

    :param Connection: 

    :rtype: Mysqli 



registerStatementPrototype
++++++++++++++++++++++++++

.. function:: registerStatementPrototype()


    Register statement prototype

    :param Statement: 



getStatementPrototype
+++++++++++++++++++++

.. function:: getStatementPrototype()


    Get statement prototype

    :rtype: null|Statement 



registerResultPrototype
+++++++++++++++++++++++

.. function:: registerResultPrototype()


    Register result prototype

    :param Result: 



getResultPrototype
++++++++++++++++++

.. function:: getResultPrototype()


    @return null|Result



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


    :rtype: void 



getConnection
+++++++++++++

.. function:: getConnection()


    Get connection

    :rtype: Connection 



createStatement
+++++++++++++++

.. function:: createStatement()


    Create statement

    :param string: 

    :rtype: Statement 



createResult
++++++++++++

.. function:: createResult()


    Create result

    :param resource: 
    :param null|bool: 

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



