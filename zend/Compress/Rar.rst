.. Filter/Compress/Rar.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Compress\\Rar
===========================

Compression adapter for Rar

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor

    :param array: (Optional) Options to set

    :throws Exception\ExtensionNotLoadedException: if rar extension not loaded



getCallback
-----------

.. function:: getCallback()


    Returns the set callback for compression

    :rtype: string 



setCallback
-----------

.. function:: setCallback()


    Sets the callback to use

    :param string: 

    :rtype: Rar 

    :throws: Exception\InvalidArgumentException if invalid callback provided



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

    :rtype: Rar 



getPassword
-----------

.. function:: getPassword()


    Returns the set password

    :rtype: string 



setPassword
-----------

.. function:: setPassword()


    Sets the password to use

    :param string: 

    :rtype: Rar 



getTarget
---------

.. function:: getTarget()


    Returns the set targetpath

    :rtype: string 



setTarget
---------

.. function:: setTarget()


    Sets the targetpath to use

    :param string: 

    :rtype: Rar 

    :throws: Exception\InvalidArgumentException if specified target directory does not exist



compress
--------

.. function:: compress()


    Compresses the given content

    :param string|array: 

    :rtype: string 

    :throws: Exception\RuntimeException if no callback available, or error during compression



decompress
----------

.. function:: decompress()


    Decompresses the given content

    :param string: 

    :rtype: bool 

    :throws: Exception\RuntimeException if archive not found, cannot be opened,
                                   or error during decompression



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 



