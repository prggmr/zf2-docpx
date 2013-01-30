.. EventManager/SharedEventManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\EventManager\\SharedEventManager
======================================

Shared/contextual EventManager

Allows attaching to EMs composed by other classes without having an instance first.
The assumption is that the SharedEventManager will be injected into EventManager
instances, and then queried for additional listeners when triggering an event.

Methods
-------

attach
++++++

.. function:: attach()


    Attach a listener to an event
    
    Allows attaching a callback to an event offered by one or more
    identifying components. As an example, the following connects to the
    "getAll" event of both an AbstractResource and EntityResource:
    
    <code>
    $sharedEventManager = new SharedEventManager();
    $sharedEventManager->attach(
        array('My\Resource\AbstractResource', 'My\Resource\EntityResource'),
        'getAll',
        function ($e) use ($cache) {
            if (!$id = $e->getParam('id', false)) {
                return;
            }
            if (!$data = $cache->load(get_class($resource) . '::getOne::' . $id )) {
                return;
            }
            return $data;
        }
    );
    </code>

    :param string|array: Identifier(s) for event emitting component(s)
    :param string: 
    :param callable: PHP Callback
    :param int: Priority at which listener should execute

    :rtype: CallbackHandler|array Either CallbackHandler or array of CallbackHandlers



attachAggregate
+++++++++++++++

.. function:: attachAggregate()


    Attach a listener aggregate
    
    Listener aggregates accept an EventManagerInterface instance, and call attachShared()
    one or more times, typically to attach to multiple events using local
    methods.

    :param SharedListenerAggregateInterface: 
    :param int: If provided, a suggested priority for the aggregate to use

    :rtype: mixed return value of {@link ListenerAggregateInterface::attachShared()}



detach
++++++

.. function:: detach()


    Detach a listener from an event offered by a given resource

    :param string|int: 
    :param CallbackHandler: 

    :rtype: bool Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



detachAggregate
+++++++++++++++

.. function:: detachAggregate()


    Detach a listener aggregate
    
    Listener aggregates accept an SharedEventManagerInterface instance, and call detachShared()
    of all previously attached listeners.

    :param SharedListenerAggregateInterface: 

    :rtype: mixed return value of {@link SharedListenerAggregateInterface::detachShared()}



getEvents
+++++++++

.. function:: getEvents()


    Retrieve all registered events for a given resource

    :param string|int: 

    :rtype: array 



getListeners
++++++++++++

.. function:: getListeners()


    Retrieve all listeners for a given identifier and event

    :param string|int: 
    :param string|int: 

    :rtype: false|PriorityQueue 



clearListeners
++++++++++++++

.. function:: clearListeners()


    Clear all listeners for a given identifier, optionally for a specific event

    :param string|int: 
    :param null|string: 

    :rtype: bool 



