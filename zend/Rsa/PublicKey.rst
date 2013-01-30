.. Crypt/PublicKey/Rsa/PublicKey.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\PublicKey\\Rsa\\PublicKey
======================================

RSA public key

Methods
-------

fromFile
++++++++

.. function:: fromFile()


    Create public key instance public key from PEM formatted key file
    or X.509 certificate file

    :param string: 

    :rtype: PublicKey 

    :throws: Exception\InvalidArgumentException 



__construct
+++++++++++

.. function:: __construct()


    Construct public key with PEM formatted string or X.509 certificate

    :param string: 

    :throws Exception\RuntimeException: 



encrypt
+++++++

.. function:: encrypt()


    Encrypt using this key

    :param string: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: string 



decrypt
+++++++

.. function:: decrypt()


    Decrypt using this key

    :param string: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: string 



getCertificate
++++++++++++++

.. function:: getCertificate()


    Get certificate string

    :rtype: string 



toString
++++++++

.. function:: toString()


    To string

    :rtype: string 

    :throws: Exception\RuntimeException 





Constants
---------

CERT_START
++++++++++

