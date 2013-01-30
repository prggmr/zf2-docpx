.. Soap/Wsdl.php generated using docpx on 01/30/13 03:32am


Zend\\Soap\\Wsdl
================

\Zend\Soap\Wsdl

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string: Name of the Web Service being Described
    :param string|Uri: URI where the WSDL will be available
    :param null|ComplexTypeStrategy: Strategy for detection of complex types
    :param null|array: Map of PHP Class names to WSDL QNames

    :throws Exception\RuntimeException: 



escapeUri
---------

.. function:: escapeUri()


    URL encode query part of the URI if it is present.

    :param string: 

    :rtype: string 



decodeAmpersand
---------------

.. function:: decodeAmpersand()


    Convert encoded ampersand back to decoded value, to avoid double encoding by DOMElement::setAttribute()

    :param $uri: 

    :rtype: mixed 



getTargetNamespace
------------------

.. function:: getTargetNamespace()


    Retrieve target namespace of the WSDL document.

    :rtype: string 



getClassMap
-----------

.. function:: getClassMap()


    Get the class map of php to wsdl qname types.

    :rtype: array 



setClassMap
-----------

.. function:: setClassMap()


    Set the class map of php to wsdl qname types.



setUri
------

.. function:: setUri()


    Set a new uri for this WSDL

    :param string|Uri: 

    :rtype: \Zend\Soap\Wsdl 



setComplexTypeStrategy
----------------------

.. function:: setComplexTypeStrategy()


    Set a strategy for complex type detection and handling

    :param ComplexTypeStrategy: 

    :rtype: \Zend\Soap\Wsdl 



getComplexTypeStrategy
----------------------

.. function:: getComplexTypeStrategy()


    Get the current complex type strategy

    :rtype: ComplexTypeStrategy 



addMessage
----------

