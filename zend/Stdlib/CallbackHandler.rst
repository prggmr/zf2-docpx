.. Stdlib/CallbackHandler.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\CallbackHandler
=============================

CallbackHandler

A handler for a event, event, filterchain, etc. Abstracts PHP callbacks,
primarily to allow for lazy-loading and ensuring availability of default
arguments (currying).

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string|array|object|callable: PHP callback
    :param array: Callback metadata



registerCallback
----------------

.. function:: registerCallback()


    Registers the callback provided in the constructor
    
    If you have pecl/weakref {@see http://pecl.php.net/weakref} installed,
    this method provides additional behavior.
    
    If a callback is a functor, or an array callback composing an object
    instance, this method will pass the object to a WeakRef instance prior
    to registering the callback.

    :param callable: 

    :throws Exception\InvalidCallbackException: 

    :rtype: void 



getCallback
-----------

.. function:: getCallback()


    Retrieve registered callback

    :rtype: callable 



call
----

.. function:: call()


    Invoke handler

    :param array: Arguments to pass to callback

    :rtype: mixed 



__invoke
--------

.. function:: __invoke()


    Invoke as functor

    :rtype: mixed 



getMetadata
-----------

.. function:: getMetadata()


    Get all callback metadata

    :rtype: array 



getMetadatum
------------

.. function:: getMetadatum()


    Retrieve a single metadatum

    :param string: 

    :rtype: mixed 



validateStringCallbackFor54
---------------------------

.. function:: validateStringCallbackFor54()


    Validate a static method call
    
    Validates that a static method call in PHP 5.4 will actually work

    :param string: 

    :rtype: true|array 

    :throws: Exception\InvalidCallbackException if invalid



