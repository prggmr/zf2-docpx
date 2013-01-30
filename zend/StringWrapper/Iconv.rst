.. Stdlib/StringWrapper/Iconv.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Stdlib\\StringWrapper\\Iconv
==================================

Methods
-------

getSupportedEncodings
+++++++++++++++++++++

.. function:: getSupportedEncodings()


    Get a list of supported character encodings

    :rtype: string[] 



__construct
+++++++++++

.. function:: __construct()


    Constructor




strlen
++++++

.. function:: strlen()


    Returns the length of the given string

    :param string: 
    :param string: 

    :rtype: int|false 



substr
++++++

.. function:: substr()


    Returns the portion of string specified by the start and length parameters

    :param string: 
    :param int: 
    :param int|null: 
    :param string: 

    :rtype: string|false 



strpos
++++++

.. function:: strpos()


    Find the position of the first occurrence of a substring in a string

    :param string: 
    :param string: 
    :param int: 
    :param string: 

    :rtype: int|false 



convert
+++++++

.. function:: convert()


    Convert a string from defined encoding to the defined convert encoding

    :param string: 
    :param boolean: 

    :rtype: string|false 



