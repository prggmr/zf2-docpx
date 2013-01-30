.. Form/View/Helper/FormRow.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormRow
=================================

Methods
-------

render
++++++

.. function:: render()


    Utility form helper that renders a label (if it exists), an element and errors

    :param ElementInterface: 

    :rtype: string 

    :throws: \Zend\Form\Exception\DomainException 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as functor
    
    Proxies to {@link render()}.

    :param null|ElementInterface: 
    :param null|string: 
    :param bool: 

    :rtype: string|FormRow 



setLabelPosition
++++++++++++++++

.. function:: setLabelPosition()


    Set the label position

    :param $labelPosition: 

    :rtype: FormRow 

    :throws: \Zend\Form\Exception\InvalidArgumentException 



getLabelPosition
++++++++++++++++

.. function:: getLabelPosition()


    Get the label position

    :rtype: string 



setRenderErrors
+++++++++++++++

.. function:: setRenderErrors()


    Are the errors rendered by this helper ?

    :param bool: 

    :rtype: FormRow 



getRenderErrors
+++++++++++++++

.. function:: getRenderErrors()


    @return bool



setLabelAttributes
++++++++++++++++++

.. function:: setLabelAttributes()


    Set the attributes for the row label

    :param array: 

    :rtype: FormRow 



getLabelAttributes
++++++++++++++++++

.. function:: getLabelAttributes()


    Get the attributes for the row label

    :rtype: array 



setInputErrorClass
++++++++++++++++++

.. function:: setInputErrorClass()


    Set the class that is added to element that have errors

    :param string: 

    :rtype: FormRow 



getInputErrorClass
++++++++++++++++++

.. function:: getInputErrorClass()


    Get the class that is added to element that have errors

    :rtype: string 



getLabelHelper
++++++++++++++

.. function:: getLabelHelper()


    Retrieve the FormLabel helper

    :rtype: FormLabel 



getElementHelper
++++++++++++++++

.. function:: getElementHelper()


    Retrieve the FormElement helper

    :rtype: FormElement 



getElementErrorsHelper
++++++++++++++++++++++

.. function:: getElementErrorsHelper()


    Retrieve the FormElementErrors helper

    :rtype: FormElementErrors 





Constants
---------

LABEL_APPEND
++++++++++++

LABEL_PREPEND
+++++++++++++

