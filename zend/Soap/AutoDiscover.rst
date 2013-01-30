.. Soap/AutoDiscover.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Soap\\AutoDiscover
========================

\Zend\Soap\AutoDiscover

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param ComplexTypeStrategy: 
    :param string|Uri\Uri: 
    :param string: 
    :param array: 



setDiscoveryStrategy
++++++++++++++++++++

.. function:: setDiscoveryStrategy()


    Set the discovery strategy for method type and other information.

    :param DiscoveryStrategy: 

    :rtype: AutoDiscover 



getDiscoveryStrategy
++++++++++++++++++++

.. function:: getDiscoveryStrategy()


    @return DiscoveryStrategy



getClassMap
+++++++++++

.. function:: getClassMap()


    Get the class map of php to wsdl qname types.

    :rtype: array 



setClassMap
+++++++++++

.. function:: setClassMap()


    Set the class map of php to wsdl qname types.



setServiceName
++++++++++++++

.. function:: setServiceName()


    Set service name

    :param string: 

    :rtype: AutoDiscover 



getServiceName
++++++++++++++

.. function:: getServiceName()


    Get service name

    :rtype: string 

    :throws: Exception\RuntimeException 



setUri
++++++

.. function:: setUri()


    Set the location at which the WSDL file will be available.

    :param Uri\Uri|string: 

    :rtype: AutoDiscover 

    :throws: Exception\InvalidArgumentException 



getUri
++++++

.. function:: getUri()


    Return the current Uri that the SOAP WSDL Service will be located at.

    :rtype: Uri\Uri 

    :throws: Exception\RuntimeException 



setWsdlClass
++++++++++++

.. function:: setWsdlClass()


    Set the name of the WSDL handling class.

    :param string: 

    :rtype: AutoDiscover 

    :throws: Exception\InvalidArgumentException 



getWsdlClass
++++++++++++

.. function:: getWsdlClass()


    Return the name of the WSDL handling class.

    :rtype: string 



setOperationBodyStyle
+++++++++++++++++++++

.. function:: setOperationBodyStyle()


    Set options for all the binding operations soap:body elements.
    
    By default the options are set to 'use' => 'encoded' and
    'encodingStyle' => "http://schemas.xmlsoap.org/soap/encoding/".

    :param array: 

    :rtype: AutoDiscover 

    :throws: Exception\InvalidArgumentException 



setBindingStyle
+++++++++++++++

.. function:: setBindingStyle()


    Set Binding soap:binding style.
    
    By default 'style' is 'rpc' and 'transport' is 'http://schemas.xmlsoap.org/soap/http'.

    :param array: 

    :rtype: AutoDiscover 



setComplexTypeStrategy
++++++++++++++++++++++

.. function:: setComplexTypeStrategy()


    Set the strategy that handles functions and classes that are added AFTER this call.

    :param ComplexTypeStrategy: 

    :rtype: AutoDiscover 



setClass
++++++++

.. function:: setClass()


    Set the Class the SOAP server will use

    :param string: Class Name

    :rtype: AutoDiscover 



addFunction
+++++++++++

.. function:: addFunction()


    Add a Single or Multiple Functions to the WSDL

    :param string: Function Name

    :rtype: AutoDiscover 



_generateClass
++++++++++++++

.. function:: _generateClass()


    Generate the WSDL for a service class.

    :rtype: Wsdl 



_generateFunctions
++++++++++++++++++

.. function:: _generateFunctions()


    Generate the WSDL for a set of functions.

    :rtype: Wsdl 



_generateWsdl
+++++++++++++

.. function:: _generateWsdl()


    Generate the WSDL for a set of reflection method instances.

    :param array: 

    :rtype: Wsdl 



_addFunctionToWsdl
++++++++++++++++++

.. function:: _addFunctionToWsdl()


    Add a function to the WSDL document.

    :param $function: function to add
    :param $wsdl: WSDL document
    :param $port: wsdl:portType
    :param $binding: wsdl:binding

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



generate
++++++++

.. function:: generate()


    Generate the WSDL file from the configured input.


    :rtype: Wsdl 



dump
++++

.. function:: dump()


    Proxy to WSDL dump function

    :param string: 

    :rtype: bool 

    :throws: \Zend\Soap\Exception\RuntimeException 



toXml
+++++

.. function:: toXml()


    Proxy to WSDL toXml() function

    :rtype: string 

    :throws: \Zend\Soap\Exception\RuntimeException 



handle
++++++

.. function:: handle()


    Handle WSDL document.



