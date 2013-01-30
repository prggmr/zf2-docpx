.. ModuleManager/ModuleManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\ModuleManager\\ModuleManager
==================================

Module manager

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable: 
    :param EventManagerInterface: 



onLoadModules
+++++++++++++

.. function:: onLoadModules()


    Handle the loadModules event

    :rtype: void 



loadModules
+++++++++++

.. function:: loadModules()


    Load the provided modules.

    :rtype: ModuleManager 



loadModule
++++++++++

.. function:: loadModule()


    Load a specific module by name.

    :param string: 

    :throws Exception\RuntimeException: @triggers loadModule.resolve
@triggers loadModule

    :rtype: mixed Module's Module class



getLoadedModules
++++++++++++++++

.. function:: getLoadedModules()


    Get an array of the loaded modules.

    :param bool: If true, load modules if they're not already

    :rtype: array An array of Module objects, keyed by module name



getModule
+++++++++

.. function:: getModule()


    Get an instance of a module class by the module name

    :param string: 

    :rtype: mixed 



getModules
++++++++++

.. function:: getModules()


    Get the array of module names that this manager should load.

    :rtype: array 



setModules
++++++++++

.. function:: setModules()


    Set an array or Traversable of module names that this module manager should load.

    :param mixed: array or Traversable of module names

    :throws Exception\InvalidArgumentException: 

    :rtype: ModuleManager 



getEvent
++++++++

.. function:: getEvent()


    Get the module event

    :rtype: ModuleEvent 



setEvent
++++++++

.. function:: setEvent()


    Set the module event

    :param ModuleEvent: 

    :rtype: ModuleManager 



setEventManager
+++++++++++++++

.. function:: setEventManager()


    Set the event manager instance used by this module manager.

    :param EventManagerInterface: 

    :rtype: ModuleManager 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve the event manager
    
    Lazy-loads an EventManager instance if none registered.

    :rtype: EventManagerInterface 



attachDefaultListeners
++++++++++++++++++++++

.. function:: attachDefaultListeners()


    Register the default event listeners

    :rtype: ModuleManager 



