.. Code/Generator/PropertyGenerator.php generated using docpx on 01/30/13 03:32am


Zend\\Code\\Generator\\PropertyGenerator
========================================

Methods
+++++++

fromReflection
--------------

.. function:: fromReflection()


    @param  PropertyReflection $reflectionProperty

    :rtype: PropertyGenerator 



fromArray
---------

.. function:: fromArray()


    Generate from array


    :param array: 

    :rtype: PropertyGenerator 



__construct
-----------

.. function:: __construct()


    @param  string $name

    :param PropertyValueGenerator|string|array: 
    :param int|array: 



setConst
--------

.. function:: setConst()


    @param  bool $const

    :rtype: PropertyGenerator 



isConst
-------

.. function:: isConst()


    @return bool



setDefaultValue
---------------

.. function:: setDefaultValue()


    @param  PropertyValueGenerator|string|array $defaultValue

    :rtype: PropertyGenerator 



getDefaultValue
---------------

.. function:: getDefaultValue()


    @return PropertyValueGenerator



generate
--------

.. function:: generate()


    @throws Exception\RuntimeException

    :rtype: string 





Constants
+++++++++

FLAG_CONSTANT
=============

