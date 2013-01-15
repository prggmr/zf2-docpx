.. /Db/Adapter/Driver/DriverInterface.php generated using docpx on 01/15/13 05:29pm


PARAMETERIZATION_POSITIONAL
+++++++++++++++++++++++++++

@category   Zend

PARAMETERIZATION_NAMED
++++++++++++++++++++++

NAME_FORMAT_CAMELCASE
+++++++++++++++++++++

NAME_FORMAT_NATURAL
+++++++++++++++++++

Zend\\Db\\Adapter\\Driver\\getDatabasePlatformName
==================================================

.. function:: Zend\Db\Adapter\Driver\getDatabasePlatformName()


    Get database platform name

    :param string $nameFormat: 

    :rtype: string 



Zend\\Db\\Adapter\\Driver\\checkEnvironment
===========================================

.. function:: Zend\Db\Adapter\Driver\checkEnvironment()


    Check environment

    :rtype: bool 



Zend\\Db\\Adapter\\Driver\\getConnection
========================================

.. function:: Zend\Db\Adapter\Driver\getConnection()


    Get connection

    :rtype: ConnectionInterface 



Zend\\Db\\Adapter\\Driver\\createStatement
==========================================

.. function:: Zend\Db\Adapter\Driver\createStatement()


    Create statement

    :param string|resource $sqlOrResource: 

    :rtype: StatementInterface 



Zend\\Db\\Adapter\\Driver\\createResult
=======================================

.. function:: Zend\Db\Adapter\Driver\createResult()


    Create result

    :param resource $resource: 

    :rtype: ResultInterface 



Zend\\Db\\Adapter\\Driver\\getPrepareType
=========================================

.. function:: Zend\Db\Adapter\Driver\getPrepareType()


    Get prepare type

    :rtype: array 



Zend\\Db\\Adapter\\Driver\\formatParameterName
==============================================

.. function:: Zend\Db\Adapter\Driver\formatParameterName()


    Format parameter name

    :param string $name: 
    :param mixed $type: 

    :rtype: string 



Zend\\Db\\Adapter\\Driver\\getLastGeneratedValue
================================================

.. function:: Zend\Db\Adapter\Driver\getLastGeneratedValue()


    Get last generated value

    :rtype: mixed 



