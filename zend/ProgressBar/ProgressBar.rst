.. ProgressBar/ProgressBar.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ProgressBar\\ProgressBar
==============================

Zend_ProgressBar offers an interface for multiple environments.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new progressbar backend.

    :param Adapter\AbstractAdapter: 
    :param float|int: 
    :param float|int: 
    :param string|null: 

    :throws Exception\OutOfRangeException: When $min is greater than $max



getAdapter
++++++++++

.. function:: getAdapter()


    Get the current adapter

    :rtype: Adapter\AbstractAdapter 



update
++++++

.. function:: update()


    Update the progressbar

    :param float: 
    :param string: 

    :rtype: void 



next
++++

.. function:: next()


    Update the progressbar to the next value

    :param int: 
    :param string: 

    :rtype: void 



finish
++++++

.. function:: finish()


    Call the adapters finish() behaviour

    :rtype: void 



