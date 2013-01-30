.. Cache/Storage/Adapter/Session.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Storage\\Adapter\\Session
======================================

Methods
+++++++

setOptions
----------

.. function:: setOptions()


    Set options.

    :param array|\Traversable|SessionOptions: 

    :rtype: Memory 

    :see:  



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: SessionOptions 

    :see:  



getSessionContainer
-------------------

.. function:: getSessionContainer()


    Get the session container

    :rtype: SessionContainer 



getIterator
-----------

.. function:: getIterator()


    Get the storage iterator

    :rtype: KeyListIterator 



flush
-----

.. function:: flush()


    Flush the whole session container

    :rtype: boolean 



clearByPrefix
-------------

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :rtype: boolean 



internalGetItem
---------------

.. function:: internalGetItem()


    Internal method to get an item.

    :param string: 
    :param boolean: 
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

    :rtype: boolean 



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

    :rtype: array|boolean Metadata on success, false on failure

    :throws: Exception\ExceptionInterface @triggers getMetadata.pre(PreEvent)
@triggers getMetadata.post(PostEvent)
@triggers getMetadata.exception(ExceptionEvent)



internalSetItem
---------------

.. function:: internalSetItem()


    Internal method to store an item.

    :param string: 
    :param mixed: 

    :rtype: boolean 

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

    :rtype: boolean 

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

    :rtype: boolean 

    :throws: Exception\ExceptionInterface 



internalReplaceItems
--------------------

.. function:: internalReplaceItems()


    Internal method to replace multiple existing items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalRemoveItem
------------------

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: boolean 

    :throws: Exception\ExceptionInterface 



internalIncrementItem
---------------------

.. function:: internalIncrementItem()


    Internal method to increment an item.

    :param string: 
    :param int: 

    :rtype: int|boolean The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalDecrementItem
---------------------

.. function:: internalDecrementItem()


    Internal method to decrement an item.

    :param string: 
    :param int: 

    :rtype: int|boolean The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
-----------------------

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



