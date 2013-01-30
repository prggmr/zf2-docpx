.. Log/Filter/Validator.php generated using docpx on 01/30/13 03:32am


Zend\\Log\\Filter\\Validator
============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Filter out any log messages not matching the validator

    :param ZendValidator|array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Validator 



filter
------

.. function:: filter()


    Returns TRUE to accept the message, FALSE to block it.

    :param array: event data

    :rtype: bool 



