.. ModuleManager/Listener/LocatorRegistrationListener.php generated using docpx on 01/30/13 03:32am


Zend\\ModuleManager\\Listener\\LocatorRegistrationListener
==========================================================

Locator registration listener

Methods
+++++++

onLoadModule
------------

.. function:: onLoadModule()


    loadModule
    
    Check each loaded module to see if it implements LocatorRegistered. If it
    does, we add it to an internal array for later.

    :param ModuleEvent: 

    :rtype: void 



onLoadModules
-------------

.. function:: onLoadModules()


    loadModules
    
    Once all the modules are loaded, loop

    :param Event: 

    :rtype: void 



onBootstrap
-----------

.. function:: onBootstrap()


    Bootstrap listener
    
    This is ran during the MVC bootstrap event because it requires access to
    the DI container.


    :param Event: 

    :rtype: void 



attach
------

.. function:: attach()


    Attach one or more listeners

    :param EventManagerInterface: 

    :rtype: LocatorRegistrationListener 



detach
------

.. function:: detach()


    Detach all previously attached listeners

    :param EventManagerInterface: 

    :rtype: void 



