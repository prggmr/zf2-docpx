.. /Filter/Compress/Bz2.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Bz2
***************************


Compression adapter for Bz2



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param null|array|\Traversable $options: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if bz2 extension not loaded



getBlocksize
------------

.. function:: getBlocksize()


    Returns the set blocksize

    :rtype: integer 



setBlocksize
------------

.. function:: setBlocksize($blocksize)


    Sets a new blocksize

    :param integer $blocksize: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bz2 



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

    :rtype: Bz2 



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException 



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException 



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





