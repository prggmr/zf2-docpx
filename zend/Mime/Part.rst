.. Mime/Part.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mime\\Part
================

Class representing a MIME part.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    create a new Mime Part.
    The (unencoded) content of the Part as passed
    as a string or stream

    :param mixed: String or Stream containing the content



isStream
++++++++

.. function:: isStream()


    check if this part can be read as a stream.
    if true, getEncodedStream can be called, otherwise
    only getContent can be used to fetch the encoded
    content of the part

    :rtype: bool 



getEncodedStream
++++++++++++++++

.. function:: getEncodedStream()


    if this was created with a stream, return a filtered stream for
    reading the content. very useful for large file attachments.

    :param string: 

    :rtype: stream 

    :throws: Exception\RuntimeException if not a stream or unable to append filter



getContent
++++++++++

.. function:: getContent()


    Get the Content of the current Mime Part in the given encoding.

    :param string: 

    :rtype: string 



getRawContent
+++++++++++++

.. function:: getRawContent()


    Get the RAW unencoded content from this part

    :rtype: string 



getHeadersArray
+++++++++++++++

.. function:: getHeadersArray()


    Create and return the array of headers for this MIME part


    :param string: 

    :rtype: array 



getHeaders
++++++++++

.. function:: getHeaders()


    Return the headers for this part as a string

    :param string: 

    :rtype: String 



