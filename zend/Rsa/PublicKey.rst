.. /Crypt/PublicKey/Rsa/PublicKey.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\PublicKey\\Rsa\\PublicKey
**************************************


RSA public key



Methods
=======

fromFile
--------

.. function:: fromFile($pemOrCertificateFile)


    Create public key instance public key from PEM formatted key file
    or X.509 certificate file

    :param string $pemOrCertificateFile: 

    :rtype: PublicKey 

    :throws: Exception\InvalidArgumentException 



__construct
-----------

.. function:: __construct($pemStringOrCertificate)


    Construct public key with PEM formatted string or X.509 certificate

    :param string $pemStringOrCertificate: 

    :throws Exception\RuntimeException: 



encrypt
-------

.. function:: encrypt($data)


    Encrypt using this key

    :param string $data: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: string 



decrypt
-------

.. function:: decrypt($data)


    Decrypt using this key

    :param string $data: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\RuntimeException: 

    :rtype: string 



getCertificate
--------------

.. function:: getCertificate()


    Get certificate string

    :rtype: string 



toString
--------

.. function:: toString()


    To string

    :rtype: string 

    :throws: Exception\RuntimeException 





Constants
---------

CERT_START
++++++++++

