.. Navigation/View/HelperConfig.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Navigation\\View\\HelperConfig
====================================

Service manager configuration for navigation view helpers

Methods
-------

configureServiceManager
+++++++++++++++++++++++

.. function:: configureServiceManager()


    Configure the provided service manager instance with the configuration
    in this class.
    
    Simply adds a factory for the navigation helper, and has it inject the helper
    with the service locator instance.

    :param ServiceManager: 

    :rtype: void 



HelperPluginManager
+++++++++++++++++++

.. function:: HelperPluginManager()



