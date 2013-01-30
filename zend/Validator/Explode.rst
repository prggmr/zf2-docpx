.. Validator/Explode.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Explode
========================

Methods
-------

setValueDelimiter
+++++++++++++++++

.. function:: setValueDelimiter()


    Sets the delimiter string that the values will be split upon

    :param string: 

    :rtype: Explode 



getValueDelimiter
+++++++++++++++++

.. function:: getValueDelimiter()


    Returns the delimiter string that the values will be split upon

    :rtype: string 



setValidator
++++++++++++

.. function:: setValidator()


    Sets the Validator for validating each value

    :param ValidatorInterface: 

    :rtype: Explode 



getValidator
++++++++++++

.. function:: getValidator()


    Gets the Validator for validating each value

    :rtype: ValidatorInterface 



setBreakOnFirstFailure
++++++++++++++++++++++

.. function:: setBreakOnFirstFailure()


    Set break on first failure setting

    :param bool: 

    :rtype: Explode 



isBreakOnFirstFailure
+++++++++++++++++++++

.. function:: isBreakOnFirstFailure()


    Get break on first failure setting

    :rtype: bool 



isValid
+++++++

.. function:: isValid()


    Defined by Zend\Validator\ValidatorInterface
    
    Returns true if all values validate true

    :param mixed: 

    :rtype: bool 

    :throws: Exception\RuntimeException 





Constants
---------

INVALID
+++++++

