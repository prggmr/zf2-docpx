.. Stdlib/SplPriorityQueue.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\SplPriorityQueue
==============================

Serializable version of SplPriorityQueue

Also, provides predictable heap order for datums added with the same priority
(i.e., they will be emitted in the same order they are enqueued).

Methods
-------

insert
++++++

.. function:: insert()


    Insert a value with a given priority
    
    Utilizes {@var $serial} to ensure that values of equal priority are
    emitted in the same order in which they are inserted.

    :param mixed: 
    :param mixed: 

    :rtype: void 



toArray
+++++++

.. function:: toArray()


    Serialize to an array
    
    Array will be priority => data pairs

    :rtype: array 



serialize
+++++++++

.. function:: serialize()


    Serialize

    :rtype: string 



unserialize
+++++++++++

.. function:: unserialize()


    Deserialize

    :param string: 

    :rtype: void 



