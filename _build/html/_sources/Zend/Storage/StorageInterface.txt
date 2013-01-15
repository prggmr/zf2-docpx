.. /Cache/Storage/StorageInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\setOptions
================================

.. function:: Zend\Cache\Storage\setOptions()


    Set options.

    :param array|Traversable|Adapter\AdapterOptions $options: 

    :rtype: StorageInterface Fluent interface



Zend\\Cache\\Storage\\getOptions
================================

.. function:: Zend\Cache\Storage\getOptions()


    Get options

    :rtype: Adapter\AdapterOptions 



Zend\\Cache\\Storage\\getItem
=============================

.. function:: Zend\Cache\Storage\getItem()


    Get an item.

    :param string $key: 
    :param bool $success: 
    :param mixed $casToken: 

    :rtype: mixed Data on success, null on failure

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\getItems
==============================

.. function:: Zend\Cache\Storage\getItems()


    Get multiple items.

    :param array $keys: 

    :rtype: array Associative array of keys and values

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\hasItem
=============================

.. function:: Zend\Cache\Storage\hasItem()


    Test if an item exists.

    :param string $key: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\hasItems
==============================

.. function:: Zend\Cache\Storage\hasItems()


    Test multiple items.

    :param array $keys: 

    :rtype: array Array of found keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\getMetadata
=================================

.. function:: Zend\Cache\Storage\getMetadata()


    Get metadata of an item.

    :param string $key: 

    :rtype: array|bool Metadata on success, false on failure

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\getMetadatas
==================================

.. function:: Zend\Cache\Storage\getMetadatas()


    Get multiple metadata

    :param array $keys: 

    :rtype: array Associative array of keys and metadata

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\setItem
=============================

.. function:: Zend\Cache\Storage\setItem()


    Store an item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\setItems
==============================

.. function:: Zend\Cache\Storage\setItems()


    Store multiple items.

    :param array $keyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\addItem
=============================

.. function:: Zend\Cache\Storage\addItem()


    Add an item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\addItems
==============================

.. function:: Zend\Cache\Storage\addItems()


    Add multiple items.

    :param array $keyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\replaceItem
=================================

.. function:: Zend\Cache\Storage\replaceItem()


    Replace an existing item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\replaceItems
==================================

.. function:: Zend\Cache\Storage\replaceItems()


    Replace multiple existing items.

    :param array $keyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\checkAndSetItem
=====================================

.. function:: Zend\Cache\Storage\checkAndSetItem()


    Set an item only if token matches
    
    It uses the token received from getItem() to check if the item has
    changed before overwriting it.

    :param mixed $token: 
    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



Zend\\Cache\\Storage\\touchItem
===============================

.. function:: Zend\Cache\Storage\touchItem()


    Reset lifetime of an item

    :param string $key: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\touchItems
================================

.. function:: Zend\Cache\Storage\touchItems()


    Reset lifetime of multiple items.

    :param array $keys: 

    :rtype: array Array of not updated keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\removeItem
================================

.. function:: Zend\Cache\Storage\removeItem()


    Remove an item.

    :param string $key: 

    :rtype: bool 

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\removeItems
=================================

.. function:: Zend\Cache\Storage\removeItems()


    Remove multiple items.

    :param array $keys: 

    :rtype: array Array of not removed keys

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\incrementItem
===================================

.. function:: Zend\Cache\Storage\incrementItem()


    Increment an item.

    :param string $key: 
    :param int $value: 

    :rtype: int|bool The new value on success, false on failure

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\incrementItems
====================================

.. function:: Zend\Cache\Storage\incrementItems()


    Increment multiple items.

    :param array $keyValuePairs: 

    :rtype: array Associative array of keys and new values

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\decrementItem
===================================

.. function:: Zend\Cache\Storage\decrementItem()


    Decrement an item.

    :param string $key: 
    :param int $value: 

    :rtype: int|bool The new value on success, false on failure

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\decrementItems
====================================

.. function:: Zend\Cache\Storage\decrementItems()


    Decrement multiple items.

    :param array $keyValuePairs: 

    :rtype: array Associative array of keys and new values

    :throws: \Zend\Cache\Exception\ExceptionInterface 



Zend\\Cache\\Storage\\getCapabilities
=====================================

.. function:: Zend\Cache\Storage\getCapabilities()


    Capabilities of this storage

    :rtype: Capabilities 



