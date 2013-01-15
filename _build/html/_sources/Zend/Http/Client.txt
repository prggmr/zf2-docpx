.. /Http/Client.php generated using docpx on 01/15/13 05:29pm


Zend\\Http\\Client
******************


Http client



Methods
=======

__construct
-----------

.. function:: __construct([$uri = false, [$options = false]])


    Constructor

    :param string $uri: 
    :param array|Traversable $options: 



setOptions
----------

.. function:: setOptions([$options = false])


    Set configuration parameters for this HTTP client

    :param array|Traversable $options: 

    :rtype: Client 

    :throws: Client\Exception\InvalidArgumentException 



setAdapter
----------

.. function:: setAdapter($adapter)


    Load the connection adapter
    
    While this method is not called more than one for a client, it is
    separated from ->request() to preserve logic and readability

    :param Client\Adapter\AdapterInterface|string $adapter: 

    :rtype: Client 

    :throws: Client\Exception\InvalidArgumentException 



getAdapter
----------

.. function:: getAdapter()


    Load the connection adapter

    :rtype: Client\Adapter\AdapterInterface $adapter



setRequest
----------

.. function:: setRequest($request)


    Set request

    :param Request $request: 

    :rtype: Client 



getRequest
----------

.. function:: getRequest()


    Get Request

    :rtype: Request 



setResponse
-----------

.. function:: setResponse($response)


    Set response

    :param Response $response: 

    :rtype: Client 



getResponse
-----------

.. function:: getResponse()


    Get Response

    :rtype: Response 



getLastRawRequest
-----------------

.. function:: getLastRawRequest()


    Get the last request (as a string)

    :rtype: string 



getLastRawResponse
------------------

.. function:: getLastRawResponse()


    Get the last response (as a string)

    :rtype: string 



getRedirectionsCount
--------------------

.. function:: getRedirectionsCount()


    Get the redirections count

    :rtype: integer 



setUri
------

.. function:: setUri($uri)


    Set Uri (to the request)

    :param string|Http $uri: 

    :rtype: Client 



getUri
------

.. function:: getUri()


    Get uri (from the request)

    :rtype: Http 



setMethod
---------

.. function:: setMethod($method)


    Set the HTTP method (to the request)

    :param string $method: 

    :rtype: Client 



getMethod
---------

.. function:: getMethod()


    Get the HTTP method

    :rtype: string 



setEncType
----------

.. function:: setEncType($encType, [$boundary = false])


    Set the encoding type and the boundary (if any)

    :param string $encType: 
    :param string $boundary: 

    :rtype: Client 



getEncType
----------

.. function:: getEncType()


    Get the encoding type

    :rtype: string 



setRawBody
----------

.. function:: setRawBody($body)


    Set raw body (for advanced use cases)

    :param string $body: 

    :rtype: Client 



setParameterPost
----------------

.. function:: setParameterPost($post)


    Set the POST parameters

    :param array $post: 

    :rtype: Client 



setParameterGet
---------------

.. function:: setParameterGet($query)


    Set the GET parameters

    :param array $query: 

    :rtype: Client 



getCookies
----------

.. function:: getCookies()


    Return the current cookies

    :rtype: array 



getCookieId
-----------

.. function:: getCookieId($cookie)


    Get the cookie Id (name+domain+path)

    :param Header\SetCookie|Header\Cookie $cookie: 

    :rtype: string|bool 



addCookie
---------

.. function:: addCookie($cookie, [$value = false, [$expire = false, [$path = false, [$domain = false, [$secure = false, [$httponly = true, [$maxAge = false, [$version = false]]]]]]]])


    Add a cookie

    :param array|ArrayIterator|Header\SetCookie|string $cookie: 
    :param string $value: 
    :param string $expire: 
    :param string $path: 
    :param string $domain: 
    :param bool $secure: 
    :param bool $httponly: 
    :param string $maxAge: 
    :param string $version: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



setCookies
----------

.. function:: setCookies($cookies)


    Set an array of cookies

    :param array $cookies: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



clearCookies
------------

.. function:: clearCookies()


    Clear all the cookies



setHeaders
----------

.. function:: setHeaders($headers)


    Set the headers (for the request)

    :param Headers|array $headers: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



hasHeader
---------

.. function:: hasHeader($name)


    Check if exists the header type specified

    :param string $name: 

    :rtype: bool 



getHeader
---------

.. function:: getHeader($name)


    Get the header value of the request

    :param string $name: 

    :rtype: string|bool 



setStream
---------

.. function:: setStream([$streamfile = true])


    Set streaming for received data

    :param string|bool $streamfile: Stream file, true for temp file, false/null for no streaming

    :rtype: \Zend\Http\Client 



getStream
---------

.. function:: getStream()


    Get status of streaming for received data

    :rtype: bool|string 



openTempStream
--------------

.. function:: openTempStream()


    Create temporary stream


    :rtype: resource 



setAuth
-------

.. function:: setAuth($user, $password, [$type = "basic"])


    Create a HTTP authentication "Authorization:" header according to the
    specified user, password and authentication method.

    :param string $user: 
    :param string $password: 
    :param string $type: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



calcAuthDigest
--------------

