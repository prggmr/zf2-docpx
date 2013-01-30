.. Paginator/SerializableLimitIterator.php generated using docpx on 01/30/13 03:32am


Zend\\Paginator\\SerializableLimitIterator
==========================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Construct a Zend\Paginator\SerializableLimitIterator

    :param Iterator: Iterator to limit (must be serializable by un-/serialize)
    :param int: Offset to first element
    :param int: Maximum number of elements to show or -1 for all

    :see : 



serialize
---------

.. function:: serialize()


    @return string representation of the instance



unserialize
-----------

.. function:: unserialize()


    @param string $data representation of the instance

    :rtype: void 



offsetGet
---------

.. function:: offsetGet()


    Returns value of the Iterator

    :param int: 

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet()


    Does nothing
    Required by the ArrayAccess implementation

    :param int: 
    :param mixed: 



offsetExists
------------

.. function:: offsetExists()


    Determine if a value of Iterator is set and is not NULL

    :param int: 

    :rtype: bool 



offsetUnset
-----------

.. function:: offsetUnset()


    Does nothing
    Required by the ArrayAccess implementation

    :param int: 



