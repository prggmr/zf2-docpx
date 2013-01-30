.. Cache/Storage/Adapter/Memory.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Storage\\Adapter\\Memory
=====================================

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set options.

    :param array|\Traversable|MemoryOptions: 

    :rtype: Memory 

    :see:  



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: MemoryOptions 

    :see:  



getTotalSpace
-------------

.. function:: getTotalSpace()


    Get total space in bytes

    :rtype: int|float 



getAvailableSpace
-----------------

.. function:: getAvailableSpace()


    Get available space in bytes

    :rtype: int|float 



getIterator
-----------

.. function:: getIterator()


    Get the storage iterator

    :rtype: KeyListIterator 



flush
-----

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearExpired
------------

.. function:: clearExpired()


    Remove expired items

    :rtype: bool 



clearByNamespace
----------------

.. function:: clearByNamespace()



clearByPrefix
-------------

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :rtype: bool 



setTags
-------

.. function:: setTags()


    Set tags to an item by given key.
    An empty array will remove all tags.

    :param string: 
    :param string[]: 

    :rtype: bool 



getTags
-------

.. function:: getTags()


    Get tags of an item by given key

    :param string: 

    :rtype: string[]|FALSE 



clearByTags
-----------

.. function:: clearByTags()


    Remove items matching given tags.
    
    If $disjunction only one of the given tags must match
    else all given tags must match.

    :param string[]: 
    :param bool: 

    :rtype: bool 



internalGetItem
---------------

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param bool: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalGetItems
----------------

.. function:: internalGetItems()


    Internal method to get multiple items.

    :param array: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface 



internalHasItem
---------------

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: bool 



internalHasItems
----------------

.. function:: internalHasItems()


    Internal method to test multiple items.

    :param array: 

    :rtype: array Array of found keys



internalGetMetadata
-------------------

.. function:: internalGetMetadata()


    Get metadata of an item.

    :param string: 

    :rtype: array|bool Metadata on success, false on failure

    :throws: Exception\ExceptionInterface @triggers getMetadata.pre(PreEvent)
@triggers getMetadata.post(PostEvent)
@triggers getMetadata.exception(ExceptionEvent)



internalSetItem
---------------

.. function:: internalSetItem()


    Internal method to store an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalSetItems
----------------

.. function:: internalSetItems()


    Internal method to store multiple items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalAddItem
---------------

.. function:: internalAddItem()


    Add an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalAddItems
----------------

.. function:: internalAddItems()


    Internal method to add multiple items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalReplaceItem
-------------------

.. function:: internalReplaceItem()


    Internal method to replace an existing item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalReplaceItems
--------------------

.. function:: internalReplaceItems()


    Internal method to replace multiple existing items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalTouchItem
-----------------

.. function:: internalTouchItem()


    Internal method to reset lifetime of an item

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
------------------

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalIncrementItem
---------------------

.. function:: internalIncrementItem()


    Internal method to increment an item.

    :param string: 
    :param int: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalDecrementItem
---------------------

.. function:: internalDecrementItem()


    Internal method to decrement an item.

    :param string: 
    :param int: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
-----------------------

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



hasAvailableSpace
-----------------

.. function:: hasAvailableSpace()


    Has space available to store items?

    :rtype: bool 



