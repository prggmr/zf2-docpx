.. Http/Request.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\Request
===================

HTTP Request

Methods
-------

fromString
++++++++++

.. function:: fromString()


    A factory that produces a Request object from a well-formed Http Request string

    :param string: 

    :rtype: Request 

    :throws: Exception\InvalidArgumentException 



setMethod
+++++++++

.. function:: setMethod()


    Set the method for this request

    :param string: 

    :rtype: Request 

    :throws: Exception\InvalidArgumentException 



getMethod
+++++++++

.. function:: getMethod()


    Return the method for this request

    :rtype: string 



setUri
++++++

.. function:: setUri()


    Set the URI/URL for this request, this can be a string or an instance of Zend\Uri\Http


    :param string|HttpUri: 

    :rtype: Request 



getUri
++++++

.. function:: getUri()


    Return the URI for this request object

    :rtype: HttpUri 



getUriString
++++++++++++

.. function:: getUriString()


    Return the URI for this request object as a string

    :rtype: string 



setQuery
++++++++

.. function:: setQuery()


    Provide an alternate Parameter Container implementation for query parameters in this object,
    (this is NOT the primary API for value setting, for that see getQuery())

    :param \Zend\Stdlib\ParametersInterface: 

    :rtype: Request 



getQuery
++++++++

.. function:: getQuery()


    Return the parameter container responsible for query parameters or a single query parameter

    :param string|null: Parameter name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the parameter is missing.

    :rtype: \Zend\Stdlib\ParametersInterface|mixed 



setPost
+++++++

.. function:: setPost()


    Provide an alternate Parameter Container implementation for post parameters in this object,
    (this is NOT the primary API for value setting, for that see getPost())

    :param \Zend\Stdlib\ParametersInterface: 

    :rtype: Request 



getPost
+++++++

.. function:: getPost()


    Return the parameter container responsible for post parameters or a single post parameter.

    :param string|null: Parameter name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the parameter is missing.

    :rtype: \Zend\Stdlib\ParametersInterface|mixed 



getCookie
+++++++++

.. function:: getCookie()


    Return the Cookie header, this is the same as calling $request->getHeaders()->get('Cookie');

    :rtype: Header\Cookie 



setFiles
++++++++

.. function:: setFiles()


    Provide an alternate Parameter Container implementation for file parameters in this object,
    (this is NOT the primary API for value setting, for that see getFiles())

    :param ParametersInterface: 

    :rtype: Request 



getFiles
++++++++

.. function:: getFiles()


    Return the parameter container responsible for file parameters or a single file.

    :param string|null: Parameter name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the parameter is missing.

    :rtype: ParametersInterface|mixed 



getHeaders
++++++++++

.. function:: getHeaders()


    Return the header container responsible for headers or all headers of a certain name/type


    :param string|null: Header name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the requested header is missing.

    :rtype: \Zend\Http\Headers|bool|\Zend\Http\Header\HeaderInterface|\ArrayIterator 



getHeader
+++++++++

.. function:: getHeader()


    Get all headers of a certain name/type.


    :param string|null: Header name to retrieve, or null to get the whole container.
    :param mixed|null: Default value to use when the requested header is missing.

    :rtype: \Zend\Http\Headers|bool|\Zend\Http\Header\HeaderInterface|\ArrayIterator 



isOptions
+++++++++

.. function:: isOptions()


    Is this an OPTIONS method request?

    :rtype: bool 



isPropFind
++++++++++

.. function:: isPropFind()


    Is this a PROPFIND method request?

    :rtype: bool 



isGet
+++++

.. function:: isGet()


    Is this a GET method request?

    :rtype: bool 



isHead
++++++

.. function:: isHead()


    Is this a HEAD method request?

    :rtype: bool 



isPost
++++++

.. function:: isPost()


    Is this a POST method request?

    :rtype: bool 



isPut
+++++

.. function:: isPut()


    Is this a PUT method request?

    :rtype: bool 



isDelete
++++++++

.. function:: isDelete()


    Is this a DELETE method request?

    :rtype: bool 



isTrace
+++++++

.. function:: isTrace()


    Is this a TRACE method request?

    :rtype: bool 



isConnect
+++++++++

.. function:: isConnect()


    Is this a CONNECT method request?

    :rtype: bool 



isPatch
+++++++

.. function:: isPatch()


    Is this a PATCH method request?

    :rtype: bool 



isXmlHttpRequest
++++++++++++++++

.. function:: isXmlHttpRequest()


    Is the request a Javascript XMLHttpRequest?
    
    Should work with Prototype/Script.aculo.us, possibly others.

    :rtype: bool 



isFlashRequest
++++++++++++++

.. function:: isFlashRequest()


    Is this a Flash request?

    :rtype: bool 



renderRequestLine
+++++++++++++++++

.. function:: renderRequestLine()


    Return the formatted request line (first line) for this http request

    :rtype: string 



toString
++++++++

.. function:: toString()


    @return string





Constants
---------

METHOD_OPTIONS
++++++++++++++

METHOD_GET
++++++++++

METHOD_HEAD
+++++++++++

METHOD_POST
+++++++++++

METHOD_PUT
++++++++++

METHOD_DELETE
+++++++++++++

METHOD_TRACE
++++++++++++

METHOD_CONNECT
++++++++++++++

METHOD_PATCH
++++++++++++

METHOD_PROPFIND
+++++++++++++++

