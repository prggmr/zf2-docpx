.. Mime/Decode.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mime\\Decode
==================

Methods
-------

splitMime
+++++++++

.. function:: splitMime()


    Explode MIME multipart string into separate parts
    
    Parts consist of the header and the body of each MIME part.

    :param string: raw body of message
    :param string: boundary as found in content-type

    :rtype: array parts with content of each part, empty if no parts found

    :throws: Exception\RuntimeException 



splitMessageStruct
++++++++++++++++++

.. function:: splitMessageStruct()


    decodes a mime encoded String and returns a
    struct of parts with header and body

    :param string: raw message content
    :param string: boundary as found in content-type
    :param string: EOL string; defaults to {@link Zend_Mime::LINEEND}

    :rtype: array|null parts as array('header' => array(name => value), 'body' => content), null if no parts found

    :throws: Exception\RuntimeException 



splitMessage
++++++++++++

.. function:: splitMessage()


    split a message in header and body part, if no header or an
    invalid header is found $headers is empty
    
    The charset of the returned headers depend on your iconv settings.

    :param string|Headers: raw message with header and optional content
    :param Headers: output param, headers container
    :param string: output param, content of message
    :param string: EOL string; defaults to {@link Zend_Mime::LINEEND}
    :param bool: enable strict mode for parsing message

    :rtype: null 



splitContentType
++++++++++++++++

.. function:: splitContentType()


    split a content type in its different parts

    :param string: content-type
    :param string: the wanted part, else an array with all parts is returned

    :rtype: string|array wanted part or all parts as array('type' => content-type, partname => value)



splitHeaderField
++++++++++++++++

.. function:: splitHeaderField()


    split a header field like content type in its different parts

    :param string: header field
    :param string: the wanted part, else an array with all parts is returned
    :param string: key name for the first part

    :rtype: string|array wanted part or all parts as array($firstName => firstPart, partname => value)

    :throws: Exception\RuntimeException 



decodeQuotedPrintable
+++++++++++++++++++++

.. function:: decodeQuotedPrintable()


    decode a quoted printable encoded string
    
    The charset of the returned string depends on your iconv settings.

    :param string: encoded string

    :rtype: string decoded string



