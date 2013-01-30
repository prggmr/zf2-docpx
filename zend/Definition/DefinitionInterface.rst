.. Di/Definition/DefinitionInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Di\\Definition\\getClasses
================================

.. function:: Zend\Di\Definition\getClasses()


    Retrieves classes in this definition


    :rtype: string[] 



Function
********

Zend\\Di\\Definition\\hasClass
==============================

.. function:: Zend\Di\Definition\hasClass()


    Return whether the class exists in this definition


    :param string: 

    :rtype: bool 



Function
********

Zend\\Di\\Definition\\getClassSupertypes
========================================

.. function:: Zend\Di\Definition\getClassSupertypes()


    Return the supertypes for this class


    :param string: 

    :rtype: string[] 



Function
********

Zend\\Di\\Definition\\getInstantiator
=====================================

.. function:: Zend\Di\Definition\getInstantiator()


    @abstract

    :param string: 

    :rtype: string|array 



Function
********

Zend\\Di\\Definition\\hasMethods
================================

.. function:: Zend\Di\Definition\hasMethods()


    Return if there are injection methods


    :param string: 

    :rtype: bool 



Function
********

Zend\\Di\\Definition\\getMethods
================================

.. function:: Zend\Di\Definition\getMethods()


    Return an array of the injection methods for a given class


    :param string: 

    :rtype: string[] 



Function
********

Zend\\Di\\Definition\\hasMethod
===============================

.. function:: Zend\Di\Definition\hasMethod()


    @abstract

    :param string: 
    :param string: 

    :rtype: bool 



Function
********

Zend\\Di\\Definition\\hasMethodParameters
=========================================

.. function:: Zend\Di\Definition\hasMethodParameters()


    @abstract

    :param $class: 
    :param $method: 

    :rtype: bool 



Function
********

Zend\\Di\\Definition\\getMethodParameters
=========================================

.. function:: Zend\Di\Definition\getMethodParameters()


    getMethodParameters() return information about a methods parameters.
    
    Should return an ordered named array of parameters for a given method.
    Each value should be an array, of length 4 with the following information:
    
    array(
        0, // string|null: Type Name (if it exists)
        1, // bool: whether this param is required
        2, // string: fully qualified path to this parameter
        3, // mixed: default value
    );


    :param string: 
    :param string: 

    :rtype: array 



