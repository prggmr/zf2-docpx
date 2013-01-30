.. Mail/Storage/Imap.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Storage\\Imap
=========================

Methods
-------

countMessages
+++++++++++++

.. function:: countMessages()


    Count messages all messages in current box

    :param null: 

    :throws Exception\RuntimeException: 
    :throws \Zend\Mail\Protocol\Exception\RuntimeException: 

    :rtype: int number of messages



getSize
+++++++

.. function:: getSize()


    get a list of messages with number and size

    :param int: number of message

    :rtype: int|array size of given message of list with all messages as array(num => size)

    :throws: \Zend\Mail\Protocol\Exception\RuntimeException 



getMessage
++++++++++

.. function:: getMessage()


    Fetch a message

    :param int: number of message

    :rtype: \Zend\Mail\Storage\Message 

    :throws: \Zend\Mail\Protocol\Exception\RuntimeException 



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
      - user username
      - host hostname or ip address of IMAP server [optional, default = 'localhost']
      - password password for user 'username' [optional, default = '']
      - port port for IMAP server [optional, default = 110]
      - ssl 'SSL' or 'TLS' for secure sockets
      - folder select this folder [optional, default = 'INBOX']

    :param array: mail reader specific parameters

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 
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

    :throws Exception\RuntimeException: 



getUniqueId
+++++++++++

.. function:: getUniqueId()


    get unique id for one or all messages
    
    if storage does not support unique ids it's the same as the message number

    :param int|null: message number

    :rtype: array|string message number for given message or all messages as array

    :throws: \Zend\Mail\Protocol\Exception\RuntimeException 



getNumberByUniqueId
+++++++++++++++++++

.. function:: getNumberByUniqueId()


    get a message number from a unique id
    
    I.e. if you have a webmailer that supports deleting messages you should use unique ids
    as parameter and use this method to translate it to message number right before calling removeMessage()

    :param string: unique id

    :throws Exception\InvalidArgumentException: 

    :rtype: int message number



getFolders
++++++++++

.. function:: getFolders()


    get root folder or given folder

    :param string: get folder structure for given folder, else root

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 
    :throws \Zend\Mail\Protocol\Exception\RuntimeException: 

    :rtype: \Zend\Mail\Storage\Folder root or wanted folder



selectFolder
++++++++++++

.. function:: selectFolder()


    select given folder
    
    folder must be selectable!

    :param \Zend\Mail\Storage\Folder|string: global name of folder or instance for subfolder

    :throws Exception\RuntimeException: 
    :throws \Zend\Mail\Protocol\Exception\RuntimeException: 



getCurrentFolder
++++++++++++++++

.. function:: getCurrentFolder()


    get \Zend\Mail\Storage\Folder instance for current folder

    :rtype: \Zend\Mail\Storage\Folder instance of current folder



createFolder
++++++++++++

.. function:: createFolder()


    create a new folder
    
    This method also creates parent folders if necessary. Some mail storages may restrict, which folder
    may be used as parent or which chars may be used in the folder name

    :param string: global name of folder, local name if $parentFolder is set
    :param string|\Zend\Mail\Storage\Folder: parent folder for new folder, else root folder is parent

    :throws Exception\RuntimeException: 



removeFolder
++++++++++++

.. function:: removeFolder()


    remove a folder

    :param string|\Zend\Mail\Storage\Folder: name or instance of folder

    :throws Exception\RuntimeException: 



renameFolder
++++++++++++

.. function:: renameFolder()


    rename and/or move folder
    
    The new name has the same restrictions as in createFolder()

    :param string|\Zend\Mail\Storage\Folder: name or instance of folder
    :param string: new global name of folder

    :throws Exception\RuntimeException: 



appendMessage
+++++++++++++

.. function:: appendMessage()


    append a new message to mail storage

    :param string: message as string or instance of message class
    :param null|string|\Zend\Mail\Storage\Folder: folder for new message, else current folder is taken
    :param null|array: set flags for new message, else a default set is used

    :throws Exception\RuntimeException: 



copyMessage
+++++++++++

.. function:: copyMessage()


    copy an existing message

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of target folder

    :throws Exception\RuntimeException: 



moveMessage
+++++++++++

.. function:: moveMessage()


    move an existing message
    
    NOTE: IMAP has no native move command, thus it's emulated with copy and delete

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of target folder

    :throws Exception\RuntimeException: 



setFlags
++++++++

.. function:: setFlags()


    set flags for message
    
    NOTE: this method can't set the recent flag.

    :param int: number of message
    :param array: new flags for message

    :throws Exception\RuntimeException: 



