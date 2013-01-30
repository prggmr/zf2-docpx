.. InputFilter/InputFilterInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\InputFilter\\add
======================

.. function:: Zend\InputFilter\add()


    Add an input to the input filter

    :param InputInterface|InputFilterInterface|array: 
    :param null|string: Name used to retrieve this input

    :rtype: InputFilterInterface 



Function
********

Zend\\InputFilter\\get
======================

.. function:: Zend\InputFilter\get()


    Retrieve a named input

    :param string: 

    :rtype: InputInterface|InputFilterInterface 



Function
********

Zend\\InputFilter\\has
======================

.. function:: Zend\InputFilter\has()


    Test if an input or input filter by the given name is attached

    :param string: 

    :rtype: bool 



Function
********

Zend\\InputFilter\\remove
=========================

.. function:: Zend\InputFilter\remove()


    Remove a named input

    :param string: 

    :rtype: InputFilterInterface 



Function
********

Zend\\InputFilter\\setData
==========================

.. function:: Zend\InputFilter\setData()


    Set data to use when validating and filtering

    :param array|Traversable: 

    :rtype: InputFilterInterface 



Function
********

Zend\\InputFilter\\isValid
==========================

.. function:: Zend\InputFilter\isValid()


    Is the data set valid?

    :rtype: bool 



Function
********

Zend\\InputFilter\\setValidationGroup
=====================================

.. function:: Zend\InputFilter\setValidationGroup()


    Provide a list of one or more elements indicating the complete set to validate
    
    When provided, calls to {@link isValid()} will only validate the provided set.
    
    If the initial value is {@link VALIDATE_ALL}, the current validation group, if
    any, should be cleared.
    
    Implementations should allow passing a single array value, or multiple arguments,
    each specifying a single input.

    :param mixed: 

    :rtype: InputFilterInterface 



Function
********

Zend\\InputFilter\\getInvalidInput
==================================

.. function:: Zend\InputFilter\getInvalidInput()


    Return a list of inputs that were invalid.
    
    Implementations should return an associative array of name/input pairs
    that failed validation.

    :rtype: InputInterface[] 



Function
********

Zend\\InputFilter\\getValidInput
================================

.. function:: Zend\InputFilter\getValidInput()


    Return a list of inputs that were valid.
    
    Implementations should return an associative array of name/input pairs
    that passed validation.

    :rtype: InputInterface[] 



Function
********

Zend\\InputFilter\\getValue
===========================

.. function:: Zend\InputFilter\getValue()


    Retrieve a value from a named input

    :param string: 

    :rtype: mixed 



Function
********

Zend\\InputFilter\\getValues
============================

.. function:: Zend\InputFilter\getValues()


    Return a list of filtered values
    
    List should be an associative array, with the values filtered. If
    validation failed, this should raise an exception.

    :rtype: array 



Function
********

Zend\\InputFilter\\getRawValue
==============================

.. function:: Zend\InputFilter\getRawValue()


    Retrieve a raw (unfiltered) value from a named input

    :param string: 

    :rtype: mixed 



Function
********

Zend\\InputFilter\\getRawValues
===============================

.. function:: Zend\InputFilter\getRawValues()


    Return a list of unfiltered values
    
    List should be an associative array of named input/value pairs,
    with the values unfiltered.

    :rtype: array 



Function
********

Zend\\InputFilter\\getMessages
==============================

.. function:: Zend\InputFilter\getMessages()


    Return a list of validation failure messages
    
    Should return an associative array of named input/message list pairs.
    Pairs should only be returned for inputs that failed validation.

    :rtype: array 



VALIDATE_ALL
++++++++++++

