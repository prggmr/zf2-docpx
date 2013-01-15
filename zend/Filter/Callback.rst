.. /Filter/Callback.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Callback
**********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($callbackOrOptions, [$callbackParams = false])


    @param callable|array|Traversable $callbackOrOptions

    :param array $callbackParams: 



setCallback
-----------

.. function:: setCallback($callback)


    Sets a new callback for this filter

    :param callable $callback: 

    :throws Exception\InvalidArgumentException: 

    :rtype: self 



getCallback
-----------

.. function:: getCallback()


    Returns the set callback

    :rtype: callable 



setCallbackParams
-----------------

.. function:: setCallbackParams($params)


    Sets parameters for the callback

    :param mixed $params: 

    :rtype: Callback 



getCallbackParams
-----------------

.. function:: getCallbackParams()


    Get parameters for the callback

    :rtype: mixed 



filter
------

.. function:: filter($value)


    Calls the filter per callback

    :param mixed $value: Options for the set callable

    :rtype: mixed Result from the filter which was called





