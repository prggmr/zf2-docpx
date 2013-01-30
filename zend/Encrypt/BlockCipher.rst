.. Filter/Encrypt/BlockCipher.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\Encrypt\\BlockCipher
==================================

Encryption adapter for Zend\Crypt\BlockCipher

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param string|array|\Traversable: Encryption Options

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



getEncryption
+++++++++++++

.. function:: getEncryption()


    Returns the set encryption options

    :rtype: array 



setEncryption
+++++++++++++

.. function:: setEncryption()


    Sets new encryption options

    :param string|array: Encryption options

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getVector
+++++++++

.. function:: getVector()


    Returns the initialization vector

    :rtype: string 



setVector
+++++++++

.. function:: setVector()


    Set the inizialization vector

    :param string: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



setKey
++++++

.. function:: setKey()


    Set the encryption key

    :param string: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getKey
++++++

.. function:: getKey()


    Get the encryption key

    :rtype: string 



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

    :rtype: BlockCipher 



encrypt
+++++++

.. function:: encrypt()


    Defined by Zend\Filter\FilterInterface
    
    Encrypts $value with the defined settings

    :param string: The content to encrypt

    :throws Exception\InvalidArgumentException: 

    :rtype: string The encrypted content



decrypt
+++++++

.. function:: decrypt()


    Defined by Zend\Filter\FilterInterface
    
    Decrypts $value with the defined settings

    :param string: Content to decrypt

    :rtype: string The decrypted content



toString
++++++++

.. function:: toString()


    Returns the adapter name

    :rtype: string 



