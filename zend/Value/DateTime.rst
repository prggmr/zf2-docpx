.. XmlRpc/Value/DateTime.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Value\\DateTime
=============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Set the value of a dateTime.iso8601 native type
    
    The value is in iso8601 format, minus any timezone information or dashes

    :param mixed: Integer of the unix timestamp or any string that can be parsed
                    to a unix timestamp using the PHP strtotime() function

    :throws Exception\ValueException: if unable to create a DateTime object from $value



getValue
--------

.. function:: getValue()


    Return the value of this object as iso8601 dateTime value

    :rtype: int As a Unix timestamp



