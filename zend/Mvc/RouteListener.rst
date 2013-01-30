.. Mvc/RouteListener.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\RouteListener
========================

Methods
-------

attach
++++++

.. function:: attach()


    Attach to an event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach all our listeners from the event manager

    :param EventManagerInterface: 

    :rtype: void 



onRoute
+++++++

.. function:: onRoute()


    Listen to the "route" event and attempt to route the request
    
    If no matches are returned, triggers "dispatch.error" in order to
    create a 404 response.
    
    Seeds the event with the route match on completion.

    :param MvcEvent: 

    :rtype: null|Router\RouteMatch 



