.. Server/Reflection/ReflectionMethod.php generated using docpx on 01/30/13 03:32am


Zend\\Server\\Reflection\\ReflectionMethod
==========================================

Method Reflection

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param ReflectionClass: 
    :param \ReflectionMethod: 
    :param string: 
    :param array: 



getDeclaringClass
-----------------

.. function:: getDeclaringClass()


    Return the reflection for the class that defines this method

    :rtype: \Zend\Server\Reflection\ReflectionClass 



__wakeup
--------

.. function:: __wakeup()


    Wakeup from serialization
    
    Reflection needs explicit instantiation to work correctly. Re-instantiate
    reflection object on wakeup.

    :rtype: void 



