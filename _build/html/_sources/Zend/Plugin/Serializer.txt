.. /Cache/Storage/Plugin/Serializer.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Plugin\\Serializer
****************************************


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



onReadItemPost
--------------

.. function:: onReadItemPost($event)


    On read item post

    :param PostEvent $event: 

    :rtype: void 



onReadItemsPost
---------------

.. function:: onReadItemsPost($event)


    On read items post

    :param PostEvent $event: 

    :rtype: void 



onWriteItemPre
--------------

.. function:: onWriteItemPre($event)


    On write item pre

    :param Event $event: 

    :rtype: void 



onWriteItemsPre
---------------

.. function:: onWriteItemsPre($event)


    On write items pre

    :param Event $event: 

    :rtype: void 



onIncrementItemPre
------------------

.. function:: onIncrementItemPre($event)


    On increment item pre

    :param Event $event: 

    :rtype: mixed 



onIncrementItemsPre
-------------------

.. function:: onIncrementItemsPre($event)


    On increment items pre

    :param Event $event: 

    :rtype: mixed 



onDecrementItemPre
------------------

.. function:: onDecrementItemPre($event)


    On decrement item pre

    :param Event $event: 

    :rtype: mixed 



onDecrementItemsPre
-------------------

.. function:: onDecrementItemsPre($event)


    On decrement items pre

    :param Event $event: 

    :rtype: mixed 



onGetCapabilitiesPost
---------------------

.. function:: onGetCapabilitiesPost($event)


    On get capabilities

    :param PostEvent $event: 

    :rtype: void 





