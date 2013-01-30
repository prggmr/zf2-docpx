.. ModuleManager/ModuleManagerInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\ModuleManager\\loadModules
================================

.. function:: Zend\ModuleManager\loadModules()


    Load the provided modules.

    :rtype: ModuleManagerInterface 



Function
********

Zend\\ModuleManager\\loadModule
===============================

.. function:: Zend\ModuleManager\loadModule()


    Load a specific module by name.

    :param string: 

    :rtype: mixed Module's Module class



Function
********

Zend\\ModuleManager\\getLoadedModules
=====================================

.. function:: Zend\ModuleManager\getLoadedModules()


    Get an array of the loaded modules.

    :param bool: If true, load modules if they're not already

    :rtype: array An array of Module objects, keyed by module name



Function
********

Zend\\ModuleManager\\getModules
===============================

.. function:: Zend\ModuleManager\getModules()


    Get the array of module names that this manager should load.

    :rtype: array 



Function
********

Zend\\ModuleManager\\setModules
===============================

.. function:: Zend\ModuleManager\setModules()


    Set an array or Traversable of module names that this module manager should load.

    :param mixed: array or Traversable of module names

    :rtype: ModuleManagerInterface 



