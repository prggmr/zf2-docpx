.. Mvc/ModuleRouteListener.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\ModuleRouteListener
==============================

Methods
-------

attach
++++++

.. function:: attach()


    Attach to an event manager

    :param EventManagerInterface: 
    :param integer: 



detach
++++++

.. function:: detach()


    Detach all our listeners from the event manager

    :param EventManagerInterface: 

    :rtype: void 



onRoute
+++++++

.. function:: onRoute()


    Listen to the "route" event and determine if the module namespace should
    be prepended to the controller name.
    
    If the route match contains a parameter key matching the MODULE_NAMESPACE
    constant, that value will be prepended, with a namespace separator, to
    the matched controller parameter.

    :param MvcEvent: 

    :rtype: null 





Constants
---------

MODULE_NAMESPACE
++++++++++++++++

ORIGINAL_CONTROLLER
+++++++++++++++++++

