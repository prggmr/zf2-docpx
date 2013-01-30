.. Form/Element/Select.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Element\\Select
===========================

@copyright  Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)

Methods
-------

getValueOptions
+++++++++++++++

.. function:: getValueOptions()


    @return array



setValueOptions
+++++++++++++++

.. function:: setValueOptions()


    @param  array $options

    :rtype: Select 



setOptions
++++++++++

.. function:: setOptions()


    Set options for an element. Accepted options are:
    - label: label to associate with the element
    - label_attributes: attributes to use when the label is rendered
    - value_options: list of values and labels for the select options
    _ empty_option: should an empty option be prepended to the options ?

    :param array|\Traversable: 

    :rtype: Select|ElementInterface 

    :throws: InvalidArgumentException 



setAttribute
++++++++++++

.. function:: setAttribute()


    Set a single element attribute

    :param string: 
    :param mixed: 

    :rtype: Select|ElementInterface 



setEmptyOption
++++++++++++++

.. function:: setEmptyOption()


    Set the string for an empty option (can be empty string). If set to null, no option will be added

    :param string|null: 

    :rtype: Select 



getEmptyOption
++++++++++++++

.. function:: getEmptyOption()


    Return the string for the empty option (null if none)

    :rtype: string|null 



getValidator
++++++++++++

.. function:: getValidator()


    Get validator

    :rtype: \Zend\Validator\ValidatorInterface 



getInputSpecification
+++++++++++++++++++++

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches the captcha as a validator.

    :rtype: array 



getValueOptionsValues
+++++++++++++++++++++

.. function:: getValueOptionsValues()


    Get only the values from the options attribute

    :rtype: array 



getOptionValue
++++++++++++++

.. function:: getOptionValue()



