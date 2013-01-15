.. /Authentication/Adapter/DbTable.php generated using docpx on 01/15/13 05:29pm


Zend\\Authentication\\Adapter\\DbTable
**************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($zendDb, [$tableName = false, [$identityColumn = false, [$credentialColumn = false, [$credentialTreatment = false]]]])


    __construct() - Sets configuration options

    :param DbAdapter $zendDb: 
    :param string $tableName: Optional
    :param string $identityColumn: Optional
    :param string $credentialColumn: Optional
    :param string $credentialTreatment: Optional

    :rtype: \Zend\Authentication\Adapter\DbTable 



setTableName
------------

.. function:: setTableName($tableName)


    setTableName() - set the table name to be used in the select query

    :param string $tableName: 

    :rtype: DbTable Provides a fluent interface



setIdentityColumn
-----------------

.. function:: setIdentityColumn($identityColumn)


    setIdentityColumn() - set the column name to be used as the identity column

    :param string $identityColumn: 

    :rtype: DbTable Provides a fluent interface



setCredentialColumn
-------------------

.. function:: setCredentialColumn($credentialColumn)


    setCredentialColumn() - set the column name to be used as the credential column

    :param string $credentialColumn: 

    :rtype: DbTable Provides a fluent interface



setCredentialTreatment
----------------------

.. function:: setCredentialTreatment($treatment)


    setCredentialTreatment() - allows the developer to pass a parametrized string that is
    used to transform or treat the input credential data.
    
    In many cases, passwords and other sensitive data are encrypted, hashed, encoded,
    obscured, or otherwise treated through some function or algorithm. By specifying a
    parametrized treatment string with this method, a developer may apply arbitrary SQL
    upon input credential data.
    
    Examples:
    
     'PASSWORD(?)'
     'MD5(?)'

    :param string $treatment: 

    :rtype: DbTable Provides a fluent interface



setIdentity
-----------

.. function:: setIdentity($value)


    setIdentity() - set the value to be used as the identity

    :param string $value: 

    :rtype: DbTable Provides a fluent interface



setCredential
-------------

.. function:: setCredential($credential)


    setCredential() - set the credential value to be used, optionally can specify a treatment
    to be used, should be supplied in parametrized form, such as 'MD5(?)' or 'PASSWORD(?)'

    :param string $credential: 

    :rtype: DbTable Provides a fluent interface



setAmbiguityIdentity
--------------------

.. function:: setAmbiguityIdentity($flag)


    setAmbiguityIdentity() - sets a flag for usage of identical identities
    with unique credentials. It accepts integers (0, 1) or boolean (true,
    false) parameters. Default is false.

    :param int|bool $flag: 

    :rtype: DbTable Provides a fluent interface



getAmbiguityIdentity
--------------------

.. function:: getAmbiguityIdentity()


    getAmbiguityIdentity() - returns TRUE for usage of multiple identical
    identities with different credentials, FALSE if not used.

    :rtype: bool 



getDbSelect
-----------

.. function:: getDbSelect()


    getDbSelect() - Return the preauthentication Db Select object for userland select query modification

    :rtype: DbSelect 



getResultRowObject
------------------

.. function:: getResultRowObject([$returnColumns = false, [$omitColumns = false]])


    getResultRowObject() - Returns the result row as a stdClass object

    :param string|array $returnColumns: 
    :param string|array $omitColumns: 

    :rtype: stdClass|bool 



authenticate
------------

.. function:: authenticate()


    This method is called to attempt an authentication. Previous to this
    call, this adapter would have already been configured with all
    necessary information to successfully connect to a database table and
    attempt to find a record matching the provided identity.


    :rtype: AuthenticationResult 



_authenticateSetup
------------------

.. function:: _authenticateSetup()


    _authenticateSetup() - This method abstracts the steps involved with
    making sure that this adapter was indeed setup properly with all
    required pieces of information.


    :rtype: bool 



_authenticateCreateSelect
-------------------------

.. function:: _authenticateCreateSelect()


    _authenticateCreateSelect() - This method creates a Zend\Db\Sql\Select object that
    is completely configured to be queried against the database.

    :rtype: DbSelect 



_authenticateQuerySelect
------------------------

.. function:: _authenticateQuerySelect($dbSelect)


    _authenticateQuerySelect() - This method accepts a Zend\Db\Sql\Select object and
    performs a query against the database with that object.

    :param DbSelect $dbSelect: 

    :throws Exception\RuntimeException: when an invalid select object is encountered

    :rtype: array 



_authenticateValidateResultSet
------------------------------

.. function:: _authenticateValidateResultSet($resultIdentities)


    _authenticateValidateResultSet() - This method attempts to make
    certain that only one record was returned in the resultset

    :param array $resultIdentities: 

    :rtype: bool|\Zend\Authentication\Result 



_authenticateValidateResult
---------------------------

.. function:: _authenticateValidateResult($resultIdentity)


    _authenticateValidateResult() - This method attempts to validate that
    the record in the resultset is indeed a record that matched the
    identity provided to this adapter.

    :param array $resultIdentity: 

    :rtype: AuthenticationResult 



_authenticateCreateAuthResult
-----------------------------

.. function:: _authenticateCreateAuthResult()


    Creates a Zend\Authentication\Result object from the information that
    has been collected during the authenticate() attempt.

    :rtype: AuthenticationResult 





