.. /Filter/Boolean.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Boolean
*********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$typeOrOptions = false, [$casting = true, [$translations = false]]])


    Constructor

    :param array|Traversable|int|null $typeOrOptions: 
    :param bool $casting: 
    :param array $translations: 



setType
-------

.. function:: setType([$type = false])


    Set boolean types

    :param integer|array $type: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Boolean 



getType
-------

.. function:: getType()


    Returns defined boolean types

    :rtype: int 



setCasting
----------

.. function:: setCasting([$flag = true])


    Set the working mode

    :param bool $flag: When true this filter works like cast
                      When false it recognises only true and false
                      and all other values are returned as is

    :rtype: Boolean 



getCasting
----------

.. function:: getCasting()


    Returns the casting option

    :rtype: bool 



setTranslations
---------------

.. function:: setTranslations($translations)


    @param  array|Traversable $translations


    :rtype: Boolean 



getTranslations
---------------

.. function:: getTranslations()


    @return array



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface
    
    Returns a boolean representation of $value

    :param string $value: 

    :rtype: string 





Constants
---------

TYPE_BOOLEAN
++++++++++++

TYPE_INTEGER
++++++++++++

TYPE_FLOAT
++++++++++

TYPE_STRING
+++++++++++

TYPE_ZERO_STRING
++++++++++++++++

TYPE_EMPTY_ARRAY
++++++++++++++++

TYPE_NULL
+++++++++

TYPE_PHP
++++++++

TYPE_FALSE_STRING
+++++++++++++++++

TYPE_LOCALIZED
++++++++++++++

TYPE_ALL
++++++++

