.. EventManager/FilterChain.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\EventManager\\FilterChain
===============================

FilterChain: intercepting filter manager

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Initializes Filter\FilterIterator in which filters will be aggregated



run
+++

.. function:: run()


    Apply the filters
    
    Begins iteration of the filters.

    :param mixed: Object under observation
    :param mixed: Associative array of arguments

    :rtype: mixed 



attach
++++++

.. function:: attach()


    Connect a filter to the chain

    :param callable: PHP Callback
    :param int: Priority in the queue at which to execute; defaults to 1 (higher numbers == higher priority)

    :rtype: CallbackHandler (to allow later unsubscribe)

    :throws: Exception\InvalidCallbackException 



detach
++++++

.. function:: detach()


    Detach a filter from the chain

    :param CallbackHandler: 

    :rtype: bool Returns true if filter found and unsubscribed; returns false otherwise



getFilters
++++++++++

.. function:: getFilters()


    Retrieve all filters

    :rtype: Filter\FilterIterator 



clearFilters
++++++++++++

.. function:: clearFilters()


    Clear all filters

    :rtype: void 



getResponses
++++++++++++

.. function:: getResponses()


    Return current responses
    
    Only available while the chain is still being iterated. Returns the
    current ResponseCollection.

    :rtype: null|ResponseCollection 



