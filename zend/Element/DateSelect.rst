.. Form/Element/DateSelect.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Element\\DateSelect
===============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor. Add the day select element

    :param null|int|string: Optional name for the element
    :param array: Optional options for the element



setOptions
++++++++++

.. function:: setOptions()


    Accepted options for DateSelect (plus the ones from MonthSelect) :
    - day_attributes: HTML attributes to be rendered with the day element

    :param array|\Traversable: 

    :rtype: DateSelect 



getDayElement
+++++++++++++

.. function:: getDayElement()


    @return Select



setDayAttributes
++++++++++++++++

.. function:: setDayAttributes()


    Set the day attributes

    :param array: 

    :rtype: DateSelect 



getDayAttributes
++++++++++++++++

.. function:: getDayAttributes()


    Get the day attributes

    :rtype: array 



setValue
++++++++

.. function:: setValue()


    @param  string|array|ArrayAccess|PhpDateTime $value


    :rtype: void|\Zend\Form\Element 



prepareElement
++++++++++++++

.. function:: prepareElement()


    Prepare the form element (mostly used for rendering purposes)

    :param FormInterface: 

    :rtype: mixed 



getValidator
++++++++++++

.. function:: getValidator()


    Get validator

    :rtype: ValidatorInterface 



getInputSpecification
+++++++++++++++++++++

.. function:: getInputSpecification()


    Should return an array specification compatible with
    {@link Zend\InputFilter\Factory::createInput()}.

    :rtype: array 



__clone
+++++++

.. function:: __clone()


    Clone the element (this is needed by Collection element, as it needs different copies of the elements)



