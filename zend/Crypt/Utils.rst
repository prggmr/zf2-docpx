.. Crypt/Utils.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\Utils
==================

Tools for cryptography

Methods
-------

compareStrings
++++++++++++++

.. function:: compareStrings()


    Compare two strings to avoid timing attacks
    
    C function memcmp() internally used by PHP, exits as soon as a difference
    is found in the two buffers. That makes possible of leaking
    timing information useful to an attacker attempting to iteratively guess
    the unknown string (e.g. password).

    :param string: 
    :param string: 

    :rtype: bool 



