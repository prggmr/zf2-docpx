.. /Cache/Storage/Plugin/ClearExpiredByFactor.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Plugin\\ClearExpiredByFactor
**************************************************


@category   Zend



Methods
=======

attach
------

.. function:: attach($events, [$priority = 1])


    Attach

    :param EventManagerInterface $events: 
    :param int $priority: 

    :rtype: ClearExpiredByFactor 

    :throws: Exception\LogicException 



detach
------

.. function:: detach($events)


    Detach

    :param EventManagerInterface $events: 

    :rtype: ClearExpiredByFactor 

    :throws: Exception\LogicException 



clearExpiredByFactor
--------------------

.. function:: clearExpiredByFactor($event)


    Clear expired items by factor after writing new item(s)

    :param PostEvent $event: 

    :rtype: void 





