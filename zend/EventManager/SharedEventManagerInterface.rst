.. EventManager/SharedEventManagerInterface.php generated using docpx on 01/30/13 03:26pm


Function
********

Zend\\EventManager\\getListeners
================================

.. function:: Zend\EventManager\getListeners()


    Retrieve all listeners for a given identifier and event

    :param string|int: 
    :param string|int: 

    :rtype: false|PriorityQueue 



Function
********

Zend\\EventManager\\attach
==========================

.. function:: Zend\EventManager\attach()


    Attach a listener to an event

    :param string|array: Identifier(s) for event emitting component(s)
    :param string: 
    :param callable: PHP Callback
    :param int: Priority at which listener should execute

    :rtype: void 



Function
********

Zend\\EventManager\\detach
==========================

.. function:: Zend\EventManager\detach()


    Detach a listener from an event offered by a given resource

    :param string|int: 
    :param CallbackHandler: 

    :rtype: bool Returns true if event and listener found, and unsubscribed; returns false if either event or listener not found



Function
********

Zend\\EventManager\\getEvents
=============================

.. function:: Zend\EventManager\getEvents()


    Retrieve all registered events for a given resource

    :param string|int: 

    :rtype: array 



Function
********

Zend\\EventManager\\clearListeners
==================================

.. function:: Zend\EventManager\clearListeners()


    Clear all listeners for a given identifier, optionally for a specific event

    :param string|int: 
    :param null|string: 

    :rtype: bool 



