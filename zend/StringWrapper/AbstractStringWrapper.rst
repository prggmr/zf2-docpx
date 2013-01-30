.. Stdlib/StringWrapper/AbstractStringWrapper.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\StringWrapper\\AbstractStringWrapper
==================================================

Methods
-------

isSupported
+++++++++++

.. function:: isSupported()


    Check if the given character encoding is supported by this wrapper
    and the character encoding to convert to is also supported.

    :param string: 
    :param string|null: 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set character encoding working with and convert to

    :param string: The character encoding to work with
    :param string|null: The character encoding to convert to

    :rtype: StringWrapperInterface 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the defined character encoding to work with

    :rtype: string 

    :throws: Exception\LogicException If no encoding was defined



getConvertEncoding
++++++++++++++++++

.. function:: getConvertEncoding()


    Get the defined character encoding to convert to

    :rtype: string|null 



convert
+++++++

.. function:: convert()


    Convert a string from defined character encoding to the defined convert encoding

    :param string: 
    :param boolean: 

    :rtype: string|false 



wordWrap
++++++++

.. function:: wordWrap()


    Wraps a string to a given number of characters

    :param string: 
    :param integer: 
    :param string: 
    :param boolean: 

    :rtype: string|false 



strPad
++++++

.. function:: strPad()


    Pad a string to a certain length with another string

    :param string: 
    :param integer: 
    :param string: 
    :param integer: 

    :rtype: string 



