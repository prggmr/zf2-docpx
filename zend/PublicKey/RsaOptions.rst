.. Crypt/PublicKey/RsaOptions.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Crypt\\PublicKey\\RsaOptions
==================================

RSA instance options

Methods
-------

setPrivateKey
+++++++++++++

.. function:: setPrivateKey()


    Set private key

    :param Rsa\PrivateKey: 

    :rtype: RsaOptions 



getPrivateKey
+++++++++++++

.. function:: getPrivateKey()


    Get private key

    :rtype: null|Rsa\PrivateKey 



setPublicKey
++++++++++++

.. function:: setPublicKey()


    Set public key

    :param Rsa\PublicKey: 

    :rtype: RsaOptions 



getPublicKey
++++++++++++

.. function:: getPublicKey()


    Get public key

    :rtype: null|Rsa\PublicKey 



setPassPhrase
+++++++++++++

.. function:: setPassPhrase()


    Set pass phrase

    :param string: 

    :rtype: RsaOptions 



getPassPhrase
+++++++++++++

.. function:: getPassPhrase()


    Get pass phrase

    :rtype: string 



setHashAlgorithm
++++++++++++++++

.. function:: setHashAlgorithm()


    Set hash algorithm

    :param string: 

    :rtype: RsaOptions 

    :throws: Rsa\Exception\RuntimeException 
    :throws: Rsa\Exception\InvalidArgumentException 



getHashAlgorithm
++++++++++++++++

.. function:: getHashAlgorithm()


    Get hash algorithm

    :rtype: string 



getOpensslSignatureAlgorithm
++++++++++++++++++++++++++++

.. function:: getOpensslSignatureAlgorithm()



setBinaryOutput
+++++++++++++++

.. function:: setBinaryOutput()


    Enable/disable the binary output

    :param bool: 

    :rtype: RsaOptions 



getBinaryOutput
+++++++++++++++

.. function:: getBinaryOutput()


    Get the value of binary output

    :rtype: bool 



generateKeys
++++++++++++

.. function:: generateKeys()


    Generate new private/public key pair

    :param array: 

    :rtype: RsaOptions 

    :throws: Rsa\Exception\RuntimeException 



