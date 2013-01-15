.. /Code/Generator/ValueGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\ValueGenerator
*************************************



Methods
=======

__construct
-----------

.. function:: __construct([$value = false, [$type = "auto", [$outputMode = "multipleLine"]]])


    @var array



isValidConstantType
-------------------

.. function:: isValidConstantType()


    isValidConstantType()

    :rtype: bool 



setValue
--------

.. function:: setValue($value)


    setValue()

    :param mixed $value: 

    :rtype: ValueGenerator 



getValue
--------

.. function:: getValue()


    getValue()

    :rtype: mixed 



setType
-------

.. function:: setType($type)


    setType()

    :param string $type: 

    :rtype: ValueGenerator 



getType
-------

.. function:: getType()


    getType()

    :rtype: string 



setArrayDepth
-------------

.. function:: setArrayDepth($arrayDepth)


    setArrayDepth()

    :param int $arrayDepth: 

    :rtype: ValueGenerator 



getArrayDepth
-------------

.. function:: getArrayDepth()


    getArrayDepth()

    :rtype: int 



getValidatedType
----------------

.. function:: getValidatedType($type)


    _getValidatedType()

    :param string $type: 

    :rtype: string 



getAutoDeterminedType
---------------------

.. function:: getAutoDeterminedType($value)


    _getAutoDeterminedType()

    :param mixed $value: 

    :rtype: string 



generate
--------

.. function:: generate()


    generate()


    :rtype: string 



escape
------

.. function:: escape($input, [$quote = true])


    Quotes value for PHP code.

    :param string $input: Raw string.
    :param bool $quote: Whether add surrounding quotes or not.

    :rtype: string PHP-ready code.



setOutputMode
-------------

.. function:: setOutputMode($outputMode)


    @param string $outputMode

    :rtype: ValueGenerator 



getOutputMode
-------------

.. function:: getOutputMode()


    @return string



__toString
----------

.. function:: __toString()





Constants
---------

TYPE_AUTO
+++++++++

TYPE_BOOLEAN
++++++++++++

TYPE_BOOL
+++++++++

TYPE_NUMBER
+++++++++++

TYPE_INTEGER
++++++++++++

TYPE_INT
++++++++

TYPE_FLOAT
++++++++++

TYPE_DOUBLE
+++++++++++

TYPE_STRING
+++++++++++

TYPE_ARRAY
++++++++++

TYPE_CONSTANT
+++++++++++++

TYPE_NULL
+++++++++

TYPE_OBJECT
+++++++++++

TYPE_OTHER
++++++++++

OUTPUT_MULTIPLE_LINE
++++++++++++++++++++

OUTPUT_SINGLE_LINE
++++++++++++++++++

