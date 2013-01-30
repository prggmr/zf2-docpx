.. Cache/Storage/PluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Cache\\Storage\\PluginManager
===================================

Plugin manager implementation for cache plugins

Enforces that plugins retrieved are instances of
Plugin\PluginInterface. Additionally, it registers a number of default
plugins available.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the plugin loaded is an instance of Plugin\PluginInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



