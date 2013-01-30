.. View/Resolver/AggregateResolver.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Resolver\\AggregateResolver
=======================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Instantiate the internal priority queue



count
-----

.. function:: count()


    Return count of attached resolvers

    :rtype: int 



getIterator
-----------

.. function:: getIterator()


    IteratorAggregate: return internal iterator

    :rtype: PriorityQueue 



attach
------

.. function:: attach()


    Attach a resolver

    :param Resolver: 
    :param int: 

    :rtype: AggregateResolver 



resolve
-------

.. function:: resolve()


    Resolve a template/pattern name to a resource the renderer can consume

    :param string: 
    :param null|Renderer: 

    :rtype: false|string 



getLastSuccessfulResolver
-------------------------

.. function:: getLastSuccessfulResolver()


    Return the last successful resolver, if any

    :rtype: Resolver 



getLastLookupFailure
--------------------

.. function:: getLastLookupFailure()


    Get last lookup failure

    :rtype: false|string 





Constants
+++++++++

FAILURE_NO_RESOLVERS
====================

FAILURE_NOT_FOUND
=================

