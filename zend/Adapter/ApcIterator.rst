.. Cache/Storage/Adapter/ApcIterator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\ApcIterator
==========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Apc: 
    :param BaseApcIterator: 
    :param string: 



getStorage
++++++++++

.. function:: getStorage()


    Get storage instance

    :rtype: Apc 



getMode
+++++++

.. function:: getMode()


    Get iterator mode

    :rtype: int Value of IteratorInterface::CURRENT_AS_*



setMode
+++++++

.. function:: setMode()


    Set iterator mode

    :param int: 

    :rtype: ApcIterator Fluent interface



current
+++++++

.. function:: current()


    Get current key, value or metadata.

    :rtype: mixed 



key
+++

.. function:: key()


    Get current key

    :rtype: string 



next
++++

.. function:: next()


    Move forward to next element

    :rtype: void 



valid
+++++

.. function:: valid()


    Checks if current position is valid

    :rtype: bool 



rewind
++++++

.. function:: rewind()


    Rewind the Iterator to the first element.

    :rtype: void 



