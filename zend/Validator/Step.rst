.. Validator/Step.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Step
=====================

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

    :param mixed: 

    :rtype: Step 



getBaseValue
++++++++++++

.. function:: getBaseValue()


    Returns the base value from which the step should be computed

    :rtype: string 



setStep
+++++++

.. function:: setStep()


    Sets the step value

    :param mixed: 

    :rtype: Step 



getStep
+++++++

.. function:: getStep()


    Returns the step value

    :rtype: string 



isValid
+++++++

.. function:: isValid()


    Returns true if $value is a scalar and a valid step value

    :param mixed: 

    :rtype: bool 



fmod
++++

.. function:: fmod()


    replaces the internal fmod function which give wrong results on many cases

    :param float: 
    :param float: 

    :rtype: float 





Constants
---------

INVALID
+++++++

NOT_STEP
++++++++

