.. /Form/Element/Checkbox.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element\\Checkbox
*****************************


@category   Zend



Methods
=======

setOptions
----------

.. function:: setOptions($options)


    Accepted options for MultiCheckbox:
    - use_hidden_element: do we render hidden element?
    - unchecked_value: value for checkbox when unchecked
    - checked_value: value for checkbox when checked

    :param array|\Traversable $options: 

    :rtype: Checkbox 



setUseHiddenElement
-------------------

.. function:: setUseHiddenElement($useHiddenElement)


    Do we render hidden element?

    :param bool $useHiddenElement: 

    :rtype: Checkbox 



useHiddenElement
----------------

.. function:: useHiddenElement()


    Do we render hidden element?

    :rtype: bool 



setUncheckedValue
-----------------

.. function:: setUncheckedValue($uncheckedValue)


    Set the value to use when checkbox is unchecked

    :param $uncheckedValue: 

    :rtype: Checkbox 



getUncheckedValue
-----------------

.. function:: getUncheckedValue()


    Get the value to use when checkbox is unchecked

    :rtype: string 



setCheckedValue
---------------

.. function:: setCheckedValue($checkedValue)


    Set the value to use when checkbox is checked

    :param $checkedValue: 

    :rtype: Checkbox 



getCheckedValue
---------------

.. function:: getCheckedValue()


    Get the value to use when checkbox is checked

    :rtype: string 



getValidator
------------

.. function:: getValidator()


    Get validator

    :rtype: \Zend\Validator\ValidatorInterface 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches the captcha as a validator.

    :rtype: array 



isChecked
---------

.. function:: isChecked()


    Checks if this checkbox is checked.

    :rtype: bool 



setChecked
----------

.. function:: setChecked($value)


    Checks or unchecks the checkbox.

    :param bool $value: The flag to set.

    :rtype: Checkbox 



setValue
--------

.. function:: setValue($value)


    Checks or unchecks the checkbox.

    :param mixed $value: A boolean flag or string that is checked against the "checked value".

    :rtype: Element 





