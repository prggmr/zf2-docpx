.. Http/Header/RetryAfter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\Header\\RetryAfter
==============================

Retry-After HTTP Header

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Create Retry-After header from string

    :param string: 

    :rtype: RetryAfter 

    :throws: Exception\InvalidArgumentException 



setDeltaSeconds
+++++++++++++++

.. function:: setDeltaSeconds()


    Set number of seconds

    :param int: 

    :rtype: RetryAfter 



getDeltaSeconds
+++++++++++++++

.. function:: getDeltaSeconds()


    Get number of seconds

    :rtype: int 



getFieldName
++++++++++++

.. function:: getFieldName()


    Get header name

    :rtype: string 



getFieldValue
+++++++++++++

.. function:: getFieldValue()


    Returns date if it's set, or number of seconds

    :rtype: int|string 



toString
++++++++

.. function:: toString()


    Return header line

    :rtype: string 



