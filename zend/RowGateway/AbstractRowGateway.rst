.. /Db/RowGateway/AbstractRowGateway.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\RowGateway\\AbstractRowGateway
****************************************


@category   Zend



Methods
=======

initialize
----------

.. function:: initialize()


    initialize()



populate
--------

.. function:: populate($rowData, [$rowExistsInDatabase = false])


    Populate Data

    :param array $rowData: 
    :param bool $rowExistsInDatabase: 

    :rtype: AbstractRowGateway 



exchangeArray
-------------

.. function:: exchangeArray($array)


    @param mixed $array

    :rtype: array|void 



save
----

.. function:: save()


    Save

    :rtype: integer 



delete
------

.. function:: delete()


    Delete

    :rtype: int 



offsetExists
------------

.. function:: offsetExists($offset)


    Offset Exists

    :param string $offset: 

    :rtype: bool 



offsetGet
---------

.. function:: offsetGet($offset)


    Offset get

    :param string $offset: 

    :rtype: mixed 



offsetSet
---------

.. function:: offsetSet($offset, $value)


    Offset set

    :param string $offset: 
    :param mixed $value: 

    :rtype: RowGateway 



offsetUnset
-----------

.. function:: offsetUnset($offset)


    Offset unset

    :param string $offset: 

    :rtype: AbstractRowGateway 



count
-----

.. function:: count()


    @return int



toArray
-------

.. function:: toArray()


    To array

    :rtype: array 



__get
-----

.. function:: __get($name)


    __get

    :param string $name: 

    :rtype: mixed 



__set
-----

.. function:: __set($name, $value)


    __set

    :param string $name: 
    :param mixed $value: 

    :rtype: void 



__isset
-------

.. function:: __isset($name)


    __isset

    :param string $name: 

    :rtype: bool 



__unset
-------

.. function:: __unset($name)


    __unset

    :param string $name: 

    :rtype: void 



rowExistsInDatabase
-------------------

.. function:: rowExistsInDatabase()


    @return bool



processPrimaryKeyData
---------------------

.. function:: processPrimaryKeyData()


    @throws Exception\RuntimeException





