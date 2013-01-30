.. Code/Scanner/AggregateDirectoryScanner.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Scanner\\AggregateDirectoryScanner
==============================================

Methods
-------

getNamespaces
+++++++++++++

.. function:: getNamespaces()


    @param  bool $returnScannerClass




getIncludes
+++++++++++

.. function:: getIncludes()



getClasses
++++++++++

.. function:: getClasses()



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
    :param bool: 

    :rtype: ClassScanner|DerivedClassScanner 

    :throws: Exception\RuntimeException 



getFunctions
++++++++++++

.. function:: getFunctions()


    @param bool $returnScannerClass



