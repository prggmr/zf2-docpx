.. /Filter/Compress/Rar.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Rar
***************************


Compression adapter for Rar



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param array $options: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if rar extension not loaded



getCallback
-----------

.. function:: getCallback()


    Returns the set callback for compression

    :rtype: string 



setCallback
-----------

.. function:: setCallback($callback)


    Sets the callback to use

    :param string $callback: 

    :rtype: Rar 

    :throws: Exception\InvalidArgumentException if invalid callback provided



getArchive
----------

.. function:: getArchive()


    Returns the set archive

    :rtype: string 



setArchive
----------

.. function:: setArchive($archive)


    Sets the archive to use for de-/compression

    :param string $archive: Archive to use

    :rtype: Rar 



getPassword
-----------

.. function:: getPassword()


    Returns the set password

    :rtype: string 



setPassword
-----------

.. function:: setPassword($password)


    Sets the password to use

    :param string $password: 

    :rtype: Rar 



getTarget
---------

.. function:: getTarget()


    Returns the set targetpath

    :rtype: string 



setTarget
---------

.. function:: setTarget($target)


    Sets the targetpath to use

    :param string $target: 

    :rtype: Rar 

    :throws: Exception\InvalidArgumentException if specified target directory does not exist



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string|array $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if no callback available, or error during compression



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: bool 

    :throws: Exception\RuntimeException if archive not found, cannot be opened,
                                   or error during decompression



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





