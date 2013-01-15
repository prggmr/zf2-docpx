.. /EventManager/GlobalEventManager.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\GlobalEventManager
**************************************


Event manager: notification system

Use the EventManager when you want to create a per-instance notification
system for your objects.



Methods
=======

setEventCollection
------------------

.. function:: setEventCollection([$events = false])


    Set the event collection on which this will operate

    :param null|EventManagerInterface $events: 

    :rtype: void 



getEventCollection
------------------

.. function:: getEventCollection()


    Get event collection on which this operates

    :rtype: EventManagerInterface 



trigger
-------

.. function:: trigger($event, $context, [$argv = false])


    Trigger an event

    :param string $event: 
    :param object|string $context: 
    :param array|object $argv: 

    :rtype: ResponseCollection 



triggerUntil
------------

.. function:: triggerUntil($event, $context, $argv, $callback)


    Trigger listeners until return value of one causes a callback to evaluate
    to true.

    :param string $event: 
    :param string|object $context: 
    :param array|object $argv: 
    :param callable $callback: 

    :rtype: ResponseCollection 



attach
------

.. function:: attach($event, $callback, [$priority = 1])


    Attach a listener to an event

    :param string $event: 
    :param callable $callback: 
    :param int $priority: 

    :rtype: CallbackHandler 



detach
------

.. function:: detach($listener)


    Detach a callback from a listener

    :param CallbackHandler $listener: 

    :rtype: bool 



getEvents
---------

.. function:: getEvents()


    Retrieve list of events this object manages

    :rtype: array 



getListeners
------------

.. function:: getListeners($event)


    Retrieve all listeners for a given event

    :param string $event: 

    :rtype: PriorityQueue|array 



clearListeners
--------------

.. function:: clearListeners($event)


    Clear all listeners for a given event

    :param string $event: 

    :rtype: void 





