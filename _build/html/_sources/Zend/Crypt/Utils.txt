.. /Crypt/Utils.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Utils
******************


Tools for cryptography



Methods
=======

compareStrings
--------------

.. function:: compareStrings($expected, $actual)


    Compare two strings to avoid timing attacks
    
    C function memcmp() internally used by PHP, exits as soon as a difference
    is found in the two buffers. That makes possible of leaking
    timing information useful to an attacker attempting to iteratively guess
    the unknown string (e.g. password).

    :param string $expected: 
    :param string $actual: 

    :rtype: bool 





