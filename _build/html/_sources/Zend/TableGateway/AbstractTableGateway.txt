.. /Db/TableGateway/AbstractTableGateway.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\TableGateway\\AbstractTableGateway
********************************************


@category   Zend



Methods
=======

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

    :rtype: Adapter 



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

.. function:: select([$where = false])


    Select

    :param Where|\Closure|string|array $where: 

    :rtype: ResultSet 



selectWith
----------

.. function:: selectWith($select)


    @param Select $select

    :rtype: null|ResultSetInterface 

    :throws: \RuntimeException 



executeSelect
-------------

.. function:: executeSelect($select)


    @param Select $select

    :rtype: ResultSet 

    :throws: \RuntimeException 



insert
------

.. function:: insert($set)


    Insert

    :param array $set: 

    :rtype: int 



insertWith
----------

.. function:: insertWith($insert)


    @param Insert $insert

    :rtype: mixed 



executeInsert
-------------

.. function:: executeInsert($insert)


    @todo add $columns support

    :param Insert $insert: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



update
------

.. function:: update($set, [$where = false])


    Update

    :param array $set: 
    :param string|array|closure $where: 

    :rtype: int 



updateWith
----------

.. function:: updateWith($update)


    @param \Zend\Db\Sql\Update $update

    :rtype: mixed 



executeUpdate
-------------

.. function:: executeUpdate($update)


    @todo add $columns support

    :param Update $update: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



delete
------

.. function:: delete($where)


    Delete

    :param Where|\Closure|string|array $where: 

    :rtype: int 



deleteWith
----------

.. function:: deleteWith($delete)


    @param Delete $delete

    :rtype: mixed 



executeDelete
-------------

.. function:: executeDelete($delete)


    @todo add $columns support

    :param Delete $delete: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



getLastInsertValue
------------------

.. function:: getLastInsertValue()


    Get last insert value

    :rtype: integer 



__get
-----

.. function:: __get($property)


    __get

    :param string $property: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



__set
-----

.. function:: __set($property, $value)


    @param string $property

    :param mixed $value: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



__call
------

.. function:: __call($method, $arguments)


    @param $method

    :param $arguments: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



__clone
-------

.. function:: __clone()


    __clone





