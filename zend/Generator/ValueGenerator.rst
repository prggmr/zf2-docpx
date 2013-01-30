.. Code/Generator/ValueGenerator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Generator\\ValueGenerator
=====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param  mixed  $value

    :param string: 
    :param string: 



isValidConstantType
+++++++++++++++++++

.. function:: isValidConstantType()


    @return bool



setValue
++++++++

.. function:: setValue()


    @param  mixed $value

    :rtype: ValueGenerator 



getValue
++++++++

.. function:: getValue()


    @return mixed



setType
+++++++

.. function:: setType()


    @param  string $type

    :rtype: ValueGenerator 



getType
+++++++

.. function:: getType()


    @return string



setArrayDepth
+++++++++++++

.. function:: setArrayDepth()


    @param  int $arrayDepth

    :rtype: ValueGenerator 



getArrayDepth
+++++++++++++

.. function:: getArrayDepth()


    @return int



getValidatedType
++++++++++++++++

.. function:: getValidatedType()


    @param  string $type

    :rtype: string 



getAutoDeterminedType
+++++++++++++++++++++

.. function:: getAutoDeterminedType()


    @param  mixed $value

    :rtype: string 



generate
++++++++

.. function:: generate()


    @throws Exception\RuntimeException

    :rtype: string 



escape
++++++

.. function:: escape()


    Quotes value for PHP code.

    :param string: Raw string.
    :param bool: Whether add surrounding quotes or not.

    :rtype: string PHP-ready code.



setOutputMode
+++++++++++++

.. function:: setOutputMode()


    @param  string $outputMode

    :rtype: ValueGenerator 



getOutputMode
+++++++++++++

.. function:: getOutputMode()


    @return string



__toString
++++++++++

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

