.. Log/Formatter/Simple.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Formatter\\Simple
============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor


    :param null|string: Format specifier for log messages
    :param null|string: Format specifier for DateTime objects in event data

    :throws Exception\InvalidArgumentException: 



format
++++++

.. function:: format()


    Formats data into a single line to be written by the writer.

    :param array: event data

    :rtype: string formatted line to write to the log





Constants
---------

DEFAULT_FORMAT
++++++++++++++

