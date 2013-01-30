.. I18n/Filter/Alnum.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\I18n\\Filter\\Alnum
=========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets default option values for this instance

    :param array|Traversable|bool|null: 
    :param string|null: 



setAllowWhiteSpace
++++++++++++++++++

.. function:: setAllowWhiteSpace()


    Sets the allowWhiteSpace option

    :param bool: 

    :rtype: Alnum Provides a fluent interface



getAllowWhiteSpace
++++++++++++++++++

.. function:: getAllowWhiteSpace()


    Whether white space is allowed

    :rtype: bool 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Returns $value as string with all non-alphanumeric characters removed

    :param mixed: 

    :rtype: string 



