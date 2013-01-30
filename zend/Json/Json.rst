.. Json/Json.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Json\\Json
================

Class for encoding to and decoding from JSON.

Methods
-------

decode
++++++

.. function:: decode()


    Decodes the given $encodedValue string which is
    encoded in the JSON format
    
    Uses ext/json's json_decode if available.

    :param string: Encoded in JSON format
    :param int: Optional; flag indicating how to decode
objects. See {@link Zend_Json_Decoder::decode()} for details.

    :rtype: mixed 

    :throws: RuntimeException 



encode
++++++

.. function:: encode()


    Encode the mixed $valueToEncode into the JSON format
    
    Encodes using ext/json's json_encode() if available.
    
    NOTE: Object should not contain cycles; the JSON format
    does not allow object reference.
    
    NOTE: Only public variables will be encoded
    
    NOTE: Encoding native javascript expressions are possible using Zend_Json_Expr.
          You can enable this by setting $options['enableJsonExprFinder'] = true


    :param mixed: 
    :param bool: Optional; whether or not to check for object recursion; off by default
    :param array: Additional options used during encoding

    :rtype: string JSON encoded object



_recursiveJsonExprFinder
++++++++++++++++++++++++

.. function:: _recursiveJsonExprFinder()


    Check & Replace Zend_Json_Expr for tmp ids in the valueToEncode
    
    Check if the value is a Zend_Json_Expr, and if replace its value
    with a magic key and save the javascript expression in an array.
    
    NOTE this method is recursive.
    
    NOTE: This method is used internally by the encode method.


    :param mixed: a string - object property to be encoded

    :rtype: void 



_getXmlValue
++++++++++++

.. function:: _getXmlValue()


    Return the value of an XML attribute text or the text between
    the XML tags
    
    In order to allow Zend_Json_Expr from xml, we check if the node
    matches the pattern that try to detect if it is a new Zend_Json_Expr
    if it matches, we return a new Zend_Json_Expr instead of a text node

    :param SimpleXMLElement: 

    :rtype: Expr|string 



_processXml
+++++++++++

.. function:: _processXml()


    _processXml - Contains the logic for xml2json
    
    The logic in this function is a recursive one.
    
    The main caller of this function (i.e. fromXml) needs to provide
    only the first two parameters i.e. the SimpleXMLElement object and
    the flag for ignoring or not ignoring XML attributes. The third parameter
    will be used internally within this function during the recursive calls.
    
    This function converts the SimpleXMLElement object into a PHP array by
    calling a recursive (protected static) function in this class. Once all
    the XML elements are stored in the PHP array, it is returned to the caller.

    :param SimpleXMLElement: 
    :param bool: 
    :param integer: 

    :throws Exception\RecursionException: if the XML tree is deeper than the allowed limit.

    :rtype: array 



fromXml
+++++++

.. function:: fromXml()


    fromXml - Converts XML to JSON
    
    Converts a XML formatted string into a JSON formatted string.
    The value returned will be a string in JSON format.
    
    The caller of this function needs to provide only the first parameter,
    which is an XML formatted String. The second parameter is optional, which
    lets the user to select if the XML attributes in the input XML string
    should be included or ignored in xml2json conversion.
    
    This function converts the XML formatted string into a PHP array by
    calling a recursive (protected static) function in this class. Then, it
    converts that PHP array into JSON by calling the "encode" static function.
    
    NOTE: Encoding native javascript expressions via Zend_Json_Expr is not possible.



    :param string: XML String to be converted
    :param bool: Include or exclude XML attributes in
the xml2json conversion process.

    :rtype: mixed - JSON formatted string on success

    :throws: \Zend\Json\Exception\RuntimeException if the input not a XML formatted string



prettyPrint
+++++++++++

.. function:: prettyPrint()


    Pretty-print JSON string
    
    Use 'indent' option to select indentation string - by default it's a tab

    :param string: Original JSON string
    :param array: Encoding options

    :rtype: string 





Constants
---------

TYPE_ARRAY
++++++++++

How objects should be encoded -- arrays or as stdClass. TYPE_ARRAY is 1
so that it is a boolean true value, allowing it to be used with
ext/json's functions.

TYPE_OBJECT
+++++++++++

