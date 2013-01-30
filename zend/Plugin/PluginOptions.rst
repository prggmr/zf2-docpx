.. Cache/Storage/Plugin/PluginOptions.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Plugin\\PluginOptions
===========================================

Methods
-------

setClearingFactor
+++++++++++++++++

.. function:: setClearingFactor()


    Set automatic clearing factor
    
    Used by:
    - ClearExpiredByFactor

    :param int: 

    :rtype: PluginOptions 



getClearingFactor
+++++++++++++++++

.. function:: getClearingFactor()


    Get automatic clearing factor
    
    Used by:
    - ClearExpiredByFactor

    :rtype: int 



setExceptionCallback
++++++++++++++++++++

.. function:: setExceptionCallback()


    Set callback to call on intercepted exception
    
    Used by:
    - ExceptionHandler

    :param callable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: PluginOptions 



getExceptionCallback
++++++++++++++++++++

.. function:: getExceptionCallback()


    Get callback to call on intercepted exception
    
    Used by:
    - ExceptionHandler

    :rtype: null|callable 



setExitOnAbort
++++++++++++++

.. function:: setExitOnAbort()


    Exit if connection aborted and ignore_user_abort is disabled.

    :param bool: 

    :rtype: PluginOptions 



getExitOnAbort
++++++++++++++

.. function:: getExitOnAbort()


    Exit if connection aborted and ignore_user_abort is disabled.

    :rtype: bool 



setOptimizingFactor
+++++++++++++++++++

.. function:: setOptimizingFactor()


    Set automatic optimizing factor
    
    Used by:
    - OptimizeByFactor

    :param int: 

    :rtype: PluginOptions 



getOptimizingFactor
+++++++++++++++++++

.. function:: getOptimizingFactor()


    Set automatic optimizing factor
    
    Used by:
    - OptimizeByFactor

    :rtype: int 



setSerializer
+++++++++++++

.. function:: setSerializer()


    Set serializer
    
    Used by:
    - Serializer

    :param string|SerializerAdapter: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Serializer 



getSerializer
+++++++++++++

.. function:: getSerializer()


    Get serializer
    
    Used by:
    - Serializer

    :rtype: SerializerAdapter 



setSerializerOptions
++++++++++++++++++++

.. function:: setSerializerOptions()


    Set configuration options for instantiating a serializer adapter
    
    Used by:
    - Serializer

    :param mixed: 

    :rtype: PluginOptions 



getSerializerOptions
++++++++++++++++++++

.. function:: getSerializerOptions()


    Get configuration options for instantiating a serializer adapter
    
    Used by:
    - Serializer

    :rtype: array 



setThrowExceptions
++++++++++++++++++

.. function:: setThrowExceptions()


    Set flag indicating we should re-throw exceptions
    
    Used by:
    - ExceptionHandler

    :param bool: 

    :rtype: PluginOptions 



getThrowExceptions
++++++++++++++++++

.. function:: getThrowExceptions()


    Should we re-throw exceptions?
    
    Used by:
    - ExceptionHandler

    :rtype: bool 



normalizeFactor
+++++++++++++++

.. function:: normalizeFactor()


    Normalize a factor
    
    Cast to int and ensure we have a value greater than zero.

    :param int: 

    :rtype: int 

    :throws: Exception\InvalidArgumentException 



