.. Mvc/Service/ModuleManagerFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Service\\ModuleManagerFactory
========================================

Methods
-------

createService
+++++++++++++

.. function:: createService()


    Creates and returns the module manager
    
    Instantiates the default module listeners, providing them configuration
    from the "module_listener_options" key of the ApplicationConfig
    service. Also sets the default config glob path.
    
    Module manager is instantiated and provided with an EventManager, to which
    the default listener aggregate is attached. The ModuleEvent is also created
    and attached to the module manager.

    :param ServiceLocatorInterface: 

    :rtype: ModuleManager 



