.. Authentication/Adapter/DbTable.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Authentication\\Adapter\\DbTable
======================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    __construct() - Sets configuration options

    :param DbAdapter: 
    :param string: Optional
    :param string: Optional
    :param string: Optional
    :param string: Optional

    :rtype: \Zend\Authentication\Adapter\DbTable 



setTableName
++++++++++++

.. function:: setTableName()


    setTableName() - set the table name to be used in the select query

    :param string: 

    :rtype: DbTable Provides a fluent interface



setIdentityColumn
+++++++++++++++++

.. function:: setIdentityColumn()


    setIdentityColumn() - set the column name to be used as the identity column

    :param string: 

    :rtype: DbTable Provides a fluent interface



setCredentialColumn
+++++++++++++++++++

.. function:: setCredentialColumn()


    setCredentialColumn() - set the column name to be used as the credential column

    :param string: 

    :rtype: DbTable Provides a fluent interface



setCredentialTreatment
++++++++++++++++++++++

.. function:: setCredentialTreatment()


    setCredentialTreatment() - allows the developer to pass a parametrized string that is
    used to transform or treat the input credential data.
    
    In many cases, passwords and other sensitive data are encrypted, hashed, encoded,
    obscured, or otherwise treated through some function or algorithm. By specifying a
    parametrized treatment string with this method, a developer may apply arbitrary SQL
    upon input credential data.
    
    Examples:
    
     'PASSWORD(?)'
     'MD5(?)'

    :param string: 

    :rtype: DbTable Provides a fluent interface



setAmbiguityIdentity
++++++++++++++++++++

.. function:: setAmbiguityIdentity()


    setAmbiguityIdentity() - sets a flag for usage of identical identities
    with unique credentials. It accepts integers (0, 1) or boolean (true,
    false) parameters. Default is false.

    :param int|bool: 

    :rtype: DbTable Provides a fluent interface



getAmbiguityIdentity
++++++++++++++++++++

.. function:: getAmbiguityIdentity()


    getAmbiguityIdentity() - returns TRUE for usage of multiple identical
    identities with different credentials, FALSE if not used.

    :rtype: bool 



getDbSelect
+++++++++++

.. function:: getDbSelect()


    getDbSelect() - Return the preauthentication Db Select object for userland select query modification

    :rtype: DbSelect 



getResultRowObject
++++++++++++++++++

.. function:: getResultRowObject()


    getResultRowObject() - Returns the result row as a stdClass object

    :param string|array: 
    :param string|array: 

    :rtype: stdClass|bool 



authenticate
++++++++++++

.. function:: authenticate()


    This method is called to attempt an authentication. Previous to this
    call, this adapter would have already been configured with all
    necessary information to successfully connect to a database table and
    attempt to find a record matching the provided identity.


    :rtype: AuthenticationResult 



_authenticateSetup
++++++++++++++++++

.. function:: _authenticateSetup()


    _authenticateSetup() - This method abstracts the steps involved with
    making sure that this adapter was indeed setup properly with all
    required pieces of information.


    :rtype: bool 



_authenticateCreateSelect
+++++++++++++++++++++++++

.. function:: _authenticateCreateSelect()


    _authenticateCreateSelect() - This method creates a Zend\Db\Sql\Select object that
    is completely configured to be queried against the database.

    :rtype: DbSelect 



_authenticateQuerySelect
++++++++++++++++++++++++

.. function:: _authenticateQuerySelect()


    _authenticateQuerySelect() - This method accepts a Zend\Db\Sql\Select object and
    performs a query against the database with that object.

    :param DbSelect: 

    :throws Exception\RuntimeException: when an invalid select object is encountered

    :rtype: array 



_authenticateValidateResultSet
++++++++++++++++++++++++++++++

.. function:: _authenticateValidateResultSet()


    _authenticateValidateResultSet() - This method attempts to make
    certain that only one record was returned in the resultset

    :param array: 

    :rtype: bool|\Zend\Authentication\Result 



_authenticateValidateResult
+++++++++++++++++++++++++++

.. function:: _authenticateValidateResult()


    _authenticateValidateResult() - This method attempts to validate that
    the record in the resultset is indeed a record that matched the
    identity provided to this adapter.

    :param array: 

    :rtype: AuthenticationResult 



_authenticateCreateAuthResult
+++++++++++++++++++++++++++++

.. function:: _authenticateCreateAuthResult()


    Creates a Zend\Authentication\Result object from the information that
    has been collected during the authenticate() attempt.

    :rtype: AuthenticationResult 



