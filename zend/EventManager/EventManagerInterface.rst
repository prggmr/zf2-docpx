.. EventManager/EventManagerInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

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

    :param string: 
    :param object|string: 
    :param array|object: 
    :param null|callable: 

    :rtype: ResponseCollection 



Function
********

Zend\\EventManager\\triggerUntil
================================

.. function:: Zend\EventManager\triggerUntil()


    Trigger an event until the given callback returns a boolean false
    
    Should allow handling the following scenarios:
    - Passing Event object and callback only
    - Passing event name, Event object, and callback only
    - Passing event name, target, Event object, and callback
    - Passing event name, target, array|ArrayAccess of arguments, and callback

    :param string: 
    :param object|string: 
    :param array|object: 
    :param callable: 

    :rtype: ResponseCollection 



Function
********

Zend\\EventManager\\attach
==========================

.. function:: Zend\EventManager\attach()


    Attach a listener to an event

    :param string: 
    :param callable: 
    :param int: Priority at which to register listener

    :rtype: CallbackHandler 



Function
********

Zend\\EventManager\\detach
==========================

.. function:: Zend\EventManager\detach()


    Detach an event listener

    :param CallbackHandler|ListenerAggregateInterface: 

    :rtype: bool 



Function
********

Zend\\EventManager\\getEvents
=============================

.. function:: Zend\EventManager\getEvents()


    Get a list of events for which this collection has listeners

    :rtype: array 



Function
********

Zend\\EventManager\\getListeners
================================

.. function:: Zend\EventManager\getListeners()


    Retrieve a list of listeners registered to a given event

    :param string: 

    :rtype: array|object 



Function
********

Zend\\EventManager\\clearListeners
==================================

.. function:: Zend\EventManager\clearListeners()


    Clear all listeners for a given event

    :param string: 

    :rtype: void 



Function
********

Zend\\EventManager\\setEventClass
=================================

.. function:: Zend\EventManager\setEventClass()


    Set the event class to utilize

    :param string: 

    :rtype: EventManagerInterface 



Function
********

Zend\\EventManager\\getIdentifiers
==================================

.. function:: Zend\EventManager\getIdentifiers()


    Get the identifier(s) for this EventManager

    :rtype: array 



Function
********

Zend\\EventManager\\setIdentifiers
==================================

.. function:: Zend\EventManager\setIdentifiers()


    Set the identifiers (overrides any currently set identifiers)

    :param string|int|array|Traversable: 

    :rtype: EventManagerInterface 



Function
********

Zend\\EventManager\\addIdentifiers
==================================

.. function:: Zend\EventManager\addIdentifiers()


    Add some identifier(s) (appends to any currently set identifiers)

    :param string|int|array|Traversable: 

    :rtype: EventManagerInterface 



Function
********

Zend\\EventManager\\attachAggregate
===================================

.. function:: Zend\EventManager\attachAggregate()


    Attach a listener aggregate

    :param ListenerAggregateInterface: 
    :param int: If provided, a suggested priority for the aggregate to use

    :rtype: mixed return value of {@link ListenerAggregateInterface::attach()}



Function
********

Zend\\EventManager\\detachAggregate
===================================

.. function:: Zend\EventManager\detachAggregate()


    Detach a listener aggregate

    :param ListenerAggregateInterface: 

    :rtype: mixed return value of {@link ListenerAggregateInterface::detach()}



