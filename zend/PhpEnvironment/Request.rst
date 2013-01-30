.. Http/PhpEnvironment/Request.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\PhpEnvironment\\Request
===================================

HTTP Request for current PHP environment

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Construct
    Instantiates request.



getContent
++++++++++

.. function:: getContent()


    Get raw request body

    :rtype: string 



setCookies
++++++++++

.. function:: setCookies()


    Set cookies
    
    Instantiate and set cookies.

    :param $cookie: 

    :rtype: Request 



setRequestUri
+++++++++++++

.. function:: setRequestUri()


    Set the request URI.

    :param string: 

    :rtype: self 



getRequestUri
+++++++++++++

.. function:: getRequestUri()


    Get the request URI.

    :rtype: string 



setBaseUrl
++++++++++

.. function:: setBaseUrl()


    Set the base URL.

    :param string: 

    :rtype: self 



getBaseUrl
++++++++++

.. function:: getBaseUrl()


    Get the base URL.

    :rtype: string 



setBasePath
+++++++++++

.. function:: setBasePath()


    Set the base path.

    :param string: 

    :rtype: self 



getBasePath
+++++++++++

.. function:: getBasePath()


    Get the base path.

    :rtype: string 



setServer
+++++++++

.. function:: setServer()


    Provide an alternate Parameter Container implementation for server parameters in this object,
    (this is NOT the primary API for value setting, for that see getServer())

    :param ParametersInterface: 

    :rtype: Request 



getServer
+++++++++

.. function:: getServer()


    Return the parameter container responsible for server parameters or a single parameter value.

    :param string|null: Parameter name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the parameter is missing.

    :see : 

    :rtype: \Zend\Stdlib\ParametersInterface|mixed 



setEnv
++++++

.. function:: setEnv()


    Provide an alternate Parameter Container implementation for env parameters in this object,
    (this is NOT the primary API for value setting, for that see env())

    :param ParametersInterface: 

    :rtype: Request 



getEnv
++++++

.. function:: getEnv()


    Return the parameter container responsible for env parameters or a single parameter value.

    :param string|null: Parameter name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the parameter is missing.     * @return \Zend\Stdlib\ParametersInterface

    :rtype: \Zend\Stdlib\ParametersInterface|mixed 



mapPhpFiles
+++++++++++

.. function:: mapPhpFiles()


    Convert PHP superglobal $_FILES into more sane parameter=value structure
    This handles form file input with brackets (name=files[])

    :rtype: array 



mapPhpFileParam
+++++++++++++++

.. function:: mapPhpFileParam()


    @param array        $array

    :param string: 
    :param int|string: 
    :param string|array: 



detectRequestUri
++++++++++++++++

.. function:: detectRequestUri()


    Detect the base URI for the request
    
    Looks at a variety of criteria in order to attempt to autodetect a base
    URI, including rewrite URIs, proxy URIs, etc.

    :rtype: string 



detectBaseUrl
+++++++++++++

.. function:: detectBaseUrl()


    Auto-detect the base path from the request environment
    
    Uses a variety of criteria in order to detect the base URL of the request
    (i.e., anything additional to the document root).
    
    The base URL includes the schema, host, and port, in addition to the path.

    :rtype: string 



detectBasePath
++++++++++++++

.. function:: detectBasePath()


    Autodetect the base path of the request
    
    Uses several criteria to determine the base path of the request.

    :rtype: string 



