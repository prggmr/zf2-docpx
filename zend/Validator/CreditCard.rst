.. Validator/CreditCard.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\CreditCard
===========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string|array|Traversable: OPTIONAL Type of CCI to allow



getType
+++++++

.. function:: getType()


    Returns a list of accepted CCIs

    :rtype: array 



setType
+++++++

.. function:: setType()


    Sets CCIs which are accepted by validation

    :param string|array: Type to allow for validation

    :rtype: CreditCard Provides a fluid interface



addType
+++++++

.. function:: addType()


    Adds a CCI to be accepted by validation

    :param string|array: Type to allow for validation

    :rtype: CreditCard Provides a fluid interface



getService
++++++++++

.. function:: getService()


    Returns the actual set service

    :rtype: callable 



setService
++++++++++

.. function:: setService()


    Sets a new callback for service validation

    :param callable: 

    :rtype: CreditCard 

    :throws: Exception\InvalidArgumentException on invalid service callback



isValid
+++++++

.. function:: isValid()


    Returns true if and only if $value follows the Luhn algorithm (mod-10 checksum)

    :param string: 

    :rtype: bool 





Constants
---------

ALL
+++

Detected CCI list

AMERICAN_EXPRESS
++++++++++++++++

UNIONPAY
++++++++

DINERS_CLUB
+++++++++++

DINERS_CLUB_US
++++++++++++++

DISCOVER
++++++++

JCB
+++

LASER
+++++

MAESTRO
+++++++

MASTERCARD
++++++++++

SOLO
++++

VISA
++++

CHECKSUM
++++++++

CONTENT
+++++++

INVALID
+++++++

LENGTH
++++++

PREFIX
++++++

SERVICE
+++++++

SERVICEFAILURE
++++++++++++++

