.. /Code/Generator/PropertyGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\PropertyGenerator
****************************************


@category   Zend



Methods
=======

fromReflection
--------------

.. function:: fromReflection($reflectionProperty)


    fromReflection()

    :param PropertyReflection $reflectionProperty: 

    :rtype: PropertyGenerator 



__construct
-----------

.. function:: __construct([$name = false, [$defaultValue = false, [$flags = 16]]])



setConst
--------

.. function:: setConst($const)


    setConst()

    :param bool $const: 

    :rtype: PropertyGenerator 



isConst
-------

.. function:: isConst()


    isConst()

    :rtype: bool 



setDefaultValue
---------------

.. function:: setDefaultValue($defaultValue)


    setDefaultValue()

    :param PropertyValueGenerator|string|array $defaultValue: 

    :rtype: PropertyGenerator 



getDefaultValue
---------------

.. function:: getDefaultValue()


    getDefaultValue()

    :rtype: PropertyValueGenerator 



generate
--------

.. function:: generate()


    generate()


    :rtype: string 





Constants
---------

FLAG_CONSTANT
+++++++++++++

