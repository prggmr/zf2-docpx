.. Mail/Storage/Folder/FolderInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Mail\\Storage\\Folder\\getFolders
=======================================

.. function:: Zend\Mail\Storage\Folder\getFolders()


    get root folder or given folder

    :param string: get folder structure for given folder, else root

    :rtype: FolderInterface root or wanted folder



Function
********

Zend\\Mail\\Storage\\Folder\\selectFolder
=========================================

.. function:: Zend\Mail\Storage\Folder\selectFolder()


    select given folder
    
    folder must be selectable!

    :param FolderInterface|string: global name of folder or instance for subfolder

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Folder\\getCurrentFolder
=============================================

.. function:: Zend\Mail\Storage\Folder\getCurrentFolder()


    get Zend\Mail\Storage\Folder instance for current folder

    :rtype: FolderInterface instance of current folder

    :throws: \Zend\Mail\Storage\Exception\ExceptionInterface 



