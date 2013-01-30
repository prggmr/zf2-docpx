.. Crypt/Symmetric/Mcrypt.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\Symmetric\\Mcrypt
==============================

Symmetric encryption using the Mcrypt extension

NOTE: DO NOT USE only this class to encrypt data.
This class doesn't provide authentication and integrity check over the data.
PLEASE USE Zend\Crypt\BlockCipher instead!

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable: 

    :throws Exception\RuntimeException: 
    :throws Exception\InvalidArgumentException: 



setDefaultOptions
+++++++++++++++++

.. function:: setDefaultOptions()


    Set default options

    :param array: 

    :rtype: void 



getPaddingPluginManager
+++++++++++++++++++++++

.. function:: getPaddingPluginManager()


    Returns the padding plugin manager.  If it doesn't exist it's created.

    :rtype: PaddingPluginManager 



setPaddingPluginManager
+++++++++++++++++++++++

.. function:: setPaddingPluginManager()


    Set the padding plugin manager

    :param string|PaddingPluginManager: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



getKeySize
++++++++++

.. function:: getKeySize()


    Get the maximum key size for the selected cipher and mode of operation

    :rtype: integer 



setKey
++++++

.. function:: setKey()


    Set the encryption key

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getKey
++++++

.. function:: getKey()


    Get the encryption key

    :rtype: string 



setAlgorithm
++++++++++++

.. function:: setAlgorithm()


    Set the encryption algorithm (cipher)

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getAlgorithm
++++++++++++

.. function:: getAlgorithm()


    Get the encryption algorithm

    :rtype: string 



setPadding
++++++++++

.. function:: setPadding()


    Set the padding object

    :param Padding\PaddingInterface: 

    :rtype: Mcrypt 



getPadding
++++++++++

.. function:: getPadding()


    Get the padding object

    :rtype: Padding\PaddingInterface 



encrypt
+++++++

.. function:: encrypt()


    Encrypt

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



decrypt
+++++++

.. function:: decrypt()


    Decrypt

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



getSaltSize
+++++++++++

.. function:: getSaltSize()


    Get the salt (IV) size

    :rtype: integer 



getSupportedAlgorithms
++++++++++++++++++++++

.. function:: getSupportedAlgorithms()


    Get the supported algorithms

    :rtype: array 



setSalt
+++++++

.. function:: setSalt()


    Set the salt (IV)

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getSalt
+++++++

.. function:: getSalt()


    Get the salt (IV) according to the size requested by the algorithm

    :rtype: string 



getOriginalSalt
+++++++++++++++

.. function:: getOriginalSalt()


    Get the original salt value

    :rtype: string 



setMode
+++++++

.. function:: setMode()


    Set the cipher mode

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Mcrypt 



getMode
+++++++

.. function:: getMode()


    Get the cipher mode

    :rtype: string 



getSupportedModes
+++++++++++++++++

.. function:: getSupportedModes()


    Get all supported encryption modes

    :rtype: array 



getBlockSize
++++++++++++

.. function:: getBlockSize()


    Get the block size

    :rtype: integer 





Constants
---------

DEFAULT_PADDING
+++++++++++++++

