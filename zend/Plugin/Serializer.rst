.. Cache/Storage/Plugin/Serializer.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\Plugin\\Serializer
========================================

Methods
-------

attach
++++++

.. function:: attach()


    Attach

    :param EventManagerInterface: 
    :param int: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



detach
++++++

.. function:: detach()


    Detach

    :param EventManagerInterface: 

    :rtype: Serializer 

    :throws: Exception\LogicException 



onReadItemPost
++++++++++++++

.. function:: onReadItemPost()


    On read item post

    :param PostEvent: 

    :rtype: void 



onReadItemsPost
+++++++++++++++

.. function:: onReadItemsPost()


    On read items post

    :param PostEvent: 

    :rtype: void 



onWriteItemPre
++++++++++++++

.. function:: onWriteItemPre()


    On write item pre

    :param Event: 

    :rtype: void 



onWriteItemsPre
+++++++++++++++

.. function:: onWriteItemsPre()


    On write items pre

    :param Event: 

    :rtype: void 



onIncrementItemPre
++++++++++++++++++

.. function:: onIncrementItemPre()


    On increment item pre

    :param Event: 

    :rtype: mixed 



onIncrementItemsPre
+++++++++++++++++++

.. function:: onIncrementItemsPre()


    On increment items pre

    :param Event: 

    :rtype: mixed 



onDecrementItemPre
++++++++++++++++++

.. function:: onDecrementItemPre()


    On decrement item pre

    :param Event: 

    :rtype: mixed 



onDecrementItemsPre
+++++++++++++++++++

.. function:: onDecrementItemsPre()


    On decrement items pre

    :param Event: 

    :rtype: mixed 



onGetCapabilitiesPost
+++++++++++++++++++++

.. function:: onGetCapabilitiesPost()


    On get capabilities

    :param PostEvent: 

    :rtype: void 



