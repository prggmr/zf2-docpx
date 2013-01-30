.. ModuleManager/Listener/ServiceListener.php generated using docpx on 01/30/13 03:32am


Zend\\ModuleManager\\Listener\\ServiceListener
==============================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    @param ServiceManager $serviceManager

    :param null|array: 



setDefaultServiceConfig
-----------------------

.. function:: setDefaultServiceConfig()


    @param  array $configuration

    :rtype: ServiceListener 



addServiceManager
-----------------

.. function:: addServiceManager()


    @param  ServiceManager|string $serviceManager  Service Manager instance or name

    :param string: Configuration key
    :param string: FQCN as string
    :param string: Method name

    :throws Exception\RuntimeException: 

    :rtype: ServiceListener 



attach
------

.. function:: attach()


    @param  EventManagerInterface $events

    :rtype: ServiceListener 



detach
------

.. function:: detach()


    @param  EventManagerInterface $events

    :rtype: void 



onLoadModule
------------

.. function:: onLoadModule()


    Retrieve service manager configuration from module, and
    configure the service manager.
    
    If the module does not implement a specific interface and does not
    implement a specific method, does nothing. Also, if the return value
    of that method is not a ServiceConfig object, or not an array or
    Traversable that can seed one, does nothing.
    
    The interface and method name can be set by adding a new service manager
    via the addServiceManager() method.

    :param ModuleEvent: 

    :rtype: void 



onLoadModulesPost
-----------------

.. function:: onLoadModulesPost()


    Use merged configuration to configure service manager
    
    If the merged configuration has a non-empty, array 'service_manager'
    key, it will be passed to a ServiceManager Config object, and
    used to configure the service manager.

    :param ModuleEvent: 

    :throws Exception\RuntimeException: 

    :rtype: void 



serviceConfigToArray
--------------------

.. function:: serviceConfigToArray()


    Merge a service configuration container
    
    Extracts the various service configuration arrays, and then merges with
    the internal service configuration.

    :param ServiceConfig|string: Instance of ServiceConfig or class name

    :throws Exception\RuntimeException: 

    :rtype: array 



