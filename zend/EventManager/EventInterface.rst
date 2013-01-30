.. EventManager/EventInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\EventManager\\getName
===========================

.. function:: Zend\EventManager\getName()


    Get event name

    :rtype: string 



Function
********

Zend\\EventManager\\getTarget
=============================

.. function:: Zend\EventManager\getTarget()


    Get target/context from which event was triggered

    :rtype: null|string|object 



Function
********

Zend\\EventManager\\getParams
=============================

.. function:: Zend\EventManager\getParams()


    Get parameters passed to the event

    :rtype: array|ArrayAccess 



Function
********

Zend\\EventManager\\getParam
============================

.. function:: Zend\EventManager\getParam()


    Get a single parameter by name

    :param string: 
    :param mixed: Default value to return if parameter does not exist

    :rtype: mixed 



Function
********

Zend\\EventManager\\setName
===========================

.. function:: Zend\EventManager\setName()


    Set the event name

    :param string: 

    :rtype: void 



Function
********

Zend\\EventManager\\setTarget
=============================

.. function:: Zend\EventManager\setTarget()


    Set the event target/context

    :param null|string|object: 

    :rtype: void 



Function
********

Zend\\EventManager\\setParams
=============================

.. function:: Zend\EventManager\setParams()


    Set event parameters

    :param string: 

    :rtype: void 



Function
********

Zend\\EventManager\\setParam
============================

.. function:: Zend\EventManager\setParam()


    Set a single parameter by key

    :param string: 
    :param mixed: 

    :rtype: void 



Function
********

Zend\\EventManager\\stopPropagation
===================================

.. function:: Zend\EventManager\stopPropagation()


    Indicate whether or not the parent EventManagerInterface should stop propagating events

    :param bool: 

    :rtype: void 



Function
********

Zend\\EventManager\\propagationIsStopped
========================================

.. function:: Zend\EventManager\propagationIsStopped()


    Has this event indicated event propagation should stop?

    :rtype: bool 



