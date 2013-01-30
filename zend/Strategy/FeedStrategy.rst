.. View/Strategy/FeedStrategy.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Strategy\\FeedStrategy
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param FeedRenderer: 



attach
++++++

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 
    :param int: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



selectRenderer
++++++++++++++

.. function:: selectRenderer()


    Detect if we should use the FeedRenderer based on model type and/or
    Accept header

    :param ViewEvent: 

    :rtype: null|FeedRenderer 



injectResponse
++++++++++++++

.. function:: injectResponse()


    Inject the response with the feed payload and appropriate Content-Type header

    :param ViewEvent: 

    :rtype: void 



