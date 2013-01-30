.. Di/Definition/CompilerDefinition.php generated using docpx on 01/30/13 03:32am


Zend\\Di\\Definition\\CompilerDefinition
========================================

Class definitions based on a set of directories to be scanned

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|IntrospectionStrategy: 



setIntrospectionStrategy
------------------------

.. function:: setIntrospectionStrategy()


    Set introspection strategy

    :param IntrospectionStrategy: 



setAllowReflectionExceptions
----------------------------

.. function:: setAllowReflectionExceptions()


    @param bool $allowReflectionExceptions



getIntrospectionStrategy
------------------------

.. function:: getIntrospectionStrategy()


    Get introspection strategy

    :rtype: IntrospectionStrategy 



addDirectory
------------

.. function:: addDirectory()


    Add directory

    :param string: 



addDirectoryScanner
-------------------

.. function:: addDirectoryScanner()


    Add directory scanner

    :param DirectoryScanner: 



addCodeScannerFile
------------------

.. function:: addCodeScannerFile()


    Add code scanner file

    :param FileScanner: 



compile
-------

.. function:: compile()


    Compile

    :rtype: void 



toArrayDefinition
-----------------

.. function:: toArrayDefinition()


    @return ArrayDefinition



processClass
------------

.. function:: processClass()


    @param  string               $class




processParams
-------------

.. function:: processParams()


    @param array                                  $def

    :param \Zend\Code\Reflection\ClassReflection: 
    :param \Zend\Code\Reflection\MethodReflection: 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass()


    {@inheritDoc}



getClassSupertypes
------------------

.. function:: getClassSupertypes()


    {@inheritDoc}



getInstantiator
---------------

.. function:: getInstantiator()


    {@inheritDoc}



hasMethods
----------

.. function:: hasMethods()


    {@inheritDoc}



hasMethod
---------

.. function:: hasMethod()


    {@inheritDoc}



getMethods
----------

.. function:: getMethods()


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters()


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters()


    {@inheritDoc}



