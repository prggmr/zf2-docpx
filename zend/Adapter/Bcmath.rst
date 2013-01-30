.. Math/BigInteger/Adapter/Bcmath.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Math\\BigInteger\\Adapter\\Bcmath
=======================================

Bcmath extension adapter

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    Sets Bcmath scale factor to zero



init
++++

.. function:: init()


    Create string representing big integer in decimal form from arbitrary integer format

    :param string: 
    :param int|null: 

    :rtype: bool|string 



add
+++

.. function:: add()


    Add two big integers

    :param string: 
    :param string: 

    :rtype: string 



sub
+++

.. function:: sub()


    Subtract two big integers

    :param string: 
    :param string: 

    :rtype: string 



mul
+++

.. function:: mul()


    Multiply two big integers

    :param string: 
    :param string: 

    :rtype: string 



div
+++

.. function:: div()


    Divide two big integers and return integer part result.
    Raises exception if the divisor is zero.

    :param string: 
    :param string: 

    :rtype: string 

    :throws: Exception\DivisionByZeroException 



pow
+++

.. function:: pow()


    Raise a big integers to another

    :param string: 
    :param string: 

    :rtype: string 



sqrt
++++

.. function:: sqrt()


    Get the square root of a big integer

    :param string: 

    :rtype: string 



abs
+++

.. function:: abs()


    Get absolute value of a big integer

    :param string: 

    :rtype: string 



mod
+++

.. function:: mod()


    Get modulus of a big integer

    :param string: 
    :param string: 

    :rtype: string 



powmod
++++++

.. function:: powmod()


    Raise a big integer to another, reduced by a specified modulus

    :param string: 
    :param string: 
    :param string: 

    :rtype: string 



comp
++++

.. function:: comp()


    Compare two big integers and returns result as an integer where
    Returns < 0 if leftOperand is less than rightOperand;
    > 0 if leftOperand is greater than rightOperand, and 0 if they are equal.

    :param string: 
    :param string: 

    :rtype: int 



intToBin
++++++++

.. function:: intToBin()


    Convert big integer into it's binary number representation

    :param string: 
    :param bool: return in two's complement form

    :rtype: string 



binToInt
++++++++

.. function:: binToInt()


    Convert big integer into it's binary number representation

    :param string: 
    :param bool: whether binary number is in twos' complement form

    :rtype: string 



baseConvert
+++++++++++

.. function:: baseConvert()


    Base conversion. Bases 2..62 are supported

    :param string: 
    :param int: 
    :param int: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



