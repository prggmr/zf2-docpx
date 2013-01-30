.. Cache/Storage/Adapter/FilesystemOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Cache\\Storage\\Adapter\\FilesystemOptions
================================================

These are options specific to the Filesystem adapter

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable|null: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



setCacheDir
+++++++++++

.. function:: setCacheDir()


    Set cache dir

    :param string: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



getCacheDir
+++++++++++

.. function:: getCacheDir()


    Get cache dir

    :rtype: null|string 



setClearStatCache
+++++++++++++++++

.. function:: setClearStatCache()


    Set clear stat cache

    :param bool: 

    :rtype: FilesystemOptions 



getClearStatCache
+++++++++++++++++

.. function:: getClearStatCache()


    Get clear stat cache

    :rtype: bool 



setDirLevel
+++++++++++

.. function:: setDirLevel()


    Set dir level

    :param int: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



getDirLevel
+++++++++++

.. function:: getDirLevel()


    Get dir level

    :rtype: int 



setDirPermission
++++++++++++++++

.. function:: setDirPermission()


    Set permission to create directories on unix systems

    :param false|string|int: FALSE to disable explicit permission or an octal number

    :rtype: FilesystemOptions 

    :see:  
    :see:  

    :link:  



getDirPermission
++++++++++++++++

.. function:: getDirPermission()


    Get permission to create directories on unix systems

    :rtype: false|int 



setFileLocking
++++++++++++++

.. function:: setFileLocking()


    Set file locking

    :param bool: 

    :rtype: FilesystemOptions 



getFileLocking
++++++++++++++

.. function:: getFileLocking()


    Get file locking

    :rtype: bool 



setFilePermission
+++++++++++++++++

.. function:: setFilePermission()


    Set permission to create files on unix systems

    :param false|string|int: FALSE to disable explicit permission or an octal number

    :rtype: FilesystemOptions 

    :see:  
    :see:  

    :link:  



getFilePermission
+++++++++++++++++

.. function:: getFilePermission()


    Get permission to create files on unix systems

    :rtype: false|int 



setNamespaceSeparator
+++++++++++++++++++++

.. function:: setNamespaceSeparator()


    Set namespace separator

    :param string: 

    :rtype: FilesystemOptions 



getNamespaceSeparator
+++++++++++++++++++++

.. function:: getNamespaceSeparator()


    Get namespace separator

    :rtype: string 



setNoAtime
++++++++++

.. function:: setNoAtime()


    Set no atime

    :param bool: 

    :rtype: FilesystemOptions 



getNoAtime
++++++++++

.. function:: getNoAtime()


    Get no atime

    :rtype: bool 



setNoCtime
++++++++++

.. function:: setNoCtime()


    Set no ctime

    :param bool: 

    :rtype: FilesystemOptions 



getNoCtime
++++++++++

.. function:: getNoCtime()


    Get no ctime

    :rtype: bool 



setUmask
++++++++

.. function:: setUmask()


    Set the umask to create files and directories on unix systems
    
    Note: On multithreaded webservers it's better to explicit set file and dir permission.

    :param false|string|int: FALSE to disable umask or an octal number

    :rtype: FilesystemOptions 

    :see:  
    :see:  

    :link:  
    :link:  



getUmask
++++++++

.. function:: getUmask()


    Get the umask to create files and directories on unix systems

    :rtype: false|int 



