.. EventManager/ResponseCollection.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\EventManager\\ResponseCollection
======================================

Collection of signal handler return values

Methods
-------

stopped
+++++++

.. function:: stopped()


    Did the last response provided trigger a short circuit of the stack?

    :rtype: bool 



setStopped
++++++++++

.. function:: setStopped()


    Mark the collection as stopped (or its opposite)

    :param bool: 

    :rtype: ResponseCollection 



first
+++++

.. function:: first()


    Convenient access to the first handler return value.

    :rtype: mixed The first handler return value



last
++++

.. function:: last()


    Convenient access to the last handler return value.
    
    If the collection is empty, returns null. Otherwise, returns value
    returned by last handler.

    :rtype: mixed The last handler return value



contains
++++++++

.. function:: contains()


    Check if any of the responses match the given value.

    :param mixed: The value to look for among responses

    :rtype: bool 



