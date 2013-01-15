.. /Db/Metadata/Source/AbstractSource.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Metadata\\Source\\AbstractSource
******************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($adapter)


    Constructor

    :param Adapter $adapter: 



getSchemas
----------

.. function:: getSchemas()


    Get schemas



getTableNames
-------------

.. function:: getTableNames([$schema = false, [$includeViews = false]])


    Get table names

    :param string $schema: 
    :param bool $includeViews: 

    :rtype: string[] 



getTables
---------

.. function:: getTables([$schema = false, [$includeViews = false]])


    Get tables

    :param string $schema: 
    :param bool $includeViews: 

    :rtype: Object\TableObject[] 



getTable
--------

.. function:: getTable($tableName, [$schema = false])


    Get table

    :param string $tableName: 
    :param string $schema: 

    :rtype: Object\TableObject 



getViewNames
------------

.. function:: getViewNames([$schema = false])


    Get view names

    :param string $schema: 

    :rtype: array 



getViews
--------

.. function:: getViews([$schema = false])


    Get views

    :param string $schema: 

    :rtype: array 



getView
-------

.. function:: getView($viewName, [$schema = false])


    Get view

    :param string $viewName: 
    :param string $schema: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getColumnNames
--------------

.. function:: getColumnNames($table, [$schema = false])


    Gt column names

    :param string $table: 
    :param string $schema: 

    :rtype: array 



getColumns
----------

.. function:: getColumns($table, [$schema = false])


    Get columns

    :param string $table: 
    :param string $schema: 

    :rtype: array 



getColumn
---------

.. function:: getColumn($columnName, $table, [$schema = false])


    Get column

    :param string $columnName: 
    :param string $table: 
    :param string $schema: 

    :rtype: Object\ColumnObject 



getConstraints
--------------

.. function:: getConstraints($table, [$schema = false])


    Get constraints

    :param string $table: 
    :param string $schema: 

    :rtype: array 



getConstraint
-------------

.. function:: getConstraint($constraintName, $table, [$schema = false])


    Get constraint

    :param string $constraintName: 
    :param string $table: 
    :param string $schema: 

    :rtype: Object\ConstraintObject 



getConstraintKeys
-----------------

.. function:: getConstraintKeys($constraint, $table, [$schema = false])


    Get constraint keys

    :param string $constraint: 
    :param string $table: 
    :param string $schema: 

    :rtype: array 



getTriggerNames
---------------

.. function:: getTriggerNames([$schema = false])


    Get trigger names

    :param string $schema: 

    :rtype: array 



getTriggers
-----------

.. function:: getTriggers([$schema = false])


    Get triggers

    :param string $schema: 

    :rtype: array 



getTrigger
----------

.. function:: getTrigger($triggerName, [$schema = false])


    Get trigger

    :param string $triggerName: 
    :param string $schema: 

    :rtype: Object\TriggerObject 



prepareDataHierarchy
--------------------

.. function:: prepareDataHierarchy($type)


    Prepare data hierarchy

    :param string $type: 
    :param string $key: ...



loadSchemaData
--------------

.. function:: loadSchemaData()



loadTableNameData
-----------------

.. function:: loadTableNameData($schema)



loadColumnData
--------------

.. function:: loadColumnData($table, $schema)



loadConstraintData
------------------

.. function:: loadConstraintData($table, $schema)



loadTriggerData
---------------

.. function:: loadTriggerData($schema)





Constants
---------

DEFAULT_SCHEMA
++++++++++++++

