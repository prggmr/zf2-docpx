.. Memory/Container/AccessController.php generated using docpx on 01/30/13 03:32am


Zend\\Memory\\Container\\AccessController
=========================================

Memory object container access controller.

Memory manager stores a list of generated objects to control them.
So container objects always have at least one reference and can't be automatically destroyed.

This class is intended to be an userland proxy to memory container object.
It's not referenced by memory manager and class destructor is invoked immediately after going
out of scope or unset operation.

Class also provides Zend\Memory\Container interface and works as proxy for such cases.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Object constructor

    :param Movable: 



__destruct
----------

.. function:: __destruct()


    Object destructor



getRef
------

.. function:: getRef()


    Get string value reference
    
    _Must_ be used for value access before PHP v 5.2
    or _may_ be used for performance considerations

    :rtype: &string 



touch
-----

.. function:: touch()


    Signal, that value is updated by external code.
    
    Should be used together with getRef()



lock
----

.. function:: lock()


    Lock object in memory.



unlock
------

.. function:: unlock()


    Unlock object



isLocked
--------

.. function:: isLocked()


    Return true if object is locked

    :rtype: bool 



__get
-----

.. function:: __get()


    Get handler
    
    Loads object if necessary and moves it to the top of loaded objects list.
    Swaps objects from the bottom of loaded objects list, if necessary.

    :param string: 

    :rtype: string 



__set
-----

.. function:: __set()


    Set handler

    :param string: 
    :param string: 



