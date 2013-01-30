.. Cache/Storage/Adapter/Memcached.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\Memcached
========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|Traversable|MemcachedOptions: 

    :throws Exception\ExceptionInterface: 



getMemcachedResource
++++++++++++++++++++

.. function:: getMemcachedResource()


    Initialize the internal memcached resource

    :rtype: MemcachedResource 



setOptions
++++++++++

.. function:: setOptions()


    Set options.

    :param array|Traversable|MemcachedOptions: 

    :rtype: Memcached 

    :see:  



getOptions
++++++++++

.. function:: getOptions()


    Get options.

    :rtype: MemcachedOptions 

    :see:  



flush
+++++

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



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



internalGetMetadatas
++++++++++++++++++++

.. function:: internalGetMetadatas()


    Get metadata of multiple items

    :param array: 

    :rtype: array Associative array of keys and metadata

    :throws: Exception\ExceptionInterface 



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



internalReplaceItem
+++++++++++++++++++

.. function:: internalReplaceItem()


    Internal method to replace an existing item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalCheckAndSetItem
+++++++++++++++++++++++

.. function:: internalCheckAndSetItem()


    Internal method to set an item only if token matches

    :param mixed: 
    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 

    :see:  
    :see:  



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



expirationTime
++++++++++++++

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
++++++++++++++++++++++++

.. function:: getExceptionByResultCode()


    Generate exception based of memcached result code

    :param int: 

    :rtype: Exception\RuntimeException 

    :throws: Exception\InvalidArgumentException On success code



