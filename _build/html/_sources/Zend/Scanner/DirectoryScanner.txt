.. /Code/Scanner/DirectoryScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\DirectoryScanner
*************************************



Methods
=======

__construct
-----------

.. function:: __construct([$directory = false])


    Constructor

    :param null|string|array $directory: 



addDirectory
------------

.. function:: addDirectory($directory)


    Add directory

    :param DirectoryScanner|string $directory: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



addDirectoryScanner
-------------------

.. function:: addDirectoryScanner($directoryScanner)


    Add directory scanner

    :param DirectoryScanner $directoryScanner: 

    :rtype: void 



addFileScanner
--------------

.. function:: addFileScanner($fileScanner)


    Add file scanner

    :param FileScanner $fileScanner: 

    :rtype: void 



scan
----

.. function:: scan()


    Scan

    :rtype: void 



getNamespaces
-------------

.. function:: getNamespaces()


    Get namespace


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44



getFiles
--------

.. function:: getFiles([$returnFileScanners = false])


    Get files

    :param bool $returnFileScanners: 

    :rtype: array 



getClassNames
-------------

.. function:: getClassNames()


    Get class names

    :rtype: string[] 



getClasses
----------

.. function:: getClasses([$returnDerivedScannerClass = false])


    Get classes

    :param bool $returnDerivedScannerClass: 

    :rtype: string[] 



hasClass
--------

.. function:: hasClass($class)


    Check for a class

    :param string $class: 

    :rtype: bool 



getClass
--------

.. function:: getClass($class, [$returnDerivedScannerClass = false])


    Get class

    :param string $class: 
    :param bool $returnDerivedScannerClass: 

    :rtype: ClassScanner|DerivedClassScanner 

    :throws: Exception\InvalidArgumentException 



createClassToFileScannerCache
-----------------------------

.. function:: createClassToFileScannerCache()


    Create class to file scanner cache

    :rtype: void 



export
------

.. function:: export()


    Export


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44



__toString
----------

.. function:: __toString()


    __ToString


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44





