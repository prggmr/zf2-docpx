.. Validator/Between.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Between
========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options
    Accepts the following option keys:
      'min' => scalar, minimum border
      'max' => scalar, maximum border
      'inclusive' => boolean, inclusive border values

    :param array|Traversable: 



getMin
++++++

.. function:: getMin()


    Returns the min option

    :rtype: mixed 



setMin
++++++

.. function:: setMin()


    Sets the min option

    :param mixed: 

    :rtype: Between Provides a fluent interface



getMax
++++++

.. function:: getMax()


    Returns the max option

    :rtype: mixed 



setMax
++++++

.. function:: setMax()


    Sets the max option

    :param mixed: 

    :rtype: Between Provides a fluent interface



getInclusive
++++++++++++

.. function:: getInclusive()


    Returns the inclusive option

    :rtype: bool 



setInclusive
++++++++++++

.. function:: setInclusive()


    Sets the inclusive option

    :param bool: 

    :rtype: Between Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value is between min and max options, inclusively
    if inclusive option is true.

    :param mixed: 

    :rtype: bool 





Constants
---------

NOT_BETWEEN
+++++++++++

NOT_BETWEEN_STRICT
++++++++++++++++++

