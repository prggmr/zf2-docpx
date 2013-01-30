.. Form/Element/MultiCheckbox.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Element\\MultiCheckbox
==================================

Methods
+++++++

getValueOptions
---------------

.. function:: getValueOptions()


    @return array



setValueOptions
---------------

.. function:: setValueOptions()


    @param  array $options

    :rtype: MultiCheckbox 



setOptions
----------

.. function:: setOptions()


    Set options for an element. Accepted options are:
    - label: label to associate with the element
    - label_attributes: attributes to use when the label is rendered
    - value_options: list of values and labels for the select options

    :param array|\Traversable: 

    :rtype: MultiCheckbox|ElementInterface 

    :throws: InvalidArgumentException 



setAttribute
------------

.. function:: setAttribute()


    Set a single element attribute

    :param string: 
    :param mixed: 

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

.. function:: setValue()


    Sets the value that should be selected.

    :param mixed: The value to set.

    :rtype: MultiCheckbox 



