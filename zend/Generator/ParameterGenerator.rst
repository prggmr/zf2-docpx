.. Code/Generator/ParameterGenerator.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Code\\Generator\\ParameterGenerator
=========================================



Methods
-------

fromReflection
++++++++++++++

.. function:: fromReflection()


    @param  ParameterReflection $reflectionParameter

    :rtype: ParameterGenerator 



fromArray
+++++++++

.. function:: fromArray()


    Generate from array


    :param array: 

    :rtype: ParameterGenerator 



__construct
+++++++++++

.. function:: __construct()


    @param  string $name

    :param string: 
    :param mixed: 
    :param int: 
    :param bool: 



setType
+++++++

.. function:: setType()


    @param  string $type

    :rtype: ParameterGenerator 



getType
+++++++

.. function:: getType()


    @return string



setName
+++++++

.. function:: setName()


    @param  string $name

    :rtype: ParameterGenerator 



getName
+++++++

.. function:: getName()


    @return string



setDefaultValue
+++++++++++++++

.. function:: setDefaultValue()


    Set the default value of the parameter.
    
    Certain variables are difficult to express

    :param null|bool|string|int|float|array|ValueGenerator: 

    :rtype: ParameterGenerator 



getDefaultValue
+++++++++++++++

.. function:: getDefaultValue()


    @return string



setPosition
+++++++++++

.. function:: setPosition()


    @param  int $position

    :rtype: ParameterGenerator 



getPosition
+++++++++++

.. function:: getPosition()


    @return int



getPassedByReference
++++++++++++++++++++

.. function:: getPassedByReference()


    @return bool



setPassedByReference
++++++++++++++++++++

.. function:: setPassedByReference()


    @param  bool $passedByReference

    :rtype: ParameterGenerator 



generate
++++++++

.. function:: generate()


    @return string



