.. Cache/Storage/Adapter/XCache.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\XCache
=====================================

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

    :rtype: XCache 

    :see:  



getOptions
++++++++++

.. function:: getOptions()


    Get options.

    :rtype: XCacheOptions 

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



clearByNamespace
++++++++++++++++

.. function:: clearByNamespace()


    Remove items by given namespace

    :param string: 

    :rtype: boolean 



clearByPrefix
+++++++++++++

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :rtype: boolean 



flush
+++++

.. function:: flush()


    Flush the whole storage

    :rtype: boolean 



getIterator
+++++++++++

.. function:: getIterator()


    Get the storage iterator

    :rtype: KeyListIterator 



internalGetItem
+++++++++++++++

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param boolean: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalHasItem
+++++++++++++++

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: boolean 

    :throws: Exception\ExceptionInterface 



internalGetMetadata
+++++++++++++++++++

.. function:: internalGetMetadata()


    Get metadata of an item.

    :param string: 

    :rtype: array|boolean Metadata on success, false on failure

    :throws: Exception\ExceptionInterface 



internalSetItem
+++++++++++++++

.. function:: internalSetItem()


    Internal method to store an item.

    :param string: 
    :param mixed: 

    :rtype: boolean 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
++++++++++++++++++

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: boolean 

    :throws: Exception\ExceptionInterface 



internalIncrementItem
+++++++++++++++++++++

.. function:: internalIncrementItem()


    Internal method to increment an item.

    :param string: 
    :param int: 

    :rtype: int|boolean The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalDecrementItem
+++++++++++++++++++++

.. function:: internalDecrementItem()


    Internal method to decrement an item.

    :param string: 
    :param int: 

    :rtype: int|boolean The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
+++++++++++++++++++++++

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



initAdminAuth
+++++++++++++

.. function:: initAdminAuth()


    Init authentication before calling admin functions

    :rtype: void 



resetAdminAuth
++++++++++++++

.. function:: resetAdminAuth()


    Reset authentication after calling admin functions

    :rtype: void 



normalizeMetadata
+++++++++++++++++

.. function:: normalizeMetadata()


    Normalize metadata to work with XCache

    :param array: 



