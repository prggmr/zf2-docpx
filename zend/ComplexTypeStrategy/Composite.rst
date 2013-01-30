.. Soap/Wsdl/ComplexTypeStrategy/Composite.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Soap\\Wsdl\\ComplexTypeStrategy\\Composite
================================================

Zend_Soap_Wsdl_Strategy_Composite

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Construct Composite WSDL Strategy.

    :param array: 
    :param string|ComplexTypeStrategy: 



connectTypeToStrategy
+++++++++++++++++++++

.. function:: connectTypeToStrategy()


    Connect a complex type to a given strategy.


    :param string: 
    :param string|ComplexTypeStrategy: 

    :rtype: Composite 



getDefaultStrategy
++++++++++++++++++

.. function:: getDefaultStrategy()


    Return default strategy of this composite


    :rtype: ComplexTypeStrategy 



getStrategyOfType
+++++++++++++++++

.. function:: getStrategyOfType()


    Return specific strategy or the default strategy of this type.


    :param string: 

    :rtype: ComplexTypeStrategy 



setContext
++++++++++

.. function:: setContext()


    Method accepts the current WSDL context file.

    :param \Zend\Soap\Wsdl: 

    :rtype: Composite 



addComplexType
++++++++++++++

.. function:: addComplexType()


    Create a complex type based on a strategy


    :param string: 

    :rtype: string XSD type



