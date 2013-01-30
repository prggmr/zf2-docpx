.. Log/Writer/ZendMonitor.php generated using docpx on 01/30/13 03:32am


Zend\\Log\\Writer\\ZendMonitor
==============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :rtype: ZendMonitor 



isEnabled
---------

.. function:: isEnabled()


    Is logging to this writer enabled?
    
    If the Zend Monitor extension is not enabled, this log writer will
    fail silently. You can query this method to determine if the log
    writer is enabled.

    :rtype: bool 



write
-----

.. function:: write()


    Log a message to this writer.

    :param array: log data event

    :rtype: void 



doWrite
-------

.. function:: doWrite()


    Write a message to the log.

    :param array: log data event

    :rtype: void 



