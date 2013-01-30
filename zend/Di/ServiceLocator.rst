.. Di/ServiceLocator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Di\\ServiceLocator
========================

Simple service locator implementation capable of using closures to generate instances

Methods
-------

set
+++

.. function:: set()


    {@inheritDoc}



get
+++

.. function:: get()


    Retrieve a registered service
    
    Tests first if a value is registered for the service, and, if so,
    returns it.
    
    If the value returned is a non-object callback or closure, the return
    value is retrieved, stored, and returned. Parameters passed to the method
    are passed to the callback, but only on the first retrieval.
    
    If the service requested matches a method in the method map, the return
    value of that method is returned. Parameters are passed to the matching
    method.

    :param string: 
    :param array: 

    :rtype: mixed 



