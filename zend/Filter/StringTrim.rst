.. Filter/StringTrim.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\StringTrim
========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets filter options

    :param string|array|Traversable: 



setCharList
+++++++++++

.. function:: setCharList()


    Sets the charList option

    :param string: 

    :rtype: StringTrim Provides a fluent interface



getCharList
+++++++++++

.. function:: getCharList()


    Returns the charList option

    :rtype: string|null 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns the string $value with characters stripped from the beginning and end

    :param string: 

    :rtype: string 



unicodeTrim
+++++++++++

.. function:: unicodeTrim()


    Unicode aware trim method
    Fixes a PHP problem

    :param string: 
    :param string: 

    :rtype: string 



