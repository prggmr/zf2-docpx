.. Form/FieldsetInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Form\\add
===============

.. function:: Zend\Form\add()


    Add an element or fieldset
    
    $flags could contain metadata such as the alias under which to register
    the element or fieldset, order in which to prioritize it, etc.

    :param array|\Traversable|ElementInterface: Typically, only allow objects implementing ElementInterface;
                                                               however, keeping it flexible to allow a factory-based form
                                                               implementation as well
    :param array: 

    :rtype: FieldsetInterface 



Function
********

Zend\\Form\\has
===============

.. function:: Zend\Form\has()


    Does the fieldset have an element/fieldset by the given name?

    :param string: 

    :rtype: bool 



Function
********

Zend\\Form\\get
===============

.. function:: Zend\Form\get()


    Retrieve a named element or fieldset

    :param string: 

    :rtype: ElementInterface 



Function
********

Zend\\Form\\remove
==================

.. function:: Zend\Form\remove()


    Remove a named element or fieldset

    :param string: 

    :rtype: FieldsetInterface 



Function
********

Zend\\Form\\setPriority
=======================

.. function:: Zend\Form\setPriority()


    Set/change the priority of an element or fieldset

    :param string: 
    :param int: 

    :rtype: FieldsetInterface 



Function
********

Zend\\Form\\getElements
=======================

.. function:: Zend\Form\getElements()


    Retrieve all attached elements
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|\Traversable 



Function
********

Zend\\Form\\getFieldsets
========================

.. function:: Zend\Form\getFieldsets()


    Retrieve all attached fieldsets
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|\Traversable 



Function
********

Zend\\Form\\populateValues
==========================

.. function:: Zend\Form\populateValues()


    Recursively populate value attributes of elements

    :param array|\Traversable: 

    :rtype: void 



Function
********

Zend\\Form\\setObject
=====================

.. function:: Zend\Form\setObject()


    Set the object used by the hydrator

    :param $object: 

    :rtype: FieldsetInterface 



Function
********

Zend\\Form\\getObject
=====================

.. function:: Zend\Form\getObject()


    Get the object used by the hydrator

    :rtype: mixed 



Function
********

Zend\\Form\\allowObjectBinding
==============================

.. function:: Zend\Form\allowObjectBinding()


    Checks if the object can be set in this fieldset

    :param $object: 

    :rtype: bool 



Function
********

Zend\\Form\\setHydrator
=======================

.. function:: Zend\Form\setHydrator()


    Set the hydrator to use when binding an object to the element

    :param HydratorInterface: 

    :rtype: FieldsetInterface 



Function
********

Zend\\Form\\getHydrator
=======================

.. function:: Zend\Form\getHydrator()


    Get the hydrator used when binding an object to the element

    :rtype: null|HydratorInterface 



Function
********

Zend\\Form\\bindValues
======================

.. function:: Zend\Form\bindValues()


    Bind values to the bound object

    :param array: 

    :rtype: mixed 



Function
********

Zend\\Form\\allowValueBinding
=============================

.. function:: Zend\Form\allowValueBinding()


    Checks if this fieldset can bind data

    :rtype: bool 



