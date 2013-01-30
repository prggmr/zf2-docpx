.. View/Helper/Navigation/PluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Navigation\\PluginManager
=============================================

Plugin manager implementation for navigation helpers

Enforces that helpers retrieved are instances of
Navigation\HelperInterface. Additionally, it registers a number of default
helpers.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the helper loaded is an instance of AbstractHelper.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



