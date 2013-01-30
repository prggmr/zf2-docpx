.. Mime/Message.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mime\\Message
===================

Methods
-------

getParts
++++++++

.. function:: getParts()


    Returns the list of all Zend_Mime_Parts in the message

    :rtype: array of \Zend\Mime\Part



setParts
++++++++

.. function:: setParts()


    Sets the given array of Zend_Mime_Parts as the array for the message

    :param array: 



addPart
+++++++

.. function:: addPart()


    Append a new Zend_Mime_Part to the current message

    :param \Zend\Mime\Part: 



isMultiPart
+++++++++++

.. function:: isMultiPart()


    Check if message needs to be sent as multipart
    MIME message or if it has only one part.

    :rtype: bool 



setMime
+++++++

.. function:: setMime()


    Set Zend_Mime object for the message
    
    This can be used to set the boundary specifically or to use a subclass of
    Zend_Mime for generating the boundary.

    :param \Zend\Mime\Mime: 



getMime
+++++++

.. function:: getMime()


    Returns the Zend_Mime object in use by the message
    
    If the object was not present, it is created and returned. Can be used to
    determine the boundary used in this message.

    :rtype: \Zend\Mime\Mime 



generateMessage
+++++++++++++++

.. function:: generateMessage()


    Generate MIME-compliant message from the current configuration
    
    This can be a multipart message if more than one MIME part was added. If
    only one part is present, the content of this part is returned. If no
    part had been added, an empty string is returned.
    
    Parts are separated by the mime boundary as defined in Zend_Mime. If
    {@link setMime()} has been called before this method, the Zend_Mime
    object set by this call will be used. Otherwise, a new Zend_Mime object
    is generated and used.

    :param string: EOL string; defaults to {@link Zend_Mime::LINEEND}

    :rtype: string 



getPartHeadersArray
+++++++++++++++++++

.. function:: getPartHeadersArray()


    Get the headers of a given part as an array

    :param int: 

    :rtype: array 



getPartHeaders
++++++++++++++

.. function:: getPartHeaders()


    Get the headers of a given part as a string

    :param int: 
    :param string: 

    :rtype: string 



getPartContent
++++++++++++++

.. function:: getPartContent()


    Get the (encoded) content of a given part as a string

    :param int: 
    :param string: 

    :rtype: string 



_disassembleMime
++++++++++++++++

.. function:: _disassembleMime()


    Explode MIME multipart string into separate parts
    
    Parts consist of the header and the body of each MIME part.

    :param string: 
    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: array 



createFromMessage
+++++++++++++++++

.. function:: createFromMessage()


    Decodes a MIME encoded string and returns a Zend_Mime_Message object with
    all the MIME parts set according to the given string

    :param string: 
    :param string: 
    :param string: EOL string; defaults to {@link Zend_Mime::LINEEND}

    :throws Exception\RuntimeException: 

    :rtype: \Zend\Mime\Message 



