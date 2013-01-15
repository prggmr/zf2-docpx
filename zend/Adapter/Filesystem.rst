.. /Cache/Storage/Adapter/Filesystem.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\Filesystem
*****************************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Set options.

    :param array|\Traversable|FilesystemOptions $options: 

    :rtype: Filesystem 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g



getOptions
----------

.. function:: getOptions()


    Get options.

    :rtype: FilesystemOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



flush
-----

.. function:: flush()


    Flush the whole storage


    :rtype: bool 



$dir
----

.. function:: $dir()



clearExpired
------------

.. function:: clearExpired()


    Remove expired items

    :rtype: bool 



clearByNamespace
----------------

.. function:: clearByNamespace($namespace)


    Remove items by given namespace

    :param string $namespace: 

    :throws Exception\RuntimeException: 

    :rtype: bool 



clearByPrefix
-------------

.. function:: clearByPrefix($prefix)


    Remove items matching given prefix

    :param string $prefix: 

    :throws Exception\RuntimeException: 

    :rtype: bool 



setTags
-------

.. function:: setTags($key, $tags)


    Set tags to an item by given key.
    An empty array will remove all tags.

    :param string $key: 
    :param string[] $tags: 

    :rtype: bool 



getTags
-------

.. function:: getTags($key)


    Get tags of an item by given key

    :param string $key: 

    :rtype: string[]|FALSE 



clearByTags
-----------

.. function:: clearByTags($tags, [$disjunction = false])


    Remove items matching given tags.
    
    If $disjunction only one of the given tags must match
    else all given tags must match.

    :param string[] $tags: 
    :param bool $disjunction: 

    :rtype: bool 



getIterator
-----------

.. function:: getIterator()


    Get the storage iterator

    :rtype: FilesystemIterator 



optimize
--------

.. function:: optimize()


    Optimize the storage

    :rtype: bool 
    :rtype: Exception\RuntimeException 



getTotalSpace
-------------

.. function:: getTotalSpace()


    Get total space in bytes


    :rtype: int|float 



$event
------

.. function:: $event()



getAvailableSpace
-----------------

.. function:: getAvailableSpace()


    Get available space in bytes


    :rtype: int|float 



getItem
-------

.. function:: getItem($key, [$success = false, [$casToken = false]])


    Get an item.

    :param string $key: 
    :param bool $success: 
    :param mixed $casToken: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface @triggers getItem.pre(PreEvent)
@triggers getItem.post(PostEvent)
@triggers getItem.exception(ExceptionEvent)



getItems
--------

.. function:: getItems($keys)


    Get multiple items.

    :param array $keys: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface @triggers getItems.pre(PreEvent)
@triggers getItems.post(PostEvent)
@triggers getItems.exception(ExceptionEvent)



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



hasItem
-------

.. function:: hasItem($key)


    Test if an item exists.

    :param string $key: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers hasItem.pre(PreEvent)
@triggers hasItem.post(PostEvent)
@triggers hasItem.exception(ExceptionEvent)



hasItems
--------

.. function:: hasItems($keys)


    Test multiple items.

    :param array $keys: 

    :rtype: array Array of found keys

    :throws: Exception\ExceptionInterface @triggers hasItems.pre(PreEvent)
@triggers hasItems.post(PostEvent)
@triggers hasItems.exception(ExceptionEvent)



internalHasItem
---------------

.. function:: internalHasItem($normalizedKey)


    Internal method to test if an item exists.

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



getMetadata
-----------

.. function:: getMetadata($key)


    Get metadata

    :param string $key: 

    :rtype: array|bool Metadata on success, false on failure



getMetadatas
------------

.. function:: getMetadatas($keys, [$options = false])


    Get metadatas

    :param array $keys: 
    :param array $options: 

    :rtype: array Associative array of keys and metadata



internalGetMetadata
-------------------

.. function:: internalGetMetadata($normalizedKey)


    Get info by key

    :param string $normalizedKey: 

    :rtype: array|bool Metadata on success, false on failure



internalGetMetadatas
--------------------

.. function:: internalGetMetadatas($normalizedKeys)


    Internal method to get multiple metadata

    :param array $normalizedKeys: 

    :rtype: array Associative array of keys and metadata

    :throws: Exception\ExceptionInterface 



setItem
-------

.. function:: setItem($key, $value)


    Store an item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers setItem.pre(PreEvent)
@triggers setItem.post(PostEvent)
@triggers setItem.exception(ExceptionEvent)



setItems
--------

.. function:: setItems($keyValuePairs)


    Store multiple items.

    :param array $keyValuePairs: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface @triggers setItems.pre(PreEvent)
