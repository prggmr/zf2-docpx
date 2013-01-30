.. Mvc/Service/DiFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Service\\DiFactory
=============================

Methods
-------

createService
+++++++++++++

.. function:: createService()


    Create and return abstract factory seeded by dependency injector
    
    Creates and returns an abstract factory seeded by the dependency
    injector. If the "di" key of the configuration service is set, that
    sub-array is passed to a DiConfig object and used to configure
    the DI instance. The DI instance is then used to seed the
    DiAbstractServiceFactory, which is then registered with the service
    manager.

    :param ServiceLocatorInterface: 

    :rtype: Di 



