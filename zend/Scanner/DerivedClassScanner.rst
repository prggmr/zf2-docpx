.. Code/Scanner/DerivedClassScanner.php generated using docpx on 01/30/13 03:32am


Zend\\Code\\Scanner\\DerivedClassScanner
========================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param ClassScanner $classScanner

    :param DirectoryScanner: 



getName
-------

.. function:: getName()


    @return null|string



getShortName
------------

.. function:: getShortName()


    @return null|string



isInstantiable
--------------

.. function:: isInstantiable()


    @return bool



isFinal
-------

.. function:: isFinal()


    @return bool



isAbstract
----------

.. function:: isAbstract()


    @return bool



isInterface
-----------

.. function:: isInterface()


    @return bool



getParentClasses
----------------

.. function:: getParentClasses()


    @return array



hasParentClass
--------------

.. function:: hasParentClass()


    @return bool



getParentClass
--------------

.. function:: getParentClass()


    @return null|string



getInterfaces
-------------

.. function:: getInterfaces()


    @param  bool $returnClassScanners

    :rtype: array 



getConstants
------------

.. function:: getConstants()


    @return array



getProperties
-------------

.. function:: getProperties()


    @param  bool $returnScannerProperty

    :rtype: array 



getMethodNames
--------------

.. function:: getMethodNames()


    @return array



getMethods
----------

.. function:: getMethods()


    @return MethodScanner[]



getMethod
---------

.. function:: getMethod()


    @param  int|string $methodNameOrInfoIndex

    :rtype: MethodScanner 

    :throws: Exception\InvalidArgumentException 



hasMethod
---------

.. function:: hasMethod()


    @param  string $name

    :rtype: bool 



