.. /Filter/Encrypt/BlockCipher.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Encrypt\\BlockCipher
**********************************


Encryption adapter for Zend\Crypt\BlockCipher



Methods
=======

__construct
-----------

.. function:: __construct($options)


    Class constructor

    :param string|array|\Traversable $options: Encryption Options

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



getEncryption
-------------

.. function:: getEncryption()


    Returns the set encryption options

    :rtype: array 



setEncryption
-------------

.. function:: setEncryption($options)


    Sets new encryption options

    :param string|array $options: Encryption options

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getVector
---------

.. function:: getVector()


    Returns the initialization vector

    :rtype: string 



setVector
---------

.. function:: setVector($vector)


    Set the inizialization vector

    :param string $vector: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



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

    :rtype: BlockCipher 



encrypt
-------

.. function:: encrypt($value)


    Defined by Zend\Filter\FilterInterface
    
    Encrypts $value with the defined settings

    :param string $value: The content to encrypt

    :throws Exception\InvalidArgumentException: 

    :rtype: string The encrypted content



decrypt
-------

.. function:: decrypt($value)


    Defined by Zend\Filter\FilterInterface
    
    Decrypts $value with the defined settings

    :param string $value: Content to decrypt

    :rtype: string The decrypted content



toString
--------

.. function:: toString()


    Returns the adapter name

    :rtype: string 





