.. Code/Scanner/CachingFileScanner.php generated using docpx on 01/30/13 03:32am


Zend\\Code\\Scanner\\CachingFileScanner
=======================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param  array|null $file

    :param AnnotationManager: 

    :throws Exception\InvalidArgumentException: 



clearCache
----------

.. function:: clearCache()


    @return void



getAnnotationManager
--------------------

.. function:: getAnnotationManager()


    @return AnnotationManager



getFile
-------

.. function:: getFile()


    @return array|null|string



getDocComment
-------------

.. function:: getDocComment()


    @return null|string



getNamespaces
-------------

.. function:: getNamespaces()


    @return array



getUses
-------

.. function:: getUses()


    @param  null|string $namespace

    :rtype: array|null 



getIncludes
-----------

.. function:: getIncludes()


    @return array



getClassNames
-------------

.. function:: getClassNames()


    @return array



getClasses
----------

.. function:: getClasses()


    @return array



getClass
--------

.. function:: getClass()


    @param  int|string $className

    :rtype: ClassScanner 



getClassNameInformation
-----------------------

.. function:: getClassNameInformation()


    @param  string $className

    :rtype: bool|null|NameInformation 



getFunctionNames
----------------

.. function:: getFunctionNames()


    @return array



getFunctions
------------

.. function:: getFunctions()


    @return array



