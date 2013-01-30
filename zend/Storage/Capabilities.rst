.. Cache/Storage/Capabilities.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Capabilities
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param StorageInterface: 
    :param stdClass: 
    :param array: 
    :param null|Capabilities: 



getAdapter
++++++++++

.. function:: getAdapter()


    Get the storage adapter

    :rtype: StorageInterface 



getSupportedDatatypes
+++++++++++++++++++++

.. function:: getSupportedDatatypes()


    Get supported datatypes

    :rtype: array 



setSupportedDatatypes
+++++++++++++++++++++

.. function:: setSupportedDatatypes()


    Set supported datatypes

    :param stdClass: 
    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getSupportedMetadata
++++++++++++++++++++

.. function:: getSupportedMetadata()


    Get supported metadata

    :rtype: array 



setSupportedMetadata
++++++++++++++++++++

.. function:: setSupportedMetadata()


    Set supported metadata

    :param stdClass: 
    :param string[]: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getMinTtl
+++++++++

.. function:: getMinTtl()


    Get minimum supported time-to-live

    :rtype: int 0 means items never expire



setMinTtl
+++++++++

.. function:: setMinTtl()


    Set minimum supported time-to-live

    :param stdClass: 
    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getMaxTtl
+++++++++

.. function:: getMaxTtl()


    Get maximum supported time-to-live

    :rtype: int 0 means infinite



setMaxTtl
+++++++++

.. function:: setMaxTtl()


    Set maximum supported time-to-live

    :param stdClass: 
    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getStaticTtl
++++++++++++

.. function:: getStaticTtl()


    Is the time-to-live handled static (on write)
    or dynamic (on read)

    :rtype: bool 



setStaticTtl
++++++++++++

.. function:: setStaticTtl()


    Set if the time-to-live handled static (on write) or dynamic (on read)

    :param stdClass: 
    :param bool: 

    :rtype: Capabilities Fluent interface



getTtlPrecision
+++++++++++++++

.. function:: getTtlPrecision()


    Get time-to-live precision

    :rtype: float 



setTtlPrecision
+++++++++++++++

.. function:: setTtlPrecision()


    Set time-to-live precision

    :param stdClass: 
    :param float: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getUseRequestTime
+++++++++++++++++

.. function:: getUseRequestTime()


    Get use request time

    :rtype: bool 



setUseRequestTime
+++++++++++++++++

.. function:: setUseRequestTime()


    Set use request time

    :param stdClass: 
    :param bool: 

    :rtype: Capabilities Fluent interface



getExpiredRead
++++++++++++++

.. function:: getExpiredRead()


    Get if expired items are readable

    :rtype: bool 



setExpiredRead
++++++++++++++

.. function:: setExpiredRead()


    Set if expired items are readable

    :param stdClass: 
    :param bool: 

    :rtype: Capabilities Fluent interface



getMaxKeyLength
+++++++++++++++

.. function:: getMaxKeyLength()


    Get maximum key lenth

    :rtype: int -1 means unknown, 0 means infinite



setMaxKeyLength
+++++++++++++++

.. function:: setMaxKeyLength()


    Set maximum key length

    :param stdClass: 
    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Capabilities Fluent interface



getNamespaceIsPrefix
++++++++++++++++++++

.. function:: getNamespaceIsPrefix()


    Get if namespace support is implemented as prefix

    :rtype: bool 



setNamespaceIsPrefix
++++++++++++++++++++

.. function:: setNamespaceIsPrefix()


    Set if namespace support is implemented as prefix

    :param stdClass: 
    :param bool: 

    :rtype: Capabilities Fluent interface



getNamespaceSeparator
+++++++++++++++++++++

.. function:: getNamespaceSeparator()


    Get namespace separator if namespace is implemented as prefix

    :rtype: string 



setNamespaceSeparator
+++++++++++++++++++++

.. function:: setNamespaceSeparator()


    Set the namespace separator if namespace is implemented as prefix

    :param stdClass: 
    :param string: 

    :rtype: Capabilities Fluent interface



getCapability
+++++++++++++

.. function:: getCapability()


    Get a capability

    :param string: 
    :param mixed: 

    :rtype: mixed 



setCapability
+++++++++++++

.. function:: setCapability()


    Change a capability

    :param stdClass: 
    :param string: 
    :param mixed: 

    :rtype: Capabilities Fluent interface

    :throws: Exception\InvalidArgumentException 



