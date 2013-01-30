.. Server/Method/Prototype.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Server\\Method\\Prototype
===============================

Method prototype metadata

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array: 



setReturnType
+++++++++++++

.. function:: setReturnType()


    Set return value

    :param string: 

    :rtype: \Zend\Server\Method\Prototype 



getReturnType
+++++++++++++

.. function:: getReturnType()


    Retrieve return type

    :rtype: string 



addParameter
++++++++++++

.. function:: addParameter()


    Add a parameter

    :param string: 

    :rtype: \Zend\Server\Method\Prototype 



addParameters
+++++++++++++

.. function:: addParameters()


    Add parameters

    :param array: 

    :rtype: \Zend\Server\Method\Prototype 



setParameters
+++++++++++++

.. function:: setParameters()


    Set parameters

    :param array: 

    :rtype: \Zend\Server\Method\Prototype 



getParameters
+++++++++++++

.. function:: getParameters()


    Retrieve parameters as list of types

    :rtype: array 



getParameterObjects
+++++++++++++++++++

.. function:: getParameterObjects()


    Get parameter objects

    :rtype: array 



getParameter
++++++++++++

.. function:: getParameter()


    Retrieve a single parameter by name or index

    :param string|int: 

    :rtype: null|\Zend\Server\Method\Parameter 



setOptions
++++++++++

.. function:: setOptions()


    Set object state from array

    :param array: 

    :rtype: \Zend\Server\Method\Prototype 



toArray
+++++++

.. function:: toArray()


    Serialize to array

    :rtype: array 



