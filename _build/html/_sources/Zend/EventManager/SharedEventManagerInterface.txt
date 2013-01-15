.. /EventManager/SharedEventManagerInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\getListeners
================================

.. function:: Zend\EventManager\getListeners()


    Retrieve all listeners for a given identifier and event

    :param string|int $id: 
    :param string|int $event: 

    :rtype: false|PriorityQueue 



Zend\\EventManager\\attach
==========================

.. function:: Zend\EventManager\attach()


    Attach a listener to an event

    :param string|array $id: Identifier(s) for event emitting component(s)
    :param string $event: 
    :param callable $callback: PHP Callback
    :param int $priority: Priority at which listener should execute

    :rtype: void 



Zend\\EventManager\\detach
==========================

.. function:: Zend\EventManager\detach()


    Detach a listener from an event offered by a given resource

    :param string|int $id: 
    :param CallbackHandler $listener: 

    :rtype: bool Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



Zend\\EventManager\\getEvents
=============================

.. function:: Zend\EventManager\getEvents()


    Retrieve all registered events for a given resource

    :param string|int $id: 

    :rtype: array 



Zend\\EventManager\\clearListeners
==================================

.. function:: Zend\EventManager\clearListeners()


    Clear all listeners for a given identifier, optionally for a specific event

    :param string|int $id: 
    :param null|string $event: 

    :rtype: bool 



