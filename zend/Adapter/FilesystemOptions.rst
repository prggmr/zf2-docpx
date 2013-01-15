.. /Cache/Storage/Adapter/FilesystemOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\Adapter\\FilesystemOptions
************************************************


These are options specific to the Filesystem adapter



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|Traversable|null $options: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



setCacheDir
-----------

.. function:: setCacheDir($cacheDir)


    Set cache dir

    :param string $cacheDir: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



getCacheDir
-----------

.. function:: getCacheDir()


    Get cache dir

    :rtype: null|string 



setClearStatCache
-----------------

.. function:: setClearStatCache($clearStatCache)


    Set clear stat cache

    :param bool $clearStatCache: 

    :rtype: FilesystemOptions 



getClearStatCache
-----------------

.. function:: getClearStatCache()


    Get clear stat cache

    :rtype: bool 



setDirLevel
-----------

.. function:: setDirLevel($dirLevel)


    Set dir level

    :param int $dirLevel: 

    :rtype: FilesystemOptions 

    :throws: Exception\InvalidArgumentException 



getDirLevel
-----------

.. function:: getDirLevel()


    Get dir level

    :rtype: int 



setDirPermission
----------------

.. function:: setDirPermission($dirPermission)


    Set permission to create directories on unix systems

    :param false|string|int $dirPermission: FALSE to disable explicit permission or an octal number

    :rtype: FilesystemOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



getDirPermission
----------------

.. function:: getDirPermission()


    Get permission to create directories on unix systems

    :rtype: false|int 



setFileLocking
--------------

.. function:: setFileLocking($fileLocking)


    Set file locking

    :param bool $fileLocking: 

    :rtype: FilesystemOptions 



getFileLocking
--------------

.. function:: getFileLocking()


    Get file locking

    :rtype: bool 



setFilePermission
-----------------

.. function:: setFilePermission($filePermission)


    Set permission to create files on unix systems

    :param false|string|int $filePermission: FALSE to disable explicit permission or an octal number

    :rtype: FilesystemOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



getFilePermission
-----------------

.. function:: getFilePermission()


    Get permission to create files on unix systems

    :rtype: false|int 



setNamespaceSeparator
---------------------

.. function:: setNamespaceSeparator($namespaceSeparator)


    Set namespace separator

    :param string $namespaceSeparator: 

    :rtype: FilesystemOptions 



getNamespaceSeparator
---------------------

.. function:: getNamespaceSeparator()


    Get namespace separator

    :rtype: string 



setNoAtime
----------

.. function:: setNoAtime($noAtime)


    Set no atime

    :param bool $noAtime: 

    :rtype: FilesystemOptions 



getNoAtime
----------

.. function:: getNoAtime()


    Get no atime

    :rtype: bool 



setNoCtime
----------

.. function:: setNoCtime($noCtime)


    Set no ctime

    :param bool $noCtime: 

    :rtype: FilesystemOptions 



getNoCtime
----------

.. function:: getNoCtime()


    Get no ctime

    :rtype: bool 



setUmask
--------

.. function:: setUmask($umask)


    Set the umask to create files and directories on unix systems
    
    Note: On multithreaded webservers it's better to explicit set file and dir permission.

    :param false|string|int $umask: FALSE to disable umask or an octal number

    :rtype: FilesystemOptions 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :see: s s


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :link: h h



getUmask
--------

.. function:: getUmask()


    Get the umask to create files and directories on unix systems

    :rtype: false|int 





