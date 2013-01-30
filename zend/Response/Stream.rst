.. Http/Response/Stream.php generated using docpx on 01/30/13 03:32am


Zend\\Http\\Response\\Stream
============================

Represents an HTTP response message as PHP stream resource

Methods
+++++++

setContentLength
----------------

.. function:: setContentLength()


    Set content length

    :param int: 



getContentLength
----------------

.. function:: getContentLength()


    Get content length

    :rtype: int|null 



getStream
---------

.. function:: getStream()


    Get the response as stream

    :rtype: resource 



setStream
---------

.. function:: setStream()


    Set the response stream

    :param resource: 

    :rtype: Stream 



getCleanup
----------

.. function:: getCleanup()


    Get the cleanup trigger

    :rtype: bool 



setCleanup
----------

.. function:: setCleanup()


    Set the cleanup trigger

    :param bool: 



getStreamName
-------------

.. function:: getStreamName()


    Get file name associated with the stream

    :rtype: string 



setStreamName
-------------

.. function:: setStreamName()


    Set file name associated with the stream

    :param string: Name to set

    :rtype: Stream 



fromStream
----------

.. function:: fromStream()


    Create a new Zend\Http\Response\Stream object from a stream

    :param string: 
    :param resource: 

    :rtype: Stream 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\OutOfRangeException 



getBody
-------

.. function:: getBody()


    Get the response body as string
    
    This method returns the body of the HTTP response (the content), as it
    should be in it's readable version - that is, after decoding it (if it
    was decoded), deflating it (if it was gzip compressed), etc.
    
    If you want to get the raw body (as transferred on wire) use
    $this->getRawBody() instead.

    :rtype: string 



getRawBody
----------

.. function:: getRawBody()


    Get the raw response body (as transferred "on wire") as string
    
    If the body is encoded (with Transfer-Encoding, not content-encoding -
    IE "chunked" body), gzip compressed, etc. it will not be decoded.

    :rtype: string 



readStream
----------

.. function:: readStream()


    Read stream content and return it as string
    
    Function reads the remainder of the body from the stream and closes the stream.

    :rtype: string 



__destruct
----------

.. function:: __destruct()


    Destructor



