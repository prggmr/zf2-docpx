.. Mvc/Service/ServiceManagerConfig.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Service\\ServiceManagerConfig
========================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Merges internal arrays with those passed via configuration

    :param array: 



configureServiceManager
-----------------------

.. function:: configureServiceManager()


    Configure the provided service manager instance with the configuration
    in this class.
    
    In addition to using each of the internal properties to configure the
    service manager, also adds an initializer to inject ServiceManagerAware
    and ServiceLocatorAware classes with the service manager.

    :param ServiceManager: 

    :rtype: void 



