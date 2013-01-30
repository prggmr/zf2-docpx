.. Cache/Storage/Adapter/KeyListIterator.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Storage\\Adapter\\KeyListIterator
==============================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param StorageInterface: 
    :param array: 



getStorage
----------

.. function:: getStorage()


    Get storage instance

    :rtype: StorageInterface 



getMode
-------

.. function:: getMode()


    Get iterator mode

    :rtype: int Value of IteratorInterface::CURRENT_AS_*



setMode
-------

.. function:: setMode()


    Set iterator mode

    :param int: 

    :rtype: KeyListIterator Fluent interface



current
-------

.. function:: current()


    Get current key, value or metadata.

    :rtype: mixed 



key
---

.. function:: key()


    Get current key

    :rtype: string 



valid
-----

.. function:: valid()


    Checks if current position is valid

    :rtype: bool 



next
----

.. function:: next()


    Move forward to next element

    :rtype: void 



rewind
------

.. function:: rewind()


    Rewind the Iterator to the first element.

    :rtype: void 



count
-----

.. function:: count()


    Count number of items

    :rtype: int 