@triggers setItems.post(PostEvent)
@triggers setItems.exception(ExceptionEvent)



addItem
-------

.. function:: addItem($key, $value)


    Add an item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers addItem.pre(PreEvent)
@triggers addItem.post(PostEvent)
@triggers addItem.exception(ExceptionEvent)



addItems
--------

.. function:: addItems($keyValuePairs)


    Add multiple items.

    :param array $keyValuePairs: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers addItems.pre(PreEvent)
@triggers addItems.post(PostEvent)
@triggers addItems.exception(ExceptionEvent)



replaceItem
-----------

.. function:: replaceItem($key, $value)


    Replace an existing item.

    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers replaceItem.pre(PreEvent)
@triggers replaceItem.post(PostEvent)
@triggers replaceItem.exception(ExceptionEvent)



replaceItems
------------

.. function:: replaceItems($keyValuePairs)


    Replace multiple existing items.

    :param array $keyValuePairs: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers replaceItems.pre(PreEvent)
@triggers replaceItems.post(PostEvent)
@triggers replaceItems.exception(ExceptionEvent)



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



checkAndSetItem
---------------

.. function:: checkAndSetItem($token, $key, $value)


    Set an item only if token matches
    
    It uses the token received from getItem() to check if the item has
    changed before overwriting it.

    :param mixed $token: 
    :param string $key: 
    :param mixed $value: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: g g

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s



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



touchItem
---------

.. function:: touchItem($key)


    Reset lifetime of an item

    :param string $key: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers touchItem.pre(PreEvent)
@triggers touchItem.post(PostEvent)
@triggers touchItem.exception(ExceptionEvent)



touchItems
----------

.. function:: touchItems($keys)


    Reset lifetime of multiple items.

    :param array $keys: 

    :rtype: array Array of not updated keys

    :throws: Exception\ExceptionInterface @triggers touchItems.pre(PreEvent)
@triggers touchItems.post(PostEvent)
@triggers touchItems.exception(ExceptionEvent)



internalTouchItem
-----------------

.. function:: internalTouchItem($normalizedKey)


    Internal method to reset lifetime of an item

    :param string $normalizedKey: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



removeItem
----------

.. function:: removeItem($key)


    Remove an item.

    :param string $key: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers removeItem.pre(PreEvent)
@triggers removeItem.post(PostEvent)
@triggers removeItem.exception(ExceptionEvent)



removeItems
-----------

.. function:: removeItems($keys)


    Remove multiple items.

    :param array $keys: 

    :rtype: array Array of not removed keys

    :throws: Exception\ExceptionInterface @triggers removeItems.pre(PreEvent)
@triggers removeItems.post(PostEvent)
@triggers removeItems.exception(ExceptionEvent)



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



$event
------

.. function:: $event()



rmDir
-----

.. function:: rmDir($dir, $prefix)


    Removes directories recursive by namespace

    :param string $dir: Directory to delete
    :param string $prefix: Namespace + Separator

    :rtype: bool 



getFileSpec
-----------

.. function:: getFileSpec($normalizedKey)


    Get file spec of the given key and namespace

    :param string $normalizedKey: 

    :rtype: string 



readInfoFile
------------

.. function:: readInfoFile($file, [$nonBlocking = false, [$wouldblock = false]])


    Read info file

    :param string $file: 
    :param bool $nonBlocking: Don't block script if file is locked
    :param bool $wouldblock: The optional argument is set to TRUE if the lock would block

    :rtype: array|bool The info array or false if file wasn't found

    :throws: Exception\RuntimeException 



getFileContent
--------------

.. function:: getFileContent($file, [$nonBlocking = false, [$wouldblock = false]])


    Read a complete file

    :param string $file: File complete path
    :param bool $nonBlocking: Don't block script if file is locked
    :param bool $wouldblock: The optional argument is set to TRUE if the lock would block

    :rtype: string 

    :throws: Exception\RuntimeException 



prepareDirectoryStructure
-------------------------

.. function:: prepareDirectoryStructure($file)


    Prepares a directory structure for the given file(spec)
    using the configured directory level.

    :param string $file: 

    :rtype: void 

    :throws: Exception\RuntimeException 



putFileContent
--------------

.. function:: putFileContent($file, $data, [$nonBlocking = false, [$wouldblock = false]])


    Write content to a file

    :param string $file: File complete path
    :param string $data: Data to write
    :param bool $nonBlocking: Don't block script if file is locked
    :param bool $wouldblock: The optional argument is set to TRUE if the lock would block

    :rtype: void 

    :throws: Exception\RuntimeException 



unlink
------

.. function:: unlink($file)


    Unlink a file

    :param string $file: 

    :rtype: void @throw RuntimeException





