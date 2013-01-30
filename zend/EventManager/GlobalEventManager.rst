.. EventManager/GlobalEventManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\EventManager\\GlobalEventManager
======================================

Event manager: notification system

Use the EventManager when you want to create a per-instance notification
system for your objects.

Methods
-------

setEventCollection
++++++++++++++++++

.. function:: setEventCollection()


    Set the event collection on which this will operate

    :param null|EventManagerInterface: 

    :rtype: void 



getEventCollection
++++++++++++++++++

.. function:: getEventCollection()


    Get event collection on which this operates

    :rtype: EventManagerInterface 



trigger
+++++++

.. function:: trigger()


    Trigger an event

    :param string: 
    :param object|string: 
    :param array|object: 

    :rtype: ResponseCollection 



triggerUntil
++++++++++++

.. function:: triggerUntil()


    Trigger listeners until return value of one causes a callback to evaluate
    to true.

    :param string: 
    :param string|object: 
    :param array|object: 
    :param callable: 

    :rtype: ResponseCollection 



attach
++++++

.. function:: attach()


    Attach a listener to an event

    :param string: 
    :param callable: 
    :param int: 

    :rtype: CallbackHandler 



detach
++++++

.. function:: detach()


    Detach a callback from a listener

    :param CallbackHandler: 

    :rtype: bool 



getEvents
+++++++++

.. function:: getEvents()


    Retrieve list of events this object manages

    :rtype: array 



getListeners
++++++++++++

.. function:: getListeners()


    Retrieve all listeners for a given event

    :param string: 

    :rtype: PriorityQueue|array 



clearListeners
++++++++++++++

.. function:: clearListeners()


    Clear all listeners for a given event

    :param string: 

    :rtype: void 



