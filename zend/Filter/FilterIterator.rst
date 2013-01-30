.. EventManager/Filter/FilterIterator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\EventManager\\Filter\\FilterIterator
==========================================

Specialized priority queue implementation for use with an intercepting
filter chain.

Allows removal

Methods
-------

contains
++++++++

.. function:: contains()


    Does the queue contain a given value?

    :param mixed: 

    :rtype: bool 



remove
++++++

.. function:: remove()


    Remove a value from the queue
    
    This is an expensive operation. It must first iterate through all values,
    and then re-populate itself. Use only if absolutely necessary.

    :param mixed: 

    :rtype: bool 



next
++++

.. function:: next()


    Iterate the next filter in the chain
    
    Iterates and calls the next filter in the chain.

    :param mixed: 
    :param array: 
    :param FilterIterator: 

    :rtype: mixed 



