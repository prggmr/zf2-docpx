.. /Cache/Storage/PluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\Storage\\PluginManager
***********************************


Plugin manager implementation for cache plugins

Enforces that plugins retrieved are instances of
Plugin\PluginInterface. Additionally, it registers a number of default
plugins available.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the plugin loaded is an instance of Plugin\PluginInterface.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid





