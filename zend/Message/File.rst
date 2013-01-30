.. Mail/Storage/Message/File.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\Storage\\Message\\File
==================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Public constructor
    
    In addition to the parameters of Zend_Mail_Part::__construct() this constructor supports:
    - flags array with flags for message, keys are ignored, use constants defined in Zend_Mail_Storage

    :param array: 

    :throws \Zend\Mail\Storage\Exception\ExceptionInterface: 



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



