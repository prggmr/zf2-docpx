.. /Di/Di.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\Di
************


Dependency injector that can generate instances using class definitions and configured instance parameters



Methods
=======

__construct
-----------

.. function:: __construct([$definitions = false, [$instanceManager = false, [$config = false]]])


    Constructor

    :param null|DefinitionList $definitions: 
    :param null|InstanceManager $instanceManager: 
    :param null|Config $config: 



configure
---------

.. function:: configure($config)


    Provide a configuration object to configure this instance

    :param Config $config: 

    :rtype: void 



setDefinitionList
-----------------

.. function:: setDefinitionList($definitions)


    @param  DefinitionList $definitions

    :rtype: self 



definitions
-----------

.. function:: definitions()


    @return DefinitionList



setInstanceManager
------------------

.. function:: setInstanceManager($instanceManager)


    Set the instance manager

    :param InstanceManager $instanceManager: 

    :rtype: Di 



instanceManager
---------------

.. function:: instanceManager()


    @return InstanceManager



getCallParameters
-----------------

.. function:: getCallParameters($name, $params, [$method = "__construct"])


    @param $name

    :param array $params: 
    :param string $method: 

    :rtype: array 



get
---

.. function:: get($name, [$params = false])


    Lazy-load a class
    
    Attempts to load the class (or service alias) provided. If it has been
    loaded before, the previous instance will be returned (unless the service
    definition indicates shared instances should not be used).

    :param string $name: Class name or service alias
    :param null|array $params: Parameters to pass to the constructor

    :rtype: object|null 



newInstance
-----------

.. function:: newInstance($name, [$params = false, [$isShared = true]])


    Retrieve a new instance of a class
    
    Forces retrieval of a discrete instance of the given class, using the
    constructor parameters provided.

    :param mixed $name: Class name or service alias
    :param array $params: Parameters to pass to the constructor
    :param bool $isShared: 

    :rtype: object|null 

    :throws: Exception\ClassNotFoundException 
    :throws: Exception\RuntimeException 



injectDependencies
------------------

.. function:: injectDependencies($instance, [$params = false])


    Inject dependencies

    :param object $instance: 
    :param array $params: 

    :rtype: void 



handleInjectDependencies
------------------------

.. function:: handleInjectDependencies($instance, $injectionMethods, $params, $instanceClass, $instanceAlias, $requestedName)


    @param object      $instance

    :param array $injectionMethods: 
    :param array $params: 
    :param string|null $instanceClass: 
    :param string|null$instanceAlias: 
    :param string $requestedName: 

    :throws Exception\RuntimeException: 



createInstanceViaConstructor
----------------------------

.. function:: createInstanceViaConstructor($class, $params, [$alias = false])


    Retrieve a class instance based on class name
    
    Any parameters provided will be used as constructor arguments. If any
    given parameter is a DependencyReference object, it will be fetched
    from the container so that the instance may be injected.

    :param string $class: 
    :param array $params: 
    :param string|null $alias: 

    :rtype: object 



createInstanceViaCallback
-------------------------

.. function:: createInstanceViaCallback($callback, $params, $alias)


    Get an object instance from the defined callback

    :param callable $callback: 
    :param array $params: 
    :param string $alias: 

    :rtype: object 

    :throws: Exception\InvalidCallbackException 
    :throws: Exception\RuntimeException 



resolveAndCallInjectionMethodForInstance
----------------------------------------

.. function:: resolveAndCallInjectionMethodForInstance($instance, $method, $params, $alias, $methodIsRequired, [$methodClass = false])


    This parameter will handle any injection methods and resolution of
    dependencies for such methods

    :param object $instance: 
    :param string $method: 
    :param array $params: 
    :param string $alias: 
    :param bool $methodIsRequired: 
    :param string|null $methodClass: 

    :rtype: bool 



resolveMethodParameters
-----------------------

.. function:: resolveMethodParameters($class, $method, $callTimeUserParams, $alias, $methodIsRequired, [$isInstantiator = false])


    Resolve parameters referencing other services

    :param string $class: 
    :param string $method: 
    :param array $callTimeUserParams: 
    :param string $alias: 
    :param bool $methodIsRequired: 
    :param bool $isInstantiator: 

    :throws Exception\MissingPropertyException: 
    :throws Exception\CircularDependencyException: 

    :rtype: array 



getClass
--------

.. function:: getClass($instance)


    Utility method used to retrieve the class of a particular instance. This is here to allow extending classes to
    override how class names are resolved


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param Object $instance: 

    :rtype: string 



isSubclassOf
------------

.. function:: isSubclassOf($className, $type)


    Checks if the object has this class as one of its parents


Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

Warning: Illegal string offset 'type' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 43

Warning: Illegal string offset 'text' in /Users/prggmr/Lab/Docpx/src/templates/rst/tags.template on line 44

    :param string $className: 
    :param $type: 

    :rtype: bool 





