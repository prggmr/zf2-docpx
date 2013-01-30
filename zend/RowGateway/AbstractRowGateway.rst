.. Db/RowGateway/AbstractRowGateway.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Db\\RowGateway\\AbstractRowGateway
========================================

Methods
-------

initialize
++++++++++

.. function:: initialize()


    initialize()



populate
++++++++

.. function:: populate()


    Populate Data

    :param array: 
    :param bool: 

    :rtype: AbstractRowGateway 



exchangeArray
+++++++++++++

.. function:: exchangeArray()


    @param mixed $array

    :rtype: array|void 



save
++++

.. function:: save()


    Save

    :rtype: integer 



delete
++++++

.. function:: delete()


    Delete

    :rtype: int 



offsetExists
++++++++++++

.. function:: offsetExists()


    Offset Exists

    :param string: 

    :rtype: bool 



offsetGet
+++++++++

.. function:: offsetGet()


    Offset get

    :param string: 

    :rtype: mixed 



offsetSet
+++++++++

.. function:: offsetSet()


    Offset set

    :param string: 
    :param mixed: 

    :rtype: RowGateway 



offsetUnset
+++++++++++

.. function:: offsetUnset()


    Offset unset

    :param string: 

    :rtype: AbstractRowGateway 



count
+++++

.. function:: count()


    @return int



toArray
+++++++

.. function:: toArray()


    To array

    :rtype: array 



__get
+++++

.. function:: __get()


    __get

    :param string: 

    :rtype: mixed 



__set
+++++

.. function:: __set()


    __set

    :param string: 
    :param mixed: 

    :rtype: void 



__isset
+++++++

.. function:: __isset()


    __isset

    :param string: 

    :rtype: bool 



__unset
+++++++

.. function:: __unset()


    __unset

    :param string: 

    :rtype: void 



rowExistsInDatabase
+++++++++++++++++++

.. function:: rowExistsInDatabase()


    @return bool



processPrimaryKeyData
+++++++++++++++++++++

.. function:: processPrimaryKeyData()


    @throws Exception\RuntimeException



