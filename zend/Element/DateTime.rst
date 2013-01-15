.. /Form/Element/DateTime.php generated using docpx on 01/15/13 05:29pm


Zend\\Form\\Element\\DateTime
*****************************


@category   Zend



Methods
=======

getValue
--------

.. function:: getValue([$returnFormattedValue = true])


    Retrieve the element value
    
    If the value is a DateTime object, and $returnFormattedValue is true
    (the default), we return the string
    representation using the currently registered format.
    
    If $returnFormattedValue is false, the original value will be
    returned, regardless of type.

    :param bool $returnFormattedValue: 

    :rtype: mixed 



setFormat
---------

.. function:: setFormat($format)


    Set value for format

    :param string $format: 

    :rtype: DateTime 



getFormat
---------

.. function:: getFormat()


    Retrieve the DateTime format to use for the value

    :rtype: string 



getValidators
-------------

.. function:: getValidators()


    Get validators

    :rtype: array 



getDateValidator
----------------

.. function:: getDateValidator()


    Retrieves a Date Validator configured for a DateTime Input type

    :rtype: DateTime 



getStepValidator
----------------

.. function:: getStepValidator()


    Retrieves a DateStep Validator configured for a DateTime Input type

    :rtype: DateTime 



getInputSpecification
---------------------

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches default validators for the datetime input.

    :rtype: array 





Constants
---------

DATETIME_FORMAT
+++++++++++++++

