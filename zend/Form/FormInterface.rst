.. /Form/FormInterface.php generated using docpx on 01/15/13 05:29pm


BIND_ON_VALIDATE
++++++++++++++++

@category   Zend

BIND_MANUAL
+++++++++++

VALIDATE_ALL
++++++++++++

VALUES_NORMALIZED
+++++++++++++++++

VALUES_RAW
++++++++++

VALUES_AS_ARRAY
+++++++++++++++

Zend\\Form\\setData
===================

.. function:: Zend\Form\setData()


    Set data to validate and/or populate elements
    
    Typically, also passes data on to the composed input filter.

    :param array|\ArrayAccess $data: 

    :rtype: FormInterface 



Zend\\Form\\bind
================

.. function:: Zend\Form\bind()


    Bind an object to the element
    
    Allows populating the object with validated values.

    :param object $object: 
    :param int $flags: 

    :rtype: mixed 



Zend\\Form\\setBindOnValidate
=============================

.. function:: Zend\Form\setBindOnValidate()


    Whether or not to bind values to the bound object when validation succeeds

    :param int $bindOnValidateFlag: 

    :rtype: void 



Zend\\Form\\setInputFilter
==========================

.. function:: Zend\Form\setInputFilter()


    Set input filter

    :param InputFilterInterface $inputFilter: 

    :rtype: FormInterface 



Zend\\Form\\getInputFilter
==========================

.. function:: Zend\Form\getInputFilter()


    Retrieve input filter

    :rtype: InputFilterInterface 



Zend\\Form\\isValid
===================

.. function:: Zend\Form\isValid()


    Validate the form
    
    Typically, will proxy to the composed input filter.

    :rtype: bool 



Zend\\Form\\getData
===================

.. function:: Zend\Form\getData()


    Retrieve the validated data
    
    By default, retrieves normalized values; pass one of the VALUES_*
    constants to shape the behavior.

    :param int $flag: 

    :rtype: array|object 



Zend\\Form\\setValidationGroup
==============================

.. function:: Zend\Form\setValidationGroup()


    Set the validation group (set of values to validate)
    
    Typically, proxies to the composed input filter

    :rtype: FormInterface 


