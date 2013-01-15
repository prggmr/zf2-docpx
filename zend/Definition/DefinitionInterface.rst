.. /Di/Definition/DefinitionInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\getClasses
================================

.. function:: Zend\Di\Definition\getClasses()


    Retrieves classes in this definition


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :rtype: string[] 



Zend\\Di\\Definition\\hasClass
==============================

.. function:: Zend\Di\Definition\hasClass()


    Return whether the class exists in this definition


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $class: 

    :rtype: bool 



Zend\\Di\\Definition\\getClassSupertypes
========================================

.. function:: Zend\Di\Definition\getClassSupertypes()


    Return the supertypes for this class


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $class: 

    :rtype: string[] 



Zend\\Di\\Definition\\getInstantiator
=====================================

.. function:: Zend\Di\Definition\getInstantiator()


    @abstract

    :param string $class: 

    :rtype: string|array 



Zend\\Di\\Definition\\hasMethods
================================

.. function:: Zend\Di\Definition\hasMethods()


    Return if there are injection methods


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $class: 

    :rtype: bool 



Zend\\Di\\Definition\\getMethods
================================

.. function:: Zend\Di\Definition\getMethods()


    Return an array of the injection methods for a given class


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $class: 

    :rtype: string[] 



Zend\\Di\\Definition\\hasMethod
===============================

.. function:: Zend\Di\Definition\hasMethod()


    @abstract

    :param string $class: 
    :param string $method: 

    :rtype: bool 



Zend\\Di\\Definition\\hasMethodParameters
=========================================

.. function:: Zend\Di\Definition\hasMethodParameters()


    @abstract

    :param $class: 
    :param $method: 

    :rtype: bool 



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


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $class: 
    :param string $method: 

    :rtype: array 



