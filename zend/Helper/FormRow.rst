.. /Form/View/Helper/FormRow.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\View\\Helper\\FormRow
*********************************


@category   Zend



Methods
=======

render
------

.. function:: render($element)


    Utility form helper that renders a label (if it exists), an element and errors

    :param ElementInterface $element: 

    :rtype: string 

    :throws: \Zend\Form\Exception\DomainException 



__invoke
--------

.. function:: __invoke([$element = false, [$labelPosition = false, [$renderErrors = false]]])


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param null|ElementInterface $element: 
    :param null|string $labelPosition: 
    :param bool $renderErrors: 

    :rtype: string|FormRow 



setLabelPosition
----------------

.. function:: setLabelPosition($labelPosition)


    Set the label position

    :param $labelPosition: 

    :rtype: FormRow 

    :throws: \Zend\Form\Exception\InvalidArgumentException 



getLabelPosition
----------------

.. function:: getLabelPosition()


    Get the label position

    :rtype: string 



setRenderErrors
---------------

.. function:: setRenderErrors($renderErrors)


    Are the errors rendered by this helper ?

    :param bool $renderErrors: 

    :rtype: FormRow 



getRenderErrors
---------------

.. function:: getRenderErrors()


    @return bool



setLabelAttributes
------------------

.. function:: setLabelAttributes($labelAttributes)


    Set the attributes for the row label

    :param array $labelAttributes: 

    :rtype: FormRow 



getLabelAttributes
------------------

.. function:: getLabelAttributes()


    Get the attributes for the row label

    :rtype: array 



setInputErrorClass
------------------

.. function:: setInputErrorClass($inputErrorClass)


    Set the class that is added to element that have errors

    :param string $inputErrorClass: 

    :rtype: FormRow 



getInputErrorClass
------------------

.. function:: getInputErrorClass()


    Get the class that is added to element that have errors

    :rtype: string 



getLabelHelper
--------------

.. function:: getLabelHelper()


    Retrieve the FormLabel helper

    :rtype: FormLabel 



getElementHelper
----------------

.. function:: getElementHelper()


    Retrieve the FormElement helper

    :rtype: FormElement 



getElementErrorsHelper
----------------------

.. function:: getElementErrorsHelper()


    Retrieve the FormElementErrors helper

    :rtype: FormElementErrors 





Constants
---------

LABEL_APPEND
++++++++++++

LABEL_PREPEND
+++++++++++++

