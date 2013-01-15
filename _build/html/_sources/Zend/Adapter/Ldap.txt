.. /Authentication/Adapter/Ldap.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Adapter\\Ldap
***********************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$options = false, [$username = false, [$password = false]]])


    Constructor

    :param array $options: An array of arrays of Zend\Ldap\Ldap options
    :param string $username: The username of the account being authenticated
    :param string $password: The password of the account being authenticated



getOptions
----------

.. function:: getOptions()


    Returns the array of arrays of Zend\Ldap\Ldap options of this adapter.

    :rtype: array|null 



setOptions
----------

.. function:: setOptions($options)


    Sets the array of arrays of Zend\Ldap\Ldap options to be used by
    this adapter.

    :param array $options: The array of arrays of Zend\Ldap\Ldap options

    :rtype: Ldap Provides a fluent interface



getUsername
-----------

.. function:: getUsername()


    Returns the username of the account being authenticated, or
    NULL if none is set.

    :rtype: string|null 



setUsername
-----------

.. function:: setUsername($username)


    Sets the username for binding

    :param string $username: The username for binding

    :rtype: Ldap Provides a fluent interface



getPassword
-----------

.. function:: getPassword()


    Returns the password of the account being authenticated, or
    NULL if none is set.

    :rtype: string|null 



setPassword
-----------

.. function:: setPassword($password)


    Sets the password for the account

    :param string $password: The password of the account being authenticated

    :rtype: Ldap Provides a fluent interface



setIdentity
-----------

.. function:: setIdentity($identity)


    setIdentity() - set the identity (username) to be used
    
    Proxies to {@see setUsername()}
    
    Closes ZF-6813

    :param string $identity: 

    :rtype: Ldap Provides a fluent interface



setCredential
-------------

.. function:: setCredential($credential)


    setCredential() - set the credential (password) value to be used
    
    Proxies to {@see setPassword()}
    
    Closes ZF-6813

    :param string $credential: 

    :rtype: Ldap Provides a fluent interface



getLdap
-------

.. function:: getLdap()


    Returns the LDAP Object

    :rtype: ZendLdap\Ldap The Zend\Ldap\Ldap object used to authenticate the credentials



setLdap
-------

.. function:: setLdap($ldap)


    Set an Ldap connection

    :param ZendLdap\Ldap $ldap: An existing Ldap object

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

.. function:: prepareOptions($ldap, $options)


    Sets the LDAP specific options on the Zend\Ldap\Ldap instance

    :param ZendLdap\Ldap $ldap: 
    :param array $options: 

    :rtype: array of auth-adapter specific options



checkGroupMembership
--------------------

.. function:: checkGroupMembership($ldap, $canonicalName, $dn, $adapterOptions)


    Checks the group membership of the bound user

    :param ZendLdap\Ldap $ldap: 
    :param string $canonicalName: 
    :param string $dn: 
    :param array $adapterOptions: 

    :rtype: string|true 



getAccountObject
----------------

.. function:: getAccountObject([$returnAttribs = false, [$omitAttribs = false]])


    getAccountObject() - Returns the result entry as a stdClass object
    
    This resembles the feature {@see Zend\Authentication\Adapter\DbTable::getResultRowObject()}.
    Closes ZF-6813

    :param array $returnAttribs: 
    :param array $omitAttribs: 

    :rtype: stdClass|bool 



optionsToString
---------------

.. function:: optionsToString($options)


    Converts options to string

    :param array $options: 

    :rtype: string 





