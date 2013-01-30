.. Http/Header/Age.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Header\\Age
=======================

Age HTTP Header

Methods
+++++++

fromString
----------

.. function:: fromString()


    Create Age header from string

    :param string: 

    :rtype: Age 

    :throws: Exception\InvalidArgumentException 



getFieldName
------------

.. function:: getFieldName()


    Get header name

    :rtype: string 



getFieldValue
-------------

.. function:: getFieldValue()


    Get header value (number of seconds)

    :rtype: int 



setDeltaSeconds
---------------

.. function:: setDeltaSeconds()


    Set number of seconds

    :param int: 

    :rtype: RetryAfter 



getDeltaSeconds
---------------

.. function:: getDeltaSeconds()


    Get number of seconds

    :rtype: int 



toString
--------

.. function:: toString()


    Return header line
    In case of overflow RFC states to set value of 2147483648 (2^31)

    :rtype: string 



