.. Mail/Storage/Mbox.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Storage\\Mbox
=========================

Methods
-------

countMessages
+++++++++++++

.. function:: countMessages()


    Count messages all messages in current box

    :rtype: int number of messages

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 



getSize
+++++++

.. function:: getSize()


    Get a list of messages with number and size

    :param int|null: number of message or null for all messages

    :rtype: int|array size of given message of list with all messages as array(num => size)



getPos
++++++

.. function:: getPos()


    Get positions for mail message or throw exception if id is invalid

    :param int: number of message

    :throws Exception\InvalidArgumentException: 

    :rtype: array positions as in positions



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
      - filename filename of mbox file

    :param $params: mail reader specific parameters

    :throws Exception\InvalidArgumentException: 



isMboxFile
++++++++++

.. function:: isMboxFile()


    check if given file is a mbox file
    
    if $file is a resource its file pointer is moved after the first line

    :param resource|string: stream resource of name of file
    :param bool: file is string or resource

    :rtype: bool file is mbox file



openMboxFile
++++++++++++

.. function:: openMboxFile()


    open given file as current mbox file

    :param string: filename of mbox file

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



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
    
    Mbox does not support unique ids (yet) - it's always the same as the message number.
    That shouldn't be a problem, because we can't change mbox files. Therefor the message
    number is save enough.

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

    :rtype: int message number

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 



__sleep
+++++++

.. function:: __sleep()


    magic method for serialize()
    
    with this method you can cache the mbox class

    :rtype: array name of variables



__wakeup
++++++++

.. function:: __wakeup()


    magic method for unserialize()
    
    with this method you can cache the mbox class
    for cache validation the mtime of the mbox file is used




