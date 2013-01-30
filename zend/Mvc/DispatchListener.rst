.. Mvc/DispatchListener.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\DispatchListener
===========================

Default dispatch listener

Pulls controllers from the service manager's "ControllerLoader" service.

If the controller cannot be found a "404" result is set up. Otherwise it
will continue to try to load the controller.

If the controller is not dispatchable it sets up a "404" result. In case
of any other exceptions it trigger the "dispatch.error" event in an attempt
to return a 500 status.

If the controller subscribes to InjectApplicationEventInterface, it injects
the current MvcEvent into the controller.

It then calls the controller's "dispatch" method, passing it the request and
response. If an exception occurs, it triggers the "dispatch.error" event,
in an attempt to return a 500 status.

The return value of dispatching the controller is placed into the result
property of the MvcEvent, and returned.

Methods
-------

attach
++++++

.. function:: attach()


    Attach listeners to an event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach listeners from an event manager

    :param EventManagerInterface: 

    :rtype: void 



onDispatch
++++++++++

.. function:: onDispatch()


    Listen to the "dispatch" event

    :param MvcEvent: 

    :rtype: mixed 



reportMonitorEvent
++++++++++++++++++

.. function:: reportMonitorEvent()


    @param MvcEvent $e



complete
++++++++

.. function:: complete()


    Complete the dispatch

    :param mixed: 
    :param MvcEvent: 

    :rtype: mixed 



marshallControllerNotFoundEvent
+++++++++++++++++++++++++++++++

.. function:: marshallControllerNotFoundEvent()


    Marshall a controller not found exception event

    :param string: 
    :param string: 
    :param MvcEvent: 
    :param Application: 
    :param \Exception: 

    :rtype: mixed 



marshallBadControllerEvent
++++++++++++++++++++++++++

.. function:: marshallBadControllerEvent()


    Marshall a bad controller exception event

    :param string: 
    :param MvcEvent: 
    :param Application: 
    :param \Exception: 

    :rtype: mixed 



