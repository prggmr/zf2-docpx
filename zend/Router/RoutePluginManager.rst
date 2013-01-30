.. Mvc/Router/RoutePluginManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\RoutePluginManager
=====================================

Plugin manager implementation for routes

Enforces that routes retrieved are instances of RouteInterface. It overrides
createFromInvokable() to call the route's factory method in order to get an
instance. The manager is marked to not share by default, in order to allow
multiple route instances of the same type.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the filter loaded is either a valid callback or an instance
    of FilterInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



createFromInvokable
+++++++++++++++++++

.. function:: createFromInvokable()


    Attempt to create an instance via an invokable class
    
    Overrides parent implementation by invoking the route factory,
    passing $creationOptions as the argument.

    :param string: 
    :param string: 

    :rtype: null|\stdClass 

    :throws: Exception\RuntimeException If resolved class does not exist, or does not implement RouteInterface



