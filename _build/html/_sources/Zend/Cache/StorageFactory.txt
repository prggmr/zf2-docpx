.. /Cache/StorageFactory.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\StorageFactory
***************************


@category   Zend



Methods
=======

factory
-------

.. function:: factory($cfg)


    The storage factory
    This can instantiate storage adapters and plugins.

    :param array|Traversable $cfg: 

    :rtype: Storage\StorageInterface 

    :throws: Exception\InvalidArgumentException 



adapterFactory
--------------

.. function:: adapterFactory($adapterName, [$options = false])


    Instantiate a storage adapter

    :param string|Storage\StorageInterface $adapterName: 
    :param array|Traversable|Storage\Adapter\AdapterOptions $options: 

    :rtype: Storage\StorageInterface 

    :throws: Exception\RuntimeException 



getAdapterPluginManager
-----------------------

.. function:: getAdapterPluginManager()


    Get the adapter plugin manager

    :rtype: Storage\AdapterPluginManager 



setAdapterPluginManager
-----------------------

.. function:: setAdapterPluginManager($adapters)


    Change the adapter plugin manager

    :param Storage\AdapterPluginManager $adapters: 

    :rtype: void 



resetAdapterPluginManager
-------------------------

.. function:: resetAdapterPluginManager()


    Resets the internal adapter plugin manager

    :rtype: void 



pluginFactory
-------------

.. function:: pluginFactory($pluginName, [$options = false])


    Instantiate a storage plugin

    :param string|Storage\Plugin\PluginInterface $pluginName: 
    :param array|Traversable|Storage\Plugin\PluginOptions $options: 

    :rtype: Storage\Plugin\PluginInterface 

    :throws: Exception\RuntimeException 



getPluginManager
----------------

.. function:: getPluginManager()


    Get the plugin manager

    :rtype: Storage\PluginManager 



setPluginManager
----------------

.. function:: setPluginManager($plugins)


    Change the plugin manager

    :param Storage\PluginManager $plugins: 

    :rtype: void 



resetPluginManager
------------------

.. function:: resetPluginManager()


    Resets the internal plugin manager

    :rtype: void 





