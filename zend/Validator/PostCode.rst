.. I18n/Validator/PostCode.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\Validator\\PostCode
===============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor for the PostCode validator
    
    Accepts a string locale and/or "format".

    :param array|Traversable: 



getLocale
---------

.. function:: getLocale()


    Returns the set locale

    :rtype: string|null The set locale



setLocale
---------

.. function:: setLocale()


    Sets the locale to use

    :param string|null: 

    :rtype: PostCode Provides fluid interface



getFormat
---------

.. function:: getFormat()


    Returns the set postal code format

    :rtype: string|null 



setFormat
---------

.. function:: setFormat()


    Sets a self defined postal format as regex

    :param string: 

    :rtype: PostCode Provides fluid interface



getService
----------

.. function:: getService()


    Returns the actual set service

    :rtype: mixed|null 



setService
----------

.. function:: setService()


    Sets a new callback for service validation

    :param mixed: 

    :rtype: PostCode Provides fluid interface



isValid
-------

.. function:: isValid()


    Returns true if and only if $value is a valid postalcode

    :param string: 

    :rtype: bool 

    :throws: Exception\InvalidArgumentException 





Constants
+++++++++

INVALID
=======

NO_MATCH
========

SERVICE
=======

SERVICEFAILURE
==============

