.. ServiceManager/AbstractPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\ServiceManager\\AbstractPluginManager
===========================================

ServiceManager implementation for managing plugins

Automatically registers an initializer which should be used to verify that
a plugin instance is of a valid type. Additionally, allows plugins to accept
an array of options for the constructor, which can be used to configure
the plugin when retrieved. Finally, enables the allowOverride property by
default to allow registering factories, aliases, and invokables to take
the place of those provided by the implementing class.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Add a default initializer to ensure the plugin is valid after instance
    creation.

    :param null|ConfigInterface: 



validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the filter loaded is either a valid callback or an instance
    of FilterInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



get
---

.. function:: get()


    Retrieve a service from the manager by name
    
    Allows passing an array of options to use when creating the instance.
    createFromInvokable() will use these and pass them to the instance
    constructor if not null and a non-empty array.

    :param string: 
    :param array: 
    :param bool: 

    :rtype: object 



setService
----------

.. function:: setService()


    Register a service with the locator.
    
    Validates that the service object via validatePlugin() prior to
    attempting to register it.

    :param string: 
    :param mixed: 
    :param bool: 

    :rtype: AbstractPluginManager 

    :throws: Exception\InvalidServiceNameException 



setServiceLocator
-----------------

.. function:: setServiceLocator()


    Set the main service locator so factories can have access to it to pull deps

    :param ServiceLocatorInterface: 

    :rtype: AbstractPluginManager 



getServiceLocator
-----------------

.. function:: getServiceLocator()


    Get the main plugin manager. Useful for fetching dependencies from within factories.

    :rtype: mixed 



createFromInvokable
-------------------

.. function:: createFromInvokable()


    Attempt to create an instance via an invokable class
    
    Overrides parent implementation by passing $creationOptions to the
    constructor, if non-null.

    :param string: 
    :param string: 

    :rtype: null|\stdClass 

    :throws: Exception\ServiceNotCreatedException If resolved class does not exist



createFromFactory
-----------------

.. function:: createFromFactory()


    Attempt to create an instance via a factory class
    
    Overrides parent implementation by passing $creationOptions to the
    constructor, if non-null.

    :param string: 
    :param string: 

    :rtype: mixed 

    :throws: Exception\ServiceNotCreatedException If factory is not callable



