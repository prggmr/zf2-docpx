.. Form/View/Helper/FormMonthSelect.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Form\\View\\Helper\\FormMonthSelect
=========================================

Methods
-------

render
++++++

.. function:: render()


    Render a month element that is composed of two selects

    :param \Zend\Form\ElementInterface: 

    :throws \Zend\Form\Exception\InvalidArgumentException: 
    :throws \Zend\Form\Exception\DomainException: 

    :rtype: string 



__invoke
++++++++

.. function:: __invoke()


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param \Zend\Form\ElementInterface: 
    :param int: 
    :param null|string: 

    :rtype: FormDateSelect 



getPattern
++++++++++

.. function:: getPattern()


    @return string



parsePattern
++++++++++++

.. function:: parsePattern()


    Parse the pattern

    :rtype: array 



setDateType
+++++++++++

.. function:: setDateType()


    @param  int $dateType

    :rtype: FormDateSelect 



getDateType
+++++++++++

.. function:: getDateType()


    @return int



setLocale
+++++++++

.. function:: setLocale()


    @param  string $locale

    :rtype: FormDateSelect 



getLocale
+++++++++

.. function:: getLocale()


    @return string



getMonthsOptions
++++++++++++++++

.. function:: getMonthsOptions()


    Create a key => value options for months

    :param string: Pattern to use for months

    :rtype: array 



getYearsOptions
+++++++++++++++

.. function:: getYearsOptions()


    Create a key => value options for years
    NOTE: we don't use a pattern for years, as years written as two digits can lead to hard to
    read date for users, so we only use four digits years

    :param int: 
    :param int: 

    :rtype: array 



getSelectElementHelper
++++++++++++++++++++++

.. function:: getSelectElementHelper()


    Retrieve the FormSelect helper

    :rtype: FormRow 



