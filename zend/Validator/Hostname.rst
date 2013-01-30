.. Validator/Hostname.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Validator\\Hostname
=========================

Please note there are two standalone test scripts for testing IDN characters due to problems
with file encoding.

The first is tests/Zend/Validator/HostnameTestStandalone.php which is designed to be run on
the command line.

The second is tests/Zend/Validator/HostnameTestForm.php which is designed to be run via HTML
to allow users to test entering UTF-8 characters in a form.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param integer: OPTIONAL Set what types of hostname to allow (default ALLOW_DNS)
    :param bool: OPTIONAL Set whether IDN domains are validated (default true)
    :param bool: OPTIONAL Set whether the TLD element of a hostname is validated (default true)
    :param Ip: OPTIONAL

    :see : 



getIpValidator
++++++++++++++

.. function:: getIpValidator()


    Returns the set ip validator

    :rtype: Ip 



setIpValidator
++++++++++++++

.. function:: setIpValidator()


    @param Ip $ipValidator OPTIONAL

    :rtype: Hostname; 



getAllow
++++++++

.. function:: getAllow()


    Returns the allow option

    :rtype: integer 



setAllow
++++++++

.. function:: setAllow()


    Sets the allow option

    :param integer: 

    :rtype: Hostname Provides a fluent interface



getIdnCheck
+++++++++++

.. function:: getIdnCheck()


    Returns the set idn option

    :rtype: bool 



useIdnCheck
+++++++++++

.. function:: useIdnCheck()


    Set whether IDN domains are validated
    
    This only applies when DNS hostnames are validated

    :param bool: Set to true to validate IDN domains

    :rtype: Hostname 



getTldCheck
+++++++++++

.. function:: getTldCheck()


    Returns the set tld option

    :rtype: bool 



useTldCheck
+++++++++++

.. function:: useTldCheck()


    Set whether the TLD element of a hostname is validated
    
    This only applies when DNS hostnames are validated

    :param bool: Set to true to validate TLD elements

    :rtype: Hostname 



isValid
+++++++

.. function:: isValid()


    Defined by Interface
    
    Returns true if and only if the $value is a valid hostname with respect to the current allow option

    :param string: 

    :rtype: bool 



decodePunycode
++++++++++++++

.. function:: decodePunycode()


    Decodes a punycode encoded string to it's original utf8 string
    In case of a decoding failure the original string is returned

    :param string: Punycode encoded string to decode

    :rtype: string 





Constants
---------

CANNOT_DECODE_PUNYCODE
++++++++++++++++++++++

INVALID
+++++++

INVALID_DASH
++++++++++++

INVALID_HOSTNAME
++++++++++++++++

INVALID_HOSTNAME_SCHEMA
+++++++++++++++++++++++

INVALID_LOCAL_NAME
++++++++++++++++++

INVALID_URI
+++++++++++

IP_ADDRESS_NOT_ALLOWED
++++++++++++++++++++++

LOCAL_NAME_NOT_ALLOWED
++++++++++++++++++++++

UNDECIPHERABLE_TLD
++++++++++++++++++

UNKNOWN_TLD
+++++++++++

ALLOW_DNS
+++++++++

@var array

ALLOW_IP
++++++++

ALLOW_LOCAL
+++++++++++

ALLOW_URI
+++++++++

ALLOW_ALL
+++++++++

