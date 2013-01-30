.. Server/Reflection.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Server\\Reflection
========================

Reflection for determining method signatures to use with server classes

Methods
-------

reflectClass
++++++++++++

.. function:: reflectClass()


    Perform class reflection to create dispatch signatures
    
    Creates a {@link \Zend\Server\Reflection\ClassReflection} object for the class or
    object provided.
    
    If extra arguments should be passed to dispatchable methods, these may
    be provided as an array to $argv.

    :param string|object: Class name or object
    :param bool|array: Optional arguments to be used during the method call
    :param string: Optional namespace with which to prefix the
method name (used for the signature key). Primarily to avoid collisions,
also for XmlRpc namespacing

    :rtype: \Zend\Server\Reflection\ReflectionClass 

    :throws: \Zend\Server\Reflection\Exception\InvalidArgumentException 



reflectFunction
+++++++++++++++

.. function:: reflectFunction()


    Perform function reflection to create dispatch signatures
    
    Creates dispatch prototypes for a function. It returns a
    {@link Zend\Server\Reflection\FunctionReflection} object.
    
    If extra arguments should be passed to the dispatchable function, these
    may be provided as an array to $argv.

    :param string: Function name
    :param bool|array: Optional arguments to be used during the method call
    :param string: Optional namespace with which to prefix the
function name (used for the signature key). Primarily to avoid
collisions, also for XmlRpc namespacing

    :rtype: \Zend\Server\Reflection\ReflectionFunction 

    :throws: \Zend\Server\Reflection\Exception\InvalidArgumentException 



