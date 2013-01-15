.. /Crypt/Password/Bcrypt.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Password\\Bcrypt
*****************************


Bcrypt algorithm using crypt() function of PHP



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|Traversable $options: 

    :throws Exception\InvalidArgumentException: 



create
------

.. function:: create($password)


    Bcrypt

    :param string $password: 

    :throws Exception\RuntimeException: 

    :rtype: string 



verify
------

.. function:: verify($password, $hash)


    Verify if a password is correct against an hash value

    :param string $password: 
    :param string $hash: 

    :rtype: bool 



setCost
-------

.. function:: setCost($cost)


    Set the cost parameter

    :param integer|string $cost: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bcrypt 



getCost
-------

.. function:: getCost()


    Get the cost parameter

    :rtype: string 



setSalt
-------

.. function:: setSalt($salt)


    Set the salt value

    :param string $salt: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Bcrypt 



getSalt
-------

.. function:: getSalt()


    Get the salt value

    :rtype: string 





Constants
---------

MIN_SALT_SIZE
+++++++++++++

