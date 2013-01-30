.. Log/Filter/Priority.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Filter\\Priority
===========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Filter logging by $priority. By default, it will accept any log
    event whose priority value is less than or equal to $priority.

    :param int|array|Traversable: Priority
    :param string: Comparison operator

    :rtype: Priority 

    :throws: Exception\InvalidArgumentException 



filter
++++++

.. function:: filter()


    Returns TRUE to accept the message, FALSE to block it.

    :param array: event data

    :rtype: bool accepted?



