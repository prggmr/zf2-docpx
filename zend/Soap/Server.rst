.. Soap/Server.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Soap\\Server
==================

Zend_Soap_Server

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Sets display_errors INI setting to off (prevent client errors due to bad
    XML in response). Registers {@link handlePhpErrors()} as error handler
    for E_USER_ERROR.
    
    If $wsdl is provided, it is passed on to {@link setWSDL()}; if any
    options are specified, they are passed on to {@link setOptions()}.

    :param string: 
    :param array: 

    :throws Exception\ExtensionNotLoadedException: 



setOptions
++++++++++

.. function:: setOptions()


    Set Options
    
    Allows setting options as an associative array of option => value pairs.

    :param array|Traversable: 

    :rtype: \Zend\Soap\Server 



getOptions
++++++++++

.. function:: getOptions()


    Return array of options suitable for using with SoapServer constructor

    :rtype: array 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: Server 

    :throws: Exception\InvalidArgumentException with invalid encoding argument



getEncoding
+++++++++++

.. function:: getEncoding()


    Get encoding

    :rtype: string 



setSoapVersion
++++++++++++++

.. function:: setSoapVersion()


    Set SOAP version

    :param int: One of the SOAP_1_1 or SOAP_1_2 constants

    :rtype: Server 

    :throws: Exception\InvalidArgumentException with invalid soap version argument



getSoapVersion
++++++++++++++

.. function:: getSoapVersion()


    Get SOAP version

    :rtype: int 



validateUrn
+++++++++++

.. function:: validateUrn()


    Check for valid URN

    :param string: 

    :rtype: true 

    :throws: Exception\InvalidArgumentException on invalid URN



setActor
++++++++

.. function:: setActor()


    Set actor
    
    Actor is the actor URI for the server.

    :param string: 

    :rtype: Server 



getActor
++++++++

.. function:: getActor()


    Retrieve actor

    :rtype: string 



setUri
++++++

.. function:: setUri()


    Set URI
    
    URI in SoapServer is actually the target namespace, not a URI; $uri must begin with 'urn:'.

    :param string: 

    :rtype: Server 



getUri
++++++

.. function:: getUri()


    Retrieve URI

    :rtype: string 



setClassmap
+++++++++++

.. function:: setClassmap()


    Set classmap

    :param array: 

    :rtype: Server 

    :throws: Exception\InvalidArgumentException for any invalid class in the class map



getClassmap
+++++++++++

.. function:: getClassmap()


    Retrieve classmap

    :rtype: mixed 



setWSDL
+++++++

.. function:: setWSDL()


    Set wsdl

    :param string: URI or path to a WSDL

    :rtype: Server 



getWSDL
+++++++

.. function:: getWSDL()


    Retrieve wsdl

    :rtype: string 



setSoapFeatures
+++++++++++++++

.. function:: setSoapFeatures()


    Set the SOAP Feature options.

    :param string|int: 

    :rtype: Server 



getSoapFeatures
+++++++++++++++

.. function:: getSoapFeatures()


    Return current SOAP Features options

    :rtype: int 



setWSDLCache
++++++++++++

.. function:: setWSDLCache()


    Set the SOAP WSDL Caching Options

    :param string|int|bool: 

    :rtype: Server 



getWSDLCache
++++++++++++

.. function:: getWSDLCache()


    Get current SOAP WSDL Caching option



addFunction
+++++++++++

.. function:: addFunction()


    Attach a function as a server method

    :param array|string: Function name, array of function names to attach,
or SOAP_FUNCTIONS_ALL to attach all functions
    :param string: Ignored

    :rtype: Server 

    :throws: Exception\InvalidArgumentException on invalid functions



setClass
++++++++

.. function:: setClass()


    Attach a class to a server
    
    Accepts a class name to use when handling requests. Any additional
    arguments will be passed to that class' constructor when instantiated.
    
    See {@link setObject()} to set preconfigured object instances as request handlers.

    :param string|object: Class name or object instance which executes SOAP Requests at endpoint.
    :param string: 
    :param $argv: 

    :rtype: Server 

    :throws: Exception\InvalidArgumentException if called more than once, or if class
does not exist



