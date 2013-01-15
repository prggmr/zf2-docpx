.. /Cache/Storage/Adapter/MemcachedOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\MemcachedOptions
***********************************************


These are options specific to the APC adapter



Methods
=======

setNamespace
------------

.. function:: setNamespace($namespace)


    Set namespace.
    
    The option Memcached::OPT_PREFIX_KEY will be used as the namespace.
    It can't be longer than 128 characters.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44



setMemcachedResource
--------------------

.. function:: setMemcachedResource([$memcachedResource = false])


    A memcached resource to share

    :param null|MemcachedResource $memcachedResource: 

    :rtype: MemcachedOptions 



getMemcachedResource
--------------------

.. function:: getMemcachedResource()


    Get memcached resource to share

    :rtype: null|MemcachedResource 



addServer
---------

.. function:: addServer($host, [$port = 11211, [$weight = false]])


    Add a server to the list

    :param string $host: 
    :param int $port: 
    :param int $weight: 

    :rtype: MemcachedOptions 



setServers
----------

.. function:: setServers($servers)


    Set a list of memcached servers to add on initialize

    :param string|array $servers: list of servers

    :rtype: MemcachedOptions 

    :throws: Exception\InvalidArgumentException 



getServers
----------

.. function:: getServers()


    Get Servers

    :rtype: array 



setLibOptions
-------------

.. function:: setLibOptions($libOptions)


    Set libmemcached options

    :param array $libOptions: 

    :rtype: MemcachedOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



setLibOption
------------

.. function:: setLibOption($key, $value)


    Set libmemcached option

    :param string|int $key: 
    :param mixed $value: 

    :rtype: MemcachedOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



getLibOptions
-------------

.. function:: getLibOptions()


    Get libmemcached options

    :rtype: array 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



getLibOption
------------

.. function:: getLibOption($key)


    Get libmemcached option

    :param string|int $key: 

    :rtype: mixed 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



normalizeLibOptionKey
---------------------

.. function:: normalizeLibOptionKey($key)


    Normalize libmemcached option name into it's constant value

    :param string|int $key: 

    :throws Exception\InvalidArgumentException: 





