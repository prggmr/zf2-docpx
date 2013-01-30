.. Filter/Null.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\Null
==================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string|array|Traversable: OPTIONAL



setType
+++++++

.. function:: setType()


    Set boolean types

    :param integer|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Boolean 



getType
+++++++

.. function:: getType()


    Returns defined boolean types

    :rtype: int 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns null representation of $value, if value is empty and matches
    types that should be considered null.

    :param string: 

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

