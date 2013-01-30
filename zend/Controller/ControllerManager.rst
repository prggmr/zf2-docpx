.. Mvc/Controller/ControllerManager.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\ControllerManager
========================================

Manager for loading controllers

Does not define any controllers by default, but does add a validator.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    After invoking parent constructor, add an initializer to inject the
    service manager, event manager, and plugin manager

    :param null|ConfigInterface: 



injectControllerDependencies
----------------------------

.. function:: injectControllerDependencies()


    Inject required dependencies into the controller.

    :param DispatchableInterface: 
    :param ServiceLocatorInterface: 

    :rtype: void 



validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Ensure we have a dispatchable.

    :param mixed: 

    :rtype: true 

    :throws: Exception\InvalidControllerException 



get
---

.. function:: get()


    Override: do not use peering service manager to retrieve controller

    :param string: 
    :param array: 
    :param bool: 

    :rtype: mixed 



