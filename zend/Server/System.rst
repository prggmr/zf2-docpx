.. XmlRpc/Server/System.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Server\\System
============================

XML-RPC system.* methods

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param \Zend\XmlRpc\Server: 



listMethods
+++++++++++

.. function:: listMethods()


    List all available XMLRPC methods
    
    Returns an array of methods.

    :rtype: array 



methodHelp
++++++++++

.. function:: methodHelp()


    Display help message for an XMLRPC method

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



methodSignature
+++++++++++++++

.. function:: methodSignature()


    Return a method signature

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: array 



multicall
+++++++++

.. function:: multicall()


    Multicall - boxcar feature of XML-RPC for calling multiple methods
    in a single request.
    
    Expects a an array of structs representing method calls, each element
    having the keys:
    - methodName
    - params
    
    Returns an array of responses, one for each method called, with the value
    returned by the method. If an error occurs for a given method, returns a
    struct with a fault response.


    :param array: 

    :rtype: array 



