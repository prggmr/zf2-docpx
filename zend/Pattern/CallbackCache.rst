.. /Cache/Pattern/CallbackCache.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Pattern\\CallbackCache
***********************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Set options

    :param PatternOptions $options: 

    :rtype: CallbackCache 

    :throws: Exception\InvalidArgumentException if missing storage option



call
----

.. function:: call($callback, [$args = false])


    Call the specified callback or get the result from cache

    :param callable $callback: A valid callback
    :param array $args: Callback arguments

    :rtype: mixed Result

    :throws: Exception\RuntimeException if invalid cached data
    :throws: \Exception 



__call
------

.. function:: __call($function, $args)


    function call handler

    :param string $function: Function name to call
    :param array $args: Function arguments

    :rtype: mixed 

    :throws: Exception\RuntimeException 
    :throws: \Exception 



generateKey
-----------

.. function:: generateKey($callback, [$args = false])


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable $callback: A valid callback
    :param array $args: Callback arguments

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



generateCallbackKey
-------------------

.. function:: generateCallbackKey($callback, $args)


    Generate a unique key in base of a key representing the callback part
    and a key representing the arguments part.

    :param callable $callback: A valid callback
    :param array $args: Callback arguments

    :throws Exception\RuntimeException: if callback not serializable
    :throws Exception\InvalidArgumentException: if invalid callback

    :rtype: string 



generateArgumentsKey
--------------------

.. function:: generateArgumentsKey($args)


    Generate a unique key of the argument part.

    :param array $args: 

    :throws Exception\RuntimeException: 

    :rtype: string 





