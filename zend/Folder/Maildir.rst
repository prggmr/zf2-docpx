.. Mail/Storage/Folder/Maildir.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Storage\\Folder\\Maildir
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create instance with parameters
    Supported parameters are:
      - dirname rootdir of maildir structure
      - delim   delim char for folder structure, default is '.'
      - folder initial selected folder, default is 'INBOX'

    :param $params: mail reader specific parameters

    :throws \Zend\Mail\Storage\Exception\InvalidArgumentException: 



_buildFolderTree
++++++++++++++++

.. function:: _buildFolderTree()


    find all subfolders and mbox files for folder structure
    
    Result is save in \Zend\Mail\Storage\Folder instances with the root in $this->rootFolder.
    $parentFolder and $parentGlobalName are only used internally for recursion.




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



