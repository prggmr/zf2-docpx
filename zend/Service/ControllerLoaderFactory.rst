.. Mvc/Service/ControllerLoaderFactory.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Service\\ControllerLoaderFactory
===========================================

Methods
+++++++

createService
-------------

.. function:: createService()


    Create the controller loader service
    
    Creates and returns an instance of ControllerManager. The
    only controllers this manager will allow are those defined in the
    application configuration's "controllers" array. If a controller is
    matched, the scoped manager will attempt to load the controller.
    Finally, it will attempt to inject the controller plugin manager
    if the controller implements a setPluginManager() method.
    
    This plugin manager is _not_ peered against DI, and as such, will
    not load unknown classes.

    :param ServiceLocatorInterface: 

    :rtype: ControllerManager 



