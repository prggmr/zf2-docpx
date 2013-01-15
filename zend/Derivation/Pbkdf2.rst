.. /Crypt/Key/Derivation/Pbkdf2.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Key\\Derivation\\Pbkdf2
************************************


PKCS #5 v2.0 standard RFC 2898



Methods
=======

calc
----

.. function:: calc($hash, $password, $salt, $iterations, $length)


    Generate the new key

    :param string $hash: The hash algorithm to be used by HMAC
    :param string $password: The source password/key
    :param string $salt: 
    :param integer $iterations: The number of iterations
    :param integer $length: The output size

    :throws Exception\InvalidArgumentException: 

    :rtype: string 





