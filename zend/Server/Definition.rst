.. Server/Definition.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Server\\Definition
========================

Server methods metadata

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array: 



setOverwriteExistingMethods
+++++++++++++++++++++++++++

.. function:: setOverwriteExistingMethods()


    Set flag indicating whether or not overwriting existing methods is allowed

    :param mixed: 

    :rtype: \Zend\Server\Definition 



addMethod
+++++++++

.. function:: addMethod()


    Add method to definition

    :param array|\Zend\Server\Method\Definition: 
    :param null|string: 

    :rtype: \Zend\Server\Definition 

    :throws: \Zend\Server\Exception\InvalidArgumentException if duplicate or invalid method provided



addMethods
++++++++++

.. function:: addMethods()


    Add multiple methods

    :param array: Array of \Zend\Server\Method\Definition objects or arrays

    :rtype: \Zend\Server\Definition 



setMethods
++++++++++

.. function:: setMethods()


    Set all methods at once (overwrite)

    :param array: Array of \Zend\Server\Method\Definition objects or arrays

    :rtype: \Zend\Server\Definition 



hasMethod
+++++++++

.. function:: hasMethod()


    Does the definition have the given method?

    :param string: 

    :rtype: bool 



getMethod
+++++++++

.. function:: getMethod()


    Get a given method definition

    :param string: 

    :rtype: null|\Zend\Server\Method\Definition 



getMethods
++++++++++

.. function:: getMethods()


    Get all method definitions

    :rtype: array Array of \Zend\Server\Method\Definition objects



removeMethod
++++++++++++

.. function:: removeMethod()


    Remove a method definition

    :param string: 

    :rtype: \Zend\Server\Definition 



clearMethods
++++++++++++

.. function:: clearMethods()


    Clear all method definitions

    :rtype: \Zend\Server\Definition 



toArray
+++++++

.. function:: toArray()


    Cast definition to an array

    :rtype: array 



count
+++++

.. function:: count()


    Countable: count of methods

    :rtype: int 



current
+++++++

.. function:: current()


    Iterator: current item

    :rtype: Method\Definition 



key
+++

.. function:: key()


    Iterator: current item key

    :rtype: int|string 



next
++++

.. function:: next()


    Iterator: advance to next method

    :rtype: Method\Definition 



rewind
++++++

.. function:: rewind()


    Iterator: return to first method

    :rtype: void 



valid
+++++

.. function:: valid()


    Iterator: is the current index valid?

    :rtype: bool 



