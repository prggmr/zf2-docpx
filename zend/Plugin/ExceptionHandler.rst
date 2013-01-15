.. /Cache/Storage/Plugin/ExceptionHandler.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Plugin\\ExceptionHandler
**********************************************


@category   Zend



Methods
=======

attach
------

.. function:: attach($events, [$priority = 1])


    Attach

    :param EventManagerInterface $events: 
    :param int $priority: 

    :rtype: ExceptionHandler 

    :throws: Exception\LogicException 



detach
------

.. function:: detach($events)


    Detach

    :param EventManagerInterface $events: 

    :rtype: ExceptionHandler 

    :throws: Exception\LogicException 



onException
-----------

.. function:: onException($event)


    On exception

    :param ExceptionEvent $event: 

    :rtype: void 





