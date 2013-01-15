.. /Cache/Storage/Adapter/AbstractZendServer.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\AbstractZendServer
*************************************************


@category   Zend



Methods
=======

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



internalGetMetadatas
--------------------

.. function:: internalGetMetadatas($normalizedKeys)


    Get metadata for multiple items

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



internalRemoveItem
------------------

.. function:: internalRemoveItem($normalizedKey)


    Internal method to remove an item.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
-----------------------

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



zdcStore
--------

.. function:: zdcStore($internalKey, $value, $ttl)


    Store data into Zend Data Cache (zdc)

    :param string $internalKey: 
    :param mixed $value: 
    :param int $ttl: 

    :rtype: void 

    :throws: Exception\RuntimeException 



zdcFetch
--------

.. function:: zdcFetch($internalKey)


    Fetch a single item from Zend Data Cache (zdc)

    :param string $internalKey: 

    :rtype: mixed The stored value or FALSE if item wasn't found

    :throws: Exception\RuntimeException 



zdcFetchMulti
-------------

.. function:: zdcFetchMulti($internalKeys)


    Fetch multiple items from Zend Data Cache (zdc)

    :param array $internalKeys: 

    :rtype: array All found items

    :throws: Exception\RuntimeException 



zdcDelete
---------

.. function:: zdcDelete($internalKey)


    Delete data from Zend Data Cache (zdc)

    :param string $internalKey: 

    :rtype: bool 

    :throws: Exception\RuntimeException 





Constants
---------

NAMESPACE_SEPARATOR
+++++++++++++++++++

The namespace separator used on Zend Data Cache functions

