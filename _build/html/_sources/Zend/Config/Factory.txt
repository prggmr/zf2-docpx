.. /Config/Factory.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Factory
*********************


@category  Zend



Methods
=======

fromFile
--------

.. function:: fromFile($filename, [$returnConfigObject = false])


    Read a config from a file.

    :param string $filename: 
    :param bool $returnConfigObject: 

    :rtype: array|Config 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



fromFiles
---------

.. function:: fromFiles($files, [$returnConfigObject = false])


    Read configuration from multiple files and merge them.

    :param array $files: 
    :param bool $returnConfigObject: 

    :rtype: array|Config 



setReaderPluginManager
----------------------

.. function:: setReaderPluginManager($readers)


    Set reader plugin manager

    :param ReaderPluginManager $readers: 



getReaderPluginManager
----------------------

.. function:: getReaderPluginManager()


    Get the reader plugin manager

    :rtype: ReaderPluginManager 



registerReader
--------------

.. function:: registerReader($extension, $reader)


    Set config reader for file extension

    :param string $extension: 
    :param string|Reader\ReaderInterface $reader: 

    :throws Exception\InvalidArgumentException: 





