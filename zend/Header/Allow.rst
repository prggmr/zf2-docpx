.. Http/Header/Allow.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\Header\\Allow
=========================

Allow Header

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Create Allow header from header line

    :param string: 

    :rtype: Allow 

    :throws: Exception\InvalidArgumentException 



getFieldName
++++++++++++

.. function:: getFieldName()


    Get header name

    :rtype: string 



getFieldValue
+++++++++++++

.. function:: getFieldValue()


    Get comma-separated list of allowed methods

    :rtype: string 



getAllMethods
+++++++++++++

.. function:: getAllMethods()


    Get list of all defined methods

    :rtype: array 



getAllowedMethods
+++++++++++++++++

.. function:: getAllowedMethods()


    Get list of allowed methods

    :rtype: array 



allowMethods
++++++++++++

.. function:: allowMethods()


    Allow methods or list of methods

    :param array|string: 

    :rtype: Allow 



disallowMethods
+++++++++++++++

.. function:: disallowMethods()


    Disallow methods or list of methods

    :param array|string: 

    :rtype: Allow 



denyMethods
+++++++++++

.. function:: denyMethods()


    Convenience alias for @see disallowMethods()

    :param array|string: 

    :rtype: Allow 



isAllowedMethod
+++++++++++++++

.. function:: isAllowedMethod()


    Check whether method is allowed

    :param string: 

    :rtype: bool 



toString
++++++++

.. function:: toString()


    Return header as string

    :rtype: string 



