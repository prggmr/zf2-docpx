.. Filter/Compress/Snappy.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\Compress\\Snappy
==============================

Compression adapter for php snappy (http://code.google.com/p/php-snappy/)

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param null|array|\Traversable: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if snappy extension not loaded



compress
++++++++

.. function:: compress()


    Compresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException on memory, output length or data warning



decompress
++++++++++

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException on memory, output length or data warning



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



