.. Mvc/Controller/PluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Controller\\PluginManager
====================================

Plugin manager implementation for controllers

Registers a number of default plugins, and contains an initializer for
injecting plugins with the current controller.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    After invoking parent constructor, add an initializer to inject the
    attached controller, if any, to the currently requested plugin.

    :param null|ConfigInterface: 



get
+++

.. function:: get()


    Retrieve a registered instance
    
    After the plugin is retrieved from the service locator, inject the
    controller in the plugin every time it is requested. This is required
    because a controller can use a plugin and another controller can be
    dispatched afterwards. If this second controller uses the same plugin
    as the first controller, the reference to the controller inside the
    plugin is lost.

    :param string: 
    :param mixed: 
    :param bool: 

    :rtype: mixed 



setController
+++++++++++++

.. function:: setController()


    Set controller

    :param DispatchableInterface: 

    :rtype: PluginManager 



getController
+++++++++++++

.. function:: getController()


    Retrieve controller instance

    :rtype: null|DispatchableInterface 



injectController
++++++++++++++++

.. function:: injectController()


    Inject a helper instance with the registered controller

    :param object: 

    :rtype: void 



validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Any plugin is considered valid in this context.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidPluginException 



