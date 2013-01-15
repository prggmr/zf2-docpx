.. /Db/Metadata/Object/ConstraintObject.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Metadata\\Object\\ConstraintObject
********************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($name, $tableName, [$schemaName = false])


    Constructor

    :param string $name: 
    :param string $tableName: 
    :param string $schemaName: 



setName
-------

.. function:: setName($name)


    Set name

    :param string $name: 



getName
-------

.. function:: getName()


    Get name

    :rtype: string 



setSchemaName
-------------

.. function:: setSchemaName($schemaName)


    Set schema name

    :param string $schemaName: 



getSchemaName
-------------

.. function:: getSchemaName()


    Get schema name

    :rtype: string 



getTableName
------------

.. function:: getTableName()


    Get table name

    :rtype: string 



setTableName
------------

.. function:: setTableName($tableName)


    Set table name

    :param string $tableName: 

    :rtype: ConstraintObject 



setType
-------

.. function:: setType($type)


    Set type

    :param string $type: 



getType
-------

.. function:: getType()


    Get type

    :rtype: string 



hasColumns
----------

.. function:: hasColumns()



getColumns
----------

.. function:: getColumns()


    Get Columns.

    :rtype: string[] 



setColumns
----------

.. function:: setColumns($columns)


    Set Columns.

    :param string[] $columns: 

    :rtype: ConstraintObject 



getReferencedTableSchema
------------------------

.. function:: getReferencedTableSchema()


    Get Referenced Table Schema.

    :rtype: string 



setReferencedTableSchema
------------------------

.. function:: setReferencedTableSchema($referencedTableSchema)


    Set Referenced Table Schema.

    :param string $referencedTableSchema: 

    :rtype: ConstraintObject 



getReferencedTableName
----------------------

.. function:: getReferencedTableName()


    Get Referenced Table Name.

    :rtype: string 



setReferencedTableName
----------------------

.. function:: setReferencedTableName($referencedTableName)


    Set Referenced Table Name.

    :param string $referencedTableName: 

    :rtype: ConstraintObject 



getReferencedColumns
--------------------

.. function:: getReferencedColumns()


    Get Referenced Columns.

    :rtype: string[] 



setReferencedColumns
--------------------

.. function:: setReferencedColumns($referencedColumns)


    Set Referenced Columns.

    :param string[] $referencedColumns: 

    :rtype: ConstraintObject 



getMatchOption
--------------

.. function:: getMatchOption()


    Get Match Option.

    :rtype: string 



setMatchOption
--------------

.. function:: setMatchOption($matchOption)


    Set Match Option.

    :param string $matchOption: 

    :rtype: ConstraintObject 



getUpdateRule
-------------

.. function:: getUpdateRule()


    Get Update Rule.

    :rtype: string 



setUpdateRule
-------------

.. function:: setUpdateRule($updateRule)


    Set Update Rule.

    :param string $updateRule: 

    :rtype: ConstraintObject 



getDeleteRule
-------------

.. function:: getDeleteRule()


    Get Delete Rule.

    :rtype: string 



setDeleteRule
-------------

.. function:: setDeleteRule($deleteRule)


    Set Delete Rule.

    :param string $deleteRule: 

    :rtype: ConstraintObject 



getCheckClause
--------------

.. function:: getCheckClause()


    Get Check Clause.

    :rtype: string 



setCheckClause
--------------

.. function:: setCheckClause($checkClause)


    Set Check Clause.

    :param string $checkClause: 

    :rtype: ConstraintObject 



isPrimaryKey
------------

.. function:: isPrimaryKey()


    Is primary key

    :rtype: bool 



isUnique
--------

.. function:: isUnique()


    Is unique key

    :rtype: bool 



isForeignKey
------------

.. function:: isForeignKey()


    Is foreign key

    :rtype: bool 



isCheck
-------

.. function:: isCheck()


    Is foreign key

    :rtype: bool 





