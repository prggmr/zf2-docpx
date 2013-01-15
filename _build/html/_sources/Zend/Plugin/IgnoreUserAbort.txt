.. /Cache/Storage/Plugin/IgnoreUserAbort.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Plugin\\IgnoreUserAbort
*********************************************


@category   Zend



Methods
=======

attach
------

.. function:: attach($events, [$priority = 1])


    Attach

    :param EventManagerInterface $events: 
    :param int $priority: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



detach
------

.. function:: detach($events)


    Detach

    :param EventManagerInterface $events: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



onBefore
--------

.. function:: onBefore($event)


    Activate ignore_user_abort if not already done
    and save the target who activated it.

    :param Event $event: 

    :rtype: void 



onAfter
-------

.. function:: onAfter($event)


    Reset ignore_user_abort if it's activated and if it's the same target
    who activated it.
    
    If exit_on_abort is enabled and the connection has been aborted
    exit the script.

    :param Event $event: 

    :rtype: void 





