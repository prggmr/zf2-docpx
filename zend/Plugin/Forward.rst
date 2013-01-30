.. Mvc/Controller/Plugin/Forward.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\Forward
======================================

Methods
-------

setMaxNestedForwards
++++++++++++++++++++

.. function:: setMaxNestedForwards()


    Set maximum number of nested forwards allowed

    :param int: 

    :rtype: Forward 



getListenersToDetach
++++++++++++++++++++

.. function:: getListenersToDetach()


    Get information on listeners that need to be detached before dispatching.
    
    Each entry in the array contains three keys:
    
    id (identifier for event-emitting component),
    event (the hooked event)
    and class (the class of listener that should be detached).

    :rtype: array 



setListenersToDetach
++++++++++++++++++++

.. function:: setListenersToDetach()


    Set information on listeners that need to be detached before dispatching.

    :param array: Listener information; see getListenersToDetach() for details on format.

    :rtype: void 



dispatch
++++++++

.. function:: dispatch()


    Dispatch another controller

    :param string: Controller name; either a class name or an alias used in the DI container or service locator
    :param null|array: Parameters with which to seed a custom RouteMatch object for the new controller

    :rtype: mixed 

    :throws: Exception\DomainException if composed controller does not define InjectApplicationEventInterface
        or Locator aware; or if the discovered controller is not dispatchable



detachProblemListeners
++++++++++++++++++++++

.. function:: detachProblemListeners()


    Detach problem listeners specified by getListenersToDetach() and return an array of information that will
    allow them to be reattached.

    :param SharedEvents: Shared event manager

    :rtype: array 



reattachProblemListeners
++++++++++++++++++++++++

.. function:: reattachProblemListeners()


    Reattach all problem listeners detached by detachProblemListeners(), if any.

    :param SharedEvents: Shared event manager
    :param array: Output of detachProblemListeners()

    :rtype: void 



getLocator
++++++++++

.. function:: getLocator()


    Get the locator

    :rtype: ServiceLocatorInterface 

    :throws: Exception\DomainException if unable to find locator



getEvent
++++++++

.. function:: getEvent()


    Get the event

    :rtype: MvcEvent 

    :throws: Exception\DomainException if unable to find event



