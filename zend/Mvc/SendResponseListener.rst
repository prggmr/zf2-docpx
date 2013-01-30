.. Mvc/SendResponseListener.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\SendResponseListener
===============================

Methods
-------

setEventManager
+++++++++++++++

.. function:: setEventManager()


    Inject an EventManager instance

    :param EventManagerInterface: 

    :rtype: SendResponseListener 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve the event manager
    
    Lazy-loads an EventManager instance if none registered.

    :rtype: EventManagerInterface 



attach
++++++

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



sendResponse
++++++++++++

.. function:: sendResponse()


    Send the response

    :param MvcEvent: 

    :rtype: void 



getEvent
++++++++

.. function:: getEvent()


    Get the send response event

    :rtype: SendResponseEvent 



setEvent
++++++++

.. function:: setEvent()


    Set the send response event

    :param SendResponseEvent: 

    :rtype: SendResponseEvent 



attachDefaultListeners
++++++++++++++++++++++

.. function:: attachDefaultListeners()


    Register the default event listeners
    
    The order in which the response sender are listed here, is by their usage:
    PhpEnvironmentResponseSender has highest priority, because it's used most often.
    ConsoleResponseSender and SimpleStreamResponseSender are not used that often, yo they have a lower priority.
    You can attach your response sender before or after every default response sender implementation.
    All default response sender implementation have negative priority.
    You are able to attach listeners without giving a priority and your response sender would be first to try.

    :rtype: SendResponseListener 



