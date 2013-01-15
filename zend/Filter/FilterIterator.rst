.. /EventManager/Filter/FilterIterator.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\Filter\\FilterIterator
******************************************


Specialized priority queue implementation for use with an intercepting
filter chain.

Allows removal



Methods
=======

contains
--------

.. function:: contains($datum)


    Does the queue contain a given value?

    :param mixed $datum: 

    :rtype: bool 



remove
------

.. function:: remove($datum)


    Remove a value from the queue
    
    This is an expensive operation. It must first iterate through all values,
    and then re-populate itself. Use only if absolutely necessary.

    :param mixed $datum: 

    :rtype: bool 



next
----

.. function:: next([$context = false, [$params = false, [$chain = false]]])


    Iterate the next filter in the chain
    
    Iterates and calls the next filter in the chain.

    :param mixed $context: 
    :param array $params: 
    :param FilterIterator $chain: 

    :rtype: mixed 





