.. /Crypt/PublicKey/RsaOptions.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\PublicKey\\RsaOptions
**********************************


RSA instance options



Methods
=======

setPrivateKey
-------------

.. function:: setPrivateKey($key)


    Set private key

    :param Rsa\PrivateKey $key: 

    :rtype: RsaOptions 



getPrivateKey
-------------

.. function:: getPrivateKey()


    Get private key

    :rtype: null|Rsa\PrivateKey 



setPublicKey
------------

.. function:: setPublicKey($key)


    Set public key

    :param Rsa\PublicKey $key: 

    :rtype: RsaOptions 



getPublicKey
------------

.. function:: getPublicKey()


    Get public key

    :rtype: null|Rsa\PublicKey 



setPassPhrase
-------------

.. function:: setPassPhrase($phrase)


    Set pass phrase

    :param string $phrase: 

    :rtype: RsaOptions 



getPassPhrase
-------------

.. function:: getPassPhrase()


    Get pass phrase

    :rtype: string 



setHashAlgorithm
----------------

.. function:: setHashAlgorithm($hash)


    Set hash algorithm

    :param string $hash: 

    :rtype: RsaOptions 

    :throws: Rsa\Exception\RuntimeException 
    :throws: Rsa\Exception\InvalidArgumentException 



getHashAlgorithm
----------------

.. function:: getHashAlgorithm()


    Get hash algorithm

    :rtype: string 



getOpensslSignatureAlgorithm
----------------------------

.. function:: getOpensslSignatureAlgorithm()



setBinaryOutput
---------------

.. function:: setBinaryOutput($value)


    Enable/disable the binary output

    :param bool $value: 

    :rtype: RsaOptions 



getBinaryOutput
---------------

.. function:: getBinaryOutput()


    Get the value of binary output

    :rtype: bool 



generateKeys
------------

.. function:: generateKeys([$opensslConfig = false])


    Generate new private/public key pair

    :param array $opensslConfig: 

    :rtype: RsaOptions 

    :throws: Rsa\Exception\RuntimeException 





