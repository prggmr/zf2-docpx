.. /Filter/Compress/Zip.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Zip
***************************


Compression adapter for zip



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param null|array|\Traversable $options: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if zip extension not loaded



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

    :rtype: Zip 



getTarget
---------

.. function:: getTarget()


    Returns the set targetpath

    :rtype: string 



setTarget
---------

.. function:: setTarget($target)


    Sets the target to use

    :param string $target: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Zip 



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string $content: 

    :rtype: string Compressed archive

    :throws: Exception\RuntimeException if unable to open zip archive, or error during compression



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException If archive file not found, target directory not found,
                                   or error during decompression



errorString
-----------

.. function:: errorString($error)


    Returns the proper string based on the given error constant

    :param string $error: 

    :rtype: string 



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





