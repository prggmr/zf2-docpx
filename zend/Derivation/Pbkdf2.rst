.. Crypt/Key/Derivation/Pbkdf2.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Crypt\\Key\\Derivation\\Pbkdf2
====================================

PKCS #5 v2.0 standard RFC 2898

Methods
-------

calc
++++

.. function:: calc()


    Generate the new key

    :param string: The hash algorithm to be used by HMAC
    :param string: The source password/key
    :param string: 
    :param integer: The number of iterations
    :param integer: The output size

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



