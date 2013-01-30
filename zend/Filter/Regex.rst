.. Log/Filter/Regex.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Filter\\Regex
========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Filter out any log messages not matching the pattern

    :param string|array|Traversable: Regular expression to test the log message

    :rtype: Regex 

    :throws: Exception\InvalidArgumentException 



filter
++++++

.. function:: filter()


    Returns TRUE to accept the message, FALSE to block it.

    :param array: event data

    :rtype: bool accepted?



