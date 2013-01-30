.. Mail/Storage/Writable/WritableInterface.php generated using docpx on 01/30/13 03:27pm


Function
********

Zend\\Mail\\Storage\\Writable\\createFolder
===========================================

.. function:: Zend\Mail\Storage\Writable\createFolder()


    create a new folder
    
    This method also creates parent folders if necessary. Some mail storages may restrict, which folder
    may be used as parent or which chars may be used in the folder name

    :param string: global name of folder, local name if $parentFolder is set
    :param string|\Zend\Mail\Storage\Folder: parent folder for new folder, else root folder is parent

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\removeFolder
===========================================

.. function:: Zend\Mail\Storage\Writable\removeFolder()


    remove a folder

    :param string|\Zend\Mail\Storage\Folder: name or instance of folder

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\renameFolder
===========================================

.. function:: Zend\Mail\Storage\Writable\renameFolder()


    rename and/or move folder
    
    The new name has the same restrictions as in createFolder()

    :param string|\Zend\Mail\Storage\Folder: name or instance of folder
    :param string: new global name of folder

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\appendMessage
============================================

.. function:: Zend\Mail\Storage\Writable\appendMessage()


    append a new message to mail storage

    :param string|\Zend\Mail\Message|\Zend\Mime\Message: message as string or instance of message class
    :param null|string|\Zend\Mail\Storage\Folder: folder for new message, else current folder is taken
    :param null|array: set flags for new message, else a default set is used

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\copyMessage
==========================================

.. function:: Zend\Mail\Storage\Writable\copyMessage()


    copy an existing message

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of target folder

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\moveMessage
==========================================

.. function:: Zend\Mail\Storage\Writable\moveMessage()


    move an existing message

    :param int: number of message
    :param string|\Zend\Mail\Storage\Folder: name or instance of target folder

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



Function
********

Zend\\Mail\\Storage\\Writable\\setFlags
=======================================

.. function:: Zend\Mail\Storage\Writable\setFlags()


    set flags for message
    
    NOTE: this method can't set the recent flag.

    :param int: number of message
    :param array: new flags for message

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



