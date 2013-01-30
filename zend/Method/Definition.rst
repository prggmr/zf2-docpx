.. Server/Method/Definition.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Server\\Method\\Definition
================================

Method definition metadata

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


    Set object state from options

    :param array: 

    :rtype: \Zend\Server\Method\Definition 



setName
+++++++

.. function:: setName()


    Set method name

    :param string: 

    :rtype: \Zend\Server\Method\Definition 



getName
+++++++

.. function:: getName()


    Get method name

    :rtype: string 



setCallback
+++++++++++

.. function:: setCallback()


    Set method callback

    :param array|\Zend\Server\Method\Callback: 

    :throws Server\Exception\InvalidArgumentException: 

    :rtype: \Zend\Server\Method\Definition 



getCallback
+++++++++++

.. function:: getCallback()


    Get method callback

    :rtype: \Zend\Server\Method\Callback 



addPrototype
++++++++++++

.. function:: addPrototype()


    Add prototype to method definition

    :param array|\Zend\Server\Method\Prototype: 

    :throws Server\Exception\InvalidArgumentException: 

    :rtype: \Zend\Server\Method\Definition 



addPrototypes
+++++++++++++

.. function:: addPrototypes()


    Add multiple prototypes at once

    :param array: Array of \Zend\Server\Method\Prototype objects or arrays

    :rtype: \Zend\Server\Method\Definition 



setPrototypes
+++++++++++++

.. function:: setPrototypes()


    Set all prototypes at once (overwrites)

    :param array: Array of \Zend\Server\Method\Prototype objects or arrays

    :rtype: \Zend\Server\Method\Definition 



getPrototypes
+++++++++++++

.. function:: getPrototypes()


    Get all prototypes

    :rtype: array $prototypes Array of \Zend\Server\Method\Prototype objects or arrays



setMethodHelp
+++++++++++++

.. function:: setMethodHelp()


    Set method help

    :param string: 

    :rtype: \Zend\Server\Method\Definition 



getMethodHelp
+++++++++++++

.. function:: getMethodHelp()


    Get method help

    :rtype: string 



setObject
+++++++++

.. function:: setObject()


    Set object to use with method calls

    :param object: 

    :throws Server\Exception\InvalidArgumentException: 

    :rtype: \Zend\Server\Method\Definition 



getObject
+++++++++

.. function:: getObject()


    Get object to use with method calls

    :rtype: null|object 



setInvokeArguments
++++++++++++++++++

.. function:: setInvokeArguments()


    Set invoke arguments

    :param array: 

    :rtype: \Zend\Server\Method\Definition 



getInvokeArguments
++++++++++++++++++

.. function:: getInvokeArguments()


    Retrieve invoke arguments

    :rtype: array 



toArray
+++++++

.. function:: toArray()


    Serialize to array

    :rtype: array 



