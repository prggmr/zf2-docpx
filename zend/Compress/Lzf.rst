.. Filter/Compress/Lzf.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Compress\\Lzf
===========================

Compression adapter for Lzf

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor

    :param null: 

    :throws Exception\ExtensionNotLoadedException: if lzf extension missing



compress
--------

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if error occurs during compression



decompress
----------

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException if error occurs during decompression



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 