.. function:: addMessage()


    Add a {@link http://www.w3.org/TR/wsdl#_messages message} element to the WSDL

    :param string: Name for the {@link http://www.w3.org/TR/wsdl#_messages message}
    :param array: An array of {@link http://www.w3.org/TR/wsdl#_message parts}
                    The array is constructed like: 'name of part' => 'part xml schema data type'
                    or 'name of part' => array('type' => 'part xml schema type')
                    or 'name of part' => array('element' => 'part xml element name')

    :rtype: DOMElement The new message's XML_Tree_Node for use in {@link function addDocumentation}



addPortType
-----------

.. function:: addPortType()


    Add a {@link http://www.w3.org/TR/wsdl#_porttypes portType} element to the WSDL

    :param string: portType element's name

    :rtype: DOMElement The new portType's XML_Tree_Node for use in {@link function addPortOperation} and {@link function addDocumentation}



addPortOperation
----------------

.. function:: addPortOperation()


    Add an {@link http://www.w3.org/TR/wsdl#request-response operation} element to a portType element

    :param DOMElement: a portType XML_Tree_Node, from {@link function addPortType}
    :param string: Operation name
    :param bool|string: Input Message
    :param bool|string: Output Message
    :param bool|string: Fault Message

    :rtype: DOMElement The new operation's XML_Tree_Node for use in {@link function addDocumentation}



addBinding
----------

.. function:: addBinding()


    Add a {@link http://www.w3.org/TR/wsdl#_bindings binding} element to WSDL

    :param string: Name of the Binding
    :param string: name of the portType to bind

    :rtype: DOMElement The new binding's XML_Tree_Node for use with {@link function addBindingOperation} and {@link function addDocumentation}



addBindingOperation
-------------------

.. function:: addBindingOperation()


    Add an operation to a binding element

    :param DOMElement: A binding XML_Tree_Node returned by {@link function addBinding}
    :param string: 
    :param bool|array: An array of attributes for the input element, allowed keys are: 'use', 'namespace', 'encodingStyle'. {@link http://www.w3.org/TR/wsdl#_soap:body More Information}
    :param bool|array: An array of attributes for the output element, allowed keys are: 'use', 'namespace', 'encodingStyle'. {@link http://www.w3.org/TR/wsdl#_soap:body More Information}
    :param bool|array: An array of attributes for the fault element, allowed keys are: 'name', 'use', 'namespace', 'encodingStyle'. {@link http://www.w3.org/TR/wsdl#_soap:body More Information}
    :param int: SOAP version to be used in binding operation. 1.1 used by default.

    :rtype: DOMElement The new Operation's XML_Tree_Node for use with {@link function addSoapOperation} and {@link function addDocumentation}



addSoapBinding
--------------

.. function:: addSoapBinding()


    Add a {@link http://www.w3.org/TR/wsdl#_soap:binding SOAP binding} element to a Binding element

    :param DOMElement: A binding XML_Tree_Node returned by {@link function addBinding}
    :param string: binding style, possible values are "rpc" (the default) and "document"
    :param string: Transport method (defaults to HTTP)
    :param int: SOAP version to be used in binding. 1.1 used by default.

    :rtype: DOMElement 



addSoapOperation
----------------

.. function:: addSoapOperation()


    Add a {@link http://www.w3.org/TR/wsdl#_soap:operation SOAP operation} to an operation element

    :param DOMElement: An operation XML_Tree_Node returned by {@link function addBindingOperation}
    :param string: SOAP Action
    :param int: SOAP version to be used in operation. 1.1 used by default.

    :rtype: DOMElement 



addService
----------

.. function:: addService()


    Add a {@link http://www.w3.org/TR/wsdl#_services service} element to the WSDL

    :param string: Service Name
    :param string: Name of the port for the service
    :param string: Binding for the port
    :param string: SOAP Address for the service
    :param int: SOAP version to be used in service. 1.1 used by default.

    :rtype: DOMElement The new service's XML_Tree_Node for use with {@link function addDocumentation}



addDocumentation
----------------

.. function:: addDocumentation()


    Add a documentation element to any element in the WSDL.
    
    Note that the WSDL {@link http://www.w3.org/TR/wsdl#_documentation specification} uses 'document',
    but the WSDL {@link http://schemas.xmlsoap.org/wsdl/ schema} uses 'documentation' instead.
    The {@link http://www.ws-i.org/Profiles/BasicProfile-1.1-2004-08-24.html#WSDL_documentation_Element WS-I Basic Profile 1.1} recommends using 'documentation'.

    :param DOMElement: An XML_Tree_Node returned by another method to add the documentation to
    :param string: Human readable documentation for the node

    :rtype: DOMElement The documentation element



addTypes
--------

.. function:: addTypes()


    Add WSDL Types element

    :param DOMNode: A DOM Node with all the XML Schema types defined in it



addType
-------

.. function:: addType()


    Add a complex type name that is part of this WSDL and can be used in signatures.

    :param string: 
    :param string: 

    :rtype: \Zend\Soap\Wsdl 



getTypes
--------

.. function:: getTypes()


    Return an array of all currently included complex types

    :rtype: array 



getSchema
---------

.. function:: getSchema()


    Return the Schema node of the WSDL

    :rtype: DOMElement 



toXML
-----

.. function:: toXML()


    Return the WSDL as XML

    :rtype: string WSDL as XML



toDomDocument
-------------

.. function:: toDomDocument()


    Return DOM Document

    :rtype: DOMDocument 



dump
----

.. function:: dump()


    Echo the WSDL as XML to stdout or save the WSDL to a file

    :param bool|string: Filename to save the output (Optional)

    :rtype: bool 



getType
-------

.. function:: getType()


    Returns an XSD Type for the given PHP type

    :param string: PHP Type to get the XSD type for

    :rtype: string 



addSchemaTypeSection
--------------------

.. function:: addSchemaTypeSection()


    This function makes sure a complex types section and schema additions are set.

    :rtype: \Zend\Soap\Wsdl 



translateType
-------------

.. function:: translateType()


    Translate PHP type into WSDL QName

    :param string: 

    :rtype: string QName



addComplexType
--------------

.. function:: addComplexType()


    Add a {@link http://www.w3.org/TR/wsdl#_types types} data type definition

    :param string: Name of the class to be specified

    :rtype: string XSD Type for the given PHP type



_parseElement
-------------

.. function:: _parseElement()


    Parse an xsd:element represented as an array into a DOMElement.

    :param array: an xsd:element represented as an array

    :throws Exception\RuntimeException: if $element is not an array

    :rtype: DOMElement parsed element



addElement
----------

.. function:: addElement()


    Add an xsd:element represented as an array to the schema.
    
    Array keys represent attribute names and values their respective value.
    The 'sequence', 'all' and 'choice' keys must have an array of elements as their value,
    to add them to a nested complexType.
    
    Example: array( 'name' => 'MyElement',
                    'sequence' => array( array('name' => 'myString', 'type' => 'string'),
                                         array('name' => 'myInteger', 'type' => 'int') ) );
    Resulting XML: <xsd:element name="MyElement"><xsd:complexType><xsd:sequence>
                     <xsd:element name="myString" type="string"/>
                     <xsd:element name="myInteger" type="int"/>
                   </xsd:sequence></xsd:complexType></xsd:element>

    :param array: an xsd:element represented as an array

    :rtype: string xsd:element for the given element array





Constants
+++++++++

XML_NS
======

XML_NS_URI
==========

WSDL_NS
=======

WSDL_NS_URI
===========

SOAP_11_NS
==========

SOAP_11_NS_URI
==============

SOAP_12_NS
==========

SOAP_12_NS_URI
==============

SOAP_ENC_NS
===========

SOAP_ENC_URI
============

XSD_NS
======

XSD_NS_URI
==========

TYPES_NS
========

