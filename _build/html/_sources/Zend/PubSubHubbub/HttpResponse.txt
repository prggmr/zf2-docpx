.. /Feed/PubSubHubbub/HttpResponse.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\PubSubHubbub\\HttpResponse
**************************************


@category   Zend



Methods
=======

send
----

.. function:: send()


    Send the response, including all headers

    :rtype: void 



sendHeaders
-----------

.. function:: sendHeaders()


    Send all headers
    
    Sends any headers specified. If an {@link setHttpResponseCode() HTTP response code}
    has been specified, it is sent with the first header.

    :rtype: void 



setHeader
---------

.. function:: setHeader($name, $value, [$replace = false])


    Set a header
    
    If $replace is true, replaces any headers already defined with that
    $name.

    :param string $name: 
    :param string $value: 
    :param bool $replace: 

    :rtype: \Zend\Feed\PubSubHubbub\HttpResponse 



getHeader
---------

.. function:: getHeader($name)


    Check if a specific Header is set and return its value

    :param string $name: 

    :rtype: string|null 



getHeaders
----------

.. function:: getHeaders()


    Return array of headers; see {@link $headers} for format

    :rtype: array 



canSendHeaders
--------------

.. function:: canSendHeaders([$throw = false])


    Can we send headers?

    :param bool $throw: Whether or not to throw an exception if headers have been sent; defaults to false

    :rtype: HttpResponse 

    :throws: Exception\RuntimeException 



setStatusCode
-------------

.. function:: setStatusCode($code)


    Set HTTP response code to use with headers

    :param int $code: 

    :rtype: HttpResponse 

    :throws: Exception\InvalidArgumentException 



getStatusCode
-------------

.. function:: getStatusCode()


    Retrieve HTTP response code

    :rtype: int 



setContent
----------

.. function:: setContent($content)


    Set body content

    :param string $content: 

    :rtype: \Zend\Feed\PubSubHubbub\HttpResponse 



getContent
----------

.. function:: getContent()


    Return the body content

    :rtype: string 



_normalizeHeader
----------------

.. function:: _normalizeHeader($name)


    Normalizes a header name to X-Capitalized-Names

    :param string $name: 

    :rtype: string 





