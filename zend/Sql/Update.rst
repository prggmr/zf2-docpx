.. Db/Sql/Update.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\Sql\\Update
=====================

@property Where $where

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|string|TableIdentifier: 



table
+++++

.. function:: table()


    Specify table for statement

    :param string|TableIdentifier: 

    :rtype: Update 



set
+++

.. function:: set()


    Set key/value pairs to update

    :param array: Associative array of key values
    :param string: One of the VALUES_* constants

    :throws Exception\InvalidArgumentException: 

    :rtype: Update 



where
+++++

.. function:: where()


    Create where clause

    :param Where|\Closure|string|array: 
    :param string: One of the OP_* constants from Predicate\PredicateSet

    :throws Exception\InvalidArgumentException: 

    :rtype: Select 



getRawState
+++++++++++

.. function:: getRawState()



prepareStatement
++++++++++++++++

.. function:: prepareStatement()


    Prepare statement

    :param AdapterInterface: 
    :param StatementContainerInterface: 

    :rtype: void 



getSqlString
++++++++++++

.. function:: getSqlString()


    Get SQL string for statement

    :param null|PlatformInterface: If null, defaults to Sql92

    :rtype: string 



__get
+++++

.. function:: __get()


    Variable overloading
    
    Proxies to "where" only

    :param string: 

    :rtype: mixed 



__clone
+++++++

.. function:: __clone()


    __clone
    
    Resets the where object each time the Update is cloned.

    :rtype: void 





Constants
---------

SPECIFICATION_UPDATE
++++++++++++++++++++

SPECIFICATION_WHERE
+++++++++++++++++++

VALUES_MERGE
++++++++++++

VALUES_SET
++++++++++

