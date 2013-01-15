.. /Filter/Null.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Null
******************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$typeOrOptions = false])


    Constructor

    :param string|array|Traversable $typeOrOptions: OPTIONAL



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



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\FilterInterface
    
    Returns null representation of $value, if value is empty and matches
    types that should be considered null.

    :param string $value: 

    :rtype: string 





Constants
---------

TYPE_BOOLEAN
++++++++++++

TYPE_INTEGER
++++++++++++

TYPE_EMPTY_ARRAY
++++++++++++++++

TYPE_STRING
+++++++++++

TYPE_ZERO_STRING
++++++++++++++++

TYPE_FLOAT
++++++++++

TYPE_ALL
++++++++

