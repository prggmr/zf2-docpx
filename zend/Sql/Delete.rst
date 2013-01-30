.. Db/Sql/Delete.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Sql\\Delete
=====================

@property Where $where

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|string|TableIdentifier: 



from
++++

.. function:: from()


    Create from statement

    :param string|TableIdentifier: 

    :rtype: Delete 



getRawState
+++++++++++

.. function:: getRawState()



where
+++++

.. function:: where()


    Create where clause

    :param Where|\Closure|string|array: 
    :param string: One of the OP_* constants from Predicate\PredicateSet

    :rtype: Delete 



prepareStatement
++++++++++++++++

.. function:: prepareStatement()


    Prepare the delete statement

    :param AdapterInterface: 
    :param StatementContainerInterface: 

    :rtype: void 



getSqlString
++++++++++++

.. function:: getSqlString()


    Get the SQL string, based on the platform
    
    Platform defaults to Sql92 if none provided

    :param null|PlatformInterface: 

    :rtype: string 



__get
+++++

.. function:: __get()


    Property overloading
    
    Overloads "where" only.

    :param string: 

    :rtype: mixed 





Constants
---------

SPECIFICATION_DELETE
++++++++++++++++++++

SPECIFICATION_WHERE
+++++++++++++++++++

