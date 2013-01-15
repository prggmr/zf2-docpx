.. /Authentication/Adapter/Digest.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Adapter\\Digest
*************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$filename = false, [$realm = false, [$username = false, [$password = false]]]])


    Sets adapter options

    :param mixed $filename: 
    :param mixed $realm: 
    :param mixed $username: 
    :param mixed $password: 



getFilename
-----------

.. function:: getFilename()


    Returns the filename option value or null if it has not yet been set

    :rtype: string|null 



setFilename
-----------

.. function:: setFilename($filename)


    Sets the filename option value

    :param mixed $filename: 

    :rtype: Digest Provides a fluent interface



getRealm
--------

.. function:: getRealm()


    Returns the realm option value or null if it has not yet been set

    :rtype: string|null 



setRealm
--------

.. function:: setRealm($realm)


    Sets the realm option value

    :param mixed $realm: 

    :rtype: Digest Provides a fluent interface



getUsername
-----------

.. function:: getUsername()


    Returns the username option value or null if it has not yet been set

    :rtype: string|null 



setUsername
-----------

.. function:: setUsername($username)


    Sets the username option value

    :param mixed $username: 

    :rtype: Digest Provides a fluent interface



getPassword
-----------

.. function:: getPassword()


    Returns the password option value or null if it has not yet been set

    :rtype: string|null 



setPassword
-----------

.. function:: setPassword($password)


    Sets the password option value

    :param mixed $password: 

    :rtype: Digest Provides a fluent interface



authenticate
------------

.. function:: authenticate()


    Defined by Zend\Authentication\Adapter\AdapterInterface


    :rtype: AuthenticationResult 



_secureStringCompare
--------------------

.. function:: _secureStringCompare($a, $b)


    Securely compare two strings for equality while avoided C level memcmp()
    optimisations capable of leaking timing information useful to an attacker
    attempting to iteratively guess the unknown string (e.g. password) being
    compared against.

    :param string $a: 
    :param string $b: 

    :rtype: bool 





