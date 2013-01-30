.. Soap/Client/DotNet.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Soap\\Client\\DotNet
==========================

.NET SOAP client

Class is intended to be used with .Net Web Services.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param array: 



_doRequest
++++++++++

.. function:: _doRequest()


    Do request proxy method.

    :param CommonClient: Actual SOAP client.
    :param string: The request body.
    :param string: The SOAP URI.
    :param string: The SOAP action to call.
    :param integer: The SOAP version to use.
    :param integer: (Optional) The number 1 if a response is not expected.

    :rtype: string The XML SOAP response.



getCurlClient
+++++++++++++

.. function:: getCurlClient()


    Returns the cURL client that is being used.

    :rtype: \Zend\Http\Client\Adapter\Curl The cURL client.



getLastRequestHeaders
+++++++++++++++++++++

.. function:: getLastRequestHeaders()


    Retrieve request headers.

    :rtype: string Request headers.



getLastResponseHeaders
++++++++++++++++++++++

.. function:: getLastResponseHeaders()


    Retrieve response headers (as string)

    :rtype: string Response headers.



setCurlClient
+++++++++++++

.. function:: setCurlClient()


    Sets the cURL client to use.

    :param CurlClient: The cURL client.

    :rtype: self Fluent interface.



setOptions
++++++++++

.. function:: setOptions()


    Sets options.
    
    Allows setting options as an associative array of option => value pairs.

    :param array|\Traversable: Options.

    :throws \InvalidArgumentException: If an unsupported option is passed.

    :rtype: self Fluent interface.



_preProcessArguments
++++++++++++++++++++

.. function:: _preProcessArguments()


    Perform arguments pre-processing
    
    My be overridden in descendant classes

    :param array: 

    :throws Exception\RuntimeException: 

    :rtype: array 



_preProcessResult
+++++++++++++++++

.. function:: _preProcessResult()


    Perform result pre-processing
    
    My be overridden in descendant classes

    :param object: 

    :rtype: mixed 



flattenHeaders
++++++++++++++

.. function:: flattenHeaders()


    Flattens an HTTP headers array into a string.

    :param array: The headers to flatten.

    :rtype: string The headers string.



