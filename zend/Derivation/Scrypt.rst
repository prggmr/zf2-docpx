.. Crypt/Key/Derivation/Scrypt.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\Key\\Derivation\\Scrypt
====================================

Scrypt key derivation function

Methods
-------

calc
++++

.. function:: calc()


    Execute the scrypt algorithm

    :param string: 
    :param string: 
    :param integer: CPU cost
    :param integer: Memory cost
    :param integer: parallelization cost
    :param integer: size of the output key

    :rtype: string 



scryptROMix
+++++++++++

.. function:: scryptROMix()


    scryptROMix

    :param string: 
    :param integer: 
    :param integer: 

    :rtype: string 

    :see:  



scryptBlockMix
++++++++++++++

.. function:: scryptBlockMix()


    scryptBlockMix

    :param string: 
    :param integer: 

    :rtype: string 

    :see:  



salsa208Core32
++++++++++++++

.. function:: salsa208Core32()


    Salsa 20/8 core (32 bit version)

    :param string: 

    :rtype: string 

    :see:  
    :see:  



salsa208Core64
++++++++++++++

.. function:: salsa208Core64()


    Salsa 20/8 core (64 bit version)

    :param string: 

    :rtype: string 

    :see:  
    :see:  



integerify
++++++++++

.. function:: integerify()


    Integerify
    
    Integerify (B[0] ... B[2 * r - 1]) is defined as the result
    of interpreting B[2 * r - 1] as a little-endian integer.
    Each block B is a string of 64 bytes.

    :param string: 

    :rtype: integer 

    :see:  



hex2bin
+++++++

.. function:: hex2bin()


    Convert hex string in a binary string

    :param string: 

    :rtype: string 



