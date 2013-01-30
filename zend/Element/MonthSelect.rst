.. Form/Element/MonthSelect.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\Element\\MonthSelect
================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor. Add two selects elements

    :param null|int|string: Optional name for the element
    :param array: Optional options for the element



setOptions
----------

.. function:: setOptions()


    Accepted options for DateSelect:
    - month_attributes: HTML attributes to be rendered with the month element
    - year_attributes: HTML attributes to be rendered with the month element
    - min_year: min year to use in the year select
    - max_year: max year to use in the year select

    :param array|\Traversable: 

    :rtype: MonthSelect 



getMonthElement
---------------

.. function:: getMonthElement()


    @return Select



getYearElement
--------------

.. function:: getYearElement()


    @return Select



setMonthAttributes
------------------

.. function:: setMonthAttributes()


    Set the month attributes

    :param array: 

    :rtype: MonthSelect 



getMonthAttributes
------------------

.. function:: getMonthAttributes()


    Get the month attributes

    :rtype: array 



setYearAttributes
-----------------

.. function:: setYearAttributes()


    Set the year attributes

    :param array: 

    :rtype: MonthSelect 



getYearAttributes
-----------------

.. function:: getYearAttributes()


    Get the year attributes

    :rtype: array 



setMinYear
----------

.. function:: setMinYear()


    @param  int $minYear

    :rtype: MonthSelect 



getMinYear
----------

.. function:: getMinYear()


    @return int



setMaxYear
----------

.. function:: setMaxYear()


    @param  int $maxYear

    :rtype: MonthSelect 



getMaxYear
----------

.. function:: getMaxYear()


    @return int



setShouldCreateEmptyOption
--------------------------

.. function:: setShouldCreateEmptyOption()


    @param  bool $createEmptyOption

    :rtype: MonthSelect 



shouldCreateEmptyOption
-----------------------

.. function:: shouldCreateEmptyOption()


    @return bool



setValue
--------

.. function:: setValue()


    @param mixed $value

    :rtype: void|\Zend\Form\Element 



prepareElement
--------------

.. function:: prepareElement()


    Prepare the form element (mostly used for rendering purposes)

    :param FormInterface: 

    :rtype: mixed 



getValidator
------------

.. function:: getValidator()


    Get validator

    :rtype: ValidatorInterface 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Should return an array specification compatible with
    {@link Zend\InputFilter\Factory::createInput()}.

    :rtype: array 



__clone
-------

.. function:: __clone()


    Clone the element (this is needed by Collection element, as it needs different copies of the elements)



