.. File/ClassFileLocator.php generated using docpx on 01/30/13 03:32am


Zend\\File\\ClassFileLocator
============================

Locate files containing PHP classes, interfaces, abstracts or traits

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create an instance of the locator iterator
    
    Expects either a directory, or a DirectoryIterator (or its recursive variant)
    instance.

    :param string|DirectoryIterator: 

    :throws Exception\InvalidArgumentException: 



accept
------

.. function:: accept()


    Filter for files containing PHP classes, interfaces, or abstracts

    :rtype: bool 



