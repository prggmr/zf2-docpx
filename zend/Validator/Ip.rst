.. Validator/Ip.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Ip
===================

Methods
-------

setOptions
++++++++++

.. function:: setOptions()


    Sets the options for this validator

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: If there is any kind of IP allowed or $options is not an array or Traversable.

    :rtype: AbstractValidator 



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value is a valid IP address

    :param mixed: 

    :rtype: bool 



validateIPv4
++++++++++++

.. function:: validateIPv4()


    Validates an IPv4 address

    :param string: 

    :rtype: bool 



validateIPv6
++++++++++++

.. function:: validateIPv6()


    Validates an IPv6 address

    :param string: Value to check against

    :rtype: bool True when $value is a valid ipv6 address
                False otherwise



validateIPvFuture
+++++++++++++++++

.. function:: validateIPvFuture()


    Validates an IPvFuture address.
    
    IPvFuture is loosely defined in the Section 3.2.2 of RFC 3986

    :param string: Value to check against

    :rtype: bool True when $value is a valid IPvFuture address
                False otherwise





Constants
---------

INVALID
+++++++

NOT_IP_ADDRESS
++++++++++++++

