.. View/Variables.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Variables
=====================

Abstract class for Zend_View to help enforce private constructs.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array: 
    :param array: 



setOptions
++++++++++

.. function:: setOptions()


    Configure object

    :param array: 

    :rtype: Variables 



setStrictVars
+++++++++++++

.. function:: setStrictVars()


    Set status of "strict vars" flag

    :param bool: 

    :rtype: Variables 



isStrict
++++++++

.. function:: isStrict()


    Are we operating with strict variables?

    :rtype: bool 



assign
++++++

.. function:: assign()


    Assign many values at once

    :param array|object: 

    :rtype: Variables 

    :throws: Exception\InvalidArgumentException 



offsetGet
+++++++++

.. function:: offsetGet()


    Get the variable value
    
    If the value has not been defined, a null value will be returned; if
    strict vars on in place, a notice will also be raised.
    
    Otherwise, returns _escaped_ version of the value.

    :param mixed: 

    :rtype: mixed 



clear
+++++

.. function:: clear()


    Clear all variables

    :rtype: void 



