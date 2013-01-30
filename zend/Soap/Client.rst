.. Soap/Client.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Soap\\Client
==================

\Zend\Soap\Client

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param array|Traversable: 

    :throws Exception\ExtensionNotLoadedException: 



setWSDL
+++++++

.. function:: setWSDL()


    Set wsdl

    :param string: 

    :rtype: Client 



getWSDL
+++++++

.. function:: getWSDL()


    Get wsdl

    :rtype: string 



setOptions
++++++++++

.. function:: setOptions()


    Set Options
    
    Allows setting options as an associative array of option => value pairs.

    :param array|Traversable: 

    :rtype: Client 

    :throws: Exception\InvalidArgumentException 



getOptions
++++++++++

.. function:: getOptions()


    Return array of options suitable for using with SoapClient constructor

    :rtype: array 



setSoapVersion
++++++++++++++

.. function:: setSoapVersion()


    Set SOAP version

    :param int: One of the SOAP_1_1 or SOAP_1_2 constants

    :rtype: Client 

    :throws: Exception\InvalidArgumentException with invalid soap version argument



getSoapVersion
++++++++++++++

.. function:: getSoapVersion()


    Get SOAP version

    :rtype: int 



setClassmap
+++++++++++

.. function:: setClassmap()


    Set classmap

    :param array: 

    :rtype: Client 

    :throws: Exception\InvalidArgumentException for any invalid class in the class map



getClassmap
+++++++++++

.. function:: getClassmap()


    Retrieve classmap

    :rtype: mixed 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set encoding

    :param string: 

    :rtype: Client 

    :throws: Exception\InvalidArgumentException with invalid encoding argument



getEncoding
+++++++++++

.. function:: getEncoding()


    Get encoding

    :rtype: string 



validateUrn
+++++++++++

.. function:: validateUrn()


    Check for valid URN

    :param string: 

    :rtype: bool 

    :throws: Exception\InvalidArgumentException on invalid URN



setUri
++++++

.. function:: setUri()


    Set URI
    
    URI in Web Service the target namespace

    :param string: 

    :rtype: Client 

    :throws: Exception\ExceptionInterface with invalid uri argument



getUri
++++++

.. function:: getUri()


    Retrieve URI

    :rtype: string 



setLocation
+++++++++++

.. function:: setLocation()


    Set Location
    
    URI in Web Service the target namespace

    :param string: 

    :rtype: Client 

    :throws: Exception\ExceptionInterface with invalid uri argument



getLocation
+++++++++++

.. function:: getLocation()


    Retrieve URI

    :rtype: string 



setStyle
++++++++

.. function:: setStyle()


    Set request style

    :param int: One of the SOAP_RPC or SOAP_DOCUMENT constants

    :rtype: Client 

    :throws: Exception\InvalidArgumentException with invalid style argument



getStyle
++++++++

.. function:: getStyle()


    Get request style

    :rtype: int 



setEncodingMethod
+++++++++++++++++

.. function:: setEncodingMethod()


    Set message encoding method

    :param int: One of the SOAP_ENCODED or SOAP_LITERAL constants

    :rtype: Client 

    :throws: Exception\InvalidArgumentException with invalid message encoding method argument



getEncodingMethod
+++++++++++++++++

.. function:: getEncodingMethod()


    Get message encoding method

    :rtype: int 



setHttpLogin
++++++++++++

.. function:: setHttpLogin()


    Set HTTP login

    :param string: 

    :rtype: Client 



getHttpLogin
++++++++++++

.. function:: getHttpLogin()


    Retrieve HTTP Login

    :rtype: string 



setHttpPassword
+++++++++++++++

.. function:: setHttpPassword()


    Set HTTP password

    :param string: 

    :rtype: Client 



getHttpPassword
+++++++++++++++

.. function:: getHttpPassword()


    Retrieve HTTP Password

    :rtype: string 



setProxyHost
++++++++++++

.. function:: setProxyHost()


    Set proxy host

    :param string: 

    :rtype: Client 



getProxyHost
++++++++++++

.. function:: getProxyHost()


    Retrieve proxy host

    :rtype: string 



setProxyPort
++++++++++++

.. function:: setProxyPort()


    Set proxy port

    :param int: 

    :rtype: Client 



getProxyPort
++++++++++++

.. function:: getProxyPort()


    Retrieve proxy port

    :rtype: int 



setProxyLogin
+++++++++++++

.. function:: setProxyLogin()


    Set proxy login

    :param string: 

    :rtype: Client 



getProxyLogin
+++++++++++++

.. function:: getProxyLogin()


    Retrieve proxy login

    :rtype: string 



setProxyPassword
++++++++++++++++

.. function:: setProxyPassword()


    Set proxy password

    :param string: 

    :rtype: Client 



setHttpsCertificate
+++++++++++++++++++

.. function:: setHttpsCertificate()


    Set HTTPS client certificate path

    :param string: local certificate path

    :rtype: Client 

    :throws: Exception\InvalidArgumentException with invalid local certificate path argument



getHttpsCertificate
+++++++++++++++++++

