.. Crypt/Key/Derivation/SaltedS2k.php generated using docpx on 01/30/13 03:32am


Zend\\Crypt\\Key\\Derivation\\SaltedS2k
=======================================

Salted S2K key generation (OpenPGP document, RFC 2440)

Methods
+++++++

calc
----

.. function:: calc()


    Generate the new key

    :param string: The hash algorithm to be used by HMAC
    :param string: The source password/key
    :param integer: The output size in bytes
    :param string: The salt of the algorithm

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



