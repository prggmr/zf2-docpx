.. Mail/Storage/Part/PartInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Mail\\Storage\\Part\\isMultipart
======================================

.. function:: Zend\Mail\Storage\Part\isMultipart()


    Check if part is a multipart message

    :rtype: bool if part is multipart



Function
********

Zend\\Mail\\Storage\\Part\\getContent
=====================================

.. function:: Zend\Mail\Storage\Part\getContent()


    Body of part
    
    If part is multipart the raw content of this part with all sub parts is returned

    :rtype: string body

    :throws: Exception\ExceptionInterface 



Function
********

Zend\\Mail\\Storage\\Part\\getSize
==================================

.. function:: Zend\Mail\Storage\Part\getSize()


    Return size of part

    :rtype: int size



Function
********

Zend\\Mail\\Storage\\Part\\getPart
==================================

.. function:: Zend\Mail\Storage\Part\getPart()


    Get part of multipart message

    :param int: number of part starting with 1 for first part

    :rtype: PartInterface wanted part

    :throws: Exception\ExceptionInterface 



Function
********

Zend\\Mail\\Storage\\Part\\countParts
=====================================

.. function:: Zend\Mail\Storage\Part\countParts()


    Count parts of a multipart part

    :rtype: int number of sub-parts



Function
********

Zend\\Mail\\Storage\\Part\\getHeaders
=====================================

.. function:: Zend\Mail\Storage\Part\getHeaders()


    Get all headers
    
    The returned headers are as saved internally. All names are lowercased. The value is a string or an array
    if a header with the same name occurs more than once.

    :rtype: \Zend\Mail\Headers 



Function
********

Zend\\Mail\\Storage\\Part\\getHeader
====================================

.. function:: Zend\Mail\Storage\Part\getHeader()


    Get a header in specified format
    
    Internally headers that occur more than once are saved as array, all other as string. If $format
    is set to string implode is used to concat the values (with Zend\Mime\Mime::LINEEND as delim).

    :param string: name of header, matches case-insensitive, but camel-case is replaced with dashes
    :param string: change type of return value to 'string' or 'array'

    :rtype: string|array|\Zend\Mail\Header\HeaderInterface|\ArrayIterator value of header in wanted or internal format

    :throws: Exception\ExceptionInterface 



Function
********

Zend\\Mail\\Storage\\Part\\getHeaderField
=========================================

.. function:: Zend\Mail\Storage\Part\getHeaderField()


    Get a specific field from a header like content type or all fields as array
    
    If the header occurs more than once, only the value from the first header
    is returned.
    
    Throws an exception if the requested header does not exist. If
    the specific header field does not exist, returns null.

    :param string: name of header, like in getHeader()
    :param string: the wanted part, default is first, if null an array with all parts is returned
    :param string: key name for the first part

    :rtype: string|array wanted part or all parts as array($firstName => firstPart, partname => value)

    :throws: Exception\ExceptionInterface 



Function
********

Zend\\Mail\\Storage\\Part\\__get
================================

.. function:: Zend\Mail\Storage\Part\__get()


    Getter for mail headers - name is matched in lowercase
    
    This getter is short for PartInterface::getHeader($name, 'string')


    :param string: header name

    :rtype: string value of header

    :throws: Exception\ExceptionInterface 



Function
********

Zend\\Mail\\Storage\\Part\\__toString
=====================================

.. function:: Zend\Mail\Storage\Part\__toString()


    magic method to get content of part

    :rtype: string content



