.. Server/Reflection/Prototype.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Server\\Reflection\\Prototype
===================================

Method/Function prototypes

Contains accessors for the return value and all method arguments.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param ReflectionReturnValue: 
    :param ReflectionParameter[]: 

    :throws Exception\InvalidArgumentException: 



getReturnType
+++++++++++++

.. function:: getReturnType()


    Retrieve return type

    :rtype: string 



getReturnValue
++++++++++++++

.. function:: getReturnValue()


    Retrieve the return value object

    :rtype: \Zend\Server\Reflection\ReflectionReturnValue 



getParameters
+++++++++++++

.. function:: getParameters()


    Retrieve method parameters

    :rtype: ReflectionParameter[] Array of {@link \Zend\Server\Reflection\ReflectionParameter}s



