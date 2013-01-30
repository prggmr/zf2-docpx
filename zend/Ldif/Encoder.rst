.. Ldap/Ldif/Encoder.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Ldif\\Encoder
=========================

Zend\Ldap\Ldif\Encoder provides methods to encode and decode LDAP data into/from Ldif.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.

    :param array: Additional options used during encoding



decode
------

.. function:: decode()


    Decodes the string $string into an array of Ldif items

    :param string: 

    :rtype: array 



_decode
-------

.. function:: _decode()


    Decodes the string $string into an array of Ldif items

    :param string: 

    :rtype: array 



pushAttribute
-------------

.. function:: pushAttribute()


    Pushes a decoded attribute to the stack

    :param array: 
    :param array: 



encode
------

.. function:: encode()


    Encode $value into a Ldif representation

    :param mixed: The value to be encoded
    :param array: Additional options used during encoding

    :rtype: string The encoded value



_encode
-------

.. function:: _encode()


    Recursive driver which determines the type of value to be encoded
    and then dispatches to the appropriate method.

    :param mixed: The value to be encoded

    :rtype: string Encoded value



encodeString
------------

.. function:: encodeString()


    Encodes $string according to RFC2849


    :param string: 
    :param bool: 

    :rtype: string 



encodeAttribute
---------------

.. function:: encodeAttribute()


    Encodes an attribute with $name and $value according to RFC2849


    :param string: 
    :param array|string: 

    :rtype: string 



encodeAttributes
----------------

.. function:: encodeAttributes()


    Encodes a collection of attributes according to RFC2849


    :param array: 

    :rtype: string 



