.. Validator/EmailAddress.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\EmailAddress
=============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Instantiates hostname validator for local use
    
    The following additional option keys are supported:
    'hostnameValidator' => A hostname validator, see Zend\Validator\Hostname
    'allow'             => Options for the hostname validator, see Zend\Validator\Hostname::ALLOW_*
    'useMxCheck'        => If MX check should be enabled, boolean
    'useDeepMxCheck'    => If a deep MX check should be done, boolean

    :param array|\Traversable: OPTIONAL



setMessage
----------

.. function:: setMessage()


    Sets the validation failure message template for a particular key
    Adds the ability to set messages to the attached hostname validator

    :param string: 
    :param string: OPTIONAL

    :rtype: AbstractValidator Provides a fluent interface



getHostnameValidator
--------------------

.. function:: getHostnameValidator()


    Returns the set hostname validator
    
    If was not previously set then lazy load a new one

    :rtype: Hostname 



setHostnameValidator
--------------------

.. function:: setHostnameValidator()


    @param Hostname $hostnameValidator OPTIONAL

    :rtype: EmailAddress Provides a fluent interface



getAllow
--------

.. function:: getAllow()


    Returns the allow option of the attached hostname validator

    :rtype: integer 



setAllow
--------

.. function:: setAllow()


    Sets the allow option of the hostname validator to use

    :param integer: 

    :rtype: EmailAddress Provides a fluent interface



isMxSupported
-------------

.. function:: isMxSupported()


    Whether MX checking via getmxrr is supported or not

    :rtype: bool 



getMxCheck
----------

.. function:: getMxCheck()


    Returns the set validateMx option

    :rtype: bool 



useMxCheck
----------

.. function:: useMxCheck()


    Set whether we check for a valid MX record via DNS
    
    This only applies when DNS hostnames are validated

    :param bool: Set allowed to true to validate for MX records, and false to not validate them

    :rtype: EmailAddress Fluid Interface



getDeepMxCheck
--------------

.. function:: getDeepMxCheck()


    Returns the set deepMxCheck option

    :rtype: bool 



useDeepMxCheck
--------------

.. function:: useDeepMxCheck()


    Use deep validation for MX records

    :param bool: Set deep to true to perform a deep validation process for MX records

    :rtype: EmailAddress Fluid Interface



getDomainCheck
--------------

.. function:: getDomainCheck()


    Returns the set domainCheck option

    :rtype: bool 



useDomainCheck
--------------

.. function:: useDomainCheck()


    Sets if the domain should also be checked
    or only the local part of the email address

    :param bool: 

    :rtype: EmailAddress Fluid Interface



isReserved
----------

.. function:: isReserved()


    Returns if the given host is reserved
    
    The following addresses are seen as reserved
    '0.0.0.0/8', '10.0.0.0/8', '127.0.0.0/8'
    '100.64.0.0/10'
    '172.16.0.0/12'
    '198.18.0.0/15'
    '169.254.0.0/16', '192.168.0.0/16'
    '192.0.2.0/24', '192.88.99.0/24', '198.51.100.0/24', '203.0.113.0/24'
    '224.0.0.0/4', '240.0.0.0/4'


    :param string: 

    :rtype: bool Returns false when minimal one of the given addresses is not reserved



validateLocalPart
-----------------

.. function:: validateLocalPart()


    Internal method to validate the local part of the email address

    :rtype: bool 



getMXRecord
-----------

.. function:: getMXRecord()


    Returns the found MX Record information after validation including weight for further processing

    :rtype: array 



validateMXRecords
-----------------

.. function:: validateMXRecords()


    Internal method to validate the servers MX records

    :rtype: bool 



validateHostnamePart
--------------------

.. function:: validateHostnamePart()


    Internal method to validate the hostname part of the email address

    :rtype: bool 



splitEmailParts
---------------

.. function:: splitEmailParts()


    Splits the given value in hostname and local part of the email address

    :param string: Email address to be split

    :rtype: bool Returns false when the email can not be split



isValid
-------

.. function:: isValid()


    Defined by Zend\Validator\ValidatorInterface
    
    Returns true if and only if $value is a valid email address
    according to RFC2822


    :param string: 

    :rtype: bool 





Constants
+++++++++

INVALID
=======

INVALID_FORMAT
==============

INVALID_HOSTNAME
================

INVALID_MX_RECORD
=================

INVALID_SEGMENT
===============

DOT_ATOM
========

QUOTED_STRING
=============

INVALID_LOCAL_PART
==================

LENGTH_EXCEEDED
===============

