.. /Filter/Encrypt/Openssl.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Encrypt\\Openssl
******************************


Encryption adapter for openssl



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor
    Available options
      'public'      => public key
      'private'     => private key
      'envelope'    => envelope key
      'passphrase'  => passphrase
      'compression' => compress value with this compression adapter
      'package'     => pack envelope keys into encrypted string, simplifies decryption

    :param string|array|Traversable $options: Options for this adapter

    :throws Exception\ExtensionNotLoadedException: 



_setKeys
--------

.. function:: _setKeys($keys)


    Sets the encryption keys

    :param string|array $keys: Key with type association

    :rtype: Openssl 

    :throws: Exception\InvalidArgumentException 



getPublicKey
------------

.. function:: getPublicKey()


    Returns all public keys

    :rtype: array 



setPublicKey
------------

.. function:: setPublicKey($key)


    Sets public keys

    :param string|array $key: Public keys

    :rtype: \Zend\Filter\Encrypt\Openssl 



getPrivateKey
-------------

.. function:: getPrivateKey()


    Returns all private keys

    :rtype: array 



setPrivateKey
-------------

.. function:: setPrivateKey($key, [$passphrase = false])


    Sets private keys

    :param string $key: Private key
    :param string $passphrase: 

    :rtype: Openssl 



getEnvelopeKey
--------------

.. function:: getEnvelopeKey()


    Returns all envelope keys

    :rtype: array 



setEnvelopeKey
--------------

.. function:: setEnvelopeKey($key)


    Sets envelope keys

    :param string|array $key: Envelope keys

    :rtype: \Zend\Filter\Encrypt\Openssl 



getPassphrase
-------------

.. function:: getPassphrase()


    Returns the passphrase

    :rtype: string 



setPassphrase
-------------

.. function:: setPassphrase($passphrase)


    Sets a new passphrase

    :param string $passphrase: 

    :rtype: Openssl 



getCompression
--------------

.. function:: getCompression()


    Returns the compression

    :rtype: array 



setCompression
--------------

.. function:: setCompression($compression)


    Sets a internal compression for values to encrypt

    :param string|array $compression: 

    :rtype: Openssl 



getPackage
----------

.. function:: getPackage()


    Returns if header should be packaged

    :rtype: bool 



setPackage
----------

.. function:: setPackage($package)


    Sets if the envelope keys should be included in the encrypted value

    :param bool $package: 

    :rtype: Openssl 



encrypt
-------

.. function:: encrypt($value)


    Encrypts $value with the defined settings
    Note that you also need the "encrypted" keys to be able to decrypt

    :param string $value: Content to encrypt

    :rtype: string The encrypted content

    :throws: Exception\RuntimeException 



decrypt
-------

.. function:: decrypt($value)


    Defined by Zend\Filter\FilterInterface
    
    Decrypts $value with the defined settings

    :param string $value: Content to decrypt

    :rtype: string The decrypted content

    :throws: Exception\RuntimeException 



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





