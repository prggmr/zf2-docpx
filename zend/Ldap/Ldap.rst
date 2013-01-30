.. Ldap/Ldap.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Ldap\\Ldap
================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.

    :param array|Traversable: Options used in connecting, binding, etc.

    :throws Exception\LdapException: 



__destruct
++++++++++

.. function:: __destruct()


    Destructor.

    :rtype: void 



getResource
+++++++++++

.. function:: getResource()


    @return resource The raw LDAP extension resource.



getLastErrorCode
++++++++++++++++

.. function:: getLastErrorCode()


    Return the LDAP error number of the last LDAP command

    :rtype: int 



getLastError
++++++++++++

.. function:: getLastError()


    Return the LDAP error message of the last LDAP command

    :param int: 
    :param array: 

    :rtype: string 



getBoundUser
++++++++++++

.. function:: getBoundUser()


    Get the currently bound user
    
    FALSE if no user is bound to the LDAP resource
    NULL if there has been an anonymous bind
    username of the currently bound user

    :rtype: bool|null|string 



setOptions
++++++++++

.. function:: setOptions()


    Sets the options used in connecting, binding, etc.
    
    Valid option keys:
     host
     port
     useSsl
     username
     password
     bindRequiresDn
     baseDn
     accountCanonicalForm
     accountDomainName
     accountDomainNameShort
     accountFilterFormat
     allowEmptyPassword
     useStartTls
     optReferrals
     tryUsernameSplit
     networkTimeout

    :param array|Traversable: Options used in connecting, binding, etc.

    :rtype: Ldap Provides a fluent interface

    :throws: Exception\LdapException 



getOptions
++++++++++

.. function:: getOptions()


    @return array The current options.



getHost
+++++++

.. function:: getHost()


    @return string The hostname of the LDAP server being used to
     authenticate accounts



getPort
+++++++

.. function:: getPort()


    @return int The port of the LDAP server or 0 to indicate that no port
     value is set



getUseSsl
+++++++++

.. function:: getUseSsl()


    @return bool The default SSL / TLS encrypted transport control



getUsername
+++++++++++

.. function:: getUsername()


    @return string The default acctname for binding



getPassword
+++++++++++

.. function:: getPassword()


    @return string The default password for binding



getBindRequiresDn
+++++++++++++++++

.. function:: getBindRequiresDn()


    @return bool Bind requires DN



getBaseDn
+++++++++

.. function:: getBaseDn()


    Gets the base DN under which objects of interest are located

    :rtype: string 



getAccountCanonicalForm
+++++++++++++++++++++++

.. function:: getAccountCanonicalForm()


    @return integer Either ACCTNAME_FORM_BACKSLASH, ACCTNAME_FORM_PRINCIPAL or
    ACCTNAME_FORM_USERNAME indicating the form usernames should be canonicalized to.



getAccountDomainName
++++++++++++++++++++

.. function:: getAccountDomainName()


    @return string The account domain name



getAccountDomainNameShort
+++++++++++++++++++++++++

.. function:: getAccountDomainNameShort()


    @return string The short account domain name



getAccountFilterFormat
++++++++++++++++++++++

.. function:: getAccountFilterFormat()


    @return string A format string for building an LDAP search filter to match
    an account



getAllowEmptyPassword
+++++++++++++++++++++

.. function:: getAllowEmptyPassword()


    @return bool Allow empty passwords



getUseStartTls
++++++++++++++

.. function:: getUseStartTls()


    @return bool The default SSL / TLS encrypted transport control



getOptReferrals
+++++++++++++++

.. function:: getOptReferrals()


    @return bool Opt. Referrals



getTryUsernameSplit
+++++++++++++++++++

.. function:: getTryUsernameSplit()


    @return bool Try splitting the username into username and domain



getNetworkTimeout
+++++++++++++++++

.. function:: getNetworkTimeout()


    @return int The value for network timeout when connect to the LDAP server.



getAccountFilter
++++++++++++++++

.. function:: getAccountFilter()


    @param  string $acctname

    :rtype: string The LDAP search filter for matching directory accounts



splitName
+++++++++

.. function:: splitName()


    @param string $name  The name to split

    :param string: The resulting domain name (this is an out parameter)
    :param string: The resulting account name (this is an out parameter)

    :rtype: void 



getAccountDn
++++++++++++

.. function:: getAccountDn()


    @param  string $acctname The name of the account

    :rtype: string The DN of the specified account

    :throws: Exception\LdapException 



isPossibleAuthority
+++++++++++++++++++

.. function:: isPossibleAuthority()


    @param  string $dname The domain name to check

    :rtype: bool 



getCanonicalAccountName
+++++++++++++++++++++++

.. function:: getCanonicalAccountName()


    @param  string $acctname The name to canonicalize

    :param int: The desired form of canonicalization

    :rtype: string The canonicalized name in the desired form

    :throws: Exception\LdapException 



getAccount
++++++++++

.. function:: getAccount()


    @param  string $acctname

    :param array: An array of names of desired attributes

    :rtype: array An array of the attributes representing the account

    :throws: Exception\LdapException 



disconnect
++++++++++

.. function:: disconnect()


    @return Ldap Provides a fluent interface



connect
+++++++

.. function:: connect()


    To connect using SSL it seems the client tries to verify the server
    certificate by default. One way to disable this behavior is to set
    'TLS_REQCERT never' in OpenLDAP's ldap.conf and restarting Apache. Or,
    if you really care about the server's cert you can put a cert on the
    web server.

    :param string: The hostname of the LDAP server to connect to
    :param int: The port number of the LDAP server to connect to
    :param bool: Use SSL
    :param bool: Use STARTTLS
    :param int: The value for network timeout when connect to the LDAP server.

    :rtype: Ldap Provides a fluent interface

    :throws: Exception\LdapException 



