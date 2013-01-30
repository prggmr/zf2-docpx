.. Cache/Storage/Adapter/Filesystem.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\Filesystem
=========================================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set options.

    :param array|\Traversable|FilesystemOptions: 

    :rtype: Filesystem 

    :see:  



getOptions
++++++++++

.. function:: getOptions()


    Get options.

    :rtype: FilesystemOptions 

    :see:  



flush
+++++

.. function:: flush()


    Flush the whole storage


    :rtype: bool 



clearExpired
++++++++++++

.. function:: clearExpired()


    Remove expired items

    :rtype: bool 



clearByNamespace
++++++++++++++++

.. function:: clearByNamespace()


    Remove items by given namespace

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: bool 



clearByPrefix
+++++++++++++

.. function:: clearByPrefix()


    Remove items matching given prefix

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: bool 



setTags
+++++++

.. function:: setTags()


    Set tags to an item by given key.
    An empty array will remove all tags.

    :param string: 
    :param string[]: 

    :rtype: bool 



getTags
+++++++

.. function:: getTags()


    Get tags of an item by given key

    :param string: 

    :rtype: string[]|FALSE 



clearByTags
+++++++++++

.. function:: clearByTags()


    Remove items matching given tags.
    
    If $disjunction only one of the given tags must match
    else all given tags must match.

    :param string[]: 
    :param bool: 

    :rtype: bool 



getIterator
+++++++++++

.. function:: getIterator()


    Get the storage iterator

    :rtype: FilesystemIterator 



optimize
++++++++

.. function:: optimize()


    Optimize the storage

    :rtype: bool 
    :rtype: Exception\RuntimeException 



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



getItem
+++++++

.. function:: getItem()


    Get an item.

    :param string: 
    :param bool: 
    :param mixed: 

    :rtype: mixed Data on success, null on failure

    :throws: Exception\ExceptionInterface @triggers getItem.pre(PreEvent)
@triggers getItem.post(PostEvent)
@triggers getItem.exception(ExceptionEvent)



getItems
++++++++

.. function:: getItems()


    Get multiple items.

    :param array: 

    :rtype: array Associative array of keys and values

    :throws: Exception\ExceptionInterface @triggers getItems.pre(PreEvent)
@triggers getItems.post(PostEvent)
@triggers getItems.exception(ExceptionEvent)



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



hasItem
+++++++

.. function:: hasItem()


    Test if an item exists.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers hasItem.pre(PreEvent)
@triggers hasItem.post(PostEvent)
@triggers hasItem.exception(ExceptionEvent)



hasItems
++++++++

.. function:: hasItems()


    Test multiple items.

    :param array: 

    :rtype: array Array of found keys

    :throws: Exception\ExceptionInterface @triggers hasItems.pre(PreEvent)
@triggers hasItems.post(PostEvent)
@triggers hasItems.exception(ExceptionEvent)



internalHasItem
+++++++++++++++

.. function:: internalHasItem()


    Internal method to test if an item exists.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



getMetadata
+++++++++++

.. function:: getMetadata()


    Get metadata

    :param string: 

    :rtype: array|bool Metadata on success, false on failure



getMetadatas
++++++++++++

.. function:: getMetadatas()


    Get metadatas

    :param array: 
    :param array: 

    :rtype: array Associative array of keys and metadata



internalGetMetadata
+++++++++++++++++++

.. function:: internalGetMetadata()


    Get info by key

    :param string: 

    :rtype: array|bool Metadata on success, false on failure



internalGetMetadatas
++++++++++++++++++++

.. function:: internalGetMetadatas()


    Internal method to get multiple metadata

    :param array: 

    :rtype: array Associative array of keys and metadata

    :throws: Exception\ExceptionInterface 



setItem
+++++++

.. function:: setItem()


    Store an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers setItem.pre(PreEvent)
@triggers setItem.post(PostEvent)
@triggers setItem.exception(ExceptionEvent)



setItems
++++++++

.. function:: setItems()


    Store multiple items.

    :param array: 

    :rtype: array Array of not stored keys

    :throws: Exception\ExceptionInterface @triggers setItems.pre(PreEvent)
@triggers setItems.post(PostEvent)
@triggers setItems.exception(ExceptionEvent)



addItem
+++++++

.. function:: addItem()


    Add an item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers addItem.pre(PreEvent)
