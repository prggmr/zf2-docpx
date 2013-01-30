.. XmlRpc/Value/Base64.php generated using docpx on 01/30/13 03:32am


Zend\\XmlRpc\\Value\\Base64
===========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Set the value of a base64 native type
    We keep this value in base64 encoding

    :param string: 
    :param bool: If set, it means that the given string is already base64 encoded



getValue
--------

.. function:: getValue()


    Return the value of this object, convert the XML-RPC native base64 value into a PHP string
    We return this value decoded (a normal string)

    :rtype: string 



