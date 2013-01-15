.. /Db/TableGateway/Feature/EventFeature/TableGatewayEvent.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\TableGateway\\Feature\\EventFeature\\TableGatewayEvent
****************************************************************


@category   Zend



Methods
=======

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

.. function:: getParam($name, [$default = false])


    Get a single parameter by name

    :param string $name: 
    :param mixed $default: Default value to return if parameter does not exist

    :rtype: mixed 



setName
-------

.. function:: setName($name)


    Set the event name

    :param string $name: 

    :rtype: void 



setTarget
---------

.. function:: setTarget($target)


    Set the event target/context

    :param null|string|object $target: 

    :rtype: void 



setParams
---------

.. function:: setParams($params)


    Set event parameters

    :param string $params: 

    :rtype: void 



setParam
--------

.. function:: setParam($name, $value)


    Set a single parameter by key

    :param string $name: 
    :param mixed $value: 

    :rtype: void 



stopPropagation
---------------

.. function:: stopPropagation([$flag = true])


    Indicate whether or not the parent EventManagerInterface should stop propagating events

    :param bool $flag: 

    :rtype: void 



propagationIsStopped
--------------------

.. function:: propagationIsStopped()


    Has this event indicated event propagation should stop?

    :rtype: bool 





