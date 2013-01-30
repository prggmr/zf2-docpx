.. Stdlib/StringWrapper/Native.php generated using docpx on 01/30/13 03:32am


Zend\\Stdlib\\StringWrapper\\Native
===================================

Methods
+++++++

isSupported
-----------

.. function:: isSupported()


    Check if the given character encoding is supported by this wrapper
    and the character encoding to convert to is also supported.

    :param string: 
    :param string|null: 



getSupportedEncodings
---------------------

.. function:: getSupportedEncodings()


    Get a list of supported character encodings

    :rtype: string[] 



setEncoding
-----------

.. function:: setEncoding()


    Set character encoding working with and convert to

    :param string: The character encoding to work with
    :param string|null: The character encoding to convert to

    :rtype: StringWrapperInterface 



strlen
------

.. function:: strlen()


    Returns the length of the given string

    :param string: 

    :rtype: int|false 



substr
------

.. function:: substr()


    Returns the portion of string specified by the start and length parameters

    :param string: 
    :param int: 
    :param int|null: 

    :rtype: string|false 



strpos
------

.. function:: strpos()


    Find the position of the first occurrence of a substring in a string

    :param string: 
    :param string: 
    :param int: 

    :rtype: int|false 



