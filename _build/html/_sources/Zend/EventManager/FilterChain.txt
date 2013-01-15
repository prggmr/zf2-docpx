.. /EventManager/FilterChain.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\FilterChain
*******************************


FilterChain: intercepting filter manager



Methods
=======

__construct
-----------

.. function:: __construct()


    Constructor
    
    Initializes Filter\FilterIterator in which filters will be aggregated



run
---

.. function:: run($context, [$argv = false])


    Apply the filters
    
    Begins iteration of the filters.

    :param mixed $context: Object under observation
    :param mixed $argv: Associative array of arguments

    :rtype: mixed 



attach
------

.. function:: attach($callback, [$priority = 1])


    Connect a filter to the chain

    :param callable $callback: PHP Callback
    :param int $priority: Priority in the queue at which to execute; defaults to 1 (higher numbers == higher priority)

    :rtype: CallbackHandler (to allow later unsubscribe)

    :throws: Exception\InvalidCallbackException 



detach
------

.. function:: detach($filter)


    Detach a filter from the chain

    :param CallbackHandler $filter: 

    :rtype: bool Returns true if filter found and unsubscribed; returns false otherwise



getFilters
----------

.. function:: getFilters()


    Retrieve all filters

    :rtype: Filter\FilterIterator 



clearFilters
------------

.. function:: clearFilters()


    Clear all filters

    :rtype: void 



getResponses
------------

.. function:: getResponses()


    Return current responses
    
    Only available while the chain is still being iterated. Returns the
    current ResponseCollection.

    :rtype: null|ResponseCollection 





