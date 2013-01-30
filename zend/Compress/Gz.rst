.. Filter/Compress/Gz.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\Compress\\Gz
==========================

Compression adapter for Gzip (ZLib)

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param null|array|\Traversable: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if zlib extension not loaded



getLevel
++++++++

.. function:: getLevel()


    Returns the set compression level

    :rtype: integer 



setLevel
++++++++

.. function:: setLevel()


    Sets a new compression level

    :param integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Gz 



getMode
+++++++

.. function:: getMode()


    Returns the set compression mode

    :rtype: string 



setMode
+++++++

.. function:: setMode()


    Sets a new compression mode

    :param string: Supported are 'compress', 'deflate' and 'file'

    :rtype: Gz 

    :throws: Exception\InvalidArgumentException for invalid $mode value



getArchive
++++++++++

.. function:: getArchive()


    Returns the set archive

    :rtype: string 



setArchive
++++++++++

.. function:: setArchive()


    Sets the archive to use for de-/compression

    :param string: Archive to use

    :rtype: Gz 



compress
++++++++

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to open archive or error during decompression



decompress
++++++++++

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to open archive or error during decompression



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



