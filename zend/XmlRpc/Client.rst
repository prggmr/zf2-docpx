.. XmlRpc/Client.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Client
====================

An XML-RPC client implementation

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new XML-RPC client to a remote server

    :param string: Full address of the XML-RPC service
                            (e.g. http://time.xmlrpc.com/RPC2)
    :param \Zend\Http\Client: HTTP Client to use for requests



setHttpClient
+++++++++++++

.. function:: setHttpClient()


    Sets the HTTP client object to use for connecting the XML-RPC server.

    :param \Zend\Http\Client: 

    :rtype: \Zend\Http\Client 



getHttpClient
+++++++++++++

.. function:: getHttpClient()


    Gets the HTTP client object.

    :rtype: \Zend\Http\Client 



setIntrospector
+++++++++++++++

.. function:: setIntrospector()


    Sets the object used to introspect remote servers

    :param \Zend\XmlRpc\Client\ServerIntrospection: 

    :rtype: \Zend\XmlRpc\Client\ServerIntrospection 



getIntrospector
+++++++++++++++

.. function:: getIntrospector()


    Gets the introspection object.

    :rtype: \Zend\XmlRpc\Client\ServerIntrospection 



getLastRequest
++++++++++++++

.. function:: getLastRequest()


    The request of the last method call

    :rtype: \Zend\XmlRpc\Request 



getLastResponse
+++++++++++++++

.. function:: getLastResponse()


    The response received from the last method call

    :rtype: \Zend\XmlRpc\Response 



getProxy
++++++++

.. function:: getProxy()


    Returns a proxy object for more convenient method calls

    :param string: Namespace to proxy or empty string for none

    :rtype: \Zend\XmlRpc\Client\ServerProxy 



setSkipSystemLookup
+++++++++++++++++++

.. function:: setSkipSystemLookup()


    Set skip system lookup flag

    :param bool: 

    :rtype: \Zend\XmlRpc\Client 



skipSystemLookup
++++++++++++++++

.. function:: skipSystemLookup()


    Skip system lookup when determining if parameter should be array or struct?

    :rtype: bool 



doRequest
+++++++++

.. function:: doRequest()


    Perform an XML-RPC request and return a response.

    :param \Zend\XmlRpc\Request: 
    :param null|\Zend\XmlRpc\Response: 

    :rtype: void 

    :throws: \Zend\XmlRpc\Client\Exception\HttpException 



call
++++

.. function:: call()


    Send an XML-RPC request to the service (for a specific method)

    :param string: Name of the method we want to call
    :param array: Array of parameters for the method

    :rtype: mixed 

    :throws: \Zend\XmlRpc\Client\Exception\FaultException 



_createRequest
++++++++++++++

.. function:: _createRequest()


    Create request object

    :param string: 
    :param array: 

    :rtype: \Zend\XmlRpc\Request 



