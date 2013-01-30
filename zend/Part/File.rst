.. Mail/Storage/Part/File.php generated using docpx on 01/30/13 03:32am


Zend\\Mail\\Storage\\Part\\File
===============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Public constructor
    
    This handler supports the following params:
    - file     filename or open file handler with message content (required)
    - startPos start position of message or part in file (default: current position)
    - endPos   end position of message or part in file (default: end of file)

    :param array: full message with or without headers

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



getContent
----------

.. function:: getContent()


    Body of part
    
    If part is multipart the raw content of this part with all sub parts is returned

    :param resource: Optional

    :rtype: string body



getSize
-------

.. function:: getSize()


    Return size of part
    
    Quite simple implemented currently (not decoding). Handle with care.

    :rtype: int size



getPart
-------

.. function:: getPart()


    Get part of multipart message

    :param int: number of part starting with 1 for first part

    :throws Exception\RuntimeException: 

    :rtype: Part wanted part



