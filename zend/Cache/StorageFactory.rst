.. Cache/StorageFactory.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\StorageFactory
===========================

Methods
-------

factory
+++++++

.. function:: factory()


    The storage factory
    This can instantiate storage adapters and plugins.

    :param array|Traversable: 

    :rtype: Storage\StorageInterface 

    :throws: Exception\InvalidArgumentException 



adapterFactory
++++++++++++++

.. function:: adapterFactory()


    Instantiate a storage adapter

    :param string|Storage\StorageInterface: 
    :param array|Traversable|Storage\Adapter\AdapterOptions: 

    :rtype: Storage\StorageInterface 

    :throws: Exception\RuntimeException 



getAdapterPluginManager
+++++++++++++++++++++++

.. function:: getAdapterPluginManager()


    Get the adapter plugin manager

    :rtype: Storage\AdapterPluginManager 



setAdapterPluginManager
+++++++++++++++++++++++

.. function:: setAdapterPluginManager()


    Change the adapter plugin manager

    :param Storage\AdapterPluginManager: 

    :rtype: void 



resetAdapterPluginManager
+++++++++++++++++++++++++

.. function:: resetAdapterPluginManager()


    Resets the internal adapter plugin manager

    :rtype: void 



pluginFactory
+++++++++++++

.. function:: pluginFactory()


    Instantiate a storage plugin

    :param string|Storage\Plugin\PluginInterface: 
    :param array|Traversable|Storage\Plugin\PluginOptions: 

    :rtype: Storage\Plugin\PluginInterface 

    :throws: Exception\RuntimeException 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get the plugin manager

    :rtype: Storage\PluginManager 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Change the plugin manager

    :param Storage\PluginManager: 

    :rtype: void 



resetPluginManager
++++++++++++++++++

.. function:: resetPluginManager()


    Resets the internal plugin manager

    :rtype: void 



