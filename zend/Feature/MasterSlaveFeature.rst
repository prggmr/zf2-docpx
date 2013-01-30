.. Db/TableGateway/Feature/MasterSlaveFeature.php generated using docpx on 01/30/13 03:32am


Zend\\Db\\TableGateway\\Feature\\MasterSlaveFeature
===================================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param Adapter: 



getSlaveAdapter
---------------

.. function:: getSlaveAdapter()



getSlaveSql
-----------

.. function:: getSlaveSql()


    @return Sql



postInitialize
--------------

.. function:: postInitialize()


    after initialization, retrieve the original adapter as "master"



preSelect
---------

.. function:: preSelect()


    preSelect()
    Replace adapter with slave temporarily



postSelect
----------

.. function:: postSelect()


    postSelect()
    Ensure to return to the master adapter



