.. Session/Storage/ArrayStorage.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Session\\Storage\\ArrayStorage
====================================

Array session storage

Defines an ArrayObject interface for accessing session storage, with options
for setting metadata, locking, and marking as isImmutable.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Instantiates storage as an ArrayObject, allowing property access.
    Also sets the initial request access time.

    :param array: 
    :param int: 
    :param string: 



setRequestAccessTime
++++++++++++++++++++

.. function:: setRequestAccessTime()


    Set the request access time

    :param float: 

    :rtype: ArrayStorage 



getRequestAccessTime
++++++++++++++++++++

.. function:: getRequestAccessTime()


    Retrieve the request access time

    :rtype: float 



offsetSet
+++++++++

.. function:: offsetSet()


    @param  mixed $key

    :param mixed: 

    :throws Exception\RuntimeException: 



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



markImmutable
+++++++++++++

.. function:: markImmutable()


    Mark the storage container as isImmutable

    :rtype: ArrayStorage 



isImmutable
+++++++++++

.. function:: isImmutable()


    Is the storage container marked as isImmutable?

    :rtype: bool 



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



fromArray
+++++++++

.. function:: fromArray()


    Load the storage from another array
    
    Overwrites any data that was previously set.

    :param array: 

    :rtype: ArrayStorage 



toArray
+++++++

.. function:: toArray()


    Cast the object to an array
    
    Returns data only, no metadata.

    :rtype: array 



