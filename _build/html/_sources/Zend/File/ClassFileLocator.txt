.. /File/ClassFileLocator.php generated using docpx on 01/15/13 05:29pm


Zend\\File\\ClassFileLocator
****************************


Locate files containing PHP classes, interfaces, abstracts or traits



Methods
=======

__construct
-----------

.. function:: __construct([$dirOrIterator = "."])


    Create an instance of the locator iterator
    
    Expects either a directory, or a DirectoryIterator (or its recursive variant)
    instance.

    :param string|DirectoryIterator $dirOrIterator: 

    :throws Exception\InvalidArgumentException: 



accept
------

.. function:: accept()


    Filter for files containing PHP classes, interfaces, or abstracts

    :rtype: bool 





