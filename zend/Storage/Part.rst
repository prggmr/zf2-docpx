.. Mail/Storage/Part.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mail\\Storage\\Part
=========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Public constructor
    
    Part supports different sources for content. The possible params are:
    - handler    an instance of AbstractStorage for late fetch
    - id         number of message for handler
    - raw        raw content with header and body as string
    - headers    headers as array (name => value) or string, if a content part is found it's used as toplines
    - noToplines ignore content found after headers in param 'headers'
    - content    content as string
    - strict     strictly parse raw content

    :param array: full message with or without headers

    :throws Exception\InvalidArgumentException: 



isMultipart
+++++++++++

.. function:: isMultipart()


    Check if part is a multipart message

    :rtype: bool if part is multipart



getContent
++++++++++

.. function:: getContent()


    Body of part
    
    If part is multipart the raw content of this part with all sub parts is returned


    :rtype: string body



getSize
+++++++

.. function:: getSize()


    Return size of part
    
    Quite simple implemented currently (not decoding). Handle with care.

    :rtype: int size



_cacheContent
+++++++++++++

.. function:: _cacheContent()


    Cache content and split in parts if multipart


    :rtype: null 



getPart
+++++++

.. function:: getPart()


    Get part of multipart message

    :param int: number of part starting with 1 for first part

    :throws Exception\RuntimeException: 

    :rtype: Part wanted part



countParts
++++++++++

.. function:: countParts()


    Count parts of a multipart part

    :rtype: int number of sub-parts



getHeaders
++++++++++

.. function:: getHeaders()


    Access headers collection
    
    Lazy-loads if not already attached.

    :rtype: Headers 



getHeader
+++++++++

.. function:: getHeader()


    Get a header in specified format
    
    Internally headers that occur more than once are saved as array, all other as string. If $format
    is set to string implode is used to concat the values (with Mime::LINEEND as delim).

    :param string: name of header, matches case-insensitive, but camel-case is replaced with dashes
    :param string: change type of return value to 'string' or 'array'

    :throws Exception\InvalidArgumentException: 

    :rtype: string|array|HeaderInterface|\ArrayIterator value of header in wanted or internal format



getHeaderField
++++++++++++++

.. function:: getHeaderField()


    Get a specific field from a header like content type or all fields as array
    
    If the header occurs more than once, only the value from the first header
    is returned.
    
    Throws an Exception if the requested header does not exist. If
    the specific header field does not exist, returns null.

    :param string: name of header, like in getHeader()
    :param string: the wanted part, default is first, if null an array with all parts is returned
    :param string: key name for the first part

    :rtype: string|array wanted part or all parts as array($firstName => firstPart, partname => value)

    :throws: \Zend\Mime\Exception\RuntimeException 



__get
+++++

.. function:: __get()


    Getter for mail headers - name is matched in lowercase
    
    This getter is short for Part::getHeader($name, 'string')


    :param string: header name

    :rtype: string value of header

    :throws: Exception\ExceptionInterface 



__isset
+++++++

.. function:: __isset()


    Isset magic method proxy to hasHeader
    
    This method is short syntax for Part::hasHeader($name);


    :param string: 

    :rtype: bool 



__toString
++++++++++

.. function:: __toString()


    magic method to get content of part

    :rtype: string content



hasChildren
+++++++++++

.. function:: hasChildren()


    implements RecursiveIterator::hasChildren()

    :rtype: bool current element has children/is multipart



getChildren
+++++++++++

.. function:: getChildren()


    implements RecursiveIterator::getChildren()

    :rtype: Part same as self::current()



valid
+++++

.. function:: valid()


    implements Iterator::valid()

    :rtype: bool check if there's a current element



next
++++

.. function:: next()


    implements Iterator::next()



key
+++

.. function:: key()


    implements Iterator::key()

    :rtype: string key/number of current part



current
+++++++

.. function:: current()


    implements Iterator::current()

    :rtype: Part current part



rewind
++++++

.. function:: rewind()


    implements Iterator::rewind()



