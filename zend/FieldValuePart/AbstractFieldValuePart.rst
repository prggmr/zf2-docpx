.. Http/Header/Accept/FieldValuePart/AbstractFieldValuePart.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Http\\Header\\Accept\\FieldValuePart\\AbstractFieldValuePart
==================================================================

Field Value Part

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param object $internalValues



setMatchedAgainst
+++++++++++++++++

.. function:: setMatchedAgainst()


    Set a Field Value Part this Field Value Part matched against.

    :param AbstractFieldValuePart: 

    :rtype: AbstractFieldValuePart provides fluent interface



getMatchedAgainst
+++++++++++++++++

.. function:: getMatchedAgainst()


    Get a Field Value Part this Field Value Part matched against.

    :rtype: AbstractFieldValuePart|null 



getInternalValues
+++++++++++++++++

.. function:: getInternalValues()


    @return object



getTypeString
+++++++++++++

.. function:: getTypeString()


    @return string $typeString



getPriority
+++++++++++

.. function:: getPriority()


    @return float $priority



getParams
+++++++++

.. function:: getParams()


    @return \stdClass $params



getRaw
++++++

.. function:: getRaw()


    @return raw $raw



__get
+++++

.. function:: __get()


    @param mixed

    :rtype: mixed 



