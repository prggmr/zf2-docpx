.. /Crypt/Key/Derivation/SaltedS2k.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Key\\Derivation\\SaltedS2k
***************************************


Salted S2K key generation (OpenPGP document, RFC 2440)



Methods
=======

calc
----

.. function:: calc($hash, $password, $salt, $bytes)


    Generate the new key

    :param string $hash: The hash algorithm to be used by HMAC
    :param string $password: The source password/key
    :param integer $bytes: The output size in bytes
    :param string $salt: The salt of the algorithm

    :throws Exception\InvalidArgumentException: 

    :rtype: string 





