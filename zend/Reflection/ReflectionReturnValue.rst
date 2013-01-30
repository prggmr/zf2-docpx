.. Server/Reflection/ReflectionReturnValue.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Server\\Reflection\\ReflectionReturnValue
===============================================

Return value reflection

Stores the return value type and description

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: Return value type
    :param string: Return value type



getType
+++++++

.. function:: getType()


    Retrieve parameter type

    :rtype: string 



setType
+++++++

.. function:: setType()


    Set parameter type

    :param string|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getDescription
++++++++++++++

.. function:: getDescription()


    Retrieve parameter description

    :rtype: string 



setDescription
++++++++++++++

.. function:: setDescription()


    Set parameter description

    :param string|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



