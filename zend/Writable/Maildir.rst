.. Mail/Storage/Writable/Maildir.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\Writable\\Maildir
======================================

Methods
-------

initMaildir
+++++++++++

.. function:: initMaildir()


    create a new maildir
    
    If the given dir is already a valid maildir this will not fail.

    :param string: directory for the new maildir (may already exist)

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 
    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 



__construct
+++++++++++

.. function:: __construct()


    Create instance with parameters
    Additional parameters are (see parent for more):
      - create if true a new maildir is create if none exists

    :param $params: mail reader specific parameters

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



createFolder
++++++++++++

.. function:: createFolder()


    create a new folder
    
    This method also creates parent folders if necessary. Some mail storages may restrict, which folder
    may be used as parent or which chars may be used in the folder name

    :param string: global name of folder, local name if $parentFolder is set
    :param string|\Zend\Mail\Storage\Folder: parent folder for new folder, else root folder is parent

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 

    :rtype: string only used internally (new created maildir)



removeFolder
++++++++++++

.. function:: removeFolder()


    remove a folder

    :param string|Folder: name or instance of folder

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



renameFolder
++++++++++++

.. function:: renameFolder()


    rename and/or move folder
    
    The new name has the same restrictions as in createFolder()

    :param string|\Zend\Mail\Storage\Folder: name or instance of folder
    :param string: new global name of folder

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



_createUniqueId
+++++++++++++++

.. function:: _createUniqueId()


    create a uniqueid for maildir filename
    
    This is nearly the format defined in the maildir standard. The microtime() call should already
    create a uniqueid, the pid is for multicore/-cpu machine that manage to call this function at the
    exact same time, and uname() gives us the hostname for multiple machines accessing the same storage.
    
    If someone disables posix we create a random number of the same size, so this method should also
    work on Windows - if you manage to get maildir working on Windows.
    Microtime could also be disabled, although I've never seen it.

    :rtype: string new uniqueid



_createTmpFile
++++++++++++++

.. function:: _createTmpFile()


    open a temporary maildir file
    
    makes sure tmp/ exists and create a file with a unique name
    you should close the returned filehandle!

    :param string: name of current folder without leading .

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 

    :rtype: array array('dirname' => dir of maildir folder, 'uniq' => unique id, 'filename' => name of create file
                    'handle'  => file opened for writing)



_getInfoString
++++++++++++++

.. function:: _getInfoString()


    create an info string for filenames with given flags

    :param array: wanted flags, with the reference you'll get the set flags with correct key (= char for flag)

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 

    :rtype: string info string for version 2 filenames including the leading colon



appendMessage
+++++++++++++

.. function:: appendMessage()


    append a new message to mail storage

    :param string|stream: message as string or stream resource
    :param null|string|\Zend\Mail\Storage\Folder: folder for new message, else current folder is taken
    :param null|array: set flags for new message, else a default set is used
    :param bool: handle this mail as if recent flag has been set,
                                                             should only be used in delivery

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



copyMessage
+++++++++++

.. function:: copyMessage()


    copy an existing message

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of targer folder

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



moveMessage
+++++++++++

.. function:: moveMessage()


    move an existing message

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of targer folder

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



setFlags
++++++++

.. function:: setFlags()


    set flags for message
    
    NOTE: this method can't set the recent flag.

    :param int: number of message
    :param array: new flags for message

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



removeMessage
+++++++++++++

.. function:: removeMessage()


    stub for not supported message deletion

    :param $id: 

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



setQuota
++++++++

.. function:: setQuota()


    enable/disable quota and set a quota value if wanted or needed
    
    You can enable/disable quota with true/false. If you don't have
    a MDA or want to enforce a quota value you can also set this value
    here. Use array('size' => SIZE_QUOTA, 'count' => MAX_MESSAGE) do
    define your quota. Order of these fields does matter!

    :param bool|array: new quota value



getQuota
++++++++

.. function:: getQuota()


    get currently set quota


    :param bool: 

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 

    :rtype: bool|array 



_calculateMaildirsize
+++++++++++++++++++++

.. function:: _calculateMaildirsize()


    @see http://www.inter7.com/courierimap/README.maildirquota.html "Calculating maildirsize"


    :rtype: array 



_calculateQuota
+++++++++++++++

.. function:: _calculateQuota()


    @see http://www.inter7.com/courierimap/README.maildirquota.html "Calculating the quota for a Maildir++"

    :param bool: 

    :rtype: array 



_addQuotaEntry
++++++++++++++

.. function:: _addQuotaEntry()



checkQuota
++++++++++

.. function:: checkQuota()


    check if storage is currently over quota


    :param bool: return known data of quota and current size and message count
    :param bool: 

    :rtype: bool|array over quota state or detailed response



