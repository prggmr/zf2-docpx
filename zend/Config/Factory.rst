.. Config/Factory.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Config\\Factory
=====================

Methods
-------

fromFile
++++++++

.. function:: fromFile()


    Read a config from a file.

    :param string: 
    :param bool: 

    :rtype: array|Config 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



fromFiles
+++++++++

.. function:: fromFiles()


    Read configuration from multiple files and merge them.

    :param array: 
    :param bool: 

    :rtype: array|Config 



toFile
++++++

.. function:: toFile()


    Writes a config to a file

    :param string: 
    :param array|Config: 

    :rtype: boolean TRUE on success | FALSE on failure

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



setReaderPluginManager
++++++++++++++++++++++

.. function:: setReaderPluginManager()


    Set reader plugin manager

    :param ReaderPluginManager: 

    :rtype: void 



getReaderPluginManager
++++++++++++++++++++++

.. function:: getReaderPluginManager()


    Get the reader plugin manager

    :rtype: ReaderPluginManager 



setWriterPluginManager
++++++++++++++++++++++

.. function:: setWriterPluginManager()


    Set writer plugin manager

    :param WriterPluginManager: 

    :rtype: void 



getWriterPluginManager
++++++++++++++++++++++

.. function:: getWriterPluginManager()


    Get the writer plugin manager

    :rtype: WriterPluginManager 



registerReader
++++++++++++++

.. function:: registerReader()


    Set config reader for file extension

    :param string: 
    :param string|Reader\ReaderInterface: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



registerWriter
++++++++++++++

.. function:: registerWriter()


    Set config writer for file extension

    :param string: 
    :param string|Writer\AbstractWriter: @throw Exception\InvalidArgumentException

    :rtype: void 



