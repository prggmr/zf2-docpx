.. /Cache/Storage/Adapter/AdapterOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\AdapterOptions
*********************************************


Unless otherwise marked, all options in this class affect all adapters.



Methods
=======

setAdapter
----------

.. function:: setAdapter([$adapter = false])


    Adapter using this instance

    :param StorageInterface|null $adapter: 

    :rtype: AdapterOptions 



setKeyPattern
-------------

.. function:: setKeyPattern($keyPattern)


    Set key pattern

    :param null|string $keyPattern: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AdapterOptions 



getKeyPattern
-------------

.. function:: getKeyPattern()


    Get key pattern

    :rtype: string 



setNamespace
------------

.. function:: setNamespace($namespace)


    Set namespace.

    :param string $namespace: 

    :rtype: AdapterOptions 



getNamespace
------------

.. function:: getNamespace()


    Get namespace

    :rtype: string 



setReadable
-----------

.. function:: setReadable($readable)


    Enable/Disable reading data from cache.

    :param bool $readable: 

    :rtype: AbstractAdapter 



getReadable
-----------

.. function:: getReadable()


    If reading data from cache enabled.

    :rtype: bool 



setTtl
------

.. function:: setTtl($ttl)


    Set time to live.

    :param int|float $ttl: 

    :rtype: AdapterOptions 



getTtl
------

.. function:: getTtl()


    Get time to live.

    :rtype: float 



setWritable
-----------

.. function:: setWritable($writable)


    Enable/Disable writing data to cache.

    :param bool $writable: 

    :rtype: AdapterOptions 



getWritable
-----------

.. function:: getWritable()


    If writing data to cache enabled.

    :rtype: bool 



triggerOptionEvent
------------------

.. function:: triggerOptionEvent($optionName, $optionValue)


    Triggers an option event if this options instance has a connection to
    an adapter implements EventsCapableInterface.

    :param string $optionName: 
    :param mixed $optionValue: 

    :rtype: void 



normalizeTtl
------------

.. function:: normalizeTtl($ttl)


    Validates and normalize a TTL.

    :param int|float $ttl: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 





