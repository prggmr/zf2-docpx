.. Form/View/Helper/FormDateTimeSelect.php generated using docpx on 01/30/13 03:32am


Zend\\Form\\View\\Helper\\FormDateTimeSelect
============================================

Methods
+++++++

render
------

.. function:: render()


    Render a date element that is composed of six selects

    :param ElementInterface: 

    :throws \Zend\Form\Exception\InvalidArgumentException: 
    :throws \Zend\Form\Exception\DomainException: 

    :rtype: string 



__invoke
--------

.. function:: __invoke()


    Invoke helper as function
    
    Proxies to {@link render()}.

    :param \Zend\Form\ElementInterface: 
    :param int: 
    :param int|null|string: 
    :param null|string: 

    :rtype: string 



setTimeType
-----------

.. function:: setTimeType()


    @param  int $timeType

    :rtype: FormDateTimeSelect 



getTimeType
-----------

.. function:: getTimeType()


    @return int



getPattern
----------

.. function:: getPattern()


    Override to also get time part

    :rtype: string 



parsePattern
------------

.. function:: parsePattern()


    Parse the pattern

    :rtype: array 



getHoursOptions
---------------

.. function:: getHoursOptions()


    Create a key => value options for hours

    :param string: Pattern to use for hours

    :rtype: array 



getMinutesOptions
-----------------

.. function:: getMinutesOptions()


    Create a key => value options for minutes

    :param string: Pattern to use for minutes

    :rtype: array 



getSecondsOptions
-----------------

.. function:: getSecondsOptions()


    Create a key => value options for seconds

    :param string: Pattern to use for seconds

    :rtype: array 



