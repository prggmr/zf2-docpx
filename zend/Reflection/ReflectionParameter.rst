.. Server/Reflection/ReflectionParameter.php generated using docpx on 01/30/13 03:32am


Zend\\Server\\Reflection\\ReflectionParameter
=============================================

Parameter Reflection

Decorates a ReflectionParameter to allow setting the parameter type

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param \ReflectionParameter: 
    :param string: Parameter type
    :param string: Parameter description



__call
------

.. function:: __call()


    Proxy reflection calls

    :param string: 
    :param array: 

    :throws Exception\BadMethodCallException: 

    :rtype: mixed 



getType
-------

.. function:: getType()


    Retrieve parameter type

    :rtype: string 



setType
-------

.. function:: setType()


    Set parameter type

    :param string|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getDescription
--------------

.. function:: getDescription()


    Retrieve parameter description

    :rtype: string 



setDescription
--------------

.. function:: setDescription()


    Set parameter description

    :param string|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



setPosition
-----------

.. function:: setPosition()


    Set parameter position

    :param int: 

    :rtype: void 



getPosition
-----------

.. function:: getPosition()


    Return parameter position

    :rtype: int 



