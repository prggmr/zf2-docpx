.. /Code/Scanner/AggregateDirectoryScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\AggregateDirectoryScanner
**********************************************



Methods
=======

getNamespaces
-------------

.. function:: getNamespaces([$returnScannerClass = false])


    Get namespaces

    :param bool $returnScannerClass: 


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44
    :todo n: n



getIncludes
-----------

.. function:: getIncludes([$returnScannerClass = false])



getClasses
----------

.. function:: getClasses([$returnScannerClass = false, [$returnDerivedScannerClass = false]])



hasClass
--------

.. function:: hasClass($class)


    Check for a class

    :param string $class: 

    :rtype: bool 



getClass
--------

.. function:: getClass($class, [$returnScannerClass = true, [$returnDerivedScannerClass = false]])


    Get class

    :param string $class: 
    :param bool $returnScannerClass: 
    :param bool $returnDerivedScannerClass: 

    :rtype: ClassScanner|DerivedClassScanner 

    :throws: Exception\RuntimeException 



getFunctions
------------

.. function:: getFunctions([$returnScannerClass = false])





