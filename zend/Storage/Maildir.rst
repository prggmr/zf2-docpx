.. Mail/Storage/Maildir.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\Maildir
============================

Methods
-------

countMessages
+++++++++++++

.. function:: countMessages()


    Count messages all messages in current box

    :param mixed: 

    :rtype: int number of messages



_getFileData
++++++++++++

.. function:: _getFileData()


    Get one or all fields from file structure. Also checks if message is valid

    :param int: message number
    :param string|null: wanted field

    :throws Exception\InvalidArgumentException: 

    :rtype: string|array wanted field or all fields as array



getSize
+++++++

.. function:: getSize()


    Get a list of messages with number and size

    :param int|null: number of message or null for all messages

    :rtype: int|array size of given message of list with all messages as array(num => size)



getMessage
++++++++++

.. function:: getMessage()


    Fetch a message

    :param int: number of message

    :rtype: \Zend\Mail\Storage\Message\File 

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 



getRawHeader
++++++++++++

.. function:: getRawHeader()



getRawContent
+++++++++++++

.. function:: getRawContent()



__construct
+++++++++++

.. function:: __construct()


    Create instance with parameters
    Supported parameters are:
      - dirname dirname of mbox file

    :param $params: mail reader specific parameters

    :throws Exception\InvalidArgumentException: 



_isMaildir
++++++++++

.. function:: _isMaildir()


    check if a given dir is a valid maildir

    :param string: name of dir

    :rtype: bool dir is valid maildir



_openMaildir
++++++++++++

.. function:: _openMaildir()


    open given dir as current maildir

    :param string: name of maildir

    :throws Exception\RuntimeException: 



_getMaildirFiles
++++++++++++++++

.. function:: _getMaildirFiles()


    find all files in opened dir handle and add to maildir files

    :param resource: dir handle used for search
    :param string: dirname of dir in $dh
    :param array: default flags for given dir



close
+++++

.. function:: close()


    Close resource for mail lib. If you need to control, when the resource
    is closed. Otherwise the destructor would call this.



noop
++++

.. function:: noop()


    Waste some CPU cycles doing nothing.

    :rtype: bool always return true



removeMessage
+++++++++++++

.. function:: removeMessage()


    stub for not supported message deletion

    :param $id: 

    :throws Exception\RuntimeException: 



getUniqueId
+++++++++++

.. function:: getUniqueId()


    get unique id for one or all messages
    
    if storage does not support unique ids it's the same as the message number

    :param int|null: message number

    :rtype: array|string message number for given message or all messages as array



getNumberByUniqueId
+++++++++++++++++++

.. function:: getNumberByUniqueId()


    get a message number from a unique id
    
    I.e. if you have a webmailer that supports deleting messages you should use unique ids
    as parameter and use this method to translate it to message number right before calling removeMessage()

    :param string: unique id

    :throws Exception\InvalidArgumentException: 

    :rtype: int message number



