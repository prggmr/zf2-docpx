.. Cache/PatternPluginManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Cache\\PatternPluginManager
=================================

Plugin manager implementation for cache pattern adapters

Enforces that adatpers retrieved are instances of
Pattern\PatternInterface. Additionally, it registers a number of default
patterns available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the pattern adapter loaded is an instance of Pattern\PatternInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



