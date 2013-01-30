.. Mail/Storage/Folder/Mbox.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\Folder\\Mbox
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create instance with parameters
    
    Disallowed parameters are:
      - filename use \Zend\Mail\Storage\Mbox for a single file
    Supported parameters are:
      - dirname rootdir of mbox structure
      - folder intial selected folder, default is 'INBOX'

    :param $params: mail reader specific parameters

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 



_buildFolderTree
++++++++++++++++

.. function:: _buildFolderTree()


    find all subfolders and mbox files for folder structure
    
    Result is save in \Zend\Mail\Storage\Folder instances with the root in $this->rootFolder.
    $parentFolder and $parentGlobalName are only used internally for recursion.

    :param string: call with root dir, also used for recursion.
    :param \Zend\Mail\Storage\Folder|null: used for recursion
    :param string: used for recursion

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 



getFolders
++++++++++

.. function:: getFolders()


    get root folder or given folder

    :param string: get folder structure for given folder, else root

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 

    :rtype: \Zend\Mail\Storage\Folder root or wanted folder



selectFolder
++++++++++++

.. function:: selectFolder()


    select given folder
    
    folder must be selectable!

    :param \Zend\Mail\Storage\Folder|string: global name of folder or instance for subfolder

    :throws \Zend\Mail\Storage\Exception\RuntimeException: 



getCurrentFolder
++++++++++++++++

.. function:: getCurrentFolder()


    get \Zend\Mail\Storage\Folder instance for current folder

    :rtype: \Zend\Mail\Storage\Folder instance of current folder

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


    magic method for unserialize(), with this method you can cache the mbox class



