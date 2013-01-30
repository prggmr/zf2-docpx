.. Db/Adapter/Driver/Pgsql/Pgsql.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Adapter\\Driver\\Pgsql\\Pgsql
=======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Connection|resource: 
    :param null|Statement: 
    :param null|Result: 
    :param array: 



setProfiler
+++++++++++

.. function:: setProfiler()



getProfiler
+++++++++++

.. function:: getProfiler()


    @return null|Profiler\ProfilerInterface



registerConnection
++++++++++++++++++

.. function:: registerConnection()


    Register connection

    :param Connection: 

    :rtype: Pgsql 



registerStatementPrototype
++++++++++++++++++++++++++

.. function:: registerStatementPrototype()


    Register statement prototype

    :param Statement: 

    :rtype: Pgsql 



registerResultPrototype
+++++++++++++++++++++++

.. function:: registerResultPrototype()


    Register result prototype

    :param Result: 

    :rtype: Pgsql 



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

    :param string|null: 

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


    Get prepare Type

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



