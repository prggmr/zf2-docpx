.. /Filter/Compress/Gz.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Gz
**************************


Compression adapter for Gzip (ZLib)



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param null|array|\Traversable $options: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if zlib extension not loaded



getLevel
--------

.. function:: getLevel()


    Returns the set compression level

    :rtype: integer 



setLevel
--------

.. function:: setLevel($level)


    Sets a new compression level

    :param integer $level: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Gz 



getMode
-------

.. function:: getMode()


    Returns the set compression mode

    :rtype: string 



setMode
-------

.. function:: setMode($mode)


    Sets a new compression mode

    :param string $mode: Supported are 'compress', 'deflate' and 'file'

    :rtype: Gz 

    :throws: Exception\InvalidArgumentException for invalid $mode value



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

    :rtype: Gz 



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to open archive or error during decompression



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to open archive or error during decompression



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





