.. Log/Filter/SuppressFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Filter\\SuppressFilter
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    This is a simple boolean filter.

    :param int|array|Traversable: 

    :throws Exception\InvalidArgumentException: 



suppress
++++++++

.. function:: suppress()


    This is a simple boolean filter.
    
    Call suppress(true) to suppress all log events.
    Call suppress(false) to accept all log events.

    :param bool: Should all log events be suppressed?

    :rtype: void 



filter
++++++

.. function:: filter()


    Returns TRUE to accept the message, FALSE to block it.

    :param array: event data

    :rtype: bool accepted?



