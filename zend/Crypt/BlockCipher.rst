.. /Crypt/BlockCipher.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\BlockCipher
************************


Encrypt using a symmetric cipher then authenticate using HMAC (SHA-256)



Methods
=======

__construct
-----------

.. function:: __construct($cipher)


    Constructor

    :param SymmetricInterface $cipher: 



factory
-------

.. function:: factory($adapter, [$options = false])


    Factory.

    :param string $adapter: 
    :param array $options: 

    :rtype: BlockCipher 



getSymmetricPluginManager
-------------------------

.. function:: getSymmetricPluginManager()


    Returns the symmetric cipher plugin manager.  If it doesn't exist it's created.

    :rtype: SymmetricPluginManager 



setSymmetricPluginManager
-------------------------

.. function:: setSymmetricPluginManager($plugins)


    Set the symmetric cipher plugin manager

    :param string|SymmetricPluginManager $plugins: 

    :throws Exception\InvalidArgumentException: 



setCipher
---------

.. function:: setCipher($cipher)


    Set the symmetric cipher

    :param SymmetricInterface $cipher: 

    :rtype: BlockCipher 



getCipher
---------

.. function:: getCipher()


    Get symmetric cipher

    :rtype: SymmetricInterface 



setKeyIteration
---------------

.. function:: setKeyIteration($num)


    Set the number of iterations for Pbkdf2

    :param integer $num: 

    :rtype: BlockCipher 



getKeyIteration
---------------

.. function:: getKeyIteration()


    Get the number of iterations for Pbkdf2

    :rtype: integer 



setSalt
-------

.. function:: setSalt($salt)


    Set the salt (IV)

    :param string $salt: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getSalt
-------

.. function:: getSalt()


    Get the salt (IV)

    :rtype: string 



setBinaryOutput
---------------

.. function:: setBinaryOutput($value)


    Enable/disable the binary output

    :param bool $value: 

    :rtype: BlockCipher 



getBinaryOutput
---------------

.. function:: getBinaryOutput()


    Get the value of binary output

    :rtype: bool 



setKey
------

.. function:: setKey($key)


    Set the encryption/decryption key

    :param string $key: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getKey
------

.. function:: getKey()


    Get the key

    :rtype: string 



setCipherAlgorithm
------------------

.. function:: setCipherAlgorithm($algo)


    Set algorithm of the symmetric cipher

    :param string $algo: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getCipherAlgorithm
------------------

.. function:: getCipherAlgorithm()


    Get the cipher algorithm

    :rtype: string|bool 



getCipherSupportedAlgorithms
----------------------------

.. function:: getCipherSupportedAlgorithms()


    Get the supported algorithms of the symmetric cipher

    :rtype: array 



setHashAlgorithm
----------------

.. function:: setHashAlgorithm($hash)


    Set the hash algorithm for HMAC authentication

    :param string $hash: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getHashAlgorithm
----------------

.. function:: getHashAlgorithm()


    Get the hash algorithm for HMAC authentication

    :rtype: string 



encrypt
-------

.. function:: encrypt($data)


    Encrypt then authenticate using HMAC

    :param string $data: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



decrypt
-------

.. function:: decrypt($data)


    Decrypt

    :param string $data: 

    :rtype: string|bool 

    :throws: Exception\InvalidArgumentException 





Constants
---------

KEY_DERIV_HMAC
++++++++++++++

