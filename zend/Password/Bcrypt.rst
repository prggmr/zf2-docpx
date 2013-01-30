.. Crypt/Password/Bcrypt.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Crypt\\Password\\Bcrypt
=============================

Bcrypt algorithm using crypt() function of PHP

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 



create
++++++

.. function:: create()


    Bcrypt

    :param string: 

    :throws Exception\RuntimeException: 

    :rtype: string 



verify
++++++

.. function:: verify()


    Verify if a password is correct against an hash value

    :param string: 
    :param string: 

    :rtype: bool 



setCost
+++++++

.. function:: setCost()


    Set the cost parameter

    :param integer|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bcrypt 



getCost
+++++++

.. function:: getCost()


    Get the cost parameter

    :rtype: string 



setSalt
+++++++

.. function:: setSalt()


    Set the salt value

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bcrypt 



getSalt
+++++++

.. function:: getSalt()


    Get the salt value

    :rtype: string 



setBackwardCompatibility
++++++++++++++++++++++++

.. function:: setBackwardCompatibility()


    Set the backward compatibility $2a$ instead of $2y$ for PHP 5.3.7+

    :param boolean: 



getBackwardCompatibility
++++++++++++++++++++++++

.. function:: getBackwardCompatibility()


    Get the backward compatibility

    :rtype: boolean 





Constants
---------

MIN_SALT_SIZE
+++++++++++++

