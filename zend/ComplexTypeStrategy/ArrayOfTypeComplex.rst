.. Soap/Wsdl/ComplexTypeStrategy/ArrayOfTypeComplex.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Soap\\Wsdl\\ComplexTypeStrategy\\ArrayOfTypeComplex
=========================================================

ArrayOfTypeComplex strategy

Methods
-------

addComplexType
++++++++++++++

.. function:: addComplexType()


    Add an ArrayOfType based on the xsd:complexType syntax if type[] is detected in return value doc comment.

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string tns:xsd-type



_addArrayOfComplexType
++++++++++++++++++++++

.. function:: _addArrayOfComplexType()


    Add an ArrayOfType based on the xsd:complexType syntax if type[] is detected in return value doc comment.

    :param string: e.g. '\MyNamespace\MyClassname'
    :param string: e.g. '\MyNamespace\MyClassname[]'

    :rtype: string tns:xsd-type   e.g. 'tns:ArrayOfMyNamespace.MyClassname'



_getSingularPhpType
+++++++++++++++++++

.. function:: _getSingularPhpType()


    From a nested definition with type[], get the singular PHP Type

    :param string: 

    :rtype: string 



_getNestedCount
+++++++++++++++

.. function:: _getNestedCount()


    Return the array nesting level based on the type name

    :param string: 

    :rtype: integer 



