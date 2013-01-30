.. ModuleManager/Listener/DefaultListenerAggregate.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ModuleManager\\Listener\\DefaultListenerAggregate
=======================================================

Default listener aggregate

Methods
-------

attach
++++++

.. function:: attach()


    Attach one or more listeners

    :param EventManagerInterface: 

    :rtype: DefaultListenerAggregate 



detach
++++++

.. function:: detach()


    Detach all previously attached listeners

    :param EventManagerInterface: 

    :rtype: void 



getConfigListener
+++++++++++++++++

.. function:: getConfigListener()


    Get the config merger.

    :rtype: ConfigMergerInterface 



setConfigListener
+++++++++++++++++

.. function:: setConfigListener()


    Set the config merger to use.

    :param ConfigMergerInterface: 

    :rtype: DefaultListenerAggregate 



