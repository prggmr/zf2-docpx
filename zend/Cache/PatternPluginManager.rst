.. /Cache/PatternPluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Cache\\PatternPluginManager
*********************************


Plugin manager implementation for cache pattern adapters

Enforces that adatpers retrieved are instances of
Pattern\PatternInterface. Additionally, it registers a number of default
patterns available.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the pattern adapter loaded is an instance of Pattern\PatternInterface.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid





