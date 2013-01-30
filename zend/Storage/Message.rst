.. Mail/Storage/Message.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Mail\\Storage\\Message
============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Public constructor
    
    In addition to the parameters of Part::__construct() this constructor supports:
    - file  filename or file handle of a file with raw message content
    - flags array with flags for message, keys are ignored, use constants defined in \Zend\Mail\Storage

    :param array: 

    :throws Exception\RuntimeException: 



getTopLines
+++++++++++

.. function:: getTopLines()


    return toplines as found after headers

    :rtype: string toplines



hasFlag
+++++++

.. function:: hasFlag()


    check if flag is set

    :param mixed: a flag name, use constants defined in \Zend\Mail\Storage

    :rtype: bool true if set, otherwise false



getFlags
++++++++

.. function:: getFlags()


    get all set flags

    :rtype: array array with flags, key and value are the same for easy lookup



