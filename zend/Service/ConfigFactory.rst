.. Mvc/Service/ConfigFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Service\\ConfigFactory
=================================

Methods
-------

createService
+++++++++++++

.. function:: createService()


    Create the application configuration service
    
    Retrieves the Module Manager from the service locator, and executes
    {@link Zend\ModuleManager\ModuleManager::loadModules()}.
    
    It then retrieves the config listener from the module manager, and from
    that the merged configuration.

    :param ServiceLocatorInterface: 

    :rtype: array|\Traversable 



