.. ServiceManager/ServiceManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ServiceManager\\ServiceManager
====================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param ConfigInterface: 



setAllowOverride
++++++++++++++++

.. function:: setAllowOverride()


    Set allow override

    :param $allowOverride: 

    :rtype: ServiceManager 



getAllowOverride
++++++++++++++++

.. function:: getAllowOverride()


    Get allow override

    :rtype: bool 



setShareByDefault
+++++++++++++++++

.. function:: setShareByDefault()


    Set flag indicating whether services are shared by default

    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\RuntimeException if allowOverride is false



shareByDefault
++++++++++++++

.. function:: shareByDefault()


    Are services shared by default?

    :rtype: bool 



setThrowExceptionInCreate
+++++++++++++++++++++++++

.. function:: setThrowExceptionInCreate()


    Set throw exceptions in create

    :param bool: 

    :rtype: ServiceManager 



getThrowExceptionInCreate
+++++++++++++++++++++++++

.. function:: getThrowExceptionInCreate()


    Get throw exceptions in create

    :rtype: bool 



setRetrieveFromPeeringManagerFirst
++++++++++++++++++++++++++++++++++

.. function:: setRetrieveFromPeeringManagerFirst()


    Set flag indicating whether to pull from peering manager before attempting creation

    :param bool: 

    :rtype: ServiceManager 



retrieveFromPeeringManagerFirst
+++++++++++++++++++++++++++++++

.. function:: retrieveFromPeeringManagerFirst()


    Should we retrieve from the peering manager prior to attempting to create a service?

    :rtype: bool 



setInvokableClass
+++++++++++++++++

.. function:: setInvokableClass()


    Set invokable class

    :param string: 
    :param string: 
    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\InvalidServiceNameException 



setFactory
++++++++++

.. function:: setFactory()


    Set factory

    :param string: 
    :param string|FactoryInterface|callable: 
    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\InvalidServiceNameException 



addAbstractFactory
++++++++++++++++++

.. function:: addAbstractFactory()


    Add abstract factory

    :param AbstractFactoryInterface|string: 
    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\InvalidArgumentException if the abstract factory is invalid



addInitializer
++++++++++++++

.. function:: addInitializer()


    Add initializer

    :param callable|InitializerInterface: 
    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\InvalidArgumentException 



setService
++++++++++

.. function:: setService()


    Register a service with the locator

    :param string: 
    :param mixed: 
    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\InvalidServiceNameException 



setShared
+++++++++

.. function:: setShared()


    @param  string $name

    :param bool: 

    :rtype: ServiceManager 

    :throws: Exception\ServiceNotFoundException 



get
+++

.. function:: get()


    Retrieve a registered instance

    :param string: 
    :param bool: 

    :throws Exception\ServiceNotFoundException: 

    :rtype: object|array 



create
++++++

.. function:: create()


    Create an instance

    :param string|array: 

    :rtype: bool|object 

    :throws: Exception\ServiceNotFoundException 
    :throws: Exception\ServiceNotCreatedException 



canCreate
+++++++++

.. function:: canCreate()


    Determine if we can create an instance.

    :param string|array: 
    :param bool: 

    :rtype: bool 



has
+++

.. function:: has()


    @param  string|array  $name

    :param bool: 
    :param bool: 

    :rtype: bool 



canCreateFromAbstractFactory
++++++++++++++++++++++++++++

.. function:: canCreateFromAbstractFactory()


    Determine if we can create an instance from an abstract factory.

    :param string: 
    :param string: 

    :rtype: bool 



setAlias
++++++++

.. function:: setAlias()


    @param  string $alias

    :param string: 

    :rtype: ServiceManager 

    :throws: Exception\ServiceNotFoundException 
    :throws: Exception\InvalidServiceNameException 



hasAlias
++++++++

.. function:: hasAlias()


    Determine if we have an alias

    :param string: 

    :rtype: bool 



createScopedServiceManager
++++++++++++++++++++++++++

.. function:: createScopedServiceManager()


    Create scoped service manager

    :param string: 

    :rtype: ServiceManager 



addPeeringServiceManager
++++++++++++++++++++++++

.. function:: addPeeringServiceManager()


    Add a peering relationship

    :param ServiceManager: 
    :param string: 

    :rtype: ServiceManager 



canonicalizeName
++++++++++++++++

.. function:: canonicalizeName()


    Canonicalize name

    :param string: 

    :rtype: string 



createServiceViaCallback
++++++++++++++++++++++++

.. function:: createServiceViaCallback()


    Create service via callback

    :param callable: 
    :param string: 
    :param string: 

    :throws Exception\ServiceNotCreatedException: 
    :throws Exception\ServiceNotFoundException: 
    :throws Exception\CircularDependencyFoundException: 

    :rtype: object 



getRegisteredServices
+++++++++++++++++++++

.. function:: getRegisteredServices()


    Retrieve a keyed list of all registered services. Handy for debugging!

    :rtype: array 



getCanonicalNames
+++++++++++++++++

.. function:: getCanonicalNames()


    Retrieve a keyed list of all canonical names. Handy for debugging!

    :rtype: array 



setCanonicalNames
+++++++++++++++++

.. function:: setCanonicalNames()


    Allows to override the canonical names lookup map with predefined
    values.

    :param array: 

    :rtype: ServiceManager 



retrieveFromPeeringManager
++++++++++++++++++++++++++

.. function:: retrieveFromPeeringManager()


    Attempt to retrieve an instance via a peering manager

    :param string: 

    :rtype: mixed 



createFromInvokable
+++++++++++++++++++

.. function:: createFromInvokable()


    Attempt to create an instance via an invokable class

    :param string: 
    :param string: 

    :rtype: null|\stdClass 

    :throws: Exception\ServiceNotFoundException If resolved class does not exist



createFromFactory
+++++++++++++++++

.. function:: createFromFactory()


    Attempt to create an instance via a factory

    :param string: 
    :param string: 

    :rtype: mixed 

    :throws: Exception\ServiceNotCreatedException If factory is not callable



createFromAbstractFactory
+++++++++++++++++++++++++

.. function:: createFromAbstractFactory()


    Attempt to create an instance via an abstract factory

    :param string: 
    :param string: 

    :rtype: object|null 

    :throws: Exception\ServiceNotCreatedException If abstract factory is not callable



isSubclassOf
++++++++++++

.. function:: isSubclassOf()


    Checks if the object has this class as one of its parents


    :param string: 
    :param string: 

    :rtype: bool 



unregisterService
+++++++++++++++++

.. function:: unregisterService()


    Unregister a service
    
    Called when $allowOverride is true and we detect that a service being
    added to the instance already exists. This will remove the duplicate
    entry, and also any shared flags previously registered.

    :param string: 

    :rtype: void 





Constants
---------

SCOPE_PARENT
++++++++++++

SCOPE_CHILD
+++++++++++

