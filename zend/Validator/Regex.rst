.. Validator/Regex.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Regex
======================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param string|Traversable: 

    :throws Exception\InvalidArgumentException: On missing 'pattern' parameter



getPattern
++++++++++

.. function:: getPattern()


    Returns the pattern option

    :rtype: string 



setPattern
++++++++++

.. function:: setPattern()


    Sets the pattern option

    :param string: 

    :throws Exception\InvalidArgumentException: if there is a fatal error in pattern matching

    :rtype: Regex Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value matches against the pattern option

    :param string: 

    :rtype: bool 





Constants
---------

INVALID
+++++++

NOT_MATCH
+++++++++

ERROROUS
++++++++

