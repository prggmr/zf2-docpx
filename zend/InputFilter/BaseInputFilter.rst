.. InputFilter/BaseInputFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\InputFilter\\BaseInputFilter
==================================

@todo       How should we deal with required input when data is missing?
            should a message be returned? if so, what message?

Methods
-------

count
+++++

.. function:: count()


    Countable: number of inputs in this input filter
    
    Only details the number of direct children.

    :rtype: int 



add
+++

.. function:: add()


    Add an input to the input filter

    :param InputInterface|InputFilterInterface: 
    :param null|string: Name used to retrieve this input

    :throws Exception\InvalidArgumentException: 

    :rtype: InputFilterInterface 



get
+++

.. function:: get()


    Retrieve a named input

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: InputInterface|InputFilterInterface 



has
+++

.. function:: has()


    Test if an input or input filter by the given name is attached

    :param string: 

    :rtype: bool 



remove
++++++

.. function:: remove()


    Remove a named input

    :param string: 

    :rtype: InputFilterInterface 



setData
+++++++

.. function:: setData()


    Set data to use when validating and filtering

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: InputFilterInterface 



isValid
+++++++

.. function:: isValid()


    Is the data set valid?


    :rtype: bool 



setValidationGroup
++++++++++++++++++

.. function:: setValidationGroup()


    Provide a list of one or more elements indicating the complete set to validate
    
    When provided, calls to {@link isValid()} will only validate the provided set.
    
    If the initial value is {@link VALIDATE_ALL}, the current validation group, if
    any, should be cleared.
    
    Implementations should allow passing a single array value, or multiple arguments,
    each specifying a single input.

    :param mixed: 

    :rtype: InputFilterInterface 



getInvalidInput
+++++++++++++++

.. function:: getInvalidInput()


    Return a list of inputs that were invalid.
    
    Implementations should return an associative array of name/input pairs
    that failed validation.

    :rtype: InputInterface[] 



getValidInput
+++++++++++++

.. function:: getValidInput()


    Return a list of inputs that were valid.
    
    Implementations should return an associative array of name/input pairs
    that passed validation.

    :rtype: InputInterface[] 



getValue
++++++++

.. function:: getValue()


    Retrieve a value from a named input

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



getValues
+++++++++

.. function:: getValues()


    Return a list of filtered values
    
    List should be an associative array, with the values filtered. If
    validation failed, this should raise an exception.

    :rtype: array 



getRawValue
+++++++++++

.. function:: getRawValue()


    Retrieve a raw (unfiltered) value from a named input

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



getRawValues
++++++++++++

.. function:: getRawValues()


    Return a list of unfiltered values
    
    List should be an associative array of named input/value pairs,
    with the values unfiltered.

    :rtype: array 



getMessages
+++++++++++

.. function:: getMessages()


    Return a list of validation failure messages
    
    Should return an associative array of named input/message list pairs.
    Pairs should only be returned for inputs that failed validation.

    :rtype: array 



validateValidationGroup
+++++++++++++++++++++++

.. function:: validateValidationGroup()


    Ensure all names of a validation group exist as input in the filter

    :param array: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



populate
++++++++

.. function:: populate()


    Populate the values of all attached inputs

    :rtype: void 



hasUnknown
++++++++++

.. function:: hasUnknown()


    Is the data set has unknown input ?


    :rtype: bool 



getUnknown
++++++++++

.. function:: getUnknown()


    Return the unknown input


    :rtype: array 



