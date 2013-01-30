.. Filter/Boolean.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Boolean
=====================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array|Traversable|int|null: 
    :param bool: 
    :param array: 



setType
-------

.. function:: setType()


    Set boolean types

    :param integer|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Boolean 



getType
-------

.. function:: getType()


    Returns defined boolean types

    :rtype: int 



setCasting
----------

.. function:: setCasting()


    Set the working mode

    :param bool: When true this filter works like cast
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

.. function:: setTranslations()


    @param  array|Traversable $translations


    :rtype: Boolean 



getTranslations
---------------

.. function:: getTranslations()


    @return array



filter
------

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns a boolean representation of $value

    :param string: 

    :rtype: string 





Constants
+++++++++

TYPE_BOOLEAN
============

TYPE_INTEGER
============

TYPE_FLOAT
==========

TYPE_STRING
===========

TYPE_ZERO_STRING
================

TYPE_EMPTY_ARRAY
================

TYPE_NULL
=========

TYPE_PHP
========

TYPE_FALSE_STRING
=================

TYPE_LOCALIZED
==============

TYPE_ALL
========

