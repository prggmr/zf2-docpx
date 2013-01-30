.. Crypt/BlockCipher.php generated using docpx on 01/30/13 03:32am


Zend\\Crypt\\BlockCipher
========================

Encrypt using a symmetric cipher then authenticate using HMAC (SHA-256)

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param SymmetricInterface: 



factory
-------

.. function:: factory()


    Factory.

    :param string: 
    :param array: 

    :rtype: BlockCipher 



getSymmetricPluginManager
-------------------------

.. function:: getSymmetricPluginManager()


    Returns the symmetric cipher plugin manager.  If it doesn't exist it's created.

    :rtype: SymmetricPluginManager 



setSymmetricPluginManager
-------------------------

.. function:: setSymmetricPluginManager()


    Set the symmetric cipher plugin manager

    :param string|SymmetricPluginManager: 

    :throws Exception\InvalidArgumentException: 



setCipher
---------

.. function:: setCipher()


    Set the symmetric cipher

    :param SymmetricInterface: 

    :rtype: BlockCipher 



getCipher
---------

.. function:: getCipher()


    Get symmetric cipher

    :rtype: SymmetricInterface 



setKeyIteration
---------------

.. function:: setKeyIteration()


    Set the number of iterations for Pbkdf2

    :param integer: 

    :rtype: BlockCipher 



getKeyIteration
---------------

.. function:: getKeyIteration()


    Get the number of iterations for Pbkdf2

    :rtype: integer 



setSalt
-------

.. function:: setSalt()


    Set the salt (IV)

    :param string: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getSalt
-------

.. function:: getSalt()


    Get the salt (IV) according to the size requested by the algorithm

    :rtype: string 



getOriginalSalt
---------------

.. function:: getOriginalSalt()


    Get the original salt value

    :rtype: type 



setBinaryOutput
---------------

.. function:: setBinaryOutput()


    Enable/disable the binary output

    :param bool: 

    :rtype: BlockCipher 



getBinaryOutput
---------------

.. function:: getBinaryOutput()


    Get the value of binary output

    :rtype: bool 



setKey
------

.. function:: setKey()


    Set the encryption/decryption key

    :param string: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getKey
------

.. function:: getKey()


    Get the key

    :rtype: string 



setCipherAlgorithm
------------------

.. function:: setCipherAlgorithm()


    Set algorithm of the symmetric cipher

    :param string: 

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

.. function:: setHashAlgorithm()


    Set the hash algorithm for HMAC authentication

    :param string: 

    :rtype: BlockCipher 

    :throws: Exception\InvalidArgumentException 



getHashAlgorithm
----------------

.. function:: getHashAlgorithm()


    Get the hash algorithm for HMAC authentication

    :rtype: string 



encrypt
-------

.. function:: encrypt()


    Encrypt then authenticate using HMAC

    :param string: 

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



decrypt
-------

.. function:: decrypt()


    Decrypt

    :param string: 

    :rtype: string|bool 

    :throws: Exception\InvalidArgumentException 





Constants
+++++++++

KEY_DERIV_HMAC
==============

