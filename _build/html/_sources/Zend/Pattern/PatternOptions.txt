.. /Cache/Pattern/PatternOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\PatternOptions
************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|Traversable|null $options: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



setCacheByDefault
-----------------

.. function:: setCacheByDefault($cacheByDefault)


    Set flag indicating whether or not to cache by default
    
    Used by:
    - ClassCache
    - ObjectCache

    :param bool $cacheByDefault: 

    :rtype: PatternOptions 



getCacheByDefault
-----------------

.. function:: getCacheByDefault()


    Do we cache by default?
    
    Used by:
    - ClassCache
    - ObjectCache

    :rtype: bool 



setCacheOutput
--------------

.. function:: setCacheOutput($cacheOutput)


    Set whether or not to cache output
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache

    :param bool $cacheOutput: 

    :rtype: PatternOptions 



getCacheOutput
--------------

.. function:: getCacheOutput()


    Will we cache output?
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache

    :rtype: bool 



setClass
--------

.. function:: setClass($class)


    Set class name
    
    Used by:
    - ClassCache

    :param string $class: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getClass
--------

.. function:: getClass()


    Get class name
    
    Used by:
    - ClassCache

    :rtype: null|string 



setClassCacheMethods
--------------------

.. function:: setClassCacheMethods($classCacheMethods)


    Set list of method return values to cache
    
    Used by:
    - ClassCache

    :param array $classCacheMethods: 

    :rtype: PatternOptions 



getClassCacheMethods
--------------------

.. function:: getClassCacheMethods()


    Get list of methods from which to cache return values
    
    Used by:
    - ClassCache

    :rtype: array 



setClassNonCacheMethods
-----------------------

.. function:: setClassNonCacheMethods($classNonCacheMethods)


    Set list of method return values NOT to cache
    
    Used by:
    - ClassCache

    :param array $classNonCacheMethods: 

    :rtype: PatternOptions 



getClassNonCacheMethods
-----------------------

.. function:: getClassNonCacheMethods()


    Get list of methods from which NOT to cache return values
    
    Used by:
    - ClassCache

    :rtype: array 



setDirPermission
----------------

.. function:: setDirPermission($dirPermission)


    Set directory permission

    :param false|int $dirPermission: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getDirPermission
----------------

.. function:: getDirPermission()


    Gets directory permission

    :rtype: false|int 



setUmask
--------

.. function:: setUmask($umask)


    Set umask
    
    Used by:
    - CaptureCache

    :param false|int $umask: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getUmask
--------

.. function:: getUmask()


    Get umask
    
    Used by:
    - CaptureCache

    :rtype: false|int 



setFileLocking
--------------

.. function:: setFileLocking($fileLocking)


    Set whether or not file locking should be used
    
    Used by:
    - CaptureCache

    :param bool $fileLocking: 

    :rtype: PatternOptions 



getFileLocking
--------------

.. function:: getFileLocking()


    Is file locking enabled?
    
    Used by:
    - CaptureCache

    :rtype: bool 



setFilePermission
-----------------

.. function:: setFilePermission($filePermission)


    Set file permission

    :param false|int $filePermission: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getFilePermission
-----------------

.. function:: getFilePermission()


    Gets file permission

    :rtype: false|int 



setIndexFilename
----------------

.. function:: setIndexFilename($indexFilename)


    Set value for index filename

    :param string $indexFilename: 

    :rtype: PatternOptions 



getIndexFilename
----------------

.. function:: getIndexFilename()


    Get value for index filename

    :rtype: string 



setObject
---------

.. function:: setObject($object)


    Set object to cache

    :param mixed $object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: $this 



getObject
---------

.. function:: getObject()


    Get object to cache

    :rtype: null|object 



setObjectCacheMagicProperties
-----------------------------

.. function:: setObjectCacheMagicProperties($objectCacheMagicProperties)


    Set flag indicating whether or not to cache magic properties
    
    Used by:
    - ObjectCache

    :param bool $objectCacheMagicProperties: 

    :rtype: PatternOptions 



getObjectCacheMagicProperties
-----------------------------

.. function:: getObjectCacheMagicProperties()


    Should we cache magic properties?
    
    Used by:
    - ObjectCache

    :rtype: bool 



setObjectCacheMethods
---------------------

.. function:: setObjectCacheMethods($objectCacheMethods)


    Set list of object methods for which to cache return values

    :param array $objectCacheMethods: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



getObjectCacheMethods
---------------------

.. function:: getObjectCacheMethods()


    Get list of object methods for which to cache return values

    :rtype: array 



setObjectKey
------------

.. function:: setObjectKey($objectKey)


    Set the object key part.
    
    Used to generate a callback key in order to speed up key generation.
    
    Used by:
    - ObjectCache

    :param mixed $objectKey: 

    :rtype: $this 



getObjectKey
------------

.. function:: getObjectKey()


    Get object key
    
    Used by:
    - ObjectCache

    :rtype: mixed 



setObjectNonCacheMethods
------------------------

.. function:: setObjectNonCacheMethods($objectNonCacheMethods)


    Set list of object methods for which NOT to cache return values

    :param array $objectNonCacheMethods: 

    :rtype: PatternOptions 

    :throws: Exception\InvalidArgumentException 



getObjectNonCacheMethods
------------------------

.. function:: getObjectNonCacheMethods()


    Get list of object methods for which NOT to cache return values

    :rtype: array 



setPublicDir
------------

.. function:: setPublicDir($publicDir)


    Set location of public directory
    
    Used by:
    - CaptureCache

    :param string $publicDir: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PatternOptions 



getPublicDir
------------

.. function:: getPublicDir()


    Get location of public directory
    
    Used by:
    - CaptureCache

    :rtype: null|string 



setStorage
----------

.. function:: setStorage($storage)


    Set storage adapter
    
    Required for the following Pattern classes:
    - CallbackCache
    - ClassCache
    - ObjectCache
    - OutputCache

    :param string|array|Storage $storage: 

    :rtype: PatternOptions 



getStorage
----------

.. function:: getStorage()


    Get storage adapter
    
    Used by:
    - CallbackCache
    - ClassCache
    - ObjectCache
    - OutputCache

    :rtype: null|Storage 



recursiveStrtolower
-------------------

.. function:: recursiveStrtolower($array)


    Recursively apply strtolower on all values of an array, and return as a
    list of unique values

    :param array $array: 

    :rtype: array 



normalizeObjectMethods
----------------------

.. function:: normalizeObjectMethods($methods)


    Normalize object methods
    
    Recursively casts values to lowercase, then determines if any are in a
    list of methods not handled, raising an exception if so.

    :param array $methods: 

    :rtype: array 

    :throws: Exception\InvalidArgumentException 



storageFactory
--------------

.. function:: storageFactory($storage)


    Create a storage object from a given specification

    :param array|string|Storage $storage: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Storage 





