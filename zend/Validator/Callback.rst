.. Validator/Callback.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\Callback
=========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array|callable: 



getCallback
-----------

.. function:: getCallback()


    Returns the set callback

    :rtype: mixed 



setCallback
-----------

.. function:: setCallback()


    Sets the callback

    :param string|array|callable: 

    :rtype: Callback Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



getCallbackOptions
------------------

.. function:: getCallbackOptions()


    Returns the set options for the callback

    :rtype: mixed 



setCallbackOptions
------------------

.. function:: setCallbackOptions()


    Sets options for the callback

    :param mixed: 

    :rtype: Callback Provides a fluent interface



isValid
-------

.. function:: isValid()


    Returns true if and only if the set callback returns
    for the provided $value

    :param mixed: 
    :param mixed: Additional context to provide to the callback

    :rtype: bool 

    :throws: Exception\InvalidArgumentException 





Constants
+++++++++

INVALID_CALLBACK
================

Invalid callback

INVALID_VALUE
=============

Invalid value

