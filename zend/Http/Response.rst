.. Http/Response.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Http\\Response
====================

HTTP Response

Methods
-------

fromString
++++++++++

.. function:: fromString()


    Populate object from string

    :param string: 

    :rtype: Response 

    :throws: Exception\InvalidArgumentException 



getCookie
+++++++++

.. function:: getCookie()


    @return Header\SetCookie[]



setStatusCode
+++++++++++++

.. function:: setStatusCode()


    Set HTTP status code and (optionally) message

    :param integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Response 



getStatusCode
+++++++++++++

.. function:: getStatusCode()


    Retrieve HTTP status code

    :rtype: int 



setReasonPhrase
+++++++++++++++

.. function:: setReasonPhrase()


    @param string $reasonPhrase

    :rtype: Response 



getReasonPhrase
+++++++++++++++

.. function:: getReasonPhrase()


    Get HTTP status message

    :rtype: string 



getBody
+++++++

.. function:: getBody()


    Get the body of the response

    :rtype: string 



isClientError
+++++++++++++

.. function:: isClientError()


    Does the status code indicate a client error?

    :rtype: bool 



isForbidden
+++++++++++

.. function:: isForbidden()


    Is the request forbidden due to ACLs?

    :rtype: bool 



isInformational
+++++++++++++++

.. function:: isInformational()


    Is the current status "informational"?

    :rtype: bool 



isNotFound
++++++++++

.. function:: isNotFound()


    Does the status code indicate the resource is not found?

    :rtype: bool 



isOk
++++

.. function:: isOk()


    Do we have a normal, OK response?

    :rtype: bool 



isServerError
+++++++++++++

.. function:: isServerError()


    Does the status code reflect a server error?

    :rtype: bool 



isRedirect
++++++++++

.. function:: isRedirect()


    Do we have a redirect?

    :rtype: bool 



isSuccess
+++++++++

.. function:: isSuccess()


    Was the response successful?

    :rtype: bool 



renderStatusLine
++++++++++++++++

.. function:: renderStatusLine()


    Render the status line header

    :rtype: string 



toString
++++++++

.. function:: toString()


    Render entire response as HTTP response string

    :rtype: string 



decodeChunkedBody
+++++++++++++++++

.. function:: decodeChunkedBody()


    Decode a "chunked" transfer-encoded body and return the decoded text

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 



decodeGzip
++++++++++

.. function:: decodeGzip()


    Decode a gzip encoded message (when Content-encoding = gzip)
    
    Currently requires PHP with zlib support

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 



decodeDeflate
+++++++++++++

.. function:: decodeDeflate()


    Decode a zlib deflated message (when Content-encoding = deflate)
    
    Currently requires PHP with zlib support

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 





Constants
---------

STATUS_CODE_CUSTOM
++++++++++++++++++

STATUS_CODE_100
+++++++++++++++

STATUS_CODE_101
+++++++++++++++

STATUS_CODE_102
+++++++++++++++

STATUS_CODE_200
+++++++++++++++

STATUS_CODE_201
+++++++++++++++

STATUS_CODE_202
+++++++++++++++

STATUS_CODE_203
+++++++++++++++

STATUS_CODE_204
+++++++++++++++

STATUS_CODE_205
+++++++++++++++

STATUS_CODE_206
+++++++++++++++

STATUS_CODE_207
+++++++++++++++

STATUS_CODE_208
+++++++++++++++

STATUS_CODE_300
+++++++++++++++

STATUS_CODE_301
+++++++++++++++

STATUS_CODE_302
+++++++++++++++

STATUS_CODE_303
+++++++++++++++

STATUS_CODE_304
+++++++++++++++

STATUS_CODE_305
+++++++++++++++

STATUS_CODE_306
+++++++++++++++

STATUS_CODE_307
+++++++++++++++

STATUS_CODE_400
+++++++++++++++

STATUS_CODE_401
+++++++++++++++

STATUS_CODE_402
+++++++++++++++

STATUS_CODE_403
+++++++++++++++

STATUS_CODE_404
+++++++++++++++

STATUS_CODE_405
+++++++++++++++

STATUS_CODE_406
+++++++++++++++

STATUS_CODE_407
+++++++++++++++

STATUS_CODE_408
+++++++++++++++

STATUS_CODE_409
+++++++++++++++

STATUS_CODE_410
+++++++++++++++

STATUS_CODE_411
+++++++++++++++

STATUS_CODE_412
+++++++++++++++

STATUS_CODE_413
+++++++++++++++

STATUS_CODE_414
+++++++++++++++

STATUS_CODE_415
+++++++++++++++

STATUS_CODE_416
+++++++++++++++

STATUS_CODE_417
+++++++++++++++

STATUS_CODE_418
+++++++++++++++

STATUS_CODE_422
+++++++++++++++

STATUS_CODE_423
+++++++++++++++

STATUS_CODE_424
+++++++++++++++

STATUS_CODE_425
+++++++++++++++

STATUS_CODE_426
+++++++++++++++

STATUS_CODE_428
+++++++++++++++

STATUS_CODE_429
+++++++++++++++

STATUS_CODE_431
+++++++++++++++

STATUS_CODE_500
+++++++++++++++

STATUS_CODE_501
+++++++++++++++

STATUS_CODE_502
+++++++++++++++

STATUS_CODE_503
+++++++++++++++

STATUS_CODE_504
+++++++++++++++

STATUS_CODE_505
+++++++++++++++

STATUS_CODE_506
+++++++++++++++

STATUS_CODE_507
+++++++++++++++

STATUS_CODE_508
+++++++++++++++

STATUS_CODE_511
+++++++++++++++