bind
++++

.. function:: bind()


    @param  string $username The username for authenticating the bind

    :param string: The password for authenticating the bind

    :rtype: Ldap Provides a fluent interface

    :throws: Exception\LdapException 



search
++++++

.. function:: search()


    A global LDAP search routine for finding information.
    
    Options can be either passed as single parameters according to the
    method signature or as an array with one or more of the following keys
    - filter
    - baseDn
    - scope
    - attributes
    - sort
    - collectionClass
    - sizelimit
    - timelimit

    :param string|Filter\AbstractFilter|array: 
    :param string|Dn|null: 
    :param integer: 
    :param array: 
    :param string|null: 
    :param string|null: 
    :param integer: 
    :param integer: 

    :rtype: Collection 

    :throws: Exception\LdapException 



createCollection
++++++++++++++++

.. function:: createCollection()


    Extension point for collection creation

    :param Collection\DefaultIterator: 
    :param string|null: 

    :rtype: Collection 

    :throws: Exception\LdapException 



count
+++++

.. function:: count()


    Count items found by given filter.

    :param string|Filter\AbstractFilter: 
    :param string|Dn|null: 
    :param integer: 

    :rtype: integer 

    :throws: Exception\LdapException 



countChildren
+++++++++++++

.. function:: countChildren()


    Count children for a given DN.

    :param string|Dn: 

    :rtype: integer 

    :throws: Exception\LdapException 



exists
++++++

.. function:: exists()


    Check if a given DN exists.

    :param string|Dn: 

    :rtype: bool 

    :throws: Exception\LdapException 



searchEntries
+++++++++++++

.. function:: searchEntries()


    Search LDAP registry for entries matching filter and optional attributes
    
    Options can be either passed as single parameters according to the
    method signature or as an array with one or more of the following keys
    - filter
    - baseDn
    - scope
    - attributes
    - sort
    - reverseSort
    - sizelimit
    - timelimit

    :param string|Filter\AbstractFilter|array: 
    :param string|Dn|null: 
    :param integer: 
    :param array: 
    :param string|null: 
    :param bool: 
    :param integer: 
    :param integer: 

    :rtype: array 

    :throws: Exception\LdapException 



getEntry
++++++++

.. function:: getEntry()


    Get LDAP entry by DN

    :param string|Dn: 
    :param array: 
    :param bool: 

    :rtype: array 

    :throws: null|Exception\LdapException 



prepareLdapEntryArray
+++++++++++++++++++++

.. function:: prepareLdapEntryArray()


    Prepares an ldap data entry array for insert/update operation

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



add
+++

.. function:: add()


    Add new information to the LDAP repository

    :param string|Dn: 
    :param array: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



update
++++++

.. function:: update()


    Update LDAP registry

    :param string|Dn: 
    :param array: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



save
++++

.. function:: save()


    Save entry to LDAP registry.
    
    Internally decides if entry will be updated to added by calling
    {@link exists()}.

    :param string|Dn: 
    :param array: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



delete
++++++

.. function:: delete()


    Delete an LDAP entry

    :param string|Dn: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



getChildrenDns
++++++++++++++

.. function:: getChildrenDns()


    Retrieve the immediate children DNs of the given $parentDn
    
    This method is used in recursive methods like {@see delete()}
    or {@see copy()}

    :param string|Dn: 

    :throws Exception\LdapException: 

    :rtype: array of DNs



moveToSubtree
+++++++++++++

.. function:: moveToSubtree()


    Moves a LDAP entry from one DN to another subtree.

    :param string|Dn: 
    :param string|Dn: 
    :param bool: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



move
++++

.. function:: move()


    Moves a LDAP entry from one DN to another DN.
    
    This is an alias for {@link rename()}

    :param string|Dn: 
    :param string|Dn: 
    :param bool: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



rename
++++++

.. function:: rename()


    Renames a LDAP entry from one DN to another DN.
    
    This method implicitly moves the entry to another location within the tree.

    :param string|Dn: 
    :param string|Dn: 
    :param bool: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



copyToSubtree
+++++++++++++

.. function:: copyToSubtree()


    Copies a LDAP entry from one DN to another subtree.

    :param string|Dn: 
    :param string|Dn: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



copy
++++

.. function:: copy()


    Copies a LDAP entry from one DN to another DN.

    :param string|Dn: 
    :param string|Dn: 
    :param bool: 

    :rtype: Ldap Provides a fluid interface

    :throws: Exception\LdapException 



getNode
+++++++

.. function:: getNode()


    Returns the specified DN as a Zend\Ldap\Node

    :param string|Dn: 

    :rtype: Node|null 

    :throws: Exception\LdapException 



getBaseNode
+++++++++++

.. function:: getBaseNode()


    Returns the base node as a Zend\Ldap\Node

    :rtype: Node 

    :throws: Exception\LdapException 



getRootDse
++++++++++

.. function:: getRootDse()


    Returns the RootDse

    :rtype: Node\RootDse 

    :throws: Exception\LdapException 



getSchema
+++++++++

.. function:: getSchema()


    Returns the schema

    :rtype: Node\Schema 

    :throws: Exception\LdapException 





Constants
---------

SEARCH_SCOPE_SUB
++++++++++++++++

SEARCH_SCOPE_ONE
++++++++++++++++

SEARCH_SCOPE_BASE
+++++++++++++++++

ACCTNAME_FORM_DN
++++++++++++++++

ACCTNAME_FORM_USERNAME
++++++++++++++++++++++

ACCTNAME_FORM_BACKSLASH
+++++++++++++++++++++++

ACCTNAME_FORM_PRINCIPAL
+++++++++++++++++++++++

