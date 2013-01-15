.. /Form/Element/MultiCheckbox.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element\\MultiCheckbox
**********************************


@category   Zend



Methods
=======

getValueOptions
---------------

.. function:: getValueOptions()


    @return array



setValueOptions
---------------

.. function:: setValueOptions($options)


    @param  array $options

    :rtype: MultiCheckbox 



setOptions
----------

.. function:: setOptions($options)


    Set options for an element. Accepted options are:
    - label: label to associate with the element
    - label_attributes: attributes to use when the label is rendered
    - value_options: list of values and labels for the select options

    :param array|\Traversable $options: 

    :rtype: MultiCheckbox|ElementInterface 

    :throws: InvalidArgumentException 



setAttribute
------------

.. function:: setAttribute($key, $value)


    Set a single element attribute

    :param string $key: 
    :param mixed $value: 

    :rtype: MultiCheckbox|ElementInterface 



getValidator
------------

.. function:: getValidator()


    Get validator

    :rtype: ValidatorInterface 



getValueOptionsValues
---------------------

.. function:: getValueOptionsValues()


    Get only the values from the options attribute

    :rtype: array 



setValue
--------

.. function:: setValue($value)


    Sets the value that should be selected.

    :param mixed $value: The value to set.

    :rtype: MultiCheckbox 





