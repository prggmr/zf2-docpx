.. /EventManager/ResponseCollection.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\ResponseCollection
**************************************


Collection of signal handler return values



Methods
=======

stopped
-------

.. function:: stopped()


    Did the last response provided trigger a short circuit of the stack?

    :rtype: bool 



setStopped
----------

.. function:: setStopped($flag)


    Mark the collection as stopped (or its opposite)

    :param bool $flag: 

    :rtype: ResponseCollection 



first
-----

.. function:: first()


    Convenient access to the first handler return value.

    :rtype: mixed The first handler return value



last
----

.. function:: last()


    Convenient access to the last handler return value.
    
    If the collection is empty, returns null. Otherwise, returns value
    returned by last handler.

    :rtype: mixed The last handler return value



contains
--------

.. function:: contains($value)


    Check if any of the responses match the given value.

    :param mixed $value: The value to look for among responses

    :rtype: bool 





