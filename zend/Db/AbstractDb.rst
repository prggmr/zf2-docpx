.. Validator/Db/AbstractDb.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\Db\\AbstractDb
===============================

Class for Database record validation

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Provides basic configuration for use with Zend\Validator\Db Validators
    Setting $exclude allows a single record to be excluded from matching.
    Exclude can either be a String containing a where clause, or an array with `field` and `value` keys
    to define the where clause added to the sql.
    A database adapter may optionally be supplied to avoid using the registered default adapter.
    
    The following option keys are supported:
    'table'   => The database table to validate against
    'schema'  => The schema keys
    'field'   => The field to check for a match
    'exclude' => An optional where clause or field/value pair to exclude from the query
    'adapter' => An optional database adapter to use

    :param array|Traversable|DbSelect: Options to use for this validator

    :throws \Zend\Validator\Exception\InvalidArgumentException: 



getAdapter
----------

.. function:: getAdapter()


    Returns the set adapter


    :rtype: DbAdapter 



setAdapter
----------

.. function:: setAdapter()


    Sets a new database adapter

    :param DbAdapter: 

    :rtype: self Provides a fluent interface



getExclude
----------

.. function:: getExclude()


    Returns the set exclude clause

    :rtype: string|array 



setExclude
----------

.. function:: setExclude()


    Sets a new exclude clause

    :param string|array: 

    :rtype: self Provides a fluent interface



getField
--------

.. function:: getField()


    Returns the set field

    :rtype: string|array 



setField
--------

.. function:: setField()


    Sets a new field

    :param string: 

    :rtype: AbstractDb 



getTable
--------

.. function:: getTable()


    Returns the set table

    :rtype: string 



setTable
--------

.. function:: setTable()


    Sets a new table

    :param string: 

    :rtype: self Provides a fluent interface



getSchema
---------

.. function:: getSchema()


    Returns the set schema

    :rtype: string 



setSchema
---------

.. function:: setSchema()


    Sets a new schema

    :param string: 

    :rtype: self Provides a fluent interface



setSelect
---------

.. function:: setSelect()


    Sets the select object to be used by the validator

    :param DbSelect: 

    :rtype: self Provides a fluent interface



getSelect
---------

.. function:: getSelect()


    Gets the select object to be used by the validator.
    If no select object was supplied to the constructor,
    then it will auto-generate one from the given table,
    schema, field, and adapter options.

    :rtype: DbSelect The Select object which will be used



query
-----

.. function:: query()


    Run query and returns matches, or null if no matches are found.

    :param string: 

    :rtype: array when matches are found.





Constants
+++++++++

ERROR_NO_RECORD_FOUND
=====================

Error constants

ERROR_RECORD_FOUND
==================