.. function:: calcAuthDigest($user, $password, [$type = "basic", [$digest = false, [$entityBody = false]]])


    Calculate the response value according to the HTTP authentication type


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $user: 
    :param string $password: 
    :param string $type: 
    :param array $digest: 
    :param null|string $entityBody: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string|bool 



resetParameters
---------------

.. function:: resetParameters([$clearCookies = false])


    Reset all the HTTP parameters (auth,cookies,request, response, etc)

    :param bool $clearCookies: Also clear all valid cookies? (defaults to false)

    :rtype: Client 



dispatch
--------

.. function:: dispatch($request, [$response = false])


    Dispatch

    :param Stdlib\RequestInterface $request: 
    :param Stdlib\ResponseInterface $response: 

    :rtype: Stdlib\ResponseInterface 



send
----

.. function:: send([$request = false])


    Send HTTP request

    :param Request $request: 

    :rtype: Response 

    :throws: Exception\RuntimeException 
    :throws: Client\Exception\RuntimeException 



setFileUpload
-------------

.. function:: setFileUpload($filename, $formname, [$data = false, [$ctype = false]])


    Set a file to upload (using a POST request)
    
    Can be used in two ways:
    
    1. $data is null (default): $filename is treated as the name if a local file which
    will be read and sent. Will try to guess the content type using mime_content_type().
    2. $data is set - $filename is sent as the file name, but $data is sent as the file
    contents and no file is read from the file system. In this case, you need to
    manually set the Content-Type ($ctype) or it will default to
    application/octet-stream.

    :param string $filename: Name of file to upload, or name to save as
    :param string $formname: Name of form element to send as
    :param string $data: Data to send (if null, $filename is read and sent)
    :param string $ctype: Content type to use (if $data is set and $ctype is
               null, will be application/octet-stream)

    :rtype: Client 

    :throws: Exception\RuntimeException 



removeFileUpload
----------------

.. function:: removeFileUpload($filename)


    Remove a file to upload

    :param string $filename: 

    :rtype: bool 



prepareCookies
--------------

.. function:: prepareCookies($domain, $path, $secure)


    Prepare Cookies

    :param string $domain: 
    :param string $path: 
    :param boolean $secure: 

    :rtype: Header\Cookie|bool 



prepareHeaders
--------------

.. function:: prepareHeaders($body, $uri)


    Prepare the request headers

    :param resource|string $body: 
    :param Http $uri: 

    :throws Exception\RuntimeException: 

    :rtype: array 



prepareBody
-----------

.. function:: prepareBody()


    Prepare the request body (for PATCH, POST and PUT requests)

    :rtype: string 

    :throws: \Zend\Http\Client\Exception\RuntimeException 



detectFileMimeType
------------------

.. function:: detectFileMimeType($file)


    Attempt to detect the MIME type of a file using available extensions
    
    This method will try to detect the MIME type of a file. If the fileinfo
    extension is available, it will be used. If not, the mime_magic
    extension which is deprecated but is still available in many PHP setups
    will be tried.
    
    If neither extension is available, the default application/octet-stream
    MIME type will be returned

    :param string $file: File path

    :rtype: string MIME type



encodeFormData
--------------

.. function:: encodeFormData($boundary, $name, $value, [$filename = false, [$headers = false]])


    Encode data to a multipart/form-data part suitable for a POST request.

    :param string $boundary: 
    :param string $name: 
    :param mixed $value: 
    :param string $filename: 
    :param array $headers: Associative array of optional headers @example ("Content-Transfer-Encoding" => "binary")

    :rtype: string 



flattenParametersArray
----------------------

.. function:: flattenParametersArray($parray, [$prefix = false])


    Convert an array of parameters into a flat array of (key, value) pairs
    
    Will flatten a potentially multi-dimentional array of parameters (such
    as POST parameters) into a flat array of (key, value) paris. In case
    of multi-dimentional arrays, square brackets ([]) will be added to the
    key to indicate an array.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array $parray: 
    :param string $prefix: 

    :rtype: array 



doRequest
---------

.. function:: doRequest($uri, $method, [$secure = false, [$headers = false, [$body = false]]])


    Separating this from send method allows subclasses to wrap
    the interaction with the adapter

    :param Http $uri: 
    :param string $method: 
    :param bool $secure: 
    :param array $headers: 
    :param string $body: 

    :rtype: string the raw response

    :throws: Exception\RuntimeException 



encodeAuthHeader
----------------

.. function:: encodeAuthHeader($user, $password, [$type = "basic"])


    Create a HTTP authentication "Authorization:" header according to the
    specified user, password and authentication method.


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $user: 
    :param string $password: 
    :param string $type: 

    :rtype: string 

    :throws: Zend\Http\Client\Exception\InvalidArgumentException 





Constants
---------

AUTH_BASIC
++++++++++

@const string Supported HTTP Authentication methods

AUTH_DIGEST
+++++++++++

ENC_URLENCODED
++++++++++++++

@const string POST data encoding methods

ENC_FORMDATA
++++++++++++

DIGEST_REALM
++++++++++++

@const string DIGEST Authentication

DIGEST_QOP
++++++++++

DIGEST_NONCE
++++++++++++

DIGEST_OPAQUE
+++++++++++++

DIGEST_NC
+++++++++

DIGEST_CNONCE
+++++++++++++

