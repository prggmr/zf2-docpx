.. Soap/Wsdl/ComplexTypeStrategy/ArrayOfTypeSequence.php generated using docpx on 01/30/13 03:32am


Zend\\Soap\\Wsdl\\ComplexTypeStrategy\\ArrayOfTypeSequence
==========================================================

Zend_Soap_Wsdl_Strategy_ArrayOfTypeSequence

Methods
+++++++

addComplexType
--------------

.. function:: addComplexType()


    Add an unbounded ArrayOfType based on the xsd:sequence syntax if type[] is detected in return value doc comment.

    :param string: 

    :rtype: string tns:xsd-type



_getTypeBasedOnNestingLevel
---------------------------

.. function:: _getTypeBasedOnNestingLevel()


    Return the ArrayOf or simple type name based on the singular xsdtype and the nesting level

    :param string: 
    :param int: 

    :rtype: string 



_getSingularType
----------------

.. function:: _getSingularType()


    From a nested definition with type[], get the singular xsd:type

    :param string: 

    :rtype: string 



_getNestedCount
---------------

.. function:: _getNestedCount()


    Return the array nesting level based on the type name

    :param string: 

    :rtype: integer 



_addSequenceType
----------------

.. function:: _addSequenceType()


    Append the complex type definition to the WSDL via the context access

    :param string: Array type name (e.g. 'tns:ArrayOfArrayOfInt')
    :param string: Qualified array items type (e.g. 'xsd:int', 'tns:ArrayOfInt')
    :param string: PHP type (e.g. 'int[][]', '\MyNamespace\MyClassName[][][]')

    :rtype: void 



