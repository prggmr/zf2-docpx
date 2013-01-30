.. Crypt/PublicKey/Rsa.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Crypt\\PublicKey\\Rsa
===========================

Implementation of the RSA public key encryption algorithm.

Methods
-------

factory
+++++++

.. function:: factory()


    RSA instance factory

    :param array|Traversable: 

    :rtype: Rsa 

    :throws: Rsa\Exception\RuntimeException 
    :throws: Rsa\Exception\InvalidArgumentException 



__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param RsaOptions: 

    :throws Rsa\Exception\RuntimeException: 



setOptions
++++++++++

.. function:: setOptions()


    Set options

    :param RsaOptions: 

    :rtype: Rsa 



getOptions
++++++++++

.. function:: getOptions()


    Get options

    :rtype: RsaOptions 



sign
++++

.. function:: sign()


    Sign with private key

    :param string: 
    :param Rsa\PrivateKey: 

    :rtype: string 

    :throws: Rsa\Exception\RuntimeException 



verify
++++++

.. function:: verify()


    Verify signature with public key
    
    $signature can be encoded in base64 or not. $mode sets how the input must be processed:
     - MODE_AUTO: Check if the $signature is encoded in base64. Not recommended for performance.
     - MODE_BASE64: Decode $signature using base64 algorithm.
     - MODE_RAW: $signature is not encoded.

    :param string: 
    :param string: 
    :param null|Rsa\PublicKey: 
    :param int: Input encoding

    :rtype: bool 

    :throws: Rsa\Exception\RuntimeException 

    :see:  
    :see:  
    :see:  



encrypt
+++++++

.. function:: encrypt()


    Encrypt with private/public key

    :param string: 
    :param Rsa\AbstractKey: 

    :rtype: string 

    :throws: Rsa\Exception\InvalidArgumentException 



decrypt
+++++++

.. function:: decrypt()


    Decrypt with private/public key
    
    $data can be encoded in base64 or not. $mode sets how the input must be processed:
     - MODE_AUTO: Check if the $signature is encoded in base64. Not recommended for performance.
     - MODE_BASE64: Decode $data using base64 algorithm.
     - MODE_RAW: $data is not encoded.

    :param string: 
    :param Rsa\AbstractKey: 
    :param int: Input encoding

    :rtype: string 

    :throws: Rsa\Exception\InvalidArgumentException 

    :see:  
    :see:  
    :see:  



generateKeys
++++++++++++

.. function:: generateKeys()


    Generate new private/public key pair


    :param array: 

    :rtype: Rsa 

    :throws: Rsa\Exception\RuntimeException 





Constants
---------

MODE_AUTO
+++++++++

MODE_BASE64
+++++++++++

MODE_RAW
++++++++

