.. Filter/Compress/Zip.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\Compress\\Zip
===========================

Compression adapter for zip

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param null|array|\Traversable: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if zip extension not loaded



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

    :rtype: Zip 



getTarget
+++++++++

.. function:: getTarget()


    Returns the set targetpath

    :rtype: string 



setTarget
+++++++++

.. function:: setTarget()


    Sets the target to use

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Zip 



compress
++++++++

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string Compressed archive

    :throws: Exception\RuntimeException if unable to open zip archive, or error during compression



decompress
++++++++++

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException If archive file not found, target directory not found,
                                   or error during decompression



errorString
+++++++++++

.. function:: errorString()


    Returns the proper string based on the given error constant

    :param string: 

    :rtype: string 



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



