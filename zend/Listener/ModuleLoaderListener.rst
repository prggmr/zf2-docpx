.. ModuleManager/Listener/ModuleLoaderListener.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ModuleManager\\Listener\\ModuleLoaderListener
===================================================

Module loader listener

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.
    
    Creates an instance of the ModuleAutoloader and injects the module paths
    into it.

    :param ListenerOptions: 



attach
++++++

.. function:: attach()


    Attach one or more listeners

    :param EventManagerInterface: 

    :rtype: LocatorRegistrationListener 



detach
++++++

.. function:: detach()


    Detach all previously attached listeners

    :param EventManagerInterface: 

    :rtype: void 



hasCachedClassMap
+++++++++++++++++

.. function:: hasCachedClassMap()


    @return bool



getCachedConfig
+++++++++++++++

.. function:: getCachedConfig()


    @return array



onLoadModulesPost
+++++++++++++++++

.. function:: onLoadModulesPost()


    loadModulesPost
    
    Unregisters the ModuleLoader and generates the module class map cache.

    :param ModuleEvent: 



