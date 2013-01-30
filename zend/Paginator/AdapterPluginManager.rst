.. Paginator/AdapterPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Paginator\\AdapterPluginManager
=====================================

Plugin manager implementation for paginator adapters.

Enforces that adapters retrieved are instances of
Adapter\AdapterInterface. Additionally, it registers a number of default
adapters available.

Methods
+++++++

createFromFactory
-----------------

.. function:: createFromFactory()


    Attempt to create an instance via a factory

    :param string: 
    :param string: 

    :rtype: mixed 

    :throws: Exception\ServiceNotCreatedException If factory is not callable



validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance
    of Adapter\AdapterInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



