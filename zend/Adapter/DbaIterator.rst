.. Cache/Storage/Adapter/DbaIterator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\DbaIterator
==========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Dba: 
    :param resource: 
    :param string: 



getStorage
++++++++++

.. function:: getStorage()


    Get storage instance

    :rtype: Dba 



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

    :throws: Exception\RuntimeException 



key
+++

.. function:: key()


    Get current key

    :rtype: string 

    :throws: Exception\RuntimeException 



next
++++

.. function:: next()


    Move forward to next element

    :rtype: void 

    :throws: Exception\RuntimeException 



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

    :throws: Exception\RuntimeException 



