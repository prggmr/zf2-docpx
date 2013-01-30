.. Validator/StringLength.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\StringLength
=============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param integer|array|\Traversable: 



getMin
++++++

.. function:: getMin()


    Returns the min option

    :rtype: integer 



setMin
++++++

.. function:: setMin()


    Sets the min option

    :param integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: StringLength Provides a fluent interface



getMax
++++++

.. function:: getMax()


    Returns the max option

    :rtype: integer|null 



setMax
++++++

.. function:: setMax()


    Sets the max option

    :param integer|null: 

    :throws Exception\InvalidArgumentException: 

    :rtype: StringLength Provides a fluent interface



getStringWrapper
++++++++++++++++

.. function:: getStringWrapper()


    Get the string wrapper to detect the string length

    :rtype: StringWrapper 



setStringWrapper
++++++++++++++++

.. function:: setStringWrapper()


    Set the string wrapper to detect the string length

    :param StringWrapper: 

    :rtype: StringLength 



getEncoding
+++++++++++

.. function:: getEncoding()


    Returns the actual encoding

    :rtype: string 



setEncoding
+++++++++++

.. function:: setEncoding()


    Sets a new encoding to use

    :param string: 

    :rtype: StringLength 

    :throws: Exception\InvalidArgumentException 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the string length of $value is at least the min option and
    no greater than the max option (when the max option is not null).

    :param string: 

    :rtype: bool 





Constants
---------

INVALID
+++++++

TOO_SHORT
+++++++++

TOO_LONG
++++++++

