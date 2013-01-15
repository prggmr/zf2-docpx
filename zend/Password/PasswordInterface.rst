.. /Crypt/Password/PasswordInterface.php generated using docpx on 01/15/13 05:29pm


Zend\\Crypt\\Password\\create
=============================

.. function:: Zend\Crypt\Password\create()


    Create a password hash for a given plain text password

    :param string $password: The password to hash

    :rtype: string The formatted password hash



Zend\\Crypt\\Password\\verify
=============================

.. function:: Zend\Crypt\Password\verify()


    Verify a password hash against a given plain text password

    :param string $password: The password to hash
    :param string $hash: The supplied hash to validate

    :rtype: bool Does the password validate against the hash



