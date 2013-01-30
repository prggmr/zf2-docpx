.. Crypt/PublicKey/Rsa/AbstractKey.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\PublicKey\\Rsa\\AbstractKey
========================================

Methods
-------

getSize
+++++++

.. function:: getSize()


    Get key size in bits

    :rtype: int 



getOpensslKeyResource
+++++++++++++++++++++

.. function:: getOpensslKeyResource()


    Retrieve openssl key resource

    :rtype: resource 



encrypt
+++++++

.. function:: encrypt()


    Encrypt using this key


    :param string: 

    :rtype: string 



decrypt
+++++++

.. function:: decrypt()


    Decrypt using this key


    :param string: 

    :rtype: string 



toString
++++++++

.. function:: toString()


    Get string representation of this key


    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    @return string





Constants
---------

DEFAULT_KEY_SIZE
++++++++++++++++

