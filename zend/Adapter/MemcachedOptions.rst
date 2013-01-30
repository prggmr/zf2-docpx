.. Cache/Storage/Adapter/MemcachedOptions.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\MemcachedOptions
===============================================

These are options specific to the APC adapter

Methods
-------

setNamespace
++++++++++++

.. function:: setNamespace()


    Set namespace.
    
    The option Memcached::OPT_PREFIX_KEY will be used as the namespace.
    It can't be longer than 128 characters.




setNamespaceSeparator
+++++++++++++++++++++

.. function:: setNamespaceSeparator()


    Set namespace separator

    :param string: 

    :rtype: MemcachedOptions 



getNamespaceSeparator
+++++++++++++++++++++

.. function:: getNamespaceSeparator()


    Get namespace separator

    :rtype: string 



setMemcachedResource
++++++++++++++++++++

.. function:: setMemcachedResource()


    A memcached resource to share

    :param null|MemcachedResource: 

    :rtype: MemcachedOptions 

    :deprecated:  



getMemcachedResource
++++++++++++++++++++

.. function:: getMemcachedResource()


    Get memcached resource to share

    :rtype: MemcachedResource 

    :deprecated:  



setResourceManager
++++++++++++++++++

.. function:: setResourceManager()


    Set the memcached resource manager to use

    :param null|MemcachedResourceManager: 

    :rtype: MemcachedOptions 



getResourceManager
++++++++++++++++++

.. function:: getResourceManager()


    Get the memcached resource manager

    :rtype: MemcachedResourceManager 



getResourceId
+++++++++++++

.. function:: getResourceId()


    Get the memcached resource id

    :rtype: string 



setResourceId
+++++++++++++

.. function:: setResourceId()


    Set the memcached resource id

    :param string: 

    :rtype: MemcachedOptions 



getPersistentId
+++++++++++++++

.. function:: getPersistentId()


    Get the persistent id

    :rtype: string 



setPersistentId
+++++++++++++++

.. function:: setPersistentId()


    Set the persistent id

    :param string: 

    :rtype: MemcachedOptions 



addServer
+++++++++

.. function:: addServer()


    Add a server to the list

    :param string: 
    :param int: 
    :param int: 

    :rtype: MemcachedOptions 

    :deprecated:  



setServers
++++++++++

.. function:: setServers()


    Set a list of memcached servers to add on initialize

    :param string|array: list of servers

    :rtype: MemcachedOptions 

    :throws: Exception\InvalidArgumentException 



getServers
++++++++++

.. function:: getServers()


    Get Servers

    :rtype: array 



setLibOptions
+++++++++++++

.. function:: setLibOptions()


    Set libmemcached options

    :param array: 

    :rtype: MemcachedOptions 

    :link:  



setLibOption
++++++++++++

.. function:: setLibOption()


    Set libmemcached option

    :param string|int: 
    :param mixed: 

    :rtype: MemcachedOptions 

    :link:  

    :deprecated:  



getLibOptions
+++++++++++++

.. function:: getLibOptions()


    Get libmemcached options

    :rtype: array 

    :link:  



getLibOption
++++++++++++

.. function:: getLibOption()


    Get libmemcached option

    :param string|int: 

    :rtype: mixed 

    :link:  

    :deprecated:  



