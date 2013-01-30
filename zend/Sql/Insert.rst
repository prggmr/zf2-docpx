.. Db/Sql/Insert.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Db\\Sql\\Insert
=====================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|string|TableIdentifier: 



into
++++

.. function:: into()


    Crete INTO clause

    :param string|TableIdentifier: 

    :rtype: Insert 



columns
+++++++

.. function:: columns()


    Specify columns

    :param array: 

    :rtype: Insert 



values
++++++

.. function:: values()


    Specify values to insert

    :param array: 
    :param string: one of VALUES_MERGE or VALUES_SET; defaults to VALUES_SET

    :throws Exception\InvalidArgumentException: 

    :rtype: Insert 



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


    Get SQL string for this statement

    :param null|PlatformInterface: Defaults to Sql92 if none provided

    :rtype: string 



__set
+++++

.. function:: __set()


    Overloading: variable setting
    
    Proxies to values, using VALUES_MERGE strategy

    :param string: 
    :param mixed: 

    :rtype: Insert 



__unset
+++++++

.. function:: __unset()


    Overloading: variable unset
    
    Proxies to values and columns

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



__isset
+++++++

.. function:: __isset()


    Overloading: variable isset
    
    Proxies to columns; does a column of that name exist?

    :param string: 

    :rtype: bool 



__get
+++++

.. function:: __get()


    Overloading: variable retrieval
    
    Retrieves value by column name

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 





Constants
---------

SPECIFICATION_INSERT
++++++++++++++++++++

VALUES_MERGE
++++++++++++

VALUES_SET
++++++++++

