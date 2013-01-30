.. Authentication/Adapter/Digest.php generated using docpx on 01/30/13 03:32am


Zend\\Authentication\\Adapter\\Digest
=====================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Sets adapter options

    :param mixed: 
    :param mixed: 
    :param mixed: 
    :param mixed: 



getFilename
-----------

.. function:: getFilename()


    Returns the filename option value or null if it has not yet been set

    :rtype: string|null 



setFilename
-----------

.. function:: setFilename()


    Sets the filename option value

    :param mixed: 

    :rtype: Digest Provides a fluent interface



getRealm
--------

.. function:: getRealm()


    Returns the realm option value or null if it has not yet been set

    :rtype: string|null 



setRealm
--------

.. function:: setRealm()


    Sets the realm option value

    :param mixed: 

    :rtype: Digest Provides a fluent interface



getUsername
-----------

.. function:: getUsername()


    Returns the username option value or null if it has not yet been set

    :rtype: string|null 



setUsername
-----------

.. function:: setUsername()


    Sets the username option value

    :param mixed: 

    :rtype: Digest Provides a fluent interface



getPassword
-----------

.. function:: getPassword()


    Returns the password option value or null if it has not yet been set

    :rtype: string|null 



setPassword
-----------

.. function:: setPassword()


    Sets the password option value

    :param mixed: 

    :rtype: Digest Provides a fluent interface



authenticate
------------

.. function:: authenticate()


    Defined by Zend\Authentication\Adapter\AdapterInterface


    :rtype: AuthenticationResult 



_secureStringCompare
--------------------

.. function:: _secureStringCompare()


    Securely compare two strings for equality while avoided C level memcmp()
    optimisations capable of leaking timing information useful to an attacker
    attempting to iteratively guess the unknown string (e.g. password) being
    compared against.

    :param string: 
    :param string: 

    :rtype: bool 



