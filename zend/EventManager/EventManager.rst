.. /EventManager/EventManager.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\EventManager
********************************


Event manager: notification system

Use the EventManager when you want to create a per-instance notification
system for your objects.



Methods
=======

__construct
-----------

.. function:: __construct([$identifiers = false])


    Constructor
    
    Allows optionally specifying identifier(s) to use to pull signals from a
    SharedEventManagerInterface.

    :param null|string|int|array|Traversable $identifiers: 



setEventClass
-------------

.. function:: setEventClass($class)


    Set the event class to utilize

    :param string $class: 

    :rtype: EventManager 



setSharedManager
----------------

.. function:: setSharedManager($sharedEventManager)


    Set shared event manager

    :param SharedEventManagerInterface $sharedEventManager: 

    :rtype: EventManager 



unsetSharedManager
------------------

.. function:: unsetSharedManager()


    Remove any shared event manager currently attached

    :rtype: void 



getSharedManager
----------------

.. function:: getSharedManager()


    Get shared event manager
    
    If one is not defined, but we have a static instance in
    StaticEventManager, that one will be used and set in this instance.
    
    If none is available in the StaticEventManager, a boolean false is
    returned.

    :rtype: false|SharedEventManagerInterface 



getIdentifiers
--------------

.. function:: getIdentifiers()


    Get the identifier(s) for this EventManager

    :rtype: array 



setIdentifiers
--------------

.. function:: setIdentifiers($identifiers)


    Set the identifiers (overrides any currently set identifiers)

    :param string|int|array|Traversable $identifiers: 

    :rtype: EventManager Provides a fluent interface



addIdentifiers
--------------

.. function:: addIdentifiers($identifiers)


    Add some identifier(s) (appends to any currently set identifiers)

    :param string|int|array|Traversable $identifiers: 

    :rtype: EventManager Provides a fluent interface



trigger
-------

.. function:: trigger($event, [$target = false, [$argv = false, [$callback = false]]])


    Trigger all listeners for a given event
    
    Can emulate triggerUntil() if the last argument provided is a callback.

    :param string $event: 
    :param string|object $target: Object calling emit, or symbol describing target (such as static method name)
    :param array|ArrayAccess $argv: Array of arguments; typically, should be associative
    :param null|callable $callback: 

    :rtype: ResponseCollection All listener return values

    :throws: Exception\InvalidCallbackException 



triggerUntil
------------

.. function:: triggerUntil($event, $target, [$argv = false, [$callback = false]])


    Trigger listeners until return value of one causes a callback to
    evaluate to true
    
    Triggers listeners until the provided callback evaluates the return
    value of one as true, or until all listeners have been executed.

    :param string $event: 
    :param string|object $target: Object calling emit, or symbol describing target (such as static method name)
    :param array|ArrayAccess $argv: Array of arguments; typically, should be associative
    :param callable $callback: 

    :rtype: ResponseCollection 

    :throws: Exception\InvalidCallbackException if invalid callable provided



attach
------

.. function:: attach($event, [$callback = false, [$priority = 1]])


    Attach a listener to an event
    
    The first argument is the event, and the next argument describes a
    callback that will respond to that event. A CallbackHandler instance
    describing the event listener combination will be returned.
    
    The last argument indicates a priority at which the event should be
    executed. By default, this value is 1; however, you may set it for any
    integer value. Higher values have higher priority (i.e., execute first).
    
    You can specify "*" for the event name. In such cases, the listener will
    be triggered for every event.

    :param string|array|ListenerAggregateInterface $event: An event or array of event names. If a ListenerAggregateInterface, proxies to {@link attachAggregate()}.
    :param callable|int $callback: If string $event provided, expects PHP callback; for a ListenerAggregateInterface $event, this will be the priority
    :param int $priority: If provided, the priority at which to register the callable

    :rtype: CallbackHandler|mixed CallbackHandler if attaching callable (to allow later unsubscribe); mixed if attaching aggregate

    :throws: Exception\InvalidArgumentException 



attachAggregate
---------------

.. function:: attachAggregate($aggregate, [$priority = 1])


    Attach a listener aggregate
    
    Listener aggregates accept an EventManagerInterface instance, and call attach()
    one or more times, typically to attach to multiple events using local
    methods.

    :param ListenerAggregateInterface $aggregate: 
    :param int $priority: If provided, a suggested priority for the aggregate to use

    :rtype: mixed return value of {@link ListenerAggregateInterface::attach()}



detach
------

.. function:: detach($listener)


    Unsubscribe a listener from an event

    :param CallbackHandler|ListenerAggregateInterface $listener: 

    :rtype: bool Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found

    :throws: Exception\InvalidArgumentException if invalid listener provided



detachAggregate
---------------

.. function:: detachAggregate($aggregate)


    Detach a listener aggregate
    
    Listener aggregates accept an EventManagerInterface instance, and call detach()
    of all previously attached listeners.

    :param ListenerAggregateInterface $aggregate: 

    :rtype: mixed return value of {@link ListenerAggregateInterface::detach()}



getEvents
---------

.. function:: getEvents()


    Retrieve all registered events

    :rtype: array 



getListeners
------------

.. function:: getListeners($event)


    Retrieve all listeners for a given event

    :param string $event: 

    :rtype: PriorityQueue 



clearListeners
--------------

.. function:: clearListeners($event)


    Clear all listeners for a given event

    :param string $event: 

    :rtype: void 



prepareArgs
-----------

.. function:: prepareArgs($args)


    Prepare arguments
    
    Use this method if you want to be able to modify arguments from within a
    listener. It returns an ArrayObject of the arguments, which may then be
    passed to trigger() or triggerUntil().

    :param array $args: 

    :rtype: ArrayObject 



triggerListeners
----------------

.. function:: triggerListeners($event, $e, [$callback = false])


    Trigger listeners
    
    Actual functionality for triggering listeners, to which both trigger() and triggerUntil()
    delegate.

    :param string $event: Event name
    :param EventInterface $e: 
    :param null|callable $callback: 

    :rtype: ResponseCollection 



getSharedListeners
------------------

.. function:: getSharedListeners($event)


    Get list of all listeners attached to the shared event manager for
    identifiers registered by this instance

    :param string $event: 

    :rtype: array 



insertListeners
---------------

.. function:: insertListeners($masterListeners, $listeners)


    Add listeners to the master queue of listeners
    
    Used to inject shared listeners and wildcard listeners.

    :param PriorityQueue $masterListeners: 
    :param PriorityQueue $listeners: 

    :rtype: void 





