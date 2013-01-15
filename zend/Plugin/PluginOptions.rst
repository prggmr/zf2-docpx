.. /Cache/Storage/Plugin/PluginOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Plugin\\PluginOptions
*******************************************


@category   Zend



Methods
=======

setClearingFactor
-----------------

.. function:: setClearingFactor($clearingFactor)


    Set automatic clearing factor
    
    Used by:
    - ClearExpiredByFactor

    :param int $clearingFactor: 

    :rtype: PluginOptions 



getClearingFactor
-----------------

.. function:: getClearingFactor()


    Get automatic clearing factor
    
    Used by:
    - ClearExpiredByFactor

    :rtype: int 



setExceptionCallback
--------------------

.. function:: setExceptionCallback($exceptionCallback)


    Set callback to call on intercepted exception
    
    Used by:
    - ExceptionHandler

    :param callable $exceptionCallback: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PluginOptions 



getExceptionCallback
--------------------

.. function:: getExceptionCallback()


    Get callback to call on intercepted exception
    
    Used by:
    - ExceptionHandler

    :rtype: null|callable 



setExitOnAbort
--------------

.. function:: setExitOnAbort($exitOnAbort)


    Exit if connection aborted and ignore_user_abort is disabled.

    :param bool $exitOnAbort: 

    :rtype: PluginOptions 



getExitOnAbort
--------------

.. function:: getExitOnAbort()


    Exit if connection aborted and ignore_user_abort is disabled.

    :rtype: bool 



setOptimizingFactor
-------------------

.. function:: setOptimizingFactor($optimizingFactor)


    Set automatic optimizing factor
    
    Used by:
    - OptimizeByFactor

    :param int $optimizingFactor: 

    :rtype: PluginOptions 



getOptimizingFactor
-------------------

.. function:: getOptimizingFactor()


    Set automatic optimizing factor
    
    Used by:
    - OptimizeByFactor

    :rtype: int 



setSerializer
-------------

.. function:: setSerializer($serializer)


    Set serializer
    
    Used by:
    - Serializer

    :param string|SerializerAdapter $serializer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Serializer 



getSerializer
-------------

.. function:: getSerializer()


    Get serializer
    
    Used by:
    - Serializer

    :rtype: SerializerAdapter 



setSerializerOptions
--------------------

.. function:: setSerializerOptions($serializerOptions)


    Set configuration options for instantiating a serializer adapter
    
    Used by:
    - Serializer

    :param mixed $serializerOptions: 

    :rtype: PluginOptions 



getSerializerOptions
--------------------

.. function:: getSerializerOptions()


    Get configuration options for instantiating a serializer adapter
    
    Used by:
    - Serializer

    :rtype: array 



setThrowExceptions
------------------

.. function:: setThrowExceptions($throwExceptions)


    Set flag indicating we should re-throw exceptions
    
    Used by:
    - ExceptionHandler

    :param bool $throwExceptions: 

    :rtype: PluginOptions 



getThrowExceptions
------------------

.. function:: getThrowExceptions()


    Should we re-throw exceptions?
    
    Used by:
    - ExceptionHandler

    :rtype: bool 



normalizeFactor
---------------

.. function:: normalizeFactor($factor)


    Normalize a factor
    
    Cast to int and ensure we have a value greater than zero.

    :param int $factor: 

    :rtype: int 

    :throws: Exception\InvalidArgumentException 





