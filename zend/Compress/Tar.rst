.. /Filter/Compress/Tar.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Tar
***************************


Compression adapter for Tar



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param array $options: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if Archive_Tar component not available



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

    :rtype: Tar 



getTarget
---------

.. function:: getTarget()


    Returns the set target path

    :rtype: string 



setTarget
---------

.. function:: setTarget($target)


    Sets the target path to use

    :param string $target: 

    :rtype: Tar 

    :throws: Exception\InvalidArgumentException if target path does not exist



getMode
-------

.. function:: getMode()


    Returns the set compression mode

    :rtype: string 



setMode
-------

.. function:: setMode($mode)


    Compression mode to use
    
    Either Gz or Bz2.

    :param string $mode: 

    :rtype: Tar 

    :throws: Exception\InvalidArgumentException for invalid $mode values
    :throws: Exception\ExtensionNotLoadedException if bz2 mode selected but extension not loaded
    :throws: Exception\ExtensionNotLoadedException if gz mode selected but extension not loaded



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to create temporary file
    :throws: Exception\RuntimeException if unable to create archive



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to find archive
    :throws: Exception\RuntimeException if error occurs decompressing archive



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





