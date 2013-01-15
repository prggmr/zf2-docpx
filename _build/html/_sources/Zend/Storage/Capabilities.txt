.. /Cache/Storage/Capabilities.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Capabilities
**********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($storage, $marker, [$capabilities = false, [$baseCapabilities = false]])


    Constructor

    :param StorageInterface $storage: 
    :param stdClass $marker: 
    :param array $capabilities: 
    :param null|Capabilities $baseCapabilities: 



getAdapter
----------

.. function:: getAdapter()


    Get the storage adapter

    :rtype: StorageInterface 



getSupportedDatatypes
---------------------

.. function:: getSupportedDatatypes()


    Get supported datatypes

    :rtype: array 



setSupportedDatatypes
---------------------

.. function:: setSupportedDatatypes($marker, $datatypes)


    Set supported datatypes

    :param stdClass $marker: 
    :param array $datatypes: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getSupportedMetadata
--------------------

.. function:: getSupportedMetadata()


    Get supported metadata

    :rtype: array 



setSupportedMetadata
--------------------

.. function:: setSupportedMetadata($marker, $metadata)


    Set supported metadata

    :param stdClass $marker: 
    :param string[] $metadata: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getMinTtl
---------

.. function:: getMinTtl()


    Get minimum supported time-to-live

    :rtype: int 0 means items never expire



setMinTtl
---------

.. function:: setMinTtl($marker, $minTtl)


    Set minimum supported time-to-live

    :param stdClass $marker: 
    :param int $minTtl: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getMaxTtl
---------

.. function:: getMaxTtl()


    Get maximum supported time-to-live

    :rtype: int 0 means infinite



setMaxTtl
---------

.. function:: setMaxTtl($marker, $maxTtl)


    Set maximum supported time-to-live

    :param stdClass $marker: 
    :param int $maxTtl: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getStaticTtl
------------

.. function:: getStaticTtl()


    Is the time-to-live handled static (on write)
    or dynamic (on read)

    :rtype: bool 



setStaticTtl
------------

.. function:: setStaticTtl($marker, $flag)


    Set if the time-to-live handled static (on write) or dynamic (on read)

    :param stdClass $marker: 
    :param bool $flag: 

    :rtype: Capabilities Fluent interface



getTtlPrecision
---------------

.. function:: getTtlPrecision()


    Get time-to-live precision

    :rtype: float 



setTtlPrecision
---------------

.. function:: setTtlPrecision($marker, $ttlPrecision)


    Set time-to-live precision

    :param stdClass $marker: 
    :param float $ttlPrecision: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getUseRequestTime
-----------------

.. function:: getUseRequestTime()


    Get use request time

    :rtype: bool 



setUseRequestTime
-----------------

.. function:: setUseRequestTime($marker, $flag)


    Set use request time

    :param stdClass $marker: 
    :param bool $flag: 

    :rtype: Capabilities Fluent interface



getExpiredRead
--------------

.. function:: getExpiredRead()


    Get if expired items are readable

    :rtype: bool 



setExpiredRead
--------------

.. function:: setExpiredRead($marker, $flag)


    Set if expired items are readable

    :param stdClass $marker: 
    :param bool $flag: 

    :rtype: Capabilities Fluent interface



getMaxKeyLength
---------------

.. function:: getMaxKeyLength()


    Get maximum key lenth

    :rtype: int -1 means unknown, 0 means infinite



setMaxKeyLength
---------------

.. function:: setMaxKeyLength($marker, $maxKeyLength)


    Set maximum key length

    :param stdClass $marker: 
    :param int $maxKeyLength: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getNamespaceIsPrefix
--------------------

.. function:: getNamespaceIsPrefix()


    Get if namespace support is implemented as prefix

    :rtype: bool 



setNamespaceIsPrefix
--------------------

.. function:: setNamespaceIsPrefix($marker, $flag)


    Set if namespace support is implemented as prefix

    :param stdClass $marker: 
    :param bool $flag: 

    :rtype: Capabilities Fluent interface



getNamespaceSeparator
---------------------

.. function:: getNamespaceSeparator()


    Get namespace separator if namespace is implemented as prefix

    :rtype: string 



setNamespaceSeparator
---------------------

.. function:: setNamespaceSeparator($marker, $separator)


    Set the namespace separator if namespace is implemented as prefix

    :param stdClass $marker: 
    :param string $separator: 

    :rtype: Capabilities Fluent interface



getCapability
-------------

.. function:: getCapability($property, [$default = false])


    Get a capability

    :param string $property: 
    :param mixed $default: 

    :rtype: mixed 



setCapability
-------------

.. function:: setCapability($marker, $property, $value)


    Change a capability

    :param stdClass $marker: 
    :param string $property: 
    :param mixed $value: 

    :rtype: Capabilities Fluent interface

    :throws: Exception\InvalidArgumentException 





