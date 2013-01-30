.. Crypt/PublicKey/Rsa/PrivateKey.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\PublicKey\\Rsa\\PrivateKey
=======================================

RSA private key

Methods
-------

fromFile
++++++++

.. function:: fromFile()


    Create private key instance from PEM formatted key file

    :param string: 
    :param string|null: 

    :rtype: PrivateKey 

    :throws: Exception\InvalidArgumentException 



__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param string: 

    :throws Exception\RuntimeException: 



getPublicKey
++++++++++++

.. function:: getPublicKey()


    Get the public key

    :rtype: PublicKey 



encrypt
+++++++

.. function:: encrypt()


    Encrypt using this key

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



decrypt
+++++++

.. function:: decrypt()


    Decrypt using this key

    :param string: 

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



toString
++++++++

.. function:: toString()


    @return string



