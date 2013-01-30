.. Form/Element/DateTime.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\Element\\DateTime
=============================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Accepted options for DateTime:
    - format: A \DateTime compatible string

    :param array|\Traversable: 

    :rtype: DateTime 



getValue
++++++++

.. function:: getValue()


    Retrieve the element value
    
    If the value is a DateTime object, and $returnFormattedValue is true
    (the default), we return the string
    representation using the currently registered format.
    
    If $returnFormattedValue is false, the original value will be
    returned, regardless of type.

    :param bool: 

    :rtype: mixed 



setFormat
+++++++++

.. function:: setFormat()


    Set value for format

    :param string: 

    :rtype: DateTime 



getFormat
+++++++++

.. function:: getFormat()


    Retrieve the DateTime format to use for the value

    :rtype: string 



getValidators
+++++++++++++

.. function:: getValidators()


    Get validators

    :rtype: array 



getDateValidator
++++++++++++++++

.. function:: getDateValidator()


    Retrieves a Date Validator configured for a DateTime Input type

    :rtype: DateTime 



getStepValidator
++++++++++++++++

.. function:: getStepValidator()


    Retrieves a DateStep Validator configured for a DateTime Input type

    :rtype: DateTime 



getInputSpecification
+++++++++++++++++++++

.. function:: getInputSpecification()


    Provide default input rules for this element
    
    Attaches default validators for the datetime input.

    :rtype: array 





Constants
---------

DATETIME_FORMAT
+++++++++++++++

