.. Cache/Pattern/CallbackCache.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Pattern\\CallbackCache
===================================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param PatternOptions: 

    :rtype: CallbackCache 

    :throws: Exception\InvalidArgumentException if missing storage option



call
++++

.. function:: call()


    Call the specified callback or get the result from cache

    :param callable: A valid callback
    :param array: Callback arguments

    :rtype: mixed Result

    :throws: Exception\RuntimeException if invalid cached data
    :throws: \Exception 



__call
++++++

.. function:: __call()


    function call handler

    :param string: Function name to call
    :param array: Function arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



generateKey
+++++++++++

.. function:: generateKey()


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable: A valid callback
    :param array: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



generateCallbackKey
+++++++++++++++++++

.. function:: generateCallbackKey()


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable: A valid callback
    :param array: Callback arguments

    :throws Exception\RuntimeException: if callback not serializable
    :throws Exception\InvalidArgumentException: if invalid callback

    :rtype: string 



generateArgumentsKey
++++++++++++++++++++

.. function:: generateArgumentsKey()


    Generate a unique key of the argument part.

    :param array: 

    :throws Exception\RuntimeException: 

    :rtype: string 



