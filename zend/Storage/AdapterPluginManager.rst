.. Cache/Storage/AdapterPluginManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\Storage\\AdapterPluginManager
==========================================

Plugin manager implementation for cache storage adapters

Enforces that adapters retrieved are instances of
StorageInterface. Additionally, it registers a number of default
adapters available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance of StorageInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



