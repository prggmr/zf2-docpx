.. Stdlib/StringWrapper/StringWrapperInterface.php generated using docpx on 01/30/13 03:27pm


Function
********

Zend\\Stdlib\\StringWrapper\\isSupported
========================================

.. function:: Zend\Stdlib\StringWrapper\isSupported()


    Check if the given character encoding is supported by this wrapper
    and the character encoding to convert to is also supported.

    :param string: 
    :param string|null: 



Function
********

Zend\\Stdlib\\StringWrapper\\getSupportedEncodings
==================================================

.. function:: Zend\Stdlib\StringWrapper\getSupportedEncodings()


    Get a list of supported character encodings

    :rtype: string[] 



Function
********

Zend\\Stdlib\\StringWrapper\\setEncoding
========================================

.. function:: Zend\Stdlib\StringWrapper\setEncoding()


    Set character encoding working with and convert to

    :param string: The character encoding to work with
    :param string|null: The character encoding to convert to

    :rtype: StringWrapperInterface 



Function
********

Zend\\Stdlib\\StringWrapper\\getEncoding
========================================

.. function:: Zend\Stdlib\StringWrapper\getEncoding()


    Get the defined character encoding to work with (upper case)

    :rtype: string 



Function
********

Zend\\Stdlib\\StringWrapper\\getConvertEncoding
===============================================

.. function:: Zend\Stdlib\StringWrapper\getConvertEncoding()


    Get the defined character encoding to convert to (upper case)

    :rtype: string|null 



Function
********

Zend\\Stdlib\\StringWrapper\\strlen
===================================

.. function:: Zend\Stdlib\StringWrapper\strlen()


    Returns the length of the given string

    :param string: 

    :rtype: int|false 



Function
********

Zend\\Stdlib\\StringWrapper\\substr
===================================

.. function:: Zend\Stdlib\StringWrapper\substr()


    Returns the portion of string specified by the start and length parameters

    :param string: 
    :param int: 
    :param int|null: 
    :param string: 

    :rtype: string|false 



Function
********

Zend\\Stdlib\\StringWrapper\\strpos
===================================

.. function:: Zend\Stdlib\StringWrapper\strpos()


    Find the position of the first occurrence of a substring in a string

    :param string: 
    :param string: 
    :param int: 
    :param string: 

    :rtype: int|false 



Function
********

Zend\\Stdlib\\StringWrapper\\convert
====================================

.. function:: Zend\Stdlib\StringWrapper\convert()


    Convert a string from defined encoding to the defined convert encoding

    :param string: 
    :param boolean: 

    :rtype: string|false 



Function
********

Zend\\Stdlib\\StringWrapper\\wordWrap
=====================================

.. function:: Zend\Stdlib\StringWrapper\wordWrap()


    Wraps a string to a given number of characters

    :param string: 
    :param integer: 
    :param string: 
    :param boolean: 

    :rtype: string 



Function
********

Zend\\Stdlib\\StringWrapper\\strPad
===================================

.. function:: Zend\Stdlib\StringWrapper\strPad()


    Pad a string to a certain length with another string

    :param string: 
    :param integer: 
    :param string: 
    :param integer: 

    :rtype: string 



