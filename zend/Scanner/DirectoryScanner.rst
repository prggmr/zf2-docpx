.. Code/Scanner/DirectoryScanner.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Scanner\\DirectoryScanner
=====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param null|string|array $directory



addDirectory
++++++++++++

.. function:: addDirectory()


    @param  DirectoryScanner|string $directory

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



addDirectoryScanner
+++++++++++++++++++

.. function:: addDirectoryScanner()


    @param  DirectoryScanner $directoryScanner

    :rtype: void 



addFileScanner
++++++++++++++

.. function:: addFileScanner()


    @param  FileScanner $fileScanner

    :rtype: void 



scan
++++

.. function:: scan()


    @return void



getNamespaces
+++++++++++++

.. function:: getNamespaces()


    @todo implement method



getFiles
++++++++

.. function:: getFiles()


    @param  bool $returnFileScanners

    :rtype: array 



getClassNames
+++++++++++++

.. function:: getClassNames()


    @return array



getClasses
++++++++++

.. function:: getClasses()


    @param  bool  $returnDerivedScannerClass

    :rtype: array 



hasClass
++++++++

.. function:: hasClass()


    @param  string $class

    :rtype: bool 



getClass
++++++++

.. function:: getClass()


    @param  string $class

    :param bool: 

    :rtype: ClassScanner|DerivedClassScanner 

    :throws: Exception\InvalidArgumentException 



createClassToFileScannerCache
+++++++++++++++++++++++++++++

.. function:: createClassToFileScannerCache()


    Create class to file scanner cache

    :rtype: void 



export
++++++

.. function:: export()


    Export




__toString
++++++++++

.. function:: __toString()


    __ToString




