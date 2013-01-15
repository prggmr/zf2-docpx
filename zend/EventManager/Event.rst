.. /EventManager/Event.php generated using docpx on 01/15/13 05:29pm


Zend\\EventManager\\Event
*************************


Representation of an event

Encapsulates the target context and parameters passed, and provides some
behavior for interacting with the event manager.



Methods
=======

__construct
-----------

.. function:: __construct([$name = false, [$target = false, [$params = false]]])


    Constructor
    
    Accept a target and its parameters.

    :param string $name: Event name
    :param string|object $target: 
    :param array|ArrayAccess $params: 



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

.. function:: setParams($params)


    Set parameters
    
    Overwrites parameters

    :param array|ArrayAccess|object $params: 

    :rtype: Event 

    :throws: Exception\InvalidArgumentException 



getParams
---------

.. function:: getParams()


    Get all parameters

    :rtype: array|object|ArrayAccess 



getParam
--------

.. function:: getParam($name, [$default = false])


    Get an individual parameter
    
    If the parameter does not exist, the $default value will be returned.

    :param string|int $name: 
    :param mixed $default: 

    :rtype: mixed 



setName
-------

.. function:: setName($name)


    Set the event name

    :param string $name: 

    :rtype: Event 



setTarget
---------

.. function:: setTarget($target)


    Set the event target/context

    :param null|string|object $target: 

    :rtype: Event 



setParam
--------

.. function:: setParam($name, $value)


    Set an individual parameter to a value

    :param string|int $name: 
    :param mixed $value: 

    :rtype: Event 



stopPropagation
---------------

.. function:: stopPropagation([$flag = true])


    Stop further event propagation

    :param bool $flag: 

    :rtype: void 



propagationIsStopped
--------------------

.. function:: propagationIsStopped()


    Is propagation stopped?

    :rtype: bool 





