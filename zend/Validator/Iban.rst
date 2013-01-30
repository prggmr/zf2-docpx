.. Validator/Iban.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Iban
=====================

Validates IBAN Numbers (International Bank Account Numbers)

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param array|Traversable: OPTIONAL



getCountryCode
++++++++++++++

.. function:: getCountryCode()


    Returns the optional country code by ISO 3166-1

    :rtype: string|null 



setCountryCode
++++++++++++++

.. function:: setCountryCode()


    Sets an optional country code by ISO 3166-1

    :param string|null: 

    :rtype: Iban provides a fluent interface

    :throws: Exception\InvalidArgumentException 



allowNonSepa
++++++++++++

.. function:: allowNonSepa()


    Returns the optional allow non-sepa countries setting

    :rtype: bool 



setAllowNonSepa
+++++++++++++++

.. function:: setAllowNonSepa()


    Sets the optional allow non-sepa countries setting

    :param bool: 

    :rtype: Iban provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if $value is a valid IBAN

    :param string: 

    :rtype: bool 





Constants
---------

NOTSUPPORTED
++++++++++++

SEPANOTSUPPORTED
++++++++++++++++

FALSEFORMAT
+++++++++++

CHECKFAILED
+++++++++++

