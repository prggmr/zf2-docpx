.. /Code/Generator/ParameterGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\ParameterGenerator
*****************************************


@category   Zend



Methods
=======

fromReflection
--------------

.. function:: fromReflection($reflectionParameter)


    fromReflection()

    :param ParameterReflection $reflectionParameter: 

    :rtype: ParameterGenerator 



__construct
-----------

.. function:: __construct([$name = false, [$type = false, [$defaultValue = false, [$position = false, [$passByReference = false]]]]])



setType
-------

.. function:: setType($type)


    setType()

    :param string $type: 

    :rtype: ParameterGenerator 



getType
-------

.. function:: getType()


    getType()

    :rtype: string 



setName
-------

.. function:: setName($name)


    setName()

    :param string $name: 

    :rtype: ParameterGenerator 



getName
-------

.. function:: getName()


    getName()

    :rtype: string 



setDefaultValue
---------------

.. function:: setDefaultValue($defaultValue)


    Set the default value of the parameter.
    
    Certain variables are difficult to express

    :param null|bool|string|int|float|array|ValueGenerator $defaultValue: 

    :rtype: ParameterGenerator 



getDefaultValue
---------------

.. function:: getDefaultValue()


    getDefaultValue()

    :rtype: string 



setPosition
-----------

.. function:: setPosition($position)


    setPosition()

    :param int $position: 

    :rtype: ParameterGenerator 



getPosition
-----------

.. function:: getPosition()


    getPosition()

    :rtype: int 



getPassedByReference
--------------------

.. function:: getPassedByReference()


    @return bool



setPassedByReference
--------------------

.. function:: setPassedByReference($passedByReference)


    @param bool $passedByReference

    :rtype: ParameterGenerator 



generate
--------

.. function:: generate()


    generate()

    :rtype: string 





