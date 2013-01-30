.. Json/Decoder.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Decoder
===================

Decode JSON encoded string to PHP variable constructs

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string: String source to decode
    :param int: How objects should be decoded -- see
{@link Zend_Json::TYPE_ARRAY} and {@link Zend_Json::TYPE_OBJECT} for
valid values

    :throws InvalidArgumentException: 

    :rtype: void 



decode
------

.. function:: decode()


    Decode a JSON source string
    
    Decodes a JSON encoded string. The value returned will be one of the
    following:
           - integer
           - float
           - boolean
           - null
         - stdClass
         - array
            - array of one or more of the above types
    
    By default, decoded objects will be returned as associative arrays; to
    return a stdClass object instead, pass {@link Zend_Json::TYPE_OBJECT} to
    the $objectDecodeType parameter.



    :param string: String to be decoded
    :param int: How objects should be decoded; should be
either or {@link Zend_Json::TYPE_ARRAY} or
{@link Zend_Json::TYPE_OBJECT}; defaults to TYPE_ARRAY

    :rtype: mixed 



_decodeValue
------------

.. function:: _decodeValue()


    Recursive driving routine for supported toplevel tops

    :rtype: mixed 



_decodeObject
-------------

.. function:: _decodeObject()


    Decodes an object of the form:
     { "attribute: value, "attribute2" : value,...}
    
    If Zend_Json_Encoder was used to encode the original object then
    a special attribute called __className which specifies a class
    name that should wrap the data contained within the encoded source.
    
    Decodes to either an array or stdClass object, based on the value of
    {@link $decodeType}. If invalid $decodeType present, returns as an
    array.

    :rtype: array|stdClass 

    :throws: RuntimeException 



_decodeArray
------------

.. function:: _decodeArray()


    Decodes a JSON array format:
       [element, element2,...,elementN]

    :rtype: array 

    :throws: RuntimeException 



_eatWhitespace
--------------

.. function:: _eatWhitespace()


    Removes whitespace characters from the source input



_getNextToken
-------------

.. function:: _getNextToken()


    Retrieves the next token from the source stream

    :rtype: int Token constant value specified in class definition

    :throws: RuntimeException 



decodeUnicodeString
-------------------

.. function:: decodeUnicodeString()


    Decode Unicode Characters from \u0000 ASCII syntax.
    
    This algorithm was originally developed for the
    Solar Framework by Paul M. Jones


    :param string: 

    :rtype: string 



_utf162utf8
-----------

.. function:: _utf162utf8()


    Convert a string from one UTF-16 char to one UTF-8 char.
    
    Normally should be handled by mb_convert_encoding, but
    provides a slower PHP-only method for installations
    that lack the multibyte string extension.
    
    This method is from the Solar Framework by Paul M. Jones


    :param string: UTF-16 character

    :rtype: string UTF-8 character





Constants
+++++++++

EOF
===

Parse tokens used to decode the JSON object. These are not
for public consumption, they are just used internally to the
class.

DATUM
=====

LBRACE
======

LBRACKET
========

RBRACE
======

RBRACKET
========

COMMA
=====

COLON
=====

