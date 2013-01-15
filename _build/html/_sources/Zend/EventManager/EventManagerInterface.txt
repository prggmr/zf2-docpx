.. /EventManager/EventManagerInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\trigger
===========================

.. function:: Zend\EventManager\trigger()


    Trigger an event
    
    Should allow handling the following scenarios:
    - Passing Event object only
    - Passing event name and Event object only
    - Passing event name, target, and Event object
    - Passing event name, target, and array|ArrayAccess of arguments
    
    Can emulate triggerUntil() if the last argument provided is a callback.

    :param string $event: 
    :param object|string $target: 
    :param array|object $argv: 
    :param null|callable $callback: 

    :rtype: ResponseCollection 



Zend\\EventManager\\triggerUntil
================================

.. function:: Zend\EventManager\triggerUntil()


    Trigger an event until the given callback returns a boolean false
    
    Should allow handling the following scenarios:
    - Passing Event object and callback only
    - Passing event name, Event object, and callback only
    - Passing event name, target, Event object, and callback
    - Passing event name, target, array|ArrayAccess of arguments, and callback

    :param string $event: 
    :param object|string $target: 
    :param array|object $argv: 
    :param callable $callback: 

    :rtype: ResponseCollection 



Zend\\EventManager\\attach
==========================

.. function:: Zend\EventManager\attach()


    Attach a listener to an event

    :param string $event: 
    :param callable $callback: 
    :param int $priority: Priority at which to register listener

    :rtype: CallbackHandler 



Zend\\EventManager\\detach
==========================

.. function:: Zend\EventManager\detach()


    Detach an event listener

    :param CallbackHandler|ListenerAggregateInterface $listener: 

    :rtype: bool 



Zend\\EventManager\\getEvents
=============================

.. function:: Zend\EventManager\getEvents()


    Get a list of events for which this collection has listeners

    :rtype: array 



Zend\\EventManager\\getListeners
================================

.. function:: Zend\EventManager\getListeners()


    Retrieve a list of listeners registered to a given event

    :param string $event: 

    :rtype: array|object 



Zend\\EventManager\\clearListeners
==================================

.. function:: Zend\EventManager\clearListeners()


    Clear all listeners for a given event

    :param string $event: 

    :rtype: void 



Zend\\EventManager\\setEventClass
=================================

.. function:: Zend\EventManager\setEventClass()


    Set the event class to utilize

    :param string $class: 

    :rtype: EventManagerInterface 



Zend\\EventManager\\getIdentifiers
==================================

.. function:: Zend\EventManager\getIdentifiers()


    Get the identifier(s) for this EventManager

    :rtype: array 



Zend\\EventManager\\setIdentifiers
==================================

.. function:: Zend\EventManager\setIdentifiers()


    Set the identifiers (overrides any currently set identifiers)

    :param string|int|array|Traversable $identifiers: 

    :rtype: EventManagerInterface 



Zend\\EventManager\\addIdentifiers
==================================

.. function:: Zend\EventManager\addIdentifiers()


    Add some identifier(s) (appends to any currently set identifiers)

    :param string|int|array|Traversable $identifiers: 

    :rtype: EventManagerInterface 



Zend\\EventManager\\attachAggregate
===================================

.. function:: Zend\EventManager\attachAggregate()


    Attach a listener aggregate

    :param ListenerAggregateInterface $aggregate: 
    :param int $priority: If provided, a suggested priority for the aggregate to use

    :rtype: mixed return value of {@link ListenerAggregateInterface::attach()}



Zend\\EventManager\\detachAggregate
===================================

.. function:: Zend\EventManager\detachAggregate()


    Detach a listener aggregate

    :param ListenerAggregateInterface $aggregate: 

    :rtype: mixed return value of {@link ListenerAggregateInterface::detach()}



