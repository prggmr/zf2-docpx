.. /Form/View/Helper/FormMultiCheckbox.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormMultiCheckbox
*******************************************


@category   Zend



Methods
=======

setLabelPosition
----------------

.. function:: setLabelPosition($labelPosition)


    Set value for labelPosition

    :param mixed $labelPosition: 

    :throws Exception\InvalidArgumentException: 

    :rtype: $this 



getLabelPosition
----------------

.. function:: getLabelPosition()


    Get position of label

    :rtype: string 



setSeparator
------------

.. function:: setSeparator($separator)


    Set separator string for checkbox elements

    :param string $separator: 

    :rtype: FormMultiCheckbox 



getSeparator
------------

.. function:: getSeparator()


    Get separator for checkbox elements

    :rtype: string 



setLabelAttributes
------------------

.. function:: setLabelAttributes($attributes)


    Sets the attributes applied to option label.

    :param array|null $attributes: 

    :rtype: FormMultiCheckbox 



getLabelAttributes
------------------

.. function:: getLabelAttributes()


    Returns the attributes applied to each option label.

    :rtype: array|null 



getUseHiddenElement
-------------------

.. function:: getUseHiddenElement()


    Returns the option for prefixing the element with a hidden element
    for the unset value.

    :rtype: bool 



setUseHiddenElement
-------------------

.. function:: setUseHiddenElement($useHiddenElement)


    Sets the option for prefixing the element with a hidden element
    for the unset value.

    :param bool $useHiddenElement: 

    :rtype: FormMultiCheckbox 



getUncheckedValue
-----------------

.. function:: getUncheckedValue()


    Returns the unchecked value used when "UseHiddenElement" is turned on.

    :rtype: string 



setUncheckedValue
-----------------

.. function:: setUncheckedValue($value)


    Sets the unchecked value used when "UseHiddenElement" is turned on.

    :param bool $value: 

    :rtype: FormMultiCheckbox 



render
------

.. function:: render($element)


    Render a form <input> element from the provided $element

    :param ElementInterface $element: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



renderOptions
-------------

.. function:: renderOptions($element, $options, $selectedOptions, $attributes)


    Render options

    :param MultiCheckboxElement $element: 
    :param array $options: 
    :param array $selectedOptions: 
    :param array $attributes: 

    :rtype: string 



renderHiddenElement
-------------------

.. function:: renderHiddenElement($element, $attributes)


    Render a hidden element for empty/unchecked value

    :param MultiCheckboxElement $element: 
    :param array $attributes: 

    :rtype: string 



__invoke
--------

.. function:: __invoke([$element = false, [$labelPosition = false]])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null $element: 
    :param null|string $labelPosition: 

    :rtype: string|FormMultiCheckbox 



getInputType
------------

.. function:: getInputType()


    Return input type

    :rtype: string 



getInputHelper
--------------

.. function:: getInputHelper()


    Retrieve the FormInput helper

    :rtype: FormInput 



getLabelHelper
--------------

.. function:: getLabelHelper()


    Retrieve the FormLabel helper

    :rtype: FormLabel 



getName
-------

.. function:: getName($element)


    Get element name

    :param ElementInterface $element: 

    :throws Exception\DomainException: 

    :rtype: string 





Constants
---------

LABEL_APPEND
++++++++++++

LABEL_PREPEND
+++++++++++++

