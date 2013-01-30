.. Crypt/Password/Apache.php generated using docpx on 01/30/13 03:32am


Zend\\Crypt\\Password\\Apache
=============================

Apache password authentication

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 



create
------

.. function:: create()


    Generate the hash of a password

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: string 



verify
------

.. function:: verify()


    Verify if a password is correct against an hash value

    :param string: 
    :param string: 

    :rtype: boolean 



setFormat
---------

.. function:: setFormat()


    Set the format of the password

    :param integer|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Apache 



getFormat
---------

.. function:: getFormat()


    Get the format of the password

    :rtype: string 



setAuthName
-----------

.. function:: setAuthName()


    Set the AuthName (for digest authentication)

    :param string: 

    :rtype: Apache 



getAuthName
-----------

.. function:: getAuthName()


    Get the AuthName (for digest authentication)

    :rtype: string 



setUserName
-----------

.. function:: setUserName()


    Set the username

    :param string: 

    :rtype: Apache 



getUserName
-----------

.. function:: getUserName()


    Get the username

    :rtype: string 



toAlphabet64
------------

.. function:: toAlphabet64()


    Convert a binary string using the alphabet "./0-9A-Za-z"

    :param string: 

    :rtype: string 



apr1Md5
-------

.. function:: apr1Md5()


    APR1 MD5 algorithm

    :param string: 

    :rtype: string 





Constants
+++++++++

BASE64
======

ALPHA64
=======