@triggers addItem.post(PostEvent)
@triggers addItem.exception(ExceptionEvent)



addItems
++++++++

.. function:: addItems()


    Add multiple items.

    :param array: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers addItems.pre(PreEvent)
@triggers addItems.post(PostEvent)
@triggers addItems.exception(ExceptionEvent)



replaceItem
+++++++++++

.. function:: replaceItem()


    Replace an existing item.

    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers replaceItem.pre(PreEvent)
@triggers replaceItem.post(PostEvent)
@triggers replaceItem.exception(ExceptionEvent)



replaceItems
++++++++++++

.. function:: replaceItems()


    Replace multiple existing items.

    :param array: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers replaceItems.pre(PreEvent)
@triggers replaceItems.post(PostEvent)
@triggers replaceItems.exception(ExceptionEvent)



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



checkAndSetItem
+++++++++++++++

.. function:: checkAndSetItem()


    Set an item only if token matches
    
    It uses the token received from getItem() to check if the item has
    changed before overwriting it.

    :param mixed: 
    :param string: 
    :param mixed: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 

    :see:  
    :see:  



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



touchItem
+++++++++

.. function:: touchItem()


    Reset lifetime of an item

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers touchItem.pre(PreEvent)
@triggers touchItem.post(PostEvent)
@triggers touchItem.exception(ExceptionEvent)



touchItems
++++++++++

.. function:: touchItems()


    Reset lifetime of multiple items.

    :param array: 

    :rtype: array Array of not updated keys

    :throws: Exception\ExceptionInterface @triggers touchItems.pre(PreEvent)
@triggers touchItems.post(PostEvent)
@triggers touchItems.exception(ExceptionEvent)



internalTouchItem
+++++++++++++++++

.. function:: internalTouchItem()


    Internal method to reset lifetime of an item

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



removeItem
++++++++++

.. function:: removeItem()


    Remove an item.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface @triggers removeItem.pre(PreEvent)
@triggers removeItem.post(PostEvent)
@triggers removeItem.exception(ExceptionEvent)



removeItems
+++++++++++

.. function:: removeItems()


    Remove multiple items.

    :param array: 

    :rtype: array Array of not removed keys

    :throws: Exception\ExceptionInterface @triggers removeItems.pre(PreEvent)
@triggers removeItems.post(PostEvent)
@triggers removeItems.exception(ExceptionEvent)



internalRemoveItem
++++++++++++++++++

.. function:: internalRemoveItem()


    Internal method to remove an item.

    :param string: 

    :rtype: bool 

    :throws: Exception\ExceptionInterface 



internalGetCapabilities
+++++++++++++++++++++++

.. function:: internalGetCapabilities()


    Internal method to get capabilities of this adapter

    :rtype: Capabilities 



rmDir
+++++

.. function:: rmDir()


    Removes directories recursive by namespace

    :param string: Directory to delete
    :param string: Namespace + Separator

    :rtype: bool 



getFileSpec
+++++++++++

.. function:: getFileSpec()


    Get file spec of the given key and namespace

    :param string: 

    :rtype: string 



readInfoFile
++++++++++++

.. function:: readInfoFile()


    Read info file

    :param string: 
    :param bool: Don't block script if file is locked
    :param bool: The optional argument is set to TRUE if the lock would block

    :rtype: array|bool The info array or false if file wasn't found

    :throws: Exception\RuntimeException 



getFileContent
++++++++++++++

.. function:: getFileContent()


    Read a complete file

    :param string: File complete path
    :param bool: Don't block script if file is locked
    :param bool: The optional argument is set to TRUE if the lock would block

    :rtype: string 

    :throws: Exception\RuntimeException 



prepareDirectoryStructure
+++++++++++++++++++++++++

.. function:: prepareDirectoryStructure()


    Prepares a directory structure for the given file(spec)
    using the configured directory level.

    :param string: 

    :rtype: void 

    :throws: Exception\RuntimeException 



putFileContent
++++++++++++++

.. function:: putFileContent()


    Write content to a file

    :param string: File complete path
    :param string: Data to write
    :param bool: Don't block script if file is locked
    :param bool: The optional argument is set to TRUE if the lock would block

    :rtype: void 

    :throws: Exception\RuntimeException 



unlink
++++++

.. function:: unlink()


    Unlink a file

    :param string: 

    :rtype: void @throw RuntimeException



