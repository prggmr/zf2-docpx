.. /Code/Scanner/CachingFileScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\CachingFileScanner
***************************************



Methods
=======

__construct
-----------

.. function:: __construct($file, [$annotationManager = false])


    Constructor

    :param array|null $file: 
    :param AnnotationManager $annotationManager: 

    :throws Exception\InvalidArgumentException: 



clearCache
----------

.. function:: clearCache()


    Clear cache

    :rtype: void 



getAnnotationManager
--------------------

.. function:: getAnnotationManager()


    Get annotation manager

    :rtype: AnnotationManager 



getFile
-------

.. function:: getFile()


    Get file

    :rtype: array|null|string 



getDocComment
-------------

.. function:: getDocComment()


    Get doc comment

    :rtype: null|string 



getNamespaces
-------------

.. function:: getNamespaces()


    Get namespaces

    :rtype: string[] 



getUses
-------

.. function:: getUses([$namespace = false])


    Get uses

    :param null|string $namespace: 

    :rtype: array|null 



getIncludes
-----------

.. function:: getIncludes()


    Get includes



getClassNames
-------------

.. function:: getClassNames()


    Get class names

    :rtype: array 



getClasses
----------

.. function:: getClasses()


    Get classes

    :rtype: string[] 



getClass
--------

.. function:: getClass($className)


    Get class

    :param int|string $className: 

    :rtype: ClassScanner 



getClassNameInformation
-----------------------

.. function:: getClassNameInformation($className)


    Get class name information

    :param string $className: 

    :rtype: bool|null|NameInformation 



getFunctionNames
----------------

.. function:: getFunctionNames()


    Get function names

    :rtype: string[] 



getFunctions
------------

.. function:: getFunctions()


    Get functions

    :rtype: string[] 





