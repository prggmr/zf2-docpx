.. /Code/Scanner/ParameterScanner.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Scanner\\ParameterScanner
*************************************



Methods
=======

__construct
-----------

.. function:: __construct($parameterTokens, [$nameInformation = false])


    Constructor

    :param array $parameterTokens: 
    :param NameInformation $nameInformation: 



setDeclaringClass
-----------------

.. function:: setDeclaringClass($class)


    Set declaring class

    :param string $class: 

    :rtype: void 



setDeclaringScannerClass
------------------------

.. function:: setDeclaringScannerClass($scannerClass)


    Set declaring scanner class

    :param ClassScanner $scannerClass: 

    :rtype: void 



setDeclaringFunction
--------------------

.. function:: setDeclaringFunction($function)


    Set declaring function

    :param string $function: 

    :rtype: void 



setDeclaringScannerFunction
---------------------------

.. function:: setDeclaringScannerFunction($scannerFunction)


    Set declaring scanner function

    :param MethodScanner $scannerFunction: 

    :rtype: void 



setPosition
-----------

.. function:: setPosition($position)


    Set position

    :param int $position: 

    :rtype: void 



scan
----

.. function:: scan()


    Scan

    :rtype: void 



getDeclaringScannerClass
------------------------

.. function:: getDeclaringScannerClass()


    Get declaring scanner class

    :rtype: ClassScanner 



getDeclaringClass
-----------------

.. function:: getDeclaringClass()


    Get declaring class

    :rtype: string 



getDeclaringScannerFunction
---------------------------

.. function:: getDeclaringScannerFunction()


    Get declaring scanner function

    :rtype: MethodScanner 



getDeclaringFunction
--------------------

.. function:: getDeclaringFunction()


    Get declaring function

    :rtype: string 



getDefaultValue
---------------

.. function:: getDefaultValue()


    Get default value

    :rtype: string 



getClass
--------

.. function:: getClass()


    Get class

    :rtype: string 



getName
-------

.. function:: getName()


    Get name

    :rtype: string 



getPosition
-----------

.. function:: getPosition()


    Get position

    :rtype: int 



isArray
-------

.. function:: isArray()


    Check if is array

    :rtype: bool 



isDefaultValueAvailable
-----------------------

.. function:: isDefaultValueAvailable()


    Check if default value is available

    :rtype: bool 



isOptional
----------

.. function:: isOptional()


    Check if is optional

    :rtype: bool 



isPassedByReference
-------------------

.. function:: isPassedByReference()


    Check if is passed by reference

    :rtype: bool 





