.. /Crypt/PublicKey/DiffieHellman.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\PublicKey\\DiffieHellman
*************************************


PHP implementation of the Diffie-Hellman public key encryption algorithm.
Allows two unassociated parties to establish a joint shared secret key
to be used in encrypting subsequent communications.



Methods
=======

__construct
-----------

.. function:: __construct($prime, $generator, [$privateKey = false, [$privateKeyFormat = "number"]])


    Constructor; if set construct the object using the parameter array to
    set values for Prime, Generator and Private.
    If a Private Key is not set, one will be generated at random.

    :param string $prime: 
    :param string $generator: 
    :param string $privateKey: 
    :param string $privateKeyFormat: 



useOpensslExtension
-------------------

.. function:: useOpensslExtension([$flag = true])


    Set whether to use openssl extension


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param bool $flag: 



generateKeys
------------

.. function:: generateKeys()


    Generate own public key. If a private number has not already been set,
    one will be generated at this stage.

    :rtype: DiffieHellman 

    :throws: \Zend\Crypt\Exception\RuntimeException 



setPublicKey
------------

.. function:: setPublicKey($number, [$format = "number"])


    Setter for the value of the public number

    :param string $number: 
    :param string $format: 

    :rtype: DiffieHellman 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



getPublicKey
------------

.. function:: getPublicKey([$format = "number"])


    Returns own public key for communication to the second party to this transaction

    :param string $format: 

    :rtype: string 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



computeSecretKey
----------------

.. function:: computeSecretKey($publicKey, [$publicKeyFormat = "number", [$secretKeyFormat = "number"]])


    Compute the shared secret key based on the public key received from the
    the second party to this transaction. This should agree to the secret
    key the second party computes on our own public key.
    Once in agreement, the key is known to only to both parties.
    By default, the function expects the public key to be in binary form
    which is the typical format when being transmitted.
    
    If you need the binary form of the shared secret key, call
    getSharedSecretKey() with the optional parameter for Binary output.

    :param string $publicKey: 
    :param string $publicKeyFormat: 
    :param string $secretKeyFormat: 

    :rtype: string 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 
    :throws: \Zend\Crypt\Exception\RuntimeException 



getSharedSecretKey
------------------

.. function:: getSharedSecretKey([$format = "number"])


    Return the computed shared secret key from the DiffieHellman transaction

    :param string $format: 

    :rtype: string 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



setPrime
--------

.. function:: setPrime($number)


    Setter for the value of the prime number

    :param string $number: 

    :rtype: DiffieHellman 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



getPrime
--------

.. function:: getPrime([$format = "number"])


    Getter for the value of the prime number

    :param string $format: 

    :rtype: string 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



setGenerator
------------

.. function:: setGenerator($number)


    Setter for the value of the generator number

    :param string $number: 

    :rtype: DiffieHellman 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



getGenerator
------------

.. function:: getGenerator([$format = "number"])


    Getter for the value of the generator number

    :param string $format: 

    :rtype: string 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



setPrivateKey
-------------

.. function:: setPrivateKey($number, [$format = "number"])


    Setter for the value of the private number

    :param string $number: 
    :param string $format: 

    :rtype: DiffieHellman 

    :throws: \Zend\Crypt\Exception\InvalidArgumentException 



getPrivateKey
-------------

.. function:: getPrivateKey([$format = "number"])


    Getter for the value of the private number

    :param string $format: 

    :rtype: string 



hasPrivateKey
-------------

.. function:: hasPrivateKey()


    Check whether a private key currently exists.

    :rtype: bool 



convert
-------

.. function:: convert($number, [$inputFormat = "number", [$outputFormat = "binary"]])


    Convert number between formats

    :param $number: 
    :param string $inputFormat: 
    :param string $outputFormat: 

    :rtype: string 



generatePrivateKey
------------------

.. function:: generatePrivateKey()


    In the event a private number/key has not been set by the user,
    or generated by ext/openssl, a best attempt will be made to
    generate a random key. Having a random number generator installed
    on linux/bsd is highly recommended! The alternative is not recommended
    for production unless without any other option.

    :rtype: string 





Constants
---------

DEFAULT_KEY_SIZE
++++++++++++++++

FORMAT_BINARY
+++++++++++++

Key formats

FORMAT_NUMBER
+++++++++++++

FORMAT_BTWOC
++++++++++++

