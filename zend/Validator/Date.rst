.. Validator/Date.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Date
=====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param string|array|Traversable: OPTIONAL



getFormat
+++++++++

.. function:: getFormat()


    Returns the format option

    :rtype: string|null 



setFormat
+++++++++

.. function:: setFormat()


    Sets the format option

    :param string: 

    :rtype: Date provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if $value is a valid date of the format YYYY-MM-DD
    If optional $format is set the date format is checked
    according to DateTime

    :param string|array|int|DateTime: 

    :rtype: bool 





Constants
---------

INVALID
+++++++

INVALID_DATE
++++++++++++

FALSEFORMAT
+++++++++++

