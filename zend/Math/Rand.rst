.. Math/Rand.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Math\\Rand
================

Pseudorandom number generator (PRNG)

Methods
-------

getBytes
++++++++

.. function:: getBytes()


    Generate random bytes using OpenSSL or Mcrypt and mt_rand() as fallback

    :param integer: 
    :param bool: true if you need a strong random generator (cryptography)

    :rtype: string 

    :throws: Exception\RuntimeException 



getBoolean
++++++++++

.. function:: getBoolean()


    Generate random boolean

    :param bool: true if you need a strong random generator (cryptography)

    :rtype: bool 



getInteger
++++++++++

.. function:: getInteger()


    Generate a random integer between $min and $max

    :param integer: 
    :param integer: 
    :param bool: true if you need a strong random generator (cryptography)

    :rtype: integer 

    :throws: Exception\DomainException 



getFloat
++++++++

.. function:: getFloat()


    Generate random float (0..1)
    This function generates floats with platform-dependent precision
    
    PHP uses double precision floating-point format (64-bit) which has
    52-bits of significand precision. We gather 7 bytes of random data,
    and we fix the exponent to the bias (1023). In this way we generate
    a float of 1.mantissa.

    :param bool: true if you need a strong random generator (cryptography)

    :rtype: float 



getString
+++++++++

.. function:: getString()


    Generate a random string of specified length.
    
    Uses supplied character list for generating the new string.
    If no character list provided - uses Base 64 character set.

    :param integer: 
    :param string|null: 
    :param bool: true if you need a strong random generator (cryptography)

    :rtype: string 

    :throws: Exception\DomainException 



