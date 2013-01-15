.. /Crypt/Hmac.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Hmac
*****************


PHP implementation of the RFC 2104 Hash based Message Authentication Code



Methods
=======

compute
-------

.. function:: compute($key, $hash, $data, [$output = false])


    Performs a HMAC computation given relevant details such as Key, Hashing
    algorithm, the data to compute MAC of, and an output format of String,
    or Binary.

    :param string $key: 
    :param string $hash: 
    :param string $data: 
    :param bool $output: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



getOutputSize
-------------

.. function:: getOutputSize($hash, [$output = false])


    Get the output size according to the hash algorithm and the output format

    :param string $hash: 
    :param bool $output: 

    :rtype: integer 



getSupportedAlgorithms
----------------------

.. function:: getSupportedAlgorithms()


    Get the supported algorithm

    :rtype: array 



isSupported
-----------

.. function:: isSupported($algorithm)


    Is the hash algorithm supported?

    :param string $algorithm: 

    :rtype: bool 



clearLastAlgorithmCache
-----------------------

.. function:: clearLastAlgorithmCache()


    Clear the cache of last algorithm supported





Constants
---------

OUTPUT_STRING
+++++++++++++

OUTPUT_BINARY
+++++++++++++

