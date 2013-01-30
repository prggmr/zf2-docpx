.. Memory/Container/Locked.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Memory\\Container\\Locked
===============================

Memory value container

Locked (always stored in memory).

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Object constructor

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



destroy
+++++++

.. function:: destroy()


    Destroy memory container and remove it from memory manager list



