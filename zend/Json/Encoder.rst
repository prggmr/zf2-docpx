.. Json/Encoder.php generated using docpx on 01/30/13 03:32am


Zend\\Json\\Encoder
===================

Encode PHP constructs to JSON

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param bool: Whether or not to check for recursion when encoding
    :param array: Additional options used during encoding

    :rtype: Encoder 



encode
------

.. function:: encode()


    Use the JSON encoding scheme for the value specified

    :param mixed: The value to be encoded
    :param bool: Whether or not to check for possible object recursion when encoding
    :param array: Additional options used during encoding

    :rtype: string The encoded value



_encodeValue
------------

.. function:: _encodeValue()


    Recursive driver which determines the type of value to be encoded
    and then dispatches to the appropriate method. $values are either
       - objects (returns from {@link _encodeObject()})
       - arrays (returns from {@link _encodeArray()})
       - basic datums (e.g. numbers or strings) (returns from {@link _encodeDatum()})

    :param $value: The value to be encoded

    :rtype: string Encoded value



_encodeObject
-------------

.. function:: _encodeObject()


    Encode an object to JSON by encoding each of the public properties
    
    A special property is added to the JSON object called '__className'
    that contains the name of the class of $value. This is used to decode
    the object on the client into a specific class.

    :param $value: 

    :rtype: string 

    :throws: RecursionException If recursive checks are enabled and the
                           object has been serialized previously



_wasVisited
-----------

.. function:: _wasVisited()


    Determine if an object has been serialized already

    :param mixed: 

    :rtype: bool 



_encodeArray
------------

.. function:: _encodeArray()


    JSON encode an array value
    
    Recursively encodes each value of an array and returns a JSON encoded
    array string.
    
    Arrays are defined as integer-indexed arrays starting at index 0, where
    the last index is (count($array) -1); any deviation from that is
    considered an associative array, and will be encoded as such.

    :param $array: 

    :rtype: string 



_encodeDatum
------------

.. function:: _encodeDatum()


    JSON encode a basic data type (string, number, boolean, null)
    
    If value type is not a string, number, boolean, or null, the string
    'null' is returned.

    :param mixed: 

    :rtype: string 



_encodeString
-------------

.. function:: _encodeString()


    JSON encode a string value by escaping characters as necessary

    :param string: 

    :rtype: string 



_encodeConstants
----------------

.. function:: _encodeConstants()


    Encode the constants associated with the ReflectionClass
    parameter. The encoding format is based on the class2 format

    :param ReflectionClass: 

    :rtype: string Encoded constant block in class2 format



_encodeMethods
--------------

.. function:: _encodeMethods()


    Encode the public methods of the ReflectionClass in the
    class2 format

    :param ReflectionClass: 

    :rtype: string Encoded method fragment



_encodeVariables
----------------

.. function:: _encodeVariables()


    Encode the public properties of the ReflectionClass in the class2
    format.

    :param ReflectionClass: 

    :rtype: string Encode properties list



encodeClass
-----------

.. function:: encodeClass()


    Encodes the given $className into the class2 model of encoding PHP
    classes into JavaScript class2 classes.
    NOTE: Currently only public methods and variables are proxied onto
    the client machine

    :param $className: The name of the class, the class must be
instantiable using a null constructor
    :param $package: Optional package name appended to JavaScript
proxy class name

    :rtype: string The class2 (JavaScript) encoding of the class

    :throws: InvalidArgumentException 



encodeClasses
-------------

.. function:: encodeClasses()


    Encode several classes at once
    
    Returns JSON encoded classes, using {@link encodeClass()}.

    :param array: 
    :param string: 

    :rtype: string 



encodeUnicodeString
-------------------

.. function:: encodeUnicodeString()


    Encode Unicode Characters to \u0000 ASCII syntax.
    
    This algorithm was originally developed for the
    Solar Framework by Paul M. Jones


    :param string: 

    :rtype: string 



_utf82utf16
-----------

.. function:: _utf82utf16()


    Convert a string from one UTF-8 char to one UTF-16 char.
    
    Normally should be handled by mb_convert_encoding, but
    provides a slower PHP-only method for installations
    that lack the multibyte string extension.
    
    This method is from the Solar Framework by Paul M. Jones


    :param string: UTF-8 character

    :rtype: string UTF-16 character



