.. Mail/Message.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Message
===================

Methods
-------

isValid
+++++++

.. function:: isValid()


    Is the message valid?
    
    If we don't any From addresses, we're invalid, according to RFC2822.

    :rtype: bool 



setEncoding
+++++++++++

.. function:: setEncoding()


    Set the message encoding

    :param string: 

    :rtype: Message 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the message encoding

    :rtype: string 



setHeaders
++++++++++

.. function:: setHeaders()


    Compose headers

    :param Headers: 

    :rtype: Message 



getHeaders
++++++++++

.. function:: getHeaders()


    Access headers collection
    
    Lazy-loads if not already attached.

    :rtype: Headers 



setFrom
+++++++

.. function:: setFrom()


    Set (overwrite) From addresses

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



addFrom
+++++++

.. function:: addFrom()


    Add a "From" address

    :param string|Address|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



getFrom
+++++++

.. function:: getFrom()


    Retrieve list of From senders

    :rtype: AddressList 



setTo
+++++

.. function:: setTo()


    Overwrite the address list in the To recipients

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param null|string: 

    :rtype: Message 



addTo
+++++

.. function:: addTo()


    Add one or more addresses to the To recipients
    
    Appends to the list.

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param null|string: 

    :rtype: Message 



getTo
+++++

.. function:: getTo()


    Access the address list of the To header

    :rtype: AddressList 



setCc
+++++

.. function:: setCc()


    Set (overwrite) CC addresses

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



addCc
+++++

.. function:: addCc()


    Add a "Cc" address

    :param string|Address|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



getCc
+++++

.. function:: getCc()


    Retrieve list of CC recipients

    :rtype: AddressList 



setBcc
++++++

.. function:: setBcc()


    Set (overwrite) BCC addresses

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



addBcc
++++++

.. function:: addBcc()


    Add a "Bcc" address

    :param string|Address|array|AddressList|Traversable: 
    :param string|null: 

    :rtype: Message 



getBcc
++++++

.. function:: getBcc()


    Retrieve list of BCC recipients

    :rtype: AddressList 



setReplyTo
++++++++++

.. function:: setReplyTo()


    Overwrite the address list in the Reply-To recipients

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param null|string: 

    :rtype: Message 



addReplyTo
++++++++++

.. function:: addReplyTo()


    Add one or more addresses to the Reply-To recipients
    
    Appends to the list.

    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param null|string: 

    :rtype: Message 



getReplyTo
++++++++++

.. function:: getReplyTo()


    Access the address list of the Reply-To header

    :rtype: AddressList 



setSender
+++++++++

.. function:: setSender()


    setSender

    :param mixed: 
    :param mixed: 

    :rtype: Message 



getSender
+++++++++

.. function:: getSender()


    Retrieve the sender address, if any

    :rtype: null|Address\AddressInterface 



setSubject
++++++++++

.. function:: setSubject()


    Set the message subject header value

    :param string: 

    :rtype: Message 



getSubject
++++++++++

.. function:: getSubject()


    Get the message subject header value

    :rtype: null|string 



setBody
+++++++

.. function:: setBody()


    Set the message body

    :param null|string|\Zend\Mime\Message|object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Message 



getBody
+++++++

.. function:: getBody()


    Return the currently set message body

    :rtype: object 



getBodyText
+++++++++++

.. function:: getBodyText()


    Get the string-serialized message body text

    :rtype: string 



getHeaderByName
+++++++++++++++

.. function:: getHeaderByName()


    Retrieve a header by name
    
    If not found, instantiates one based on $headerClass.

    :param string: 
    :param string: 

    :rtype: \Zend\Mail\Header\HeaderInterface 



clearHeaderByName
+++++++++++++++++

.. function:: clearHeaderByName()


    Clear a header by name

    :param string: 



getAddressListFromHeader
++++++++++++++++++++++++

.. function:: getAddressListFromHeader()


    Retrieve the AddressList from a named header
    
    Used with To, From, Cc, Bcc, and ReplyTo headers. If the header does not
    exist, instantiates it.

    :param string: 
    :param string: 

    :throws Exception\DomainException: 

    :rtype: AddressList 



updateAddressList
+++++++++++++++++

.. function:: updateAddressList()


    Update an address list
    
    Proxied to this from addFrom, addTo, addCc, addBcc, and addReplyTo.

    :param AddressList: 
    :param string|Address\AddressInterface|array|AddressList|Traversable: 
    :param null|string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 



toString
++++++++

.. function:: toString()


    Serialize to string

    :rtype: string 



fromString
++++++++++

.. function:: fromString()


    Instantiate from raw message string


    :param string: 

    :rtype: Message 



