.. /Code/Scanner/ClassScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\ClassScanner
*********************************



Methods
=======

__construct
-----------

.. function:: __construct($classTokens, [$nameInformation = false])


    Constructor

    :param array $classTokens: 
    :param NameInformation|null $nameInformation: 

    :rtype: ClassScanner 



getAnnotations
--------------

.. function:: getAnnotations()


    Get annotations

    :rtype: array 



getDocComment
-------------

.. function:: getDocComment()


    Get doc comment

    :rtype: null|string 



getDocBlock
-----------

.. function:: getDocBlock()


    Get doc block

    :rtype: false|DocBlockScanner 



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



getLineStart
------------

.. function:: getLineStart()


    Get line start

    :rtype: int|null 



getLineEnd
----------

.. function:: getLineEnd()


    Get line end

    :rtype: int|null 



isFinal
-------

.. function:: isFinal()


    Check for final

    :rtype: bool 



isInstantiable
--------------

.. function:: isInstantiable()


    Check for instantiable

    :rtype: bool 



isAbstract
----------

.. function:: isAbstract()


    Check for abstract

    :rtype: bool 



isInterface
-----------

.. function:: isInterface()


    Check for interface

    :rtype: bool 



hasParentClass
--------------

.. function:: hasParentClass()


    Has parent class

    :rtype: bool 



getParentClass
--------------

.. function:: getParentClass()


    Get parent class

    :rtype: null|string 



getInterfaces
-------------

.. function:: getInterfaces()


    Get interfaces

    :rtype: string[] 



getConstants
------------

.. function:: getConstants()


    Get constants

    :rtype: array 



getPropertyNames
----------------

.. function:: getPropertyNames()


    Get property names

    :rtype: array 



getProperties
-------------

.. function:: getProperties()


    Get properties

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

    :param string|int $methodNameOrInfoIndex: 

    :throws Exception\InvalidArgumentException: 

    :rtype: MethodScanner 



hasMethod
---------

.. function:: hasMethod($name)


    Has method

    :param string $name: 

    :rtype: bool 



export
------

.. function:: export()


    Export



__toString
----------

.. function:: __toString()



scan
----

.. function:: scan()


    Scan

    :rtype: void 

    :throws: Exception\RuntimeException 



use
---

.. function:: use()


    Variables & Setup



use
---

.. function:: use()





