.. /Crypt/Symmetric/Mcrypt.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Symmetric\\Mcrypt
******************************


Symmetric encryption using the Mcrypt extension

NOTE: DO NOT USE only this class to encrypt data.
This class doesn't provide authentication and integrity check over the data.
PLEASE USE Zend\Crypt\BlockCipher instead!



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|Traversable $options: 

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



setDefaultOptions
-----------------

.. function:: setDefaultOptions([$options = false])


    Set default options

    :param array $options: 

    :rtype: void 



getPaddingPluginManager
-----------------------

.. function:: getPaddingPluginManager()


    Returns the padding plugin manager.  If it doesn't exist it's created.

    :rtype: PaddingPluginManager 



setPaddingPluginManager
-----------------------

.. function:: setPaddingPluginManager($plugins)


    Set the padding plugin manager

    :param string|PaddingPluginManager $plugins: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getKeySize
----------

.. function:: getKeySize()


    Get the maximum key size for the selected cipher and mode of operation

    :rtype: integer 



setKey
------

.. function:: setKey($key)


    Set the encryption key

    :param string $key: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getKey
------

.. function:: getKey()


    Get the encryption key

    :rtype: string 



setAlgorithm
------------

.. function:: setAlgorithm($algo)


    Set the encryption algorithm (cipher)

    :param string $algo: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getAlgorithm
------------

.. function:: getAlgorithm()


    Get the encryption algorithm

    :rtype: string 



setPadding
----------

.. function:: setPadding($padding)


    Set the padding object

    :param Padding\PaddingInterface $padding: 

    :rtype: Mcrypt 



getPadding
----------

.. function:: getPadding()


    Get the padding object

    :rtype: Padding\PaddingInterface 



encrypt
-------

.. function:: encrypt($data)


    Encrypt

    :param string $data: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



decrypt
-------

.. function:: decrypt($data)


    Decrypt

    :param string $data: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



getSaltSize
-----------

.. function:: getSaltSize()


    Get the salt (IV) size

    :rtype: integer 



getSupportedAlgorithms
----------------------

.. function:: getSupportedAlgorithms()


    Get the supported algorithms

    :rtype: array 



setSalt
-------

.. function:: setSalt($salt)


    Set the salt (IV)

    :param string $salt: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getSalt
-------

.. function:: getSalt()


    Get the salt (IV)

    :rtype: string 



setMode
-------

.. function:: setMode($mode)


    Set the cipher mode

    :param string $mode: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getMode
-------

.. function:: getMode()


    Get the cipher mode

    :rtype: string 



getSupportedModes
-----------------

.. function:: getSupportedModes()


    Get all supported encryption modes

    :rtype: array 



getBlockSize
------------

.. function:: getBlockSize()


    Get the block size

    :rtype: integer 





Constants
---------

DEFAULT_PADDING
+++++++++++++++

