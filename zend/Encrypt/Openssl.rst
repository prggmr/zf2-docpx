.. Filter/Encrypt/Openssl.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\Encrypt\\Openssl
==============================

Encryption adapter for openssl

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor
    Available options
      'public'      => public key
      'private'     => private key
      'envelope'    => envelope key
      'passphrase'  => passphrase
      'compression' => compress value with this compression adapter
      'package'     => pack envelope keys into encrypted string, simplifies decryption

    :param string|array|Traversable: Options for this adapter

    :throws Exception\ExtensionNotLoadedException: 



_setKeys
++++++++

.. function:: _setKeys()


    Sets the encryption keys

    :param string|array: Key with type association

    :rtype: Openssl 

    :throws: Exception\InvalidArgumentException 



getPublicKey
++++++++++++

.. function:: getPublicKey()


    Returns all public keys

    :rtype: array 



setPublicKey
++++++++++++

.. function:: setPublicKey()


    Sets public keys

    :param string|array: Public keys

    :rtype: \Zend\Filter\Encrypt\Openssl 



getPrivateKey
+++++++++++++

.. function:: getPrivateKey()


    Returns all private keys

    :rtype: array 



setPrivateKey
+++++++++++++

.. function:: setPrivateKey()


    Sets private keys

    :param string: Private key
    :param string: 

    :rtype: Openssl 



getEnvelopeKey
++++++++++++++

.. function:: getEnvelopeKey()


    Returns all envelope keys

    :rtype: array 



setEnvelopeKey
++++++++++++++

.. function:: setEnvelopeKey()


    Sets envelope keys

    :param string|array: Envelope keys

    :rtype: \Zend\Filter\Encrypt\Openssl 



getPassphrase
+++++++++++++

.. function:: getPassphrase()


    Returns the passphrase

    :rtype: string 



setPassphrase
+++++++++++++

.. function:: setPassphrase()


    Sets a new passphrase

    :param string: 

    :rtype: Openssl 



getCompression
++++++++++++++

.. function:: getCompression()


    Returns the compression

    :rtype: array 



setCompression
++++++++++++++

.. function:: setCompression()


    Sets a internal compression for values to encrypt

    :param string|array: 

    :rtype: Openssl 



getPackage
++++++++++

.. function:: getPackage()


    Returns if header should be packaged

    :rtype: bool 



setPackage
++++++++++

.. function:: setPackage()


    Sets if the envelope keys should be included in the encrypted value

    :param bool: 

    :rtype: Openssl 



encrypt
+++++++

.. function:: encrypt()


    Encrypts $value with the defined settings
    Note that you also need the "encrypted" keys to be able to decrypt

    :param string: Content to encrypt

    :rtype: string The encrypted content

    :throws: Exception\RuntimeException 



decrypt
+++++++

.. function:: decrypt()


    Defined by Zend\Filter\FilterInterface
    
    Decrypts $value with the defined settings

    :param string: Content to decrypt

    :rtype: string The decrypted content

    :throws: Exception\RuntimeException 



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



