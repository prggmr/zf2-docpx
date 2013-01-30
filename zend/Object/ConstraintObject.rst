.. Db/Metadata/Object/ConstraintObject.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Metadata\\Object\\ConstraintObject
============================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string: 
    :param string: 
    :param string: 



setName
+++++++

.. function:: setName()


    Set name

    :param string: 



getName
+++++++

.. function:: getName()


    Get name

    :rtype: string 



setSchemaName
+++++++++++++

.. function:: setSchemaName()


    Set schema name

    :param string: 



getSchemaName
+++++++++++++

.. function:: getSchemaName()


    Get schema name

    :rtype: string 



getTableName
++++++++++++

.. function:: getTableName()


    Get table name

    :rtype: string 



setTableName
++++++++++++

.. function:: setTableName()


    Set table name

    :param string: 

    :rtype: ConstraintObject 



setType
+++++++

.. function:: setType()


    Set type

    :param string: 



getType
+++++++

.. function:: getType()


    Get type

    :rtype: string 



hasColumns
++++++++++

.. function:: hasColumns()



getColumns
++++++++++

.. function:: getColumns()


    Get Columns.

    :rtype: string[] 



setColumns
++++++++++

.. function:: setColumns()


    Set Columns.

    :param string[]: 

    :rtype: ConstraintObject 



getReferencedTableSchema
++++++++++++++++++++++++

.. function:: getReferencedTableSchema()


    Get Referenced Table Schema.

    :rtype: string 



setReferencedTableSchema
++++++++++++++++++++++++

.. function:: setReferencedTableSchema()


    Set Referenced Table Schema.

    :param string: 

    :rtype: ConstraintObject 



getReferencedTableName
++++++++++++++++++++++

.. function:: getReferencedTableName()


    Get Referenced Table Name.

    :rtype: string 



setReferencedTableName
++++++++++++++++++++++

.. function:: setReferencedTableName()


    Set Referenced Table Name.

    :param string: 

    :rtype: ConstraintObject 



getReferencedColumns
++++++++++++++++++++

.. function:: getReferencedColumns()


    Get Referenced Columns.

    :rtype: string[] 



setReferencedColumns
++++++++++++++++++++

.. function:: setReferencedColumns()


    Set Referenced Columns.

    :param string[]: 

    :rtype: ConstraintObject 



getMatchOption
++++++++++++++

.. function:: getMatchOption()


    Get Match Option.

    :rtype: string 



setMatchOption
++++++++++++++

.. function:: setMatchOption()


    Set Match Option.

    :param string: 

    :rtype: ConstraintObject 



getUpdateRule
+++++++++++++

.. function:: getUpdateRule()


    Get Update Rule.

    :rtype: string 



setUpdateRule
+++++++++++++

.. function:: setUpdateRule()


    Set Update Rule.

    :param string: 

    :rtype: ConstraintObject 



getDeleteRule
+++++++++++++

.. function:: getDeleteRule()


    Get Delete Rule.

    :rtype: string 



setDeleteRule
+++++++++++++

.. function:: setDeleteRule()


    Set Delete Rule.

    :param string: 

    :rtype: ConstraintObject 



getCheckClause
++++++++++++++

.. function:: getCheckClause()


    Get Check Clause.

    :rtype: string 



setCheckClause
++++++++++++++

.. function:: setCheckClause()


    Set Check Clause.

    :param string: 

    :rtype: ConstraintObject 



isPrimaryKey
++++++++++++

.. function:: isPrimaryKey()


    Is primary key

    :rtype: bool 



isUnique
++++++++

.. function:: isUnique()


    Is unique key

    :rtype: bool 



isForeignKey
++++++++++++

.. function:: isForeignKey()


    Is foreign key

    :rtype: bool 



isCheck
+++++++

.. function:: isCheck()


    Is foreign key

    :rtype: bool 



