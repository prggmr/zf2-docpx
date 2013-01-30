.. Validator/Isbn.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\Isbn
=====================

Methods
+++++++

detectFormat
------------

.. function:: detectFormat()


    Detect input format.

    :rtype: string 



isValid
-------

.. function:: isValid()


    Returns true if and only if $value is a valid ISBN.

    :param string: 

    :rtype: bool 



setSeparator
------------

.. function:: setSeparator()


    Set separator characters.
    
    It is allowed only empty string, hyphen and space.

    :param string: 

    :throws Exception\InvalidArgumentException: When $separator is not valid

    :rtype: Isbn Provides a fluent interface



getSeparator
------------

.. function:: getSeparator()


    Get separator characters.

    :rtype: string 



setType
-------

.. function:: setType()


    Set allowed ISBN type.

    :param string: 

    :throws Exception\InvalidArgumentException: When $type is not valid

    :rtype: Isbn Provides a fluent interface



getType
-------

.. function:: getType()


    Get allowed ISBN type.

    :rtype: string 





Constants
+++++++++

AUTO
====

ISBN10
======

ISBN13
======

INVALID
=======

NO_ISBN
=======

