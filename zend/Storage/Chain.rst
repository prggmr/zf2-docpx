.. Authentication/Storage/Chain.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Authentication\\Storage\\Chain
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Initializes the priority queue.



add
+++

.. function:: add()


    @param StorageInterface $storage

    :param integer: 



isEmpty
+++++++

.. function:: isEmpty()


    Loop over the queue of storage until a storage is found that is non-empty. If such
    storage is not found, then this chain storage itself is empty.
    
    In case a non-empty storage is found then this chain storage is also non-empty. Report
    that, but also make sure that all storage with higher priorty that are empty
    are filled.




read
++++

.. function:: read()


    If the chain is non-empty then the storage with the top priority is guaranteed to be
    filled. Return its value.




write
+++++

.. function:: write()


    Write the new $contents to all storage in the chain.




clear
+++++

.. function:: clear()


    Clear all storage in the chain.




