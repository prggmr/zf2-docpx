.. EventManager/Event.php generated using docpx on 01/30/13 03:32am


Zend\\EventManager\\Event
=========================

Representation of an event

Encapsulates the target context and parameters passed, and provides some
behavior for interacting with the event manager.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Accept a target and its parameters.

    :param string: Event name
    :param string|object: 
    :param array|ArrayAccess: 



getName
-------

.. function:: getName()


    Get event name

    :rtype: string 



getTarget
---------

.. function:: getTarget()


    Get the event target
    
    This may be either an object, or the name of a static method.

    :rtype: string|object 



setParams
---------

.. function:: setParams()


    Set parameters
    
    Overwrites parameters

    :param array|ArrayAccess|object: 

    :rtype: Event 

    :throws: Exception\InvalidArgumentException 



getParams
---------

.. function:: getParams()


    Get all parameters

    :rtype: array|object|ArrayAccess 



getParam
--------

.. function:: getParam()


    Get an individual parameter
    
    If the parameter does not exist, the $default value will be returned.

    :param string|int: 
    :param mixed: 

    :rtype: mixed 



setName
-------

.. function:: setName()


    Set the event name

    :param string: 

    :rtype: Event 



setTarget
---------

.. function:: setTarget()


    Set the event target/context

    :param null|string|object: 

    :rtype: Event 



setParam
--------

.. function:: setParam()


    Set an individual parameter to a value

    :param string|int: 
    :param mixed: 

    :rtype: Event 



stopPropagation
---------------

.. function:: stopPropagation()


    Stop further event propagation

    :param bool: 

    :rtype: void 



propagationIsStopped
--------------------

.. function:: propagationIsStopped()


    Is propagation stopped?

    :rtype: bool 



