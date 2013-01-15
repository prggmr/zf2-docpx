.. /Crypt/PublicKey/Rsa/PrivateKey.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\PublicKey\\Rsa\\PrivateKey
***************************************


RSA private key



Methods
=======

fromFile
--------

.. function:: fromFile($pemFile, [$passPhrase = false])


    Create private key instance from PEM formatted key file

    :param string $pemFile: 
    :param string|null $passPhrase: 

    :rtype: PrivateKey 

    :throws: Exception\InvalidArgumentException 



__construct
-----------

.. function:: __construct($pemString, [$passPhrase = false])


    Constructor

    :param string $pemString: 
    :param string $passPhrase: 

    :throws Exception\RuntimeException: 



getPublicKey
------------

.. function:: getPublicKey()


    Get the public key

    :rtype: PublicKey 



encrypt
-------

.. function:: encrypt($data)


    Encrypt using this key

    :param string $data: 

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



decrypt
-------

.. function:: decrypt($data)


    Decrypt using this key

    :param string $data: 

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



toString
--------

.. function:: toString()


    @return string





