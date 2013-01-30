.. Cache/Pattern/PatternOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Pattern\\PatternOptions
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable|null: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



setCacheByDefault
+++++++++++++++++

.. function:: setCacheByDefault()


    Set flag indicating whether or not to cache by default
    
    Used by:
    - ClassCache
    - ObjectCache

    :param bool: 

    :rtype: PatternOptions 



getCacheByDefault
+++++++++++++++++

.. function:: getCacheByDefault()


    Do we cache by default?
    
    Used by:
    - ClassCache
    - ObjectCache

    :rtype: bool 



setCacheOutput
++++++++++++++

.. function:: setCacheOutput()


    Set whether or not to cache output
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache

    :param bool: 

    :rtype: PatternOptions 



getCacheOutput
++++++++++++++

.. function:: getCacheOutput()


    Will we cache output?
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache

    :rtype: bool 



setClass
++++++++

.. function:: setClass()


    Set class name
    
    Used by:
    - ClassCache

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getClass
++++++++

.. function:: getClass()


    Get class name
    
    Used by:
    - ClassCache

    :rtype: null|string 



setClassCacheMethods
++++++++++++++++++++

.. function:: setClassCacheMethods()


    Set list of method return values to cache
    
    Used by:
    - ClassCache

    :param array: 

    :rtype: PatternOptions 



getClassCacheMethods
++++++++++++++++++++

.. function:: getClassCacheMethods()


    Get list of methods from which to cache return values
    
    Used by:
    - ClassCache

    :rtype: array 



setClassNonCacheMethods
+++++++++++++++++++++++

.. function:: setClassNonCacheMethods()


    Set list of method return values NOT to cache
    
    Used by:
    - ClassCache

    :param array: 

    :rtype: PatternOptions 



getClassNonCacheMethods
+++++++++++++++++++++++

.. function:: getClassNonCacheMethods()


    Get list of methods from which NOT to cache return values
    
    Used by:
    - ClassCache

    :rtype: array 



setDirPermission
++++++++++++++++

.. function:: setDirPermission()


    Set directory permission

    :param false|int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getDirPermission
++++++++++++++++

.. function:: getDirPermission()


    Gets directory permission

    :rtype: false|int 



setUmask
++++++++

.. function:: setUmask()


    Set umask
    
    Used by:
    - CaptureCache

    :param false|int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getUmask
++++++++

.. function:: getUmask()


    Get umask
    
    Used by:
    - CaptureCache

    :rtype: false|int 



setFileLocking
++++++++++++++

.. function:: setFileLocking()


    Set whether or not file locking should be used
    
    Used by:
    - CaptureCache

    :param bool: 

    :rtype: PatternOptions 



getFileLocking
++++++++++++++

.. function:: getFileLocking()


    Is file locking enabled?
    
    Used by:
    - CaptureCache

    :rtype: bool 



setFilePermission
+++++++++++++++++

.. function:: setFilePermission()


    Set file permission

    :param false|int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getFilePermission
+++++++++++++++++

.. function:: getFilePermission()


    Gets file permission

    :rtype: false|int 



setIndexFilename
++++++++++++++++

.. function:: setIndexFilename()


    Set value for index filename

    :param string: 

    :rtype: PatternOptions 



getIndexFilename
++++++++++++++++

.. function:: getIndexFilename()


    Get value for index filename

    :rtype: string 



setObject
+++++++++

.. function:: setObject()


    Set object to cache

    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: $this 



getObject
+++++++++

.. function:: getObject()


    Get object to cache

    :rtype: null|object 



setObjectCacheMagicProperties
+++++++++++++++++++++++++++++

.. function:: setObjectCacheMagicProperties()


    Set flag indicating whether or not to cache magic properties
    
    Used by:
    - ObjectCache

    :param bool: 

    :rtype: PatternOptions 



getObjectCacheMagicProperties
+++++++++++++++++++++++++++++

.. function:: getObjectCacheMagicProperties()


    Should we cache magic properties?
    
    Used by:
    - ObjectCache

    :rtype: bool 



setObjectCacheMethods
+++++++++++++++++++++

.. function:: setObjectCacheMethods()


    Set list of object methods for which to cache return values

    :param array: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



getObjectCacheMethods
+++++++++++++++++++++

.. function:: getObjectCacheMethods()


    Get list of object methods for which to cache return values

    :rtype: array 



setObjectKey
++++++++++++

.. function:: setObjectKey()


    Set the object key part.
    
    Used to generate a callback key in order to speed up key generation.
    
    Used by:
    - ObjectCache

    :param mixed: 

    :rtype: $this 



getObjectKey
++++++++++++

.. function:: getObjectKey()


    Get object key
    
    Used by:
    - ObjectCache

    :rtype: mixed 



setObjectNonCacheMethods
++++++++++++++++++++++++

.. function:: setObjectNonCacheMethods()


    Set list of object methods for which NOT to cache return values

    :param array: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



getObjectNonCacheMethods
++++++++++++++++++++++++

.. function:: getObjectNonCacheMethods()


    Get list of object methods for which NOT to cache return values

    :rtype: array 



setPublicDir
++++++++++++

.. function:: setPublicDir()


    Set location of public directory
    
    Used by:
    - CaptureCache

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getPublicDir
++++++++++++

.. function:: getPublicDir()


    Get location of public directory
    
    Used by:
    - CaptureCache

    :rtype: null|string 



setStorage
++++++++++

.. function:: setStorage()


    Set storage adapter
    
    Required for the following Pattern classes:
    - CallbackCache
    - ClassCache
    - ObjectCache
    - OutputCache

    :param string|array|Storage: 

    :rtype: PatternOptions 



getStorage
++++++++++

.. function:: getStorage()


    Get storage adapter
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache
    - OutputCache

    :rtype: null|Storage 



recursiveStrtolower
+++++++++++++++++++

.. function:: recursiveStrtolower()


    Recursively apply strtolower on all values of an array, and return as a
    list of unique values

    :param array: 

    :rtype: array 



normalizeObjectMethods
++++++++++++++++++++++

.. function:: normalizeObjectMethods()


    Normalize object methods
    
    Recursively casts values to lowercase, then determines if any are in a
    list of methods not handled, raising an exception if so.

    :param array: 

    :rtype: array 

    :throws: Exception\InvalidArgumentException 



storageFactory
++++++++++++++

.. function:: storageFactory()


    Create a storage object from a given specification

    :param array|string|Storage: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Storage 



