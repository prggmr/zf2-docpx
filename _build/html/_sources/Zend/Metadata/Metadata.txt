.. /Db/Metadata/Metadata.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\Metadata\\Metadata
****************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($adapter)


    Constructor

    :param Adapter $adapter: 



createSourceFromAdapter
-----------------------

.. function:: createSourceFromAdapter($adapter)


    Create source from adapter

    :param Adapter $adapter: 

    :rtype: Source\AbstractSource 



getTables
---------

.. function:: getTables([$schema = false, [$includeViews = false]])


    Get base tables and views

    :param string $schema: 
    :param bool $includeViews: 

    :rtype: Object\TableObject[] 



getViews
--------

.. function:: getViews([$schema = false])


    Get base tables and views

    :param string $schema: 

    :rtype: Object\TableObject[] 



getTriggers
-----------

.. function:: getTriggers([$schema = false])


    Get triggers

    :param string $schema: 

    :rtype: array 



getConstraints
--------------

.. function:: getConstraints($table, [$schema = false])


    Get constraints

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



getConstraintKeys
-----------------

.. function:: getConstraintKeys($constraint, $table, [$schema = false])


    Get constraint keys

    :param string $constraint: 
    :param string $table: 
    :param string $schema: 

    :rtype: array 



getConstraint
-------------

.. function:: getConstraint($constraintName, $table, [$schema = false])


    Get constraints

    :param string $constraintName: 
    :param string $table: 
    :param string $schema: 

    :rtype: Object\ConstraintObject 



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

    :rtype: array 



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


    Get views names

    :param string $schema: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getView
-------

.. function:: getView($viewName, [$schema = false])


    Get view

    :param string $viewName: 
    :param string $schema: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getTriggerNames
---------------

.. function:: getTriggerNames([$schema = false])


    Get trigger names

    :param string $schema: 

    :rtype: array 



getTrigger
----------

.. function:: getTrigger($triggerName, [$schema = false])


    Get trigger

    :param string $triggerName: 
    :param string $schema: 

    :rtype: \Zend\Db\Metadata\Object\TriggerObject 



getColumnNames
--------------

.. function:: getColumnNames($table, [$schema = false])


    Get column names

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

    :rtype: \Zend\Db\Metadata\Object\ColumnObject 





