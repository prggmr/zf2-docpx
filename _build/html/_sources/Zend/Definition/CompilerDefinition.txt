.. /Di/Definition/CompilerDefinition.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Definition\\CompilerDefinition
****************************************


Class definitions based on a set of directories to be scanned



Methods
=======

__construct
-----------

.. function:: __construct([$introspectionStrategy = false])


    Constructor

    :param null|IntrospectionStrategy $introspectionStrategy: 



setIntrospectionStrategy
------------------------

.. function:: setIntrospectionStrategy($introspectionStrategy)


    Set introspection strategy

    :param IntrospectionStrategy $introspectionStrategy: 



setAllowReflectionExceptions
----------------------------

.. function:: setAllowReflectionExceptions([$allowReflectionExceptions = true])


    @param bool $allowReflectionExceptions



getIntrospectionStrategy
------------------------

.. function:: getIntrospectionStrategy()


    Get introspection strategy

    :rtype: IntrospectionStrategy 



addDirectory
------------

.. function:: addDirectory($directory)


    Add directory

    :param string $directory: 



addDirectoryScanner
-------------------

.. function:: addDirectoryScanner($directoryScanner)


    Add directory scanner

    :param DirectoryScanner $directoryScanner: 



addCodeScannerFile
------------------

.. function:: addCodeScannerFile($fileScanner)


    Add code scanner file

    :param FileScanner $fileScanner: 



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

.. function:: processClass($class)


    @param  string               $class




processParams
-------------

.. function:: processParams($def, $rClass, $rMethod)


    @param array                                  $def

    :param \Zend\Code\Reflection\ClassReflection $rClass: 
    :param \Zend\Code\Reflection\MethodReflection $rMethod: 



getClasses
----------

.. function:: getClasses()


    {@inheritDoc}



hasClass
--------

.. function:: hasClass($class)


    {@inheritDoc}



getClassSupertypes
------------------

.. function:: getClassSupertypes($class)


    {@inheritDoc}



getInstantiator
---------------

.. function:: getInstantiator($class)


    {@inheritDoc}



hasMethods
----------

.. function:: hasMethods($class)


    {@inheritDoc}



hasMethod
---------

.. function:: hasMethod($class, $method)


    {@inheritDoc}



getMethods
----------

.. function:: getMethods($class)


    {@inheritDoc}



hasMethodParameters
-------------------

.. function:: hasMethodParameters($class, $method)


    {@inheritDoc}



getMethodParameters
-------------------

.. function:: getMethodParameters($class, $method)


    {@inheritDoc}





