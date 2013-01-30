.. Validator/DateStep.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\DateStep
=========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Set default options for this instance

    :param array: 



setBaseValue
++++++++++++

.. function:: setBaseValue()


    Sets the base value from which the step should be computed

    :param string|integer|\DateTime: 

    :rtype: DateStep 



getBaseValue
++++++++++++

.. function:: getBaseValue()


    Returns the base value from which the step should be computed

    :rtype: string|integer|\DateTime 



setStep
+++++++

.. function:: setStep()


    Sets the step date interval

    :param DateInterval: 

    :rtype: DateStep 



getStep
+++++++

.. function:: getStep()


    Returns the step date interval

    :rtype: DateInterval 



getTimezone
+++++++++++

.. function:: getTimezone()


    Returns the timezone option

    :rtype: DateTimeZone 



setTimezone
+++++++++++

.. function:: setTimezone()


    Sets the timezone option

    :param DateTimeZone: 

    :rtype: DateStep 



convertToDateTime
+++++++++++++++++

.. function:: convertToDateTime()


    Converts an int or string to a DateTime object

    :param string|integer|\DateTime: 

    :rtype: \DateTime 

    :throws: Exception\InvalidArgumentException 



isValid
+++++++

.. function:: isValid()


    Returns true if a date is within a valid step

    :param string|integer|\DateTime: 

    :rtype: bool 

    :throws: Exception\InvalidArgumentException 





Constants
---------

NOT_STEP
++++++++

