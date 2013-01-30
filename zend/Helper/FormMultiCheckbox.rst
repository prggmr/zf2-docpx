.. Form/View/Helper/FormMultiCheckbox.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormMultiCheckbox
===========================================

Methods
-------

setLabelPosition
++++++++++++++++

.. function:: setLabelPosition()


    Set value for labelPosition

    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: $this 



getLabelPosition
++++++++++++++++

.. function:: getLabelPosition()


    Get position of label

    :rtype: string 



setSeparator
++++++++++++

.. function:: setSeparator()


    Set separator string for checkbox elements

    :param string: 

    :rtype: FormMultiCheckbox 



getSeparator
++++++++++++

.. function:: getSeparator()


    Get separator for checkbox elements

    :rtype: string 



setLabelAttributes
++++++++++++++++++

.. function:: setLabelAttributes()


    Sets the attributes applied to option label.

    :param array|null: 

    :rtype: FormMultiCheckbox 



getLabelAttributes
++++++++++++++++++

.. function:: getLabelAttributes()


    Returns the attributes applied to each option label.

    :rtype: array|null 



getUseHiddenElement
+++++++++++++++++++

.. function:: getUseHiddenElement()


    Returns the option for prefixing the element with a hidden element
    for the unset value.

    :rtype: bool 



setUseHiddenElement
+++++++++++++++++++

.. function:: setUseHiddenElement()


    Sets the option for prefixing the element with a hidden element
    for the unset value.

    :param bool: 

    :rtype: FormMultiCheckbox 



getUncheckedValue
+++++++++++++++++

.. function:: getUncheckedValue()


    Returns the unchecked value used when "UseHiddenElement" is turned on.

    :rtype: string 



setUncheckedValue
+++++++++++++++++

.. function:: setUncheckedValue()


    Sets the unchecked value used when "UseHiddenElement" is turned on.

    :param bool: 

    :rtype: FormMultiCheckbox 



render
++++++

.. function:: render()


    Render a form <input> element from the provided $element

    :param ElementInterface: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: string 



renderOptions
+++++++++++++

.. function:: renderOptions()


    Render options

    :param MultiCheckboxElement: 
    :param array: 
    :param array: 
    :param array: 

    :rtype: string 



renderHiddenElement
+++++++++++++++++++

.. function:: renderHiddenElement()


    Render a hidden element for empty/unchecked value

    :param MultiCheckboxElement: 
    :param array: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param ElementInterface|null: 
    :param null|string: 

    :rtype: string|FormMultiCheckbox 



getInputType
++++++++++++

.. function:: getInputType()


    Return input type

    :rtype: string 



getInputHelper
++++++++++++++

.. function:: getInputHelper()


    Retrieve the FormInput helper

    :rtype: FormInput 



getLabelHelper
++++++++++++++

.. function:: getLabelHelper()


    Retrieve the FormLabel helper

    :rtype: FormLabel 



getName
+++++++

.. function:: getName()


    Get element name

    :param ElementInterface: 

    :throws Exception\DomainException: 

    :rtype: string 





Constants
---------

LABEL_APPEND
++++++++++++

LABEL_PREPEND
+++++++++++++

