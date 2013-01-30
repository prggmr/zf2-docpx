.. Ldap/Converter/Converter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Converter\\Converter
================================

Zend\Ldap\Converter is a collection of useful LDAP related conversion functions.

Methods
-------

ascToHex32
++++++++++

.. function:: ascToHex32()


    Converts all ASCII chars < 32 to "\HEX"




    :param string: String to convert

    :rtype: string 



hex32ToAsc
++++++++++

.. function:: hex32ToAsc()


    Converts all Hex expressions ("\HEX") to their original ASCII characters




    :param string: String to convert

    :rtype: string 



toLdap
++++++

.. function:: toLdap()


    Convert any value to an LDAP-compatible value.
    
    By setting the <var>$type</var>-parameter the conversion of a certain
    type can be forced


    :param mixed: The value to convert
    :param int: The conversion type to use

    :rtype: string|null 

    :throws: Exception\ConverterException 



toLdapDateTime
++++++++++++++

.. function:: toLdapDateTime()


    Converts a date-entity to an LDAP-compatible date-string
    
    The date-entity <var>$date</var> can be either a timestamp, a
    DateTime Object, a string that is parseable by strtotime().

    :param integer|string|DateTime: The date-entity
    :param bool: Whether to return the LDAP-compatible date-string as UTC or as local value

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



toLdapBoolean
+++++++++++++

.. function:: toLdapBoolean()


    Convert a boolean value to an LDAP-compatible string
    
    This converts a boolean value of TRUE, an integer-value of 1 and a
    case-insensitive string 'true' to an LDAP-compatible 'TRUE'. All other
    other values are converted to an LDAP-compatible 'FALSE'.

    :param bool|integer|string: The boolean value to encode

    :rtype: string 



toLdapSerialize
+++++++++++++++

.. function:: toLdapSerialize()


    Serialize any value for storage in LDAP

    :param mixed: The value to serialize

    :rtype: string 



fromLdap
++++++++

.. function:: fromLdap()


    Convert an LDAP-compatible value to a corresponding PHP-value.
    
    By setting the <var>$type</var>-parameter the conversion of a certain
    type can be forced.


    :param string: The value to convert
    :param int: The conversion type to use
    :param bool: Return DateTime values in UTC timezone

    :rtype: mixed 



fromLdapDateTime
++++++++++++++++

.. function:: fromLdapDateTime()


    Convert an LDAP-Generalized-Time-entry into a DateTime-Object
    
    CAVEAT: The DateTime-Object returned will always be set to UTC-Timezone.

    :param string: The generalized-Time
    :param bool: Return the DateTime with UTC timezone

    :rtype: DateTime 

    :throws: Exception\InvalidArgumentException if a non-parseable-format is given



fromLdapBoolean
+++++++++++++++

.. function:: fromLdapBoolean()


    Convert an LDAP-compatible boolean value into a PHP-compatible one

    :param string: The value to convert

    :rtype: bool 

    :throws: Exception\InvalidArgumentException 



fromLdapUnserialize
+++++++++++++++++++

.. function:: fromLdapUnserialize()


    Unserialize a serialized value to return the corresponding object

    :param string: The value to convert

    :rtype: mixed 

    :throws: Exception\UnexpectedValueException 





Constants
---------

STANDARD
++++++++

BOOLEAN
+++++++

GENERALIZED_TIME
++++++++++++++++

