.. Filter/Compress/Bz2.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Compress\\Bz2
===========================

Compression adapter for Bz2

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor

    :param null|array|\Traversable: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if bz2 extension not loaded



getBlocksize
------------

.. function:: getBlocksize()


    Returns the set blocksize

    :rtype: integer 



setBlocksize
------------

.. function:: setBlocksize()


    Sets a new blocksize

    :param integer: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bz2 



getArchive
----------

.. function:: getArchive()


    Returns the set archive

    :rtype: string 



setArchive
----------

.. function:: setArchive()


    Sets the archive to use for de-/compression

    :param string: Archive to use

    :rtype: Bz2 



compress
--------

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 



decompress
----------

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 



