.. Mime/Mime.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mime\\Mime
================

Support class for MultiPart Mime Messages

Methods
-------

isPrintable
+++++++++++

.. function:: isPrintable()


    Check if the given string is "printable"
    
    Checks that a string contains no unprintable characters. If this returns
    false, encode the string for secure delivery.

    :param string: 

    :rtype: bool 



encodeQuotedPrintable
+++++++++++++++++++++

.. function:: encodeQuotedPrintable()


    Encode a given string with the QUOTED_PRINTABLE mechanism and wrap the lines.

    :param string: 
    :param int: Defaults to {@link LINELENGTH}
    :param string: Defaults to {@link LINEEND}

    :rtype: string 



_encodeQuotedPrintable
++++++++++++++++++++++

.. function:: _encodeQuotedPrintable()


    Converts a string into quoted printable format.

    :param string: 

    :rtype: string 



encodeQuotedPrintableHeader
+++++++++++++++++++++++++++

.. function:: encodeQuotedPrintableHeader()


    Encode a given string with the QUOTED_PRINTABLE mechanism for Mail Headers.
    
    Mail headers depend on an extended quoted printable algorithm otherwise
    a range of bugs can occur.

    :param string: 
    :param string: 
    :param int: Defaults to {@link LINELENGTH}
    :param string: Defaults to {@link LINEEND}

    :rtype: string 



getNextQuotedPrintableToken
+++++++++++++++++++++++++++

.. function:: getNextQuotedPrintableToken()


    Retrieves the first token from a quoted printable string.

    :param string: 

    :rtype: string 



encodeBase64Header
++++++++++++++++++

.. function:: encodeBase64Header()


    Encode a given string in mail header compatible base64 encoding.

    :param string: 
    :param string: 
    :param int: Defaults to {@link LINELENGTH}
    :param string: Defaults to {@link LINEEND}

    :rtype: string 



encodeBase64
++++++++++++

.. function:: encodeBase64()


    Encode a given string in base64 encoding and break lines
    according to the maximum linelength.

    :param string: 
    :param int: Defaults to {@link LINELENGTH}
    :param string: Defaults to {@link LINEEND}

    :rtype: string 



__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|string: 

    :access : 



encode
++++++

.. function:: encode()


    Encode the given string with the given encoding.

    :param string: 
    :param string: 
    :param string: EOL string; defaults to {@link Zend_Mime::LINEEND}

    :rtype: string 



boundary
++++++++

.. function:: boundary()


    Return a MIME boundary


    :rtype: string 



boundaryLine
++++++++++++

.. function:: boundaryLine()


    Return a MIME boundary line

    :param string: Defaults to {@link LINEEND}

    :access : 

    :rtype: string 



mimeEnd
+++++++

.. function:: mimeEnd()


    Return MIME ending

    :param string: Defaults to {@link LINEEND}

    :access : 

    :rtype: string 





Constants
---------

TYPE_OCTETSTREAM
++++++++++++++++

TYPE_TEXT
+++++++++

TYPE_HTML
+++++++++

ENCODING_7BIT
+++++++++++++

ENCODING_8BIT
+++++++++++++

ENCODING_QUOTEDPRINTABLE
++++++++++++++++++++++++

ENCODING_BASE64
+++++++++++++++

DISPOSITION_ATTACHMENT
++++++++++++++++++++++

DISPOSITION_INLINE
++++++++++++++++++

LINELENGTH
++++++++++

LINEEND
+++++++

MULTIPART_ALTERNATIVE
+++++++++++++++++++++

MULTIPART_MIXED
+++++++++++++++

MULTIPART_RELATED
+++++++++++++++++

