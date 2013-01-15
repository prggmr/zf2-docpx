.. /Db/TableGateway/Feature/MasterSlaveFeature.php generated using docpx on 01/15/13 05:29pm


Zend\\Db\\TableGateway\\Feature\\MasterSlaveFeature
***************************************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($slaveAdapter)


    Constructor

    :param Adapter $slaveAdapter: 



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





