.. Cache/Storage/Adapter/MemcachedResourceManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\MemcachedResourceManager
=======================================================

This is a resource manager for memcached

Methods
-------

hasResource
+++++++++++

.. function:: hasResource()


    Check if a resource exists

    :param string: 

    :rtype: boolean 



getResource
+++++++++++

.. function:: getResource()


    Gets a memcached resource

    :param string: 

    :rtype: MemcachedResource 

    :throws: Exception\RuntimeException 



setResource
+++++++++++

.. function:: setResource()


    Set a resource

    :param string: 
    :param array|Traversable|MemcachedResource: 

    :rtype: MemcachedResourceManager Fluent interface



removeResource
++++++++++++++

.. function:: removeResource()


    Remove a resource

    :param string: 

    :rtype: MemcachedResourceManager Fluent interface



setPersistentId
+++++++++++++++

.. function:: setPersistentId()


    Set the persistent id

    :param string: 
    :param string: 

    :rtype: MemcachedResourceManager Fluent interface

    :throws: Exception\RuntimeException 



getPersistentId
+++++++++++++++

.. function:: getPersistentId()


    Get the persistent id

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 



normalizePersistentId
+++++++++++++++++++++

.. function:: normalizePersistentId()


    Normalize the persistent id

    :param string: 



setLibOptions
+++++++++++++

.. function:: setLibOptions()


    Set Libmemcached options

    :param string: 
    :param array: 

    :rtype: MemcachedResourceManager Fluent interface



getLibOptions
+++++++++++++

.. function:: getLibOptions()


    Get Libmemcached options

    :param string: 

    :rtype: array 

    :throws: Exception\RuntimeException 



setLibOption
++++++++++++

.. function:: setLibOption()


    Set one Libmemcached option

    :param string: 
    :param string|int: 
    :param mixed: 

    :rtype: MemcachedResourceManager Fluent interface



getLibOption
++++++++++++

.. function:: getLibOption()


    Get one Libmemcached option

    :param string: 
    :param string|int: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



normalizeLibOptions
+++++++++++++++++++

.. function:: normalizeLibOptions()


    Normalize libmemcached options

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 



normalizeLibOptionKey
+++++++++++++++++++++

.. function:: normalizeLibOptionKey()


    Convert option name into it's constant value

    :param string|int: 

    :throws Exception\InvalidArgumentException: 



setServers
++++++++++

.. function:: setServers()


    Set servers
    
    $servers can be an array list or a comma separated list of servers.
    One server in the list can be descripted as follows:
    - URI:   [tcp://]<host>[:<port>][?weight=<weight>]
    - Assoc: array('host' => <host>[, 'port' => <port>][, 'weight' => <weight>])
    - List:  array(<host>[, <port>][, <weight>])

    :param string: 
    :param string|array: 

    :rtype: MemcachedResourceManager 



getServers
++++++++++

.. function:: getServers()


    Get servers

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: array array('host' => <host>, 'port' => <port>, 'weight' => <weight>)



addServers
++++++++++

.. function:: addServers()


    Add servers

    :param string: 
    :param string|array: 

    :rtype: MemcachedResourceManager 



addServer
+++++++++

.. function:: addServer()


    Add one server

    :param string: 
    :param string|array: 

    :rtype: MemcachedResourceManager 



normalizeServers
++++++++++++++++

.. function:: normalizeServers()


    Normalize a list of servers into the following format:
    array(array('host' => <host>, 'port' => <port>, 'weight' => <weight>)[, ...])

    :param string|array: 



normalizeServer
+++++++++++++++

.. function:: normalizeServer()


    Normalize one server into the following format:
    array('host' => <host>, 'port' => <port>, 'weight' => <weight>)

    :param string|array: 

    :throws Exception\InvalidArgumentException: 



compareServers
++++++++++++++

.. function:: compareServers()


    Compare 2 normalized server arrays
    (Compares only the host and the port)

    :param array: 
    :param array: 

    :rtype: int 



