.. Mail/Storage/Pop3.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\Pop3
=========================

Methods
-------

countMessages
+++++++++++++

.. function:: countMessages()


    Count messages all messages in current box

    :rtype: int number of messages

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 
    :throws: \Zend\Mail\Protocol\Exception\ExceptionInterface 



getSize
+++++++

.. function:: getSize()


    get a list of messages with number and size

    :param int: number of message

    :rtype: int|array size of given message of list with all messages as array(num => size)

    :throws: \Zend\Mail\Protocol\Exception\ExceptionInterface 



getMessage
++++++++++

.. function:: getMessage()


    Fetch a message

    :param int: number of message

    :rtype: \Zend\Mail\Storage\Message 

    :throws: \Zend\Mail\Protocol\Exception\ExceptionInterface 



getRawHeader
++++++++++++

.. function:: getRawHeader()



getRawContent
+++++++++++++

.. function:: getRawContent()



__construct
+++++++++++

.. function:: __construct()


    create instance with parameters
    Supported parameters are
      - host hostname or ip address of POP3 server
      - user username
      - password password for user 'username' [optional, default = '']
      - port port for POP3 server [optional, default = 110]
      - ssl 'SSL' or 'TLS' for secure sockets

    :param $params: mail reader specific parameters

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 
    :throws \Zend\Mail\Protocol\Exception\RuntimeException: 



close
+++++

.. function:: close()


    Close resource for mail lib. If you need to control, when the resource
    is closed. Otherwise the destructor would call this.



noop
++++

.. function:: noop()


    Keep the server busy.




removeMessage
+++++++++++++

.. function:: removeMessage()


    Remove a message from server. If you're doing that from a web environment
    you should be careful and use a uniqueid as parameter if possible to
    identify the message.

    :param int: number of message

    :throws \Zend\Mail\Protocol\Exception\RuntimeException: 



getUniqueId
+++++++++++

.. function:: getUniqueId()


    get unique id for one or all messages
    
    if storage does not support unique ids it's the same as the message number

    :param int|null: message number

    :rtype: array|string message number for given message or all messages as array

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 



getNumberByUniqueId
+++++++++++++++++++

.. function:: getNumberByUniqueId()


    get a message number from a unique id
    
    I.e. if you have a webmailer that supports deleting messages you should use unique ids
    as parameter and use this method to translate it to message number right before calling removeMessage()

    :param string: unique id

    :throws Exception\InvalidArgumentException: 

    :rtype: int message number



__get
+++++

.. function:: __get()


    Special handling for hasTop and hasUniqueid. The headers of the first message is
    retrieved if Top wasn't needed/tried yet.


    :param string: 

    :rtype: string 