setObject
+++++++++

.. function:: setObject()


    Attach an object to a server
    
    Accepts an instanciated object to use when handling requests.

    :param object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Server 



getFunctions
++++++++++++

.. function:: getFunctions()


    Return a server definition array
    
    Returns a list of all functions registered with {@link addFunction()},
    merged with all public methods of the class set with {@link setClass()}
    (if any).


    :rtype: array 



loadFunctions
+++++++++++++

.. function:: loadFunctions()


    Unimplemented: Load server definition

    :param array: 

    :rtype: void 

    :throws: Exception\RuntimeException Unimplemented



setPersistence
++++++++++++++

.. function:: setPersistence()


    Set server persistence

    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Server 



getPersistence
++++++++++++++

.. function:: getPersistence()


    Get server persistence

    :rtype: int 



_setRequest
+++++++++++

.. function:: _setRequest()


    Set request
    
    $request may be any of:
    - DOMDocument; if so, then cast to XML
    - DOMNode; if so, then grab owner document and cast to XML
    - SimpleXMLElement; if so, then cast to XML
    - stdClass; if so, calls __toString() and verifies XML
    - string; if so, verifies XML

    :param DOMDocument|DOMNode|SimpleXMLElement|stdClass|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Server 



getLastRequest
++++++++++++++

.. function:: getLastRequest()


    Retrieve request XML

    :rtype: string 



setReturnResponse
+++++++++++++++++

.. function:: setReturnResponse()


    Set return response flag
    
    If true, {@link handle()} will return the response instead of
    automatically sending it back to the requesting client.
    
    The response is always available via {@link getResponse()}.

    :param bool: 

    :rtype: Server 



getReturnResponse
+++++++++++++++++

.. function:: getReturnResponse()


    Retrieve return response flag

    :rtype: bool 



getResponse
+++++++++++

.. function:: getResponse()


    Get response XML

    :rtype: string 



_getSoap
++++++++

.. function:: _getSoap()


    Get SoapServer object
    
    Uses {@link $wsdl} and return value of {@link getOptions()} to instantiate
    SoapServer object, and then registers any functions or class with it, as
    well as persistence.

    :rtype: \SoapServer 



handle
++++++

.. function:: handle()


    Handle a request
    
    Instantiates SoapServer object with options set in object, and
    dispatches its handle() method.
    
    $request may be any of:
    - DOMDocument; if so, then cast to XML
    - DOMNode; if so, then grab owner document and cast to XML
    - SimpleXMLElement; if so, then cast to XML
    - stdClass; if so, calls __toString() and verifies XML
    - string; if so, verifies XML
    
    If no request is passed, pulls request using php:://input (for
    cross-platform compatibility purposes).

    :param DOMDocument|DOMNode|SimpleXMLElement|stdClass|string: Optional request

    :rtype: void|string 



_initializeSoapErrorContext
+++++++++++++++++++++++++++

.. function:: _initializeSoapErrorContext()


    Method initializes the error context that the SOAPServer environment will run in.

    :rtype: bool display_errors original value



registerFaultException
++++++++++++++++++++++

.. function:: registerFaultException()


    Register a valid fault exception

    :param string|array: Exception class or array of exception classes

    :rtype: Server 



deregisterFaultException
++++++++++++++++++++++++

.. function:: deregisterFaultException()


    Deregister a fault exception from the fault exception stack

    :param string: 

    :rtype: bool 



getFaultExceptions
++++++++++++++++++

.. function:: getFaultExceptions()


    Return fault exceptions list

    :rtype: array 



fault
+++++

.. function:: fault()


    Generate a server fault
    
    Note that the arguments are reverse to those of SoapFault.
    
    If an exception is passed as the first argument, its message and code
    will be used to create the fault object if it has been registered via
    {@Link registerFaultException()}.


    :param string|\Exception: 
    :param string: SOAP Fault Codes

    :rtype: SoapFault 



handlePhpErrors
+++++++++++++++

.. function:: handlePhpErrors()


    Throw PHP errors as SoapFaults

    :param int: 
    :param string: 
    :param string: 
    :param int: 
    :param array: 

    :rtype: void 

    :throws: SoapFault 



