.. Memory/Container/Movable.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Memory\\Container\\Movable
================================

Memory value container

Movable (may be swapped with specified backend and unloaded).

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Object constructor

    :param \Zend\Memory\MemoryManager: 
    :param integer: 
    :param string: 



lock
++++

.. function:: lock()


    Lock object in memory.



unlock
++++++

.. function:: unlock()


    Unlock object



isLocked
++++++++

.. function:: isLocked()


    Return true if object is locked

    :rtype: bool 



__get
+++++

.. function:: __get()


    Get handler
    
    Loads object if necessary and moves it to the top of loaded objects list.
    Swaps objects from the bottom of loaded objects list, if necessary.

    :param string: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



__set
+++++

.. function:: __set()


    Set handler

    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 



getRef
++++++

.. function:: getRef()


    Get string value reference
    
    _Must_ be used for value access before PHP v 5.2
    or _may_ be used for performance considerations

    :rtype: &string 



touch
+++++

.. function:: touch()


    Signal, that value is updated by external code.
    
    Should be used together with getRef()



processUpdate
+++++++++++++

.. function:: processUpdate()


    Process container value update.
    Must be called only by value object




startTrace
++++++++++

.. function:: startTrace()


    Start modifications trace




setValue
++++++++

.. function:: setValue()


    Set value (used by memory manager when value is loaded)




unloadValue
+++++++++++

.. function:: unloadValue()


    Clear value (used by memory manager when value is swapped)




markAsSwapped
+++++++++++++

.. function:: markAsSwapped()


    Mark, that object is swapped




isSwapped
+++++++++

.. function:: isSwapped()


    Check if object is marked as swapped


    :rtype: bool 



getId
+++++

.. function:: getId()


    Get object id


    :rtype: integer 



destroy
+++++++

.. function:: destroy()


    Destroy memory container and remove it from memory manager list






Constants
---------

LOADED
++++++

Value states */

SWAPPED
+++++++

LOCKED
++++++

