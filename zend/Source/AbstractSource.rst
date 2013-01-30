.. Db/Metadata/Source/AbstractSource.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Metadata\\Source\\AbstractSource
==========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Adapter: 



getSchemas
++++++++++

.. function:: getSchemas()


    Get schemas



getTableNames
+++++++++++++

.. function:: getTableNames()


    Get table names

    :param string: 
    :param bool: 

    :rtype: string[] 



getTables
+++++++++

.. function:: getTables()


    Get tables

    :param string: 
    :param bool: 

    :rtype: Object\TableObject[] 



getTable
++++++++

.. function:: getTable()


    Get table

    :param string: 
    :param string: 

    :rtype: Object\TableObject 



getViewNames
++++++++++++

.. function:: getViewNames()


    Get view names

    :param string: 

    :rtype: array 



getViews
++++++++

.. function:: getViews()


    Get views

    :param string: 

    :rtype: array 



getView
+++++++

.. function:: getView()


    Get view

    :param string: 
    :param string: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getColumnNames
++++++++++++++

.. function:: getColumnNames()


    Gt column names

    :param string: 
    :param string: 

    :rtype: array 



getColumns
++++++++++

.. function:: getColumns()


    Get columns

    :param string: 
    :param string: 

    :rtype: array 



getColumn
+++++++++

.. function:: getColumn()


    Get column

    :param string: 
    :param string: 
    :param string: 

    :rtype: Object\ColumnObject 



getConstraints
++++++++++++++

.. function:: getConstraints()


    Get constraints

    :param string: 
    :param string: 

    :rtype: array 



getConstraint
+++++++++++++

.. function:: getConstraint()


    Get constraint

    :param string: 
    :param string: 
    :param string: 

    :rtype: Object\ConstraintObject 



getConstraintKeys
+++++++++++++++++

.. function:: getConstraintKeys()


    Get constraint keys

    :param string: 
    :param string: 
    :param string: 

    :rtype: array 



getTriggerNames
+++++++++++++++

.. function:: getTriggerNames()


    Get trigger names

    :param string: 

    :rtype: array 



getTriggers
+++++++++++

.. function:: getTriggers()


    Get triggers

    :param string: 

    :rtype: array 



getTrigger
++++++++++

.. function:: getTrigger()


    Get trigger

    :param string: 
    :param string: 

    :rtype: Object\TriggerObject 



prepareDataHierarchy
++++++++++++++++++++

.. function:: prepareDataHierarchy()


    Prepare data hierarchy

    :param string: 
    :param string: ...



loadSchemaData
++++++++++++++

.. function:: loadSchemaData()



loadTableNameData
+++++++++++++++++

.. function:: loadTableNameData()



loadColumnData
++++++++++++++

.. function:: loadColumnData()



loadConstraintData
++++++++++++++++++

.. function:: loadConstraintData()



loadTriggerData
+++++++++++++++

.. function:: loadTriggerData()





Constants
---------

DEFAULT_SCHEMA
++++++++++++++

