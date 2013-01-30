.. Filter/Callback.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Callback
======================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param callable|array|Traversable $callbackOrOptions

    :param array: 



setCallback
-----------

.. function:: setCallback()


    Sets a new callback for this filter

    :param callable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: self 



getCallback
-----------

.. function:: getCallback()


    Returns the set callback

    :rtype: callable 



setCallbackParams
-----------------

.. function:: setCallbackParams()


    Sets parameters for the callback

    :param mixed: 

    :rtype: Callback 



getCallbackParams
-----------------

.. function:: getCallbackParams()


    Get parameters for the callback

    :rtype: mixed 



filter
------

.. function:: filter()


    Calls the filter per callback

    :param mixed: Options for the set callable

    :rtype: mixed Result from the filter which was called



