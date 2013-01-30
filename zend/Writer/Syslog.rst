.. Log/Writer/Syslog.php generated using docpx on 01/30/13 03:32am


Zend\\Log\\Writer\\Syslog
=========================

Writes log messages to syslog

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array: Array of options; may include "application" and "facility" keys

    :rtype: Syslog 



initializeValidFacilities
-------------------------

.. function:: initializeValidFacilities()


    Initialize values facilities

    :rtype: void 



initializeSyslog
----------------

.. function:: initializeSyslog()


    Initialize syslog / set application name and facility

    :rtype: void 



setFacility
-----------

.. function:: setFacility()


    Set syslog facility

    :param int: Syslog facility

    :rtype: Syslog 

    :throws: Exception\InvalidArgumentException for invalid log facility



setApplicationName
------------------

.. function:: setApplicationName()


    Set application name

    :param string: Application name

    :rtype: Syslog 



shutdown
--------

.. function:: shutdown()


    Close syslog.

    :rtype: void 



doWrite
-------

.. function:: doWrite()


    Write a message to syslog.

    :param array: event data

    :rtype: void 



