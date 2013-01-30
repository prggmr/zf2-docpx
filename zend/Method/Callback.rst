.. Server/Method/Callback.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Server\\Method\\Callback
==============================

Method callback metadata

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array: 



setOptions
++++++++++

.. function:: setOptions()


    Set object state from array of options

    :param array: 

    :rtype: \Zend\Server\Method\Callback 



setClass
++++++++

.. function:: setClass()


    Set callback class

    :param string: 

    :rtype: \Zend\Server\Method\Callback 



getClass
++++++++

.. function:: getClass()


    Get callback class

    :rtype: string|null 



setFunction
+++++++++++

.. function:: setFunction()


    Set callback function

    :param string: 

    :rtype: \Zend\Server\Method\Callback 



getFunction
+++++++++++

.. function:: getFunction()


    Get callback function

    :rtype: null|string 



setMethod
+++++++++

.. function:: setMethod()


    Set callback class method

    :param string: 

    :rtype: \Zend\Server\Method\Callback 



getMethod
+++++++++

.. function:: getMethod()


    Get callback class  method

    :rtype: null|string 



setType
+++++++

.. function:: setType()


    Set callback type

    :param string: 

    :rtype: Callback 

    :throws: Server\Exception\InvalidArgumentException 



getType
+++++++

.. function:: getType()


    Get callback type

    :rtype: string 



toArray
+++++++

.. function:: toArray()


    Cast callback to array

    :rtype: array 



