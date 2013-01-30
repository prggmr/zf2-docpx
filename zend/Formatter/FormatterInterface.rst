.. Log/Formatter/FormatterInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

Zend\\Log\\Formatter\\format
============================

.. function:: Zend\Log\Formatter\format()


    Formats data into a single line to be written by the writer.

    :param array: event data

    :rtype: string formatted line to write to the log



Function
********

Zend\\Log\\Formatter\\getDateTimeFormat
=======================================

.. function:: Zend\Log\Formatter\getDateTimeFormat()


    Get the format specifier for DateTime objects

    :rtype: string 



Function
********

Zend\\Log\\Formatter\\setDateTimeFormat
=======================================

.. function:: Zend\Log\Formatter\setDateTimeFormat()


    Set the format specifier for DateTime objects


    :param string: DateTime format

    :rtype: FormatterInterface 



DEFAULT_DATETIME_FORMAT
+++++++++++++++++++++++

Default format specifier for DateTime objects is ISO 8601

