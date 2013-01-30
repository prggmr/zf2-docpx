.. Db/TableGateway/AbstractTableGateway.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\TableGateway\\AbstractTableGateway
============================================

@property AdapterInterface $adapter

Methods
+++++++

isInitialized
-------------

.. function:: isInitialized()


    @return bool



initialize
----------

.. function:: initialize()


    Initialize


    :rtype: null 



getTable
--------

.. function:: getTable()


    Get table name

    :rtype: string 



getAdapter
----------

.. function:: getAdapter()


    Get adapter

    :rtype: AdapterInterface 



getColumns
----------

.. function:: getColumns()


    @return array



getFeatureSet
-------------

.. function:: getFeatureSet()


    @return Feature\FeatureSet



getResultSetPrototype
---------------------

.. function:: getResultSetPrototype()


    Get select result prototype

    :rtype: ResultSet 



getSql
------

.. function:: getSql()


    @return Sql



select
------

.. function:: select()


    Select

    :param Where|\Closure|string|array: 

    :rtype: ResultSet 



selectWith
----------

.. function:: selectWith()


    @param Select $select

    :rtype: null|ResultSetInterface 

    :throws: \RuntimeException 



executeSelect
-------------

.. function:: executeSelect()


    @param Select $select

    :rtype: ResultSet 

    :throws: \RuntimeException 



insert
------

.. function:: insert()


    Insert

    :param array: 

    :rtype: int 



insertWith
----------

.. function:: insertWith()


    @param Insert $insert

    :rtype: mixed 



executeInsert
-------------

.. function:: executeInsert()


    @todo add $columns support

    :param Insert: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



update
------

.. function:: update()


    Update

    :param array: 
    :param string|array|closure: 

    :rtype: int 



updateWith
----------

.. function:: updateWith()


    @param \Zend\Db\Sql\Update $update

    :rtype: mixed 



executeUpdate
-------------

.. function:: executeUpdate()


    @todo add $columns support

    :param Update: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



delete
------

.. function:: delete()


    Delete

    :param Where|\Closure|string|array: 

    :rtype: int 



deleteWith
----------

.. function:: deleteWith()


    @param Delete $delete

    :rtype: mixed 



executeDelete
-------------

.. function:: executeDelete()


    @todo add $columns support

    :param Delete: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



getLastInsertValue
------------------

.. function:: getLastInsertValue()


    Get last insert value

    :rtype: integer 



__get
-----

.. function:: __get()


    __get

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



__set
-----

.. function:: __set()


    @param string $property

    :param mixed: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



__call
------

.. function:: __call()


    @param $method

    :param $arguments: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



__clone
-------

.. function:: __clone()


    __clone