.. function:: getHttpsCertificate()


    Get HTTPS client certificate path

    :rtype: string 



setHttpsCertPassphrase
++++++++++++++++++++++

.. function:: setHttpsCertPassphrase()


    Set HTTPS client certificate passphrase

    :param string: 

    :rtype: Client 



getHttpsCertPassphrase
++++++++++++++++++++++

.. function:: getHttpsCertPassphrase()


    Get HTTPS client certificate passphrase

    :rtype: string 



setCompressionOptions
+++++++++++++++++++++

.. function:: setCompressionOptions()


    Set compression options

    :param int|null: 

    :rtype: Client 



getCompressionOptions
+++++++++++++++++++++

.. function:: getCompressionOptions()


    Get Compression options

    :rtype: int 



getProxyPassword
++++++++++++++++

.. function:: getProxyPassword()


    Retrieve proxy password

    :rtype: string 



setStreamContext
++++++++++++++++

.. function:: setStreamContext()


    Set Stream Context

    :param resource: 

    :rtype: Client 

    :throws: Exception\InvalidArgumentException if $context is not a valid stream resource



getStreamContext
++++++++++++++++

.. function:: getStreamContext()


    Get Stream Context

    :rtype: resource 



setSoapFeatures
+++++++++++++++

.. function:: setSoapFeatures()


    Set the SOAP Feature options.

    :param string|int: 

    :rtype: Client 



getSoapFeatures
+++++++++++++++

.. function:: getSoapFeatures()


    Return current SOAP Features options

    :rtype: int 



setWSDLCache
++++++++++++

.. function:: setWSDLCache()


    Set the SOAP WSDL Caching Options

    :param string|int|bool|null: 

    :rtype: Client 



getWSDLCache
++++++++++++

.. function:: getWSDLCache()


    Get current SOAP WSDL Caching option

    :rtype: int 



setUserAgent
++++++++++++

.. function:: setUserAgent()


    Set the string to use in User-Agent header

    :param string|null: 

    :rtype: Client 



getUserAgent
++++++++++++

.. function:: getUserAgent()


    Get current string to use in User-Agent header

    :rtype: string|null 



getLastRequest
++++++++++++++

.. function:: getLastRequest()


    Retrieve request XML

    :rtype: string 



getLastResponse
+++++++++++++++

.. function:: getLastResponse()


    Get response XML

    :rtype: string 



getLastRequestHeaders
+++++++++++++++++++++

.. function:: getLastRequestHeaders()


    Retrieve request headers

    :rtype: string 



getLastResponseHeaders
++++++++++++++++++++++

.. function:: getLastResponseHeaders()


    Retrieve response headers (as string)

    :rtype: string 



getLastMethod
+++++++++++++

.. function:: getLastMethod()


    Retrieve last invoked method

    :rtype: string 



_doRequest
++++++++++

.. function:: _doRequest()


    Do request proxy method.
    
    May be overridden in subclasses


    :param Client\Common: 
    :param string: 
    :param string: 
    :param string: 
    :param int: 
    :param int: 

    :rtype: mixed 



_initSoapClientObject
+++++++++++++++++++++

.. function:: _initSoapClientObject()


    Initialize SOAP Client object




_preProcessArguments
++++++++++++++++++++

.. function:: _preProcessArguments()


    Perform arguments pre-processing
    
    My be overridden in descendant classes

    :param array: 

    :rtype: array 



_preProcessResult
+++++++++++++++++

.. function:: _preProcessResult()


    Perform result pre-processing
    
    My be overridden in descendant classes

    :param array: 

    :rtype: array 



addSoapInputHeader
++++++++++++++++++

.. function:: addSoapInputHeader()


    Add SOAP input header

    :param SoapHeader: 
    :param bool: 

    :rtype: Client 



resetSoapInputHeaders
+++++++++++++++++++++

.. function:: resetSoapInputHeaders()


    Reset SOAP input headers

    :rtype: Client 



getLastSoapOutputHeaderObjects
++++++++++++++++++++++++++++++

.. function:: getLastSoapOutputHeaderObjects()


    Get last SOAP output headers

    :rtype: array 



__call
++++++

.. function:: __call()


    Perform a SOAP call

    :param string: 
    :param array: 

    :rtype: mixed 



call
++++

.. function:: call()


    Send an RPC request to the service for a specific method.

    :param string: Name of the method we want to call.
    :param array: List of parameters for the method.

    :rtype: mixed Returned results.



getFunctions
++++++++++++

.. function:: getFunctions()


    Return a list of available functions

    :rtype: array 

    :throws: Exception\UnexpectedValueException 



getTypes
++++++++

.. function:: getTypes()


    Return a list of SOAP types

    :rtype: array 

    :throws: Exception\UnexpectedValueException 



setSoapClient
+++++++++++++

.. function:: setSoapClient()


    @param SoapClient $soapClient

    :rtype: Client 



getSoapClient
+++++++++++++

.. function:: getSoapClient()


    @return SoapClient



setCookie
+++++++++

.. function:: setCookie()


    @param string $cookieName

    :param string: 

    :rtype: Client 



