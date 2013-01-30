.. Soap/AutoDiscover/DiscoveryStrategy/DiscoveryStrategyInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Soap\\AutoDiscover\\DiscoveryStrategy\\getFunctionParameterType
=====================================================================

.. function:: Zend\Soap\AutoDiscover\DiscoveryStrategy\getFunctionParameterType()


    Get the function parameters php type.
    
    Default implementation assumes the default param doc-block tag.

    :param ReflectionParameter: 

    :rtype: string 



Function
********

Zend\\Soap\\AutoDiscover\\DiscoveryStrategy\\getFunctionReturnType
==================================================================

.. function:: Zend\Soap\AutoDiscover\DiscoveryStrategy\getFunctionReturnType()


    Get the functions return php type.
    
    Default implementation assumes the value of the return doc-block tag.

    :param AbstractFunction: 
    :param Prototype: 

    :rtype: string 



Function
********

Zend\\Soap\\AutoDiscover\\DiscoveryStrategy\\isFunctionOneWay
=============================================================

.. function:: Zend\Soap\AutoDiscover\DiscoveryStrategy\isFunctionOneWay()


    Detect if the function is a one-way or two-way operation.
    
    Default implementation assumes one-way, when return value is "void".

    :param AbstractFunction: 
    :param Prototype: 

    :rtype: bool 



Function
********

Zend\\Soap\\AutoDiscover\\DiscoveryStrategy\\getFunctionDocumentation
=====================================================================

.. function:: Zend\Soap\AutoDiscover\DiscoveryStrategy\getFunctionDocumentation()


    Detect the functions documentation.
    
    Default implementation uses docblock description.

    :param AbstractFunction: 

    :rtype: string 



