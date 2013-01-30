.. Serializer/Serializer.php generated using docpx on 01/30/13 03:32am


Zend\\Serializer\\Serializer
============================

Methods
+++++++

factory
-------

.. function:: factory()


    Create a serializer adapter instance.

    :param string|Adapter: Name of the adapter class
    :param array: $adapterOptions Serializer options

    :rtype: Adapter 



setAdapterPluginManager
-----------------------

.. function:: setAdapterPluginManager()


    Change the adapter plugin manager

    :param AdapterPluginManager: 

    :rtype: void 



getAdapterPluginManager
-----------------------

.. function:: getAdapterPluginManager()


    Get the adapter plugin manager

    :rtype: AdapterPluginManager 



resetAdapterPluginManager
-------------------------

.. function:: resetAdapterPluginManager()


    Resets the internal adapter plugin manager

    :rtype: AdapterPluginManager 



setDefaultAdapter
-----------------

.. function:: setDefaultAdapter()


    Change the default adapter.

    :param string|Adapter: 
    :param array|\Traversable|null: 



getDefaultAdapter
-----------------

.. function:: getDefaultAdapter()


    Get the default adapter.

    :rtype: Adapter 



serialize
---------

.. function:: serialize()


    Generates a storable representation of a value using the default adapter.
    Optionally different adapter could be provided as second argument

    :param mixed: 
    :param string|Adapter: 
    :param array|\Traversable|null: Adapter constructor options
                                                only used to create adapter instance

    :rtype: string 



unserialize
-----------

.. function:: unserialize()


    Creates a PHP value from a stored representation using the default adapter.
    Optionally different adapter could be provided as second argument

    :param string: 
    :param string|Adapter: 
    :param array|\Traversable|null: Adapter constructor options
                                                only used to create adapter instance

    :rtype: mixed 



