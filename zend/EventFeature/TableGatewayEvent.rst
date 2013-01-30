.. Db/TableGateway/Feature/EventFeature/TableGatewayEvent.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\TableGateway\\Feature\\EventFeature\\TableGatewayEvent
================================================================

Methods
+++++++

getName
-------

.. function:: getName()


    Get event name

    :rtype: string 



getTarget
---------

.. function:: getTarget()


    Get target/context from which event was triggered

    :rtype: null|string|object 



getParams
---------

.. function:: getParams()


    Get parameters passed to the event

    :rtype: array|\ArrayAccess 



getParam
--------

.. function:: getParam()


    Get a single parameter by name

    :param string: 
    :param mixed: Default value to return if parameter does not exist

    :rtype: mixed 



setName
-------

.. function:: setName()


    Set the event name

    :param string: 

    :rtype: void 



setTarget
---------

.. function:: setTarget()


    Set the event target/context

    :param null|string|object: 

    :rtype: void 



setParams
---------

.. function:: setParams()


    Set event parameters

    :param string: 

    :rtype: void 



setParam
--------

.. function:: setParam()


    Set a single parameter by key

    :param string: 
    :param mixed: 

    :rtype: void 



stopPropagation
---------------

.. function:: stopPropagation()


    Indicate whether or not the parent EventManagerInterface should stop propagating events

    :param bool: 

    :rtype: void 



propagationIsStopped
--------------------

.. function:: propagationIsStopped()


    Has this event indicated event propagation should stop?

    :rtype: bool 



