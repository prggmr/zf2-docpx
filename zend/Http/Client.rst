.. Http/Client.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Client
==================

Http client

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param string: 
    :param array|Traversable: 



setOptions
----------

.. function:: setOptions()


    Set configuration parameters for this HTTP client

    :param array|Traversable: 

    :rtype: Client 

    :throws: Client\Exception\InvalidArgumentException 



setAdapter
----------

.. function:: setAdapter()


    Load the connection adapter
    
    While this method is not called more than one for a client, it is
    separated from ->request() to preserve logic and readability

    :param Client\Adapter\AdapterInterface|string: 

    :rtype: Client 

    :throws: Client\Exception\InvalidArgumentException 



getAdapter
----------

.. function:: getAdapter()


    Load the connection adapter

    :rtype: Client\Adapter\AdapterInterface $adapter



setRequest
----------

.. function:: setRequest()


    Set request

    :param Request: 

    :rtype: Client 



getRequest
----------

.. function:: getRequest()


    Get Request

    :rtype: Request 



setResponse
-----------

.. function:: setResponse()


    Set response

    :param Response: 

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

.. function:: setUri()


    Set Uri (to the request)

    :param string|Http: 

    :rtype: Client 



getUri
------

.. function:: getUri()


    Get uri (from the request)

    :rtype: Http 



setMethod
---------

.. function:: setMethod()


    Set the HTTP method (to the request)

    :param string: 

    :rtype: Client 



getMethod
---------

.. function:: getMethod()


    Get the HTTP method

    :rtype: string 



setArgSeparator
---------------

.. function:: setArgSeparator()


    Set the query string argument separator

    :param string: 

    :rtype: Client 



getArgSeparator
---------------

.. function:: getArgSeparator()


    Get the query string argument separator

    :rtype: string 



setEncType
----------

.. function:: setEncType()


    Set the encoding type and the boundary (if any)

    :param string: 
    :param string: 

    :rtype: Client 



getEncType
----------

.. function:: getEncType()


    Get the encoding type

    :rtype: string 



setRawBody
----------

.. function:: setRawBody()


    Set raw body (for advanced use cases)

    :param string: 

    :rtype: Client 



setParameterPost
----------------

.. function:: setParameterPost()


    Set the POST parameters

    :param array: 

    :rtype: Client 



setParameterGet
---------------

.. function:: setParameterGet()


    Set the GET parameters

    :param array: 

    :rtype: Client 



getCookies
----------

.. function:: getCookies()


    Return the current cookies

    :rtype: array 



getCookieId
-----------

.. function:: getCookieId()


    Get the cookie Id (name+domain+path)

    :param Header\SetCookie|Header\Cookie: 

    :rtype: string|bool 



addCookie
---------

.. function:: addCookie()


    Add a cookie

    :param array|ArrayIterator|Header\SetCookie|string: 
    :param string: 
    :param string: 
    :param string: 
    :param string: 
    :param bool: 
    :param bool: 
    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



setCookies
----------

.. function:: setCookies()


    Set an array of cookies

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



clearCookies
------------

.. function:: clearCookies()


    Clear all the cookies



setHeaders
----------

.. function:: setHeaders()


    Set the headers (for the request)

    :param Headers|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



hasHeader
---------

.. function:: hasHeader()


    Check if exists the header type specified

    :param string: 

    :rtype: bool 



getHeader
---------

.. function:: getHeader()


    Get the header value of the request

    :param string: 

    :rtype: string|bool 



setStream
---------

.. function:: setStream()


    Set streaming for received data

    :param string|bool: Stream file, true for temp file, false/null for no streaming

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

.. function:: setAuth()


    Create a HTTP authentication "Authorization:" header according to the
    specified user, password and authentication method.

    :param string: 
    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Client 



calcAuthDigest
--------------

.. function:: calcAuthDigest()


    Calculate the response value according to the HTTP authentication type


    :param string: 
    :param string: 
    :param string: 
    :param array: 
    :param null|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string|bool 



resetParameters
---------------

