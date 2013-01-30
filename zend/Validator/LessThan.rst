.. Validator/LessThan.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\LessThan
=========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets validator options

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 



getMax
------

.. function:: getMax()


    Returns the max option

    :rtype: mixed 



setMax
------

.. function:: setMax()


    Sets the max option

    :param mixed: 

    :rtype: LessThan Provides a fluent interface



getInclusive
------------

.. function:: getInclusive()


    Returns the inclusive option

    :rtype: bool 



setInclusive
------------

.. function:: setInclusive()


    Sets the inclusive option

    :param bool: 

    :rtype: LessThan Provides a fluent interface



isValid
-------

.. function:: isValid()


    Returns true if and only if $value is less than max option, inclusively
    when the inclusive option is true

    :param mixed: 

    :rtype: bool 





Constants
+++++++++

NOT_LESS
========

NOT_LESS_INCLUSIVE
==================

