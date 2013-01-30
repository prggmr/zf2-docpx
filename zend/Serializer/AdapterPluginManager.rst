.. Serializer/AdapterPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Serializer\\AdapterPluginManager
======================================

Plugin manager implementation for serializer adapters.

Enforces that adapters retrieved are instances of
Adapter\AdapterInterface. Additionally, it registers a number of default
adapters available.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance
    of Adapter\AdapterInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



