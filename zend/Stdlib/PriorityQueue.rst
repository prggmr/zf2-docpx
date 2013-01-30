.. Stdlib/PriorityQueue.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\PriorityQueue
===========================

Re-usable, serializable priority queue implementation

SplPriorityQueue acts as a heap; on iteration, each item is removed from the
queue. If you wish to re-use such a queue, you need to clone it first. This
makes for some interesting issues if you wish to delete items from the queue,
or, as already stated, iterate over it multiple times.

This class aggregates items for the queue itself, but also composes an
"inner" iterator in the form of an SplPriorityQueue object for performing
the actual iteration.

Methods
+++++++

insert
------

.. function:: insert()


    Insert an item into the queue
    
    Priority defaults to 1 (low priority) if none provided.

    :param mixed: 
    :param int: 

    :rtype: PriorityQueue 



remove
------

.. function:: remove()


    Remove an item from the queue
    
    This is different than {@link extract()}; its purpose is to dequeue an
    item.
    
    This operation is potentially expensive, as it requires
    re-initialization and re-population of the inner queue.
    
    Note: this removes the first item matching the provided item found. If
    the same item has been added multiple times, it will not remove other
    instances.

    :param mixed: 

    :rtype: bool False if the item was not found, true otherwise.



isEmpty
-------

.. function:: isEmpty()


    Is the queue empty?

    :rtype: bool 



count
-----

.. function:: count()


    How many items are in the queue?

    :rtype: int 



top
---

.. function:: top()


    Peek at the top node in the queue, based on priority.

    :rtype: mixed 



extract
-------

.. function:: extract()


    Extract a node from the inner queue and sift up

    :rtype: mixed 



getIterator
-----------

.. function:: getIterator()


    Retrieve the inner iterator
    
    SplPriorityQueue acts as a heap, which typically implies that as items
    are iterated, they are also removed. This does not work for situations
    where the queue may be iterated multiple times. As such, this class
    aggregates the values, and also injects an SplPriorityQueue. This method
    retrieves the inner queue object, and clones it for purposes of
    iteration.

    :rtype: SplPriorityQueue 



serialize
---------

.. function:: serialize()


    Serialize the data structure

    :rtype: string 



unserialize
-----------

.. function:: unserialize()


    Unserialize a string into a PriorityQueue object
    
    Serialization format is compatible with {@link Zend\Stdlib\SplPriorityQueue}

    :param string: 

    :rtype: void 



toArray
-------

.. function:: toArray()


    Serialize to an array
    
    By default, returns only the item data, and in the order registered (not
    sorted). You may provide one of the EXTR_* flags as an argument, allowing
    the ability to return priorities or both data and priority.

    :param int: 

    :rtype: array 



setInternalQueueClass
---------------------

.. function:: setInternalQueueClass()


    Specify the internal queue class
    
    Please see {@link getIterator()} for details on the necessity of an
    internal queue class. The class provided should extend SplPriorityQueue.

    :param string: 

    :rtype: PriorityQueue 



contains
--------

.. function:: contains()


    Does the queue contain the given datum?

    :param mixed: 

    :rtype: bool 



hasPriority
-----------

.. function:: hasPriority()


    Does the queue have an item with the given priority?

    :param int: 

    :rtype: bool 



getQueue
--------

.. function:: getQueue()


    Get the inner priority queue instance


    :rtype: SplPriorityQueue 



__clone
-------

.. function:: __clone()


    Add support for deep cloning

    :rtype: void 





Constants
+++++++++

EXTR_DATA
=========

EXTR_PRIORITY
=============

EXTR_BOTH
=========

