.. Soap/Wsdl/ComplexTypeStrategy/DefaultComplexType.php generated using docpx on 01/30/13 03:32am


Zend\\Soap\\Wsdl\\ComplexTypeStrategy\\DefaultComplexType
=========================================================

Zend_Soap_Wsdl_Strategy_DefaultComplexType

Methods
+++++++

addComplexType
--------------

.. function:: addComplexType()


    Add a complex type by recursively using all the class properties fetched via Reflection.

    :param string: Name of the class to be specified

    :throws Exception\InvalidArgumentException: if class does not exist

    :rtype: string XSD Type for the given PHP type