.. function:: resetParameters()


    Reset all the HTTP parameters (auth,cookies,request, response, etc)

    :param bool: Also clear all valid cookies? (defaults to false)

    :rtype: Client 



dispatch
--------

.. function:: dispatch()


    Dispatch

    :param Stdlib\RequestInterface: 
    :param Stdlib\ResponseInterface: 

    :rtype: Stdlib\ResponseInterface 



send
----

.. function:: send()


    Send HTTP request

    :param Request: 

    :rtype: Response 

    :throws: Exception\RuntimeException 
    :throws: Client\Exception\RuntimeException 



setFileUpload
-------------

.. function:: setFileUpload()


    Set a file to upload (using a POST request)
    
    Can be used in two ways:
    
    1. $data is null (default): $filename is treated as the name if a local file which
    will be read and sent. Will try to guess the content type using mime_content_type().
    2. $data is set - $filename is sent as the file name, but $data is sent as the file
    contents and no file is read from the file system. In this case, you need to
    manually set the Content-Type ($ctype) or it will default to
    application/octet-stream.

    :param string: Name of file to upload, or name to save as
    :param string: Name of form element to send as
    :param string: Data to send (if null, $filename is read and sent)
    :param string: Content type to use (if $data is set and $ctype is
               null, will be application/octet-stream)

    :rtype: Client 

    :throws: Exception\RuntimeException 



removeFileUpload
----------------

.. function:: removeFileUpload()


    Remove a file to upload

    :param string: 

    :rtype: bool 



prepareCookies
--------------

.. function:: prepareCookies()


    Prepare Cookies

    :param string: 
    :param string: 
    :param boolean: 

    :rtype: Header\Cookie|bool 



prepareHeaders
--------------

.. function:: prepareHeaders()


    Prepare the request headers

    :param resource|string: 
    :param Http: 

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

.. function:: detectFileMimeType()


    Attempt to detect the MIME type of a file using available extensions
    
    This method will try to detect the MIME type of a file. If the fileinfo
    extension is available, it will be used. If not, the mime_magic
    extension which is deprecated but is still available in many PHP setups
    will be tried.
    
    If neither extension is available, the default application/octet-stream
    MIME type will be returned

    :param string: File path

    :rtype: string MIME type



encodeFormData
--------------

.. function:: encodeFormData()


    Encode data to a multipart/form-data part suitable for a POST request.

    :param string: 
    :param string: 
    :param mixed: 
    :param string: 
    :param array: Associative array of optional headers @example ("Content-Transfer-Encoding" => "binary")

    :rtype: string 



flattenParametersArray
----------------------

.. function:: flattenParametersArray()


    Convert an array of parameters into a flat array of (key, value) pairs
    
    Will flatten a potentially multi-dimentional array of parameters (such
    as POST parameters) into a flat array of (key, value) paris. In case
    of multi-dimentional arrays, square brackets ([]) will be added to the
    key to indicate an array.


    :param array: 
    :param string: 

    :rtype: array 



doRequest
---------

.. function:: doRequest()


    Separating this from send method allows subclasses to wrap
    the interaction with the adapter

    :param Http: 
    :param string: 
    :param bool: 
    :param array: 
    :param string: 

    :rtype: string the raw response

    :throws: Exception\RuntimeException 



encodeAuthHeader
----------------

.. function:: encodeAuthHeader()


    Create a HTTP authentication "Authorization:" header according to the
    specified user, password and authentication method.


    :param string: 
    :param string: 
    :param string: 

    :rtype: string 

    :throws: Zend\Http\Client\Exception\InvalidArgumentException 





Constants
+++++++++

AUTH_BASIC
==========

@const string Supported HTTP Authentication methods

AUTH_DIGEST
===========

ENC_URLENCODED
==============

@const string POST data encoding methods

ENC_FORMDATA
============

DIGEST_REALM
============

@const string DIGEST Authentication

DIGEST_QOP
==========

DIGEST_NONCE
============

DIGEST_OPAQUE
=============

DIGEST_NC
=========

DIGEST_CNONCE
=============

