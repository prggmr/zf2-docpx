.. Crypt/Password/PasswordInterface.php generated using docpx on 01/30/13 03:32am


Zend\\Crypt\\Password\\create
=============================

.. function:: Zend\Crypt\Password\create()


    Create a password hash for a given plain text password

    :param string: The password to hash

    :rtype: string The formatted password hash



Zend\\Crypt\\Password\\verify
=============================

.. function:: Zend\Crypt\Password\verify()


    Verify a password hash against a given plain text password

    :param string: The password to hash
    :param string: The supplied hash to validate

    :rtype: bool Does the password validate against the hash



