.. /Filter/Compress/Lzf.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress\\Lzf
***************************


Compression adapter for Lzf



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param null $options: 

    :throws Exception\ExtensionNotLoadedException: if lzf extension missing



compress
--------

.. function:: compress($content)


    Compresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if error occurs during compression



decompress
----------

.. function:: decompress($content)


    Decompresses the given content

    :param string $content: 

    :rtype: string 

    :throws: Exception\RuntimeException if error occurs during decompression



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





