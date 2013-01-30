.. Session/Storage/SessionArrayStorage.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Session\\Storage\\SessionArrayStorage
===========================================

Session storage in $_SESSION

Replaces the $_SESSION superglobal with an ArrayObject that allows for
property access, metadata storage, locking, and immutability.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|null: 
    :param int: 
    :param string: 



__get
+++++

.. function:: __get()


    Get Offset

    :param mixed: 

    :rtype: mixed 



__set
+++++

.. function:: __set()


    Set Offset

    :param mixed: 
    :param mixed: 

    :rtype: void 



__isset
+++++++

.. function:: __isset()


    Isset Offset

    :param mixed: 

    :rtype: boolean 



__unset
+++++++

.. function:: __unset()


    Unset Offset

    :param mixed: 

    :rtype: void 



__destruct
++++++++++

.. function:: __destruct()


    Destructor

    :rtype: void 



offsetExists
++++++++++++

.. function:: offsetExists()


    Offset Exists

    :param mixed: 

    :rtype: boolean 



offsetGet
+++++++++

.. function:: offsetGet()


    Offset Get

    :param mixed: 

    :rtype: mixed 



offsetSet
+++++++++

.. function:: offsetSet()


    Offset Set

    :param mixed: 
    :param mixed: 

    :rtype: void 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Offset Unset

    :param mixed: 

    :rtype: void 



count
+++++

.. function:: count()


    Count

    :rtype: int 



serialize
+++++++++

.. function:: serialize()


    Seralize

    :rtype: string 



unserialize
+++++++++++

.. function:: unserialize()


    Unserialize

    :rtype: mixed 



getIterator
+++++++++++

.. function:: getIterator()


    Get Iterator

    :rtype: ArrayIterator 



fromArray
+++++++++

.. function:: fromArray()


    Load session object from an existing array
    
    Ensures $_SESSION is set to an instance of the object when complete.

    :param array: 

    :rtype: SessionStorage 



markImmutable
+++++++++++++

.. function:: markImmutable()


    Mark object as isImmutable

    :rtype: SessionStorage 



isImmutable
+++++++++++

.. function:: isImmutable()


    Determine if this object is isImmutable

    :rtype: bool 



lock
++++

.. function:: lock()


    Lock this storage instance, or a key within it

    :param null|int|string: 

    :rtype: ArrayStorage 



isLocked
++++++++

.. function:: isLocked()


    Is the object or key marked as locked?

    :param null|int|string: 

    :rtype: bool 



unlock
++++++

.. function:: unlock()


    Unlock an object or key marked as locked

    :param null|int|string: 

    :rtype: ArrayStorage 



setMetadata
+++++++++++

.. function:: setMetadata()


    Set storage metadata
    
    Metadata is used to store information about the data being stored in the
    object. Some example use cases include:
    - Setting expiry data
    - Maintaining access counts
    - localizing session storage
    - etc.

    :param string: 
    :param mixed: 
    :param bool: Whether to overwrite or merge array values; by default, merges

    :rtype: ArrayStorage 

    :throws: Exception\RuntimeException 



getMetadata
+++++++++++

.. function:: getMetadata()


    Retrieve metadata for the storage object or a specific metadata key
    
    Returns false if no metadata stored, or no metadata exists for the given
    key.

    :param null|int|string: 

    :rtype: mixed 



clear
+++++

.. function:: clear()


    Clear the storage object or a subkey of the object

    :param null|int|string: 

    :rtype: ArrayStorage 

    :throws: Exception\RuntimeException 



getRequestAccessTime
++++++++++++++++++++

.. function:: getRequestAccessTime()


    Retrieve the request access time

    :rtype: float 



setRequestAccessTime
++++++++++++++++++++

.. function:: setRequestAccessTime()


    Set the request access time

    :param float: 

    :rtype: ArrayStorage 



toArray
+++++++

.. function:: toArray()


    Cast the object to an array
    
    Returns data only, no metadata.

    :rtype: array 



