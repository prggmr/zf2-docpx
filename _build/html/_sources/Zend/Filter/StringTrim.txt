.. /Filter/StringTrim.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\StringTrim
************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$charlistOrOptions = false])


    Sets filter options

    :param string|array|Traversable $charlistOrOptions: 



setCharList
-----------

.. function:: setCharList($charList)


    Sets the charList option

    :param string $charList: 

    :rtype: StringTrim Provides a fluent interface



getCharList
-----------

.. function:: getCharList()


    Returns the charList option

    :rtype: string|null 



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface
    
    Returns the string $value with characters stripped from the beginning and end

    :param string $value: 

    :rtype: string 



unicodeTrim
-----------

.. function:: unicodeTrim($value, [$charlist = "\\s"])


    Unicode aware trim method
    Fixes a PHP problem

    :param string $value: 
    :param string $charlist: 

    :rtype: string 





