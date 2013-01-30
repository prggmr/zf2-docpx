.. Db/Metadata/Metadata.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\Metadata\\Metadata
============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param Adapter: 



createSourceFromAdapter
-----------------------

.. function:: createSourceFromAdapter()


    Create source from adapter

    :param Adapter: 

    :rtype: Source\AbstractSource 



getTables
---------

.. function:: getTables()


    Get base tables and views

    :param string: 
    :param bool: 

    :rtype: Object\TableObject[] 



getViews
--------

.. function:: getViews()


    Get base tables and views

    :param string: 

    :rtype: Object\TableObject[] 



getTriggers
-----------

.. function:: getTriggers()


    Get triggers

    :param string: 

    :rtype: array 



getConstraints
--------------

.. function:: getConstraints()


    Get constraints

    :param string: 
    :param string: 

    :rtype: array 



getColumns
----------

.. function:: getColumns()


    Get columns

    :param string: 
    :param string: 

    :rtype: array 



getConstraintKeys
-----------------

.. function:: getConstraintKeys()


    Get constraint keys

    :param string: 
    :param string: 
    :param string: 

    :rtype: array 



getConstraint
-------------

.. function:: getConstraint()


    Get constraints

    :param string: 
    :param string: 
    :param string: 

    :rtype: Object\ConstraintObject 



getSchemas
----------

.. function:: getSchemas()


    Get schemas



getTableNames
-------------

.. function:: getTableNames()


    Get table names

    :param string: 
    :param bool: 

    :rtype: array 



getTable
--------

.. function:: getTable()


    Get table

    :param string: 
    :param string: 

    :rtype: Object\TableObject 



getViewNames
------------

.. function:: getViewNames()


    Get views names

    :param string: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getView
-------

.. function:: getView()


    Get view

    :param string: 
    :param string: 

    :rtype: \Zend\Db\Metadata\Object\TableObject 



getTriggerNames
---------------

.. function:: getTriggerNames()


    Get trigger names

    :param string: 

    :rtype: array 



getTrigger
----------

.. function:: getTrigger()


    Get trigger

    :param string: 
    :param string: 

    :rtype: \Zend\Db\Metadata\Object\TriggerObject 



getColumnNames
--------------

.. function:: getColumnNames()


    Get column names

    :param string: 
    :param string: 

    :rtype: array 



getColumn
---------

.. function:: getColumn()


    Get column

    :param string: 
    :param string: 
    :param string: 

    :rtype: \Zend\Db\Metadata\Object\ColumnObject 



