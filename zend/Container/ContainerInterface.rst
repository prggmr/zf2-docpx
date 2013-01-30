.. Memory/Container/ContainerInterface.php generated using docpx on 01/30/13 03:32am


Zend\\Memory\\Container\\getRef
===============================

.. function:: Zend\Memory\Container\getRef()


    Get string value reference
    
    _Must_ be used for value access before PHP v 5.2
    or _may_ be used for performance considerations

    :rtype: &string 



Zend\\Memory\\Container\\touch
==============================

.. function:: Zend\Memory\Container\touch()


    Signal, that value is updated by external code.
    
    Should be used together with getRef()



Zend\\Memory\\Container\\lock
=============================

.. function:: Zend\Memory\Container\lock()


    Lock object in memory.



Zend\\Memory\\Container\\unlock
===============================

.. function:: Zend\Memory\Container\unlock()


    Unlock object



Zend\\Memory\\Container\\isLocked
=================================

.. function:: Zend\Memory\Container\isLocked()


    Return true if object is locked

    :rtype: bool 



