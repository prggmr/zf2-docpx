.. /Form/FieldsetInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\add
===============

.. function:: Zend\Form\add()


    Add an element or fieldset
    
    $flags could contain metadata such as the alias under which to register
    the element or fieldset, order in which to prioritize it, etc.

    :param array|\Traversable|ElementInterface $elementOrFieldset: Typically, only allow objects implementing ElementInterface;
                                                               however, keeping it flexible to allow a factory-based form
                                                               implementation as well
    :param array $flags: 

    :rtype: FieldsetInterface 



Zend\\Form\\has
===============

.. function:: Zend\Form\has()


    Does the fieldset have an element/fieldset by the given name?

    :param string $elementOrFieldset: 

    :rtype: bool 



Zend\\Form\\get
===============

.. function:: Zend\Form\get()


    Retrieve a named element or fieldset

    :param string $elementOrFieldset: 

    :rtype: ElementInterface 



Zend\\Form\\remove
==================

.. function:: Zend\Form\remove()


    Remove a named element or fieldset

    :param string $elementOrFieldset: 

    :rtype: FieldsetInterface 



Zend\\Form\\setPriority
=======================

.. function:: Zend\Form\setPriority()


    Set/change the priority of an element or fieldset

    :param string $elementOrFieldset: 
    :param int $priority: 

    :rtype: FieldsetInterface 



Zend\\Form\\getElements
=======================

.. function:: Zend\Form\getElements()


    Retrieve all attached elements
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|\Traversable 



Zend\\Form\\getFieldsets
========================

.. function:: Zend\Form\getFieldsets()


    Retrieve all attached fieldsets
    
    Storage is an implementation detail of the concrete class.

    :rtype: array|\Traversable 



Zend\\Form\\populateValues
==========================

.. function:: Zend\Form\populateValues()


    Recursively populate value attributes of elements

    :param array|\Traversable $data: 

    :rtype: void 



Zend\\Form\\setObject
=====================

.. function:: Zend\Form\setObject()


    Set the object used by the hydrator

    :param $object: 

    :rtype: FieldsetInterface 



Zend\\Form\\getObject
=====================

.. function:: Zend\Form\getObject()


    Get the object used by the hydrator

    :rtype: mixed 



Zend\\Form\\allowObjectBinding
==============================

.. function:: Zend\Form\allowObjectBinding()


    Checks if the object can be set in this fieldset

    :param $object: 

    :rtype: bool 



Zend\\Form\\setHydrator
=======================

.. function:: Zend\Form\setHydrator()


    Set the hydrator to use when binding an object to the element

    :param HydratorInterface $hydrator: 

    :rtype: FieldsetInterface 



Zend\\Form\\getHydrator
=======================

.. function:: Zend\Form\getHydrator()


    Get the hydrator used when binding an object to the element

    :rtype: null|HydratorInterface 



Zend\\Form\\bindValues
======================

.. function:: Zend\Form\bindValues()


    Bind values to the bound object

    :param array $values: 

    :rtype: mixed 



Zend\\Form\\allowValueBinding
=============================

.. function:: Zend\Form\allowValueBinding()


    Checks if this fieldset can bind data

    :rtype: bool 



