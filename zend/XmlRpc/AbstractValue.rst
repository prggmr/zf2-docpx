.. XmlRpc/AbstractValue.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\XmlRpc\\AbstractValue
===========================

Represent a native XML-RPC value entity, used as parameters for the methods
called by the Zend\XmlRpc\Client object and as the return value for those calls.

This object as a very important static function Zend\XmlRpc\Value::getXmlRpcValue, this
function acts likes a factory for the Zend\XmlRpc\Value objects

Using this function, users/Zend\XmlRpc\Client object can create the Zend\XmlRpc\Value objects
from PHP variables, XML string or by specifying the exact XML-RPC natvie type

Methods
-------

getType
+++++++

.. function:: getType()


    Get the native XML-RPC type (the type is one of the Value::XMLRPC_TYPE_* constants)

    :rtype: string 



getGenerator
++++++++++++

.. function:: getGenerator()


    Get XML generator instance

    :rtype: \Zend\XmlRpc\Generator\GeneratorInterface 



setGenerator
++++++++++++

.. function:: setGenerator()


    Sets XML generator instance

    :param null|Generator\GeneratorInterface: 

    :rtype: void 



setEncoding
+++++++++++

.. function:: setEncoding()


    Changes the encoding of the generator

    :param string: 

    :rtype: void 



getValue
++++++++

.. function:: getValue()


    Return the value of this object, convert the XML-RPC native value into a PHP variable

    :rtype: mixed 



saveXml
+++++++

.. function:: saveXml()


    Return the XML code that represent a native MXL-RPC value

    :rtype: string 



generateXml
+++++++++++

.. function:: generateXml()


    Generate XML code that represent a native XML/RPC value

    :rtype: void 



getXmlRpcValue
++++++++++++++

.. function:: getXmlRpcValue()


    Creates a Value* object, representing a native XML-RPC value
    A XmlRpcValue object can be created in 3 ways:
    1. Autodetecting the native type out of a PHP variable
       (if $type is not set or equal to Value::AUTO_DETECT_TYPE)
    2. By specifying the native type ($type is one of the Value::XMLRPC_TYPE_* constants)
    3. From a XML string ($type is set to Value::XML_STRING)
    
    By default the value type is autodetected according to it's PHP type

    :param mixed: 
    :param Zend\XmlRpc\Value::constant: 

    :throws Exception\ValueException: 

    :rtype: AbstractValue 



getXmlRpcTypeByValue
++++++++++++++++++++

.. function:: getXmlRpcTypeByValue()


    Get XML-RPC type for a PHP native variable


    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



_phpVarToNativeXmlRpc
+++++++++++++++++++++

.. function:: _phpVarToNativeXmlRpc()


    Transform a PHP native variable into a XML-RPC native value

    :param mixed: The PHP variable for conversion

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractValue 

    :static:  



_xmlStringToNativeXmlRpc
++++++++++++++++++++++++

.. function:: _xmlStringToNativeXmlRpc()


    Transform an XML string into a XML-RPC native value

    :param string|\SimpleXMLElement: A SimpleXMLElement object represent the XML string
It can be also a valid XML string for conversion

    :throws Exception\ValueException: 

    :rtype: \Zend\XmlRpc\AbstractValue 

    :static:  



_createSimpleXMLElement
+++++++++++++++++++++++

.. function:: _createSimpleXMLElement()



_extractTypeAndValue
++++++++++++++++++++

.. function:: _extractTypeAndValue()


    Extract XML/RPC type and value from SimpleXMLElement object

    :param \SimpleXMLElement: 
    :param string: Type bind variable
    :param string: Value bind variable

    :rtype: void 



_setXML
+++++++

.. function:: _setXML()


    @param $xml

    :rtype: void 





Constants
---------

AUTO_DETECT_TYPE
++++++++++++++++

Specify that the XML-RPC native type will be auto detected from a PHP variable type

XML_STRING
++++++++++

Specify that the XML-RPC value will be parsed out from a given XML code

XMLRPC_TYPE_I4
++++++++++++++

All the XML-RPC native types

XMLRPC_TYPE_INTEGER
+++++++++++++++++++

XMLRPC_TYPE_I8
++++++++++++++

XMLRPC_TYPE_APACHEI8
++++++++++++++++++++

XMLRPC_TYPE_DOUBLE
++++++++++++++++++

XMLRPC_TYPE_BOOLEAN
+++++++++++++++++++

XMLRPC_TYPE_STRING
++++++++++++++++++

XMLRPC_TYPE_DATETIME
++++++++++++++++++++

XMLRPC_TYPE_BASE64
++++++++++++++++++

XMLRPC_TYPE_ARRAY
+++++++++++++++++

XMLRPC_TYPE_STRUCT
++++++++++++++++++

XMLRPC_TYPE_NIL
+++++++++++++++

XMLRPC_TYPE_APACHENIL
+++++++++++++++++++++

