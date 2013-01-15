.. /Code/Scanner/DerivedClassScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\DerivedClassScanner
****************************************



Methods
=======

__construct
-----------

.. function:: __construct($classScanner, $directoryScanner)


    Constructor

    :param ClassScanner $classScanner: 
    :param DirectoryScanner $directoryScanner: 



getName
-------

.. function:: getName()


    Get name

    :rtype: null|string 



getShortName
------------

.. function:: getShortName()


    Get short name

    :rtype: null|string 



isInstantiable
--------------

.. function:: isInstantiable()


    Check if instantiable

    :rtype: bool 



isFinal
-------

.. function:: isFinal()


    Check if final

    :rtype: bool 



isAbstract
----------

.. function:: isAbstract()


    Check if is abstract

    :rtype: bool 



isInterface
-----------

.. function:: isInterface()


    Check if is interface

    :rtype: bool 



getParentClasses
----------------

.. function:: getParentClasses()


    Get parent classes

    :rtype: array 



hasParentClass
--------------

.. function:: hasParentClass()


    Check for parent class

    :rtype: bool 



getParentClass
--------------

.. function:: getParentClass()


    Get parent class

    :rtype: null|string 



getInterfaces
-------------

.. function:: getInterfaces([$returnClassScanners = false])


    Get interfaces

    :param bool $returnClassScanners: 

    :rtype: array 



getConstants
------------

.. function:: getConstants()


    Get constants

    :rtype: array 



getProperties
-------------

.. function:: getProperties([$returnScannerProperty = false])


    Get properties

    :param bool $returnScannerProperty: 

    :rtype: array 



getMethodNames
--------------

.. function:: getMethodNames()


    Get method names

    :rtype: array 



getMethods
----------

.. function:: getMethods()


    Get methods

    :rtype: MethodScanner[] 



getMethod
---------

.. function:: getMethod($methodNameOrInfoIndex)


    Get method

    :param int|string $methodNameOrInfoIndex: 

    :rtype: MethodScanner 

    :throws: Exception\InvalidArgumentException 



hasMethod
---------

.. function:: hasMethod($name)


    Check for method

    :param string $name: 

    :rtype: bool 





