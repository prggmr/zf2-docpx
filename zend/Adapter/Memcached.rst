.. /Cache/Storage/Adapter/Memcached.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\Memcached
****************************************


@package    Zend_Cache



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param null|array|Traversable|MemcachedOptions $options: 

    :throws Exception\ExceptionInterface: 



getMemcachedResource
--------------------

.. function:: getMemcachedResource()


    Initialize the internal memcached resource

    :rtype: MemcachedResource 



$event
------

.. function:: $event()



setOptions
----------

.. function:: setOptions($options)


    Set options.

    :param array|Traversable|MemcachedOptions $options: 

    :rtype: Memcached 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: MemcachedOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



flush
-----

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



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


    Get metadata of multiple items

    :param array $normalizedKeys: 

    :rtype: array Associative array of keys and metadata

    :throws: Exception\ExceptionInterface 



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



internalReplaceItem
-------------------

.. function:: internalReplaceItem($normalizedKey, $value)


    Internal method to replace an existing item.

    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalCheckAndSetItem
-----------------------

.. function:: internalCheckAndSetItem($token, $normalizedKey, $value)


    Internal method to set an item only if token matches

    :param mixed $token: 
    :param string $normalizedKey: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



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



expirationTime
--------------

.. function:: expirationTime()


    Get expiration time by ttl
    
    Some storage commands involve sending an expiration value (relative to
    an item or to an operation requested by the client) to the server. In
    all such cases, the actual value sent may either be Unix time (number of
    seconds since January 1, 1970, as an integer), or a number of seconds
    starting from current time. In the latter case, this number of seconds
    may not exceed 60*60*24*30 (number of seconds in 30 days); if the
    expiration value is larger than that, the server will consider it to be
    real Unix time value rather than an offset from current time.

    :rtype: int 



getExceptionByResultCode
------------------------

.. function:: getExceptionByResultCode($code)


    Generate exception based of memcached result code

    :param int $code: 

    :rtype: Exception\RuntimeException 

    :throws: Exception\InvalidArgumentException On success code





