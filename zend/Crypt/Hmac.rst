.. Crypt/Hmac.php generated using docpx on 01/30/13 03:32am


Zend\\Crypt\\Hmac
=================

PHP implementation of the RFC 2104 Hash based Message Authentication Code

Methods
+++++++

compute
-------

.. function:: compute()


    Performs a HMAC computation given relevant details such as Key, Hashing
    algorithm, the data to compute MAC of, and an output format of String,
    or Binary.

    :param string: 
    :param string: 
    :param string: 
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



getOutputSize
-------------

.. function:: getOutputSize()


    Get the output size according to the hash algorithm and the output format

    :param string: 
    :param bool: 

    :rtype: integer 



getSupportedAlgorithms
----------------------

.. function:: getSupportedAlgorithms()


    Get the supported algorithm

    :rtype: array 



isSupported
-----------

.. function:: isSupported()


    Is the hash algorithm supported?

    :param string: 

    :rtype: bool 



clearLastAlgorithmCache
-----------------------

.. function:: clearLastAlgorithmCache()


    Clear the cache of last algorithm supported





Constants
+++++++++

OUTPUT_STRING
=============

OUTPUT_BINARY
=============

