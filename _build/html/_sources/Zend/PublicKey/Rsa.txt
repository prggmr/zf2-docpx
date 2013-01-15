.. /Crypt/PublicKey/Rsa.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\PublicKey\\Rsa
***************************


Implementation of the RSA public key encryption algorithm.



Methods
=======

factory
-------

.. function:: factory($options)


    RSA instance factory

    :param array|Traversable $options: 

    :rtype: Rsa 

    :throws: Rsa\Exception\RuntimeException 
    :throws: Rsa\Exception\InvalidArgumentException 



__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param RsaOptions $options: 

    :throws Rsa\Exception\RuntimeException: 



setOptions
----------

.. function:: setOptions($options)


    Set options

    :param RsaOptions $options: 

    :rtype: Rsa 



getOptions
----------

.. function:: getOptions()


    Get options

    :rtype: RsaOptions 



sign
----

.. function:: sign($data, [$privateKey = false])


    Sign with private key

    :param string $data: 
    :param Rsa\PrivateKey $privateKey: 

    :rtype: string 

    :throws: Rsa\Exception\RuntimeException 



verify
------

.. function:: verify($data, $signature, [$publicKey = false])


    Verify signature with public key

    :param string $data: 
    :param string $signature: 
    :param null|Rsa\PublicKey $publicKey: 

    :rtype: bool 

    :throws: Rsa\Exception\RuntimeException 



encrypt
-------

.. function:: encrypt($data, [$key = false])


    Encrypt with private/public key

    :param string $data: 
    :param Rsa\AbstractKey $key: 

    :rtype: string 

    :throws: Rsa\Exception\InvalidArgumentException 



decrypt
-------

.. function:: decrypt($data, [$key = false])


    Decrypt with private/public key

    :param string $data: 
    :param Rsa\AbstractKey $key: 

    :rtype: string 

    :throws: Rsa\Exception\InvalidArgumentException 



generateKeys
------------

.. function:: generateKeys([$opensslConfig = false])


    Generate new private/public key pair


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param array $opensslConfig: 

    :rtype: Rsa 

    :throws: Rsa\Exception\RuntimeException 





