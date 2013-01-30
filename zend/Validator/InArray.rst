.. Validator/InArray.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\InArray
========================

Methods
-------

getHaystack
+++++++++++

.. function:: getHaystack()


    Returns the haystack option

    :rtype: mixed 

    :throws: Exception\RuntimeException if haystack option is not set



setHaystack
+++++++++++

.. function:: setHaystack()


    Sets the haystack option

    :param mixed: 

    :rtype: InArray Provides a fluent interface



getStrict
+++++++++

.. function:: getStrict()


    Returns the strict option

    :rtype: bool|int 



setStrict
+++++++++

.. function:: setStrict()


    Sets the strict option mode
    InArray::CHECK_STRICT | InArray::CHECK_NOT_STRICT_AND_PREVENT_STR_TO_INT_VULNERABILITY | InArray::CHECK_NOT_STRICT

    :param int: 

    :rtype: InArray Provides a fluent interface

    :throws: Exception\InvalidArgumentException 



getRecursive
++++++++++++

.. function:: getRecursive()


    Returns the recursive option

    :rtype: bool 



setRecursive
++++++++++++

.. function:: setRecursive()


    Sets the recursive option

    :param bool: 

    :rtype: InArray Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value is contained in the haystack option. If the strict
    option is true, then the type of $value is also checked.

    :param mixed: See {@link http://php.net/manual/function.in-array.php#104501}

    :rtype: bool 





Constants
---------

NOT_IN_ARRAY
++++++++++++

COMPARE_STRICT
++++++++++++++

standard in_array strict checking value and type

COMPARE_NOT_STRICT_AND_PREVENT_STR_TO_INT_VULNERABILITY
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

Non strict check but prevents "asdf" == 0 returning TRUE causing false/positive.
This is the most secure option for non-strict checks and replaces strict = false
This will only be effective when the input is a string

COMPARE_NOT_STRICT
++++++++++++++++++

Standard non-strict check where "asdf" == 0 returns TRUE
This will be wanted when comparing "0" against int 0

