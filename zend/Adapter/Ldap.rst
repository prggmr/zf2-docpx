.. Authentication/Adapter/Ldap.php generated using docpx on 01/30/13 03:32am


Zend\\Authentication\\Adapter\\Ldap
===================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param array: An array of arrays of Zend\Ldap\Ldap options
    :param string: The username of the account being authenticated
    :param string: The password of the account being authenticated



getOptions
----------

.. function:: getOptions()


    Returns the array of arrays of Zend\Ldap\Ldap options of this adapter.

    :rtype: array|null 



setOptions
----------

.. function:: setOptions()


    Sets the array of arrays of Zend\Ldap\Ldap options to be used by
    this adapter.

    :param array: The array of arrays of Zend\Ldap\Ldap options

    :rtype: Ldap Provides a fluent interface



getUsername
-----------

.. function:: getUsername()


    Returns the username of the account being authenticated, or
    NULL if none is set.

    :rtype: string|null 



setUsername
-----------

.. function:: setUsername()


    Sets the username for binding

    :param string: The username for binding

    :rtype: Ldap Provides a fluent interface



getPassword
-----------

.. function:: getPassword()


    Returns the password of the account being authenticated, or
    NULL if none is set.

    :rtype: string|null 



setPassword
-----------

.. function:: setPassword()


    Sets the password for the account

    :param string: The password of the account being authenticated

    :rtype: Ldap Provides a fluent interface



getLdap
-------

.. function:: getLdap()


    Returns the LDAP Object

    :rtype: ZendLdap\Ldap The Zend\Ldap\Ldap object used to authenticate the credentials



setLdap
-------

.. function:: setLdap()


    Set an Ldap connection

    :param ZendLdap\Ldap: An existing Ldap object

    :rtype: Ldap Provides a fluent interface



getAuthorityName
----------------

.. function:: getAuthorityName()


    Returns a domain name for the current LDAP options. This is used
    for skipping redundant operations (e.g. authentications).

    :rtype: string 



authenticate
------------

.. function:: authenticate()


    Authenticate the user

    :rtype: AuthenticationResult 

    :throws: Exception\ExceptionInterface 



prepareOptions
--------------

.. function:: prepareOptions()


    Sets the LDAP specific options on the Zend\Ldap\Ldap instance

    :param ZendLdap\Ldap: 
    :param array: 

    :rtype: array of auth-adapter specific options



checkGroupMembership
--------------------

.. function:: checkGroupMembership()


    Checks the group membership of the bound user

    :param ZendLdap\Ldap: 
    :param string: 
    :param string: 
    :param array: 

    :rtype: string|true 



getAccountObject
----------------

.. function:: getAccountObject()


    getAccountObject() - Returns the result entry as a stdClass object
    
    This resembles the feature {@see Zend\Authentication\Adapter\DbTable::getResultRowObject()}.
    Closes ZF-6813

    :param array: 
    :param array: 

    :rtype: stdClass|bool 



optionsToString
---------------

.. function:: optionsToString()


    Converts options to string

    :param array: 

    :rtype: string 



