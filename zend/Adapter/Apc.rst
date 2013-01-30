.. Cache/Storage/Adapter/Apc.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\Apc
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|Traversable|ApcOptions: 

    :throws Exception\ExceptionInterface: 



setOptions
++++++++++

.. function:: setOptions()


    Set options.

    :param array|Traversable|ApcOptions: 

    :rtype: Apc 

    :see:  



getOptions
++++++++++

.. function:: getOptions()


    Get options.

    :rtype: ApcOptions 

    :see:  



getTotalSpace
+++++++++++++

.. function:: getTotalSpace()


    Get total space in bytes

    :rtype: int|float 



getAvailableSpace
+++++++++++++++++

.. function:: getAvailableSpace()


    Get available space in bytes

    :rtype: int|float 



getIterator
+++++++++++

.. function:: getIterator()


    Get the storage iterator

    :rtype: ApcIterator 



flush
+++++

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
++++++++++++++++

.. function:: clearByNamespace()


    Remove items by given namespace

    :param string: 

    :rtype: bool 



clearByPrefix
+++++++++++++

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :rtype: bool 



internalGetItem
+++++++++++++++

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param bool: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalGetItems
++++++++++++++++

.. function:: internalGetItems()


    Internal method to get multiple items.

    :param array: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface 



internalHasItem
+++++++++++++++

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalHasItems
++++++++++++++++

.. function:: internalHasItems()


    Internal method to test multiple items.

    :param array: 

    :rtype: array Array of found keys

    :throws: Exception\ExceptionInterface 



internalGetMetadata
+++++++++++++++++++

.. function:: internalGetMetadata()


    Get metadata of an item.

    :param string: 

    :rtype: array|bool Metadata on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetMetadatas
++++++++++++++++++++

.. function:: internalGetMetadatas()


    Get metadata of multiple items

    :param array: 

    :rtype: array Associative array of keys and metadata

@triggers getMetadatas.pre(PreEvent)
@triggers getMetadatas.post(PostEvent)
@triggers getMetadatas.exception(ExceptionEvent)



internalSetItem
+++++++++++++++

.. function:: internalSetItem()


    Internal method to store an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalSetItems
++++++++++++++++

.. function:: internalSetItems()


    Internal method to store multiple items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalAddItem
+++++++++++++++

.. function:: internalAddItem()


    Add an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalAddItems
++++++++++++++++

.. function:: internalAddItems()


    Internal method to add multiple items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalReplaceItem
+++++++++++++++++++

.. function:: internalReplaceItem()


    Internal method to replace an existing item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
++++++++++++++++++

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItems
+++++++++++++++++++

.. function:: internalRemoveItems()


    Internal method to remove multiple items.

    :param array: 

    :rtype: array Array of not removed keys

    :throws: Exception\ExceptionInterface 



internalIncrementItem
+++++++++++++++++++++

.. function:: internalIncrementItem()


    Internal method to increment an item.

    :param string: 
    :param int: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalDecrementItem
+++++++++++++++++++++

.. function:: internalDecrementItem()


    Internal method to decrement an item.

    :param string: 
    :param int: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
+++++++++++++++++++++++

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



normalizeMetadata
+++++++++++++++++

.. function:: normalizeMetadata()


    Normalize metadata to work with APC

    :param array: 

    :rtype: void 



