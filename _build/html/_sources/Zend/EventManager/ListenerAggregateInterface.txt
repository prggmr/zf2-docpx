.. /EventManager/ListenerAggregateInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\attach
==========================

.. function:: Zend\EventManager\attach()


    Attach one or more listeners
    
    Implementors may add an optional $priority argument; the EventManager
    implementation will pass this to the aggregate.

    :param EventManagerInterface $events: 



Zend\\EventManager\\detach
==========================

.. function:: Zend\EventManager\detach()


    Detach all previously attached listeners

    :param EventManagerInterface $events: 



