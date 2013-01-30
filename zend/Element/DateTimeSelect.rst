.. Form/Element/DateTimeSelect.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\Element\\DateTimeSelect
===================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor. Add the hour, minute and second select elements

    :param null|int|string: Optional name for the element
    :param array: Optional options for the element



setOptions
++++++++++

.. function:: setOptions()


    Accepted options for DateTimeSelect (plus the ones from DateSelect) :
    - hour_attributes: HTML attributes to be rendered with the hour element
    - minute_attributes: HTML attributes to be rendered with the minute element
    - second_attributes: HTML attributes to be rendered with the second element
    - should_show_seconds: if set to true, the seconds select is shown

    :param array|\Traversable: 

    :rtype: DateSelect 



getHourElement
++++++++++++++

.. function:: getHourElement()


    @return Select



getMinuteElement
++++++++++++++++

.. function:: getMinuteElement()


    @return Select



getSecondElement
++++++++++++++++

.. function:: getSecondElement()


    @return Select



setHourAttributes
+++++++++++++++++

.. function:: setHourAttributes()


    Set the hour attributes

    :param array: 

    :rtype: DateSelect 



getHourAttributes
+++++++++++++++++

.. function:: getHourAttributes()


    Get the hour attributes

    :rtype: array 



setMinuteAttributes
+++++++++++++++++++

.. function:: setMinuteAttributes()


    Set the minute attributes

    :param array: 

    :rtype: DateSelect 



getMinuteAttributes
+++++++++++++++++++

.. function:: getMinuteAttributes()


    Get the minute attributes

    :rtype: array 



setSecondAttributes
+++++++++++++++++++

.. function:: setSecondAttributes()


    Set the second attributes

    :param array: 

    :rtype: DateSelect 



getSecondAttributes
+++++++++++++++++++

.. function:: getSecondAttributes()


    Get the second attributes

    :rtype: array 



setShouldShowSeconds
++++++++++++++++++++

.. function:: setShouldShowSeconds()


    If set to true, this indicate that the second select is shown. If set to true, the seconds will be
    assumed to always be 00

    :param bool: 

    :rtype: DateTimeSelect 



shouldShowSeconds
+++++++++++++++++

.. function:: shouldShowSeconds()


    @return bool



setValue
++++++++

.. function:: setValue()


    @param mixed $value


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



