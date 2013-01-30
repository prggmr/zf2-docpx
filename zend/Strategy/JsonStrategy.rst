.. View/Strategy/JsonStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Strategy\\JsonStrategy
==================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param JsonRenderer: 



attach
------

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 
    :param int: 

    :rtype: void 



detach
------

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setCharset
----------

.. function:: setCharset()


    Set the content-type character set

    :param string: 

    :rtype: JsonStrategy 



getCharset
----------

.. function:: getCharset()


    Retrieve the current character set

    :rtype: string 



selectRenderer
--------------

.. function:: selectRenderer()


    Detect if we should use the JsonRenderer based on model type and/or
    Accept header

    :param ViewEvent: 

    :rtype: null|JsonRenderer 



injectResponse
--------------

.. function:: injectResponse()


    Inject the response with the JSON payload and appropriate Content-Type header

    :param ViewEvent: 

    :rtype: void 



