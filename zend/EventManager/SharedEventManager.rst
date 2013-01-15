.. /EventManager/SharedEventManager.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\SharedEventManager
**************************************


Shared/contextual EventManager

Allows attaching to EMs composed by other classes without having an instance first.
The assumption is that the SharedEventManager will be injected into EventManager
instances, and then queried for additional listeners when triggering an event.



Methods
=======

attach
------

.. function:: attach($id, $event, $callback, [$priority = 1])


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

    :param string|array $id: Identifier(s) for event emitting component(s)
    :param string $event: 
    :param callable $callback: PHP Callback
    :param int $priority: Priority at which listener should execute

    :rtype: CallbackHandler|array Either CallbackHandler or array of CallbackHandlers



detach
------

.. function:: detach($id, $listener)


    Detach a listener from an event offered by a given resource

    :param string|int $id: 
    :param CallbackHandler $listener: 

    :rtype: bool Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



getEvents
---------

.. function:: getEvents($id)


    Retrieve all registered events for a given resource

    :param string|int $id: 

    :rtype: array 



getListeners
------------

.. function:: getListeners($id, $event)


    Retrieve all listeners for a given identifier and event

    :param string|int $id: 
    :param string|int $event: 

    :rtype: false|PriorityQueue 



clearListeners
--------------

.. function:: clearListeners($id, [$event = false])


    Clear all listeners for a given identifier, optionally for a specific event

    :param string|int $id: 
    :param null|string $event: 

    :rtype: bool 





