.. Feed/PubSubHubbub/HttpResponse.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\PubSubHubbub\\HttpResponse
======================================

Methods
-------

send
++++

.. function:: send()


    Send the response, including all headers

    :rtype: void 



sendHeaders
+++++++++++

.. function:: sendHeaders()


    Send all headers
    
    Sends any headers specified. If an {@link setHttpResponseCode() HTTP response code}
    has been specified, it is sent with the first header.

    :rtype: void 



setHeader
+++++++++

.. function:: setHeader()


    Set a header
    
    If $replace is true, replaces any headers already defined with that
    $name.

    :param string: 
    :param string: 
    :param bool: 

    :rtype: \Zend\Feed\PubSubHubbub\HttpResponse 



getHeader
+++++++++

.. function:: getHeader()


    Check if a specific Header is set and return its value

    :param string: 

    :rtype: string|null 



getHeaders
++++++++++

.. function:: getHeaders()


    Return array of headers; see {@link $headers} for format

    :rtype: array 



canSendHeaders
++++++++++++++

.. function:: canSendHeaders()


    Can we send headers?

    :param bool: Whether or not to throw an exception if headers have been sent; defaults to false

    :rtype: HttpResponse 

    :throws: Exception\RuntimeException 



setStatusCode
+++++++++++++

.. function:: setStatusCode()


    Set HTTP response code to use with headers

    :param int: 

    :rtype: HttpResponse 

    :throws: Exception\InvalidArgumentException 



getStatusCode
+++++++++++++

.. function:: getStatusCode()


    Retrieve HTTP response code

    :rtype: int 



setContent
++++++++++

.. function:: setContent()


    Set body content

    :param string: 

    :rtype: \Zend\Feed\PubSubHubbub\HttpResponse 



getContent
++++++++++

.. function:: getContent()


    Return the body content

    :rtype: string 



_normalizeHeader
++++++++++++++++

.. function:: _normalizeHeader()


    Normalizes a header name to X-Capitalized-Names

    :param string: 

    :rtype: string 



