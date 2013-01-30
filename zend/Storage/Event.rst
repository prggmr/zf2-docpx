.. Cache/Storage/Event.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Event
===========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Accept a storage adapter and its parameters.

    :param string: Event name
    :param StorageInterface: 
    :param ArrayObject: 



setTarget
+++++++++

.. function:: setTarget()


    Set the event target/context

    :param StorageInterface: 

    :rtype: Event 

    :see:  



setStorage
++++++++++

.. function:: setStorage()


    Alias of setTarget

    :param StorageInterface: 

    :rtype: Event 

    :see:  



getStorage
++++++++++

.. function:: getStorage()


    Alias of getTarget

    :rtype: StorageInterface 



