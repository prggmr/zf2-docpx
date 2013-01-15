.. /Cache/Storage/Adapter/ZendServerShm.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\ZendServerShm
********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param null|array|\Traversable|AdapterOptions $options: 

    :throws Exception\ExtensionNotLoadedException: 



flush
-----

.. function:: flush()


    Flush the whole storage

    :rtype: bool 



clearByNamespace
----------------

.. function:: clearByNamespace($namespace)


    Remove items of given namespace

    :param string $namespace: 

    :rtype: bool 



getTotalSpace
-------------

.. function:: getTotalSpace()


    Get total space in bytes

    :rtype: int|float 



zdcStore
--------

.. function:: zdcStore($internalKey, $value, $ttl)


    Store data into Zend Data SHM Cache

    :param string $internalKey: 
    :param mixed $value: 
    :param int $ttl: 

    :rtype: void 

    :throws: Exception\RuntimeException 



zdcFetch
--------

.. function:: zdcFetch($internalKey)


    Fetch a single item from Zend Data SHM Cache

    :param string $internalKey: 

    :rtype: mixed The stored value or FALSE if item wasn't found

    :throws: Exception\RuntimeException 



zdcFetchMulti
-------------

.. function:: zdcFetchMulti($internalKeys)


    Fetch multiple items from Zend Data SHM Cache

    :param array $internalKeys: 

    :rtype: array All found items

    :throws: Exception\RuntimeException 



zdcDelete
---------

.. function:: zdcDelete($internalKey)


    Delete data from Zend Data SHM Cache

    :param string $internalKey: 

    :rtype: bool 

    :throws: Exception\RuntimeException 





