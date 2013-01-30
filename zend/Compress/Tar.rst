.. Filter/Compress/Tar.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\Compress\\Tar
===========================

Compression adapter for Tar

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param array: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if Archive_Tar component not available



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

    :rtype: Tar 



getTarget
+++++++++

.. function:: getTarget()


    Returns the set target path

    :rtype: string 



setTarget
+++++++++

.. function:: setTarget()


    Sets the target path to use

    :param string: 

    :rtype: Tar 

    :throws: Exception\InvalidArgumentException if target path does not exist



getMode
+++++++

.. function:: getMode()


    Returns the set compression mode

    :rtype: string 



setMode
+++++++

.. function:: setMode()


    Compression mode to use
    
    Either Gz or Bz2.

    :param string: 

    :rtype: Tar 

    :throws: Exception\InvalidArgumentException for invalid $mode values
    :throws: Exception\ExtensionNotLoadedException if bz2 mode selected but extension not loaded
    :throws: Exception\ExtensionNotLoadedException if gz mode selected but extension not loaded



compress
++++++++

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to create temporary file
    :throws: Exception\RuntimeException if unable to create archive



decompress
++++++++++

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if unable to find archive
    :throws: Exception\RuntimeException if error occurs decompressing archive



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



