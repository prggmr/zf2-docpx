.. /Cache/Storage/AdapterPluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\AdapterPluginManager
******************************************


Plugin manager implementation for cache storage adapters

Enforces that adapters retrieved are instances of
StorageInterface. Additionally, it registers a number of default
adapters available.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the adapter loaded is an instance of StorageInterface.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid





