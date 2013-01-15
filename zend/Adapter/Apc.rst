.. /Cache/Storage/Adapter/Apc.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\Apc
**********************************


@package    Zend_Cache



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param null|array|Traversable|ApcOptions $options: 

    :throws Exception\ExceptionInterface: 



setOptions
----------

.. function:: setOptions($options)


    Set options.

    :param array|Traversable|ApcOptions $options: 

    :rtype: Apc 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: ApcOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



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

    :rtype: ApcIterator 



flush
-----

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
----------------

.. function:: clearByNamespace($namespace)


    Remove items by given namespace

    :param string $namespace: 

    :rtype: bool 



clearByPrefix
-------------

.. function:: clearByPrefix($prefix)


    Remove items matching given prefix

    :param string $prefix: 

    :rtype: bool 



internalGetItem
---------------

.. function:: internalGetItem($normalizedKey, [$success = false, [$casToken = false]])


    Internal method to get an item.

    :param string $normalizedKey: 
    :param bool $success: 
    :param mixed $casToken: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface 



internalGetItems
----------------

.. function:: internalGetItems($normalizedKeys)


    Internal method to get multiple items.

    :param array $normalizedKeys: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface 



internalHasItem
---------------

.. function:: internalHasItem($normalizedKey)


    Internal method to test if an item exists.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalHasItems
----------------

.. function:: internalHasItems($normalizedKeys)


    Internal method to test multiple items.

    :param array $normalizedKeys: 

    :rtype: array Array of found keys

    :throws: Exception\ExceptionInterface 



internalGetMetadata
-------------------

.. function:: internalGetMetadata($normalizedKey)


    Get metadata of an item.

    :param string $normalizedKey: 

    :rtype: array|bool Metadata on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetMetadatas
--------------------

.. function:: internalGetMetadatas($normalizedKeys)


    Get metadata of multiple items

    :param array $normalizedKeys: 

    :rtype: array Associative array of keys and metadata

@triggers getMetadatas.pre(PreEvent)
@triggers getMetadatas.post(PostEvent)
@triggers getMetadatas.exception(ExceptionEvent)



internalSetItem
---------------

.. function:: internalSetItem($normalizedKey, $value)


    Internal method to store an item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalSetItems
----------------

.. function:: internalSetItems($normalizedKeyValuePairs)


    Internal method to store multiple items.

    :param array $normalizedKeyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalAddItem
---------------

.. function:: internalAddItem($normalizedKey, $value)


    Add an item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalAddItems
----------------

.. function:: internalAddItems($normalizedKeyValuePairs)


    Internal method to add multiple items.

    :param array $normalizedKeyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface 



internalReplaceItem
-------------------

.. function:: internalReplaceItem($normalizedKey, $value)


    Internal method to replace an existing item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItem
------------------

.. function:: internalRemoveItem($normalizedKey)


    Internal method to remove an item.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalRemoveItems
-------------------

.. function:: internalRemoveItems($normalizedKeys)


    Internal method to remove multiple items.

    :param array $normalizedKeys: 

    :rtype: array Array of not removed keys

    :throws: Exception\ExceptionInterface 



internalIncrementItem
---------------------

.. function:: internalIncrementItem($normalizedKey, $value)


    Internal method to increment an item.

    :param string $normalizedKey: 
    :param int $value: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalDecrementItem
---------------------

.. function:: internalDecrementItem($normalizedKey, $value)


    Internal method to decrement an item.

    :param string $normalizedKey: 
    :param int $value: 

    :rtype: int|bool The new value on success, false on failure

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
-----------------------

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



$event
------

.. function:: $event()



normalizeMetadata
-----------------

.. function:: normalizeMetadata($metadata)


    Normalize metadata to work with APC

    :param array $metadata: 

    :rtype: void 





