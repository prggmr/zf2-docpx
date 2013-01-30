.. Di/Di.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Di\\Di
============

Dependency injector that can generate instances using class definitions and configured instance parameters

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|DefinitionList: 
    :param null|InstanceManager: 
    :param null|Config: 



configure
+++++++++

.. function:: configure()


    Provide a configuration object to configure this instance

    :param Config: 

    :rtype: void 



setDefinitionList
+++++++++++++++++

.. function:: setDefinitionList()


    @param  DefinitionList $definitions

    :rtype: self 



definitions
+++++++++++

.. function:: definitions()


    @return DefinitionList



setInstanceManager
++++++++++++++++++

.. function:: setInstanceManager()


    Set the instance manager

    :param InstanceManager: 

    :rtype: Di 



instanceManager
+++++++++++++++

.. function:: instanceManager()


    @return InstanceManager



getCallParameters
+++++++++++++++++

.. function:: getCallParameters()


    @param $name

    :param array: 
    :param string: 

    :rtype: array 



get
+++

.. function:: get()


    Lazy-load a class
    
    Attempts to load the class (or service alias) provided. If it has been
    loaded before, the previous instance will be returned (unless the service
    definition indicates shared instances should not be used).

    :param string: Class name or service alias
    :param null|array: Parameters to pass to the constructor

    :rtype: object|null 



newInstance
+++++++++++

.. function:: newInstance()


    Retrieve a new instance of a class
    
    Forces retrieval of a discrete instance of the given class, using the
    constructor parameters provided.

    :param mixed: Class name or service alias
    :param array: Parameters to pass to the constructor
    :param bool: 

    :rtype: object|null 

    :throws: Exception\ClassNotFoundException 
    :throws: Exception\RuntimeException 



injectDependencies
++++++++++++++++++

.. function:: injectDependencies()


    Inject dependencies

    :param object: 
    :param array: 

    :rtype: void 



handleInjectDependencies
++++++++++++++++++++++++

.. function:: handleInjectDependencies()


    @param object      $instance

    :param array: 
    :param array: 
    :param string|null: 
    :param string|null$instanceAlias: 
    :param string: 

    :throws Exception\RuntimeException: 



createInstanceViaConstructor
++++++++++++++++++++++++++++

.. function:: createInstanceViaConstructor()


    Retrieve a class instance based on class name
    
    Any parameters provided will be used as constructor arguments. If any
    given parameter is a DependencyReference object, it will be fetched
    from the container so that the instance may be injected.

    :param string: 
    :param array: 
    :param string|null: 

    :rtype: object 



createInstanceViaCallback
+++++++++++++++++++++++++

.. function:: createInstanceViaCallback()


    Get an object instance from the defined callback

    :param callable: 
    :param array: 
    :param string: 

    :rtype: object 

    :throws: Exception\InvalidCallbackException 
    :throws: Exception\RuntimeException 



resolveAndCallInjectionMethodForInstance
++++++++++++++++++++++++++++++++++++++++

.. function:: resolveAndCallInjectionMethodForInstance()


    This parameter will handle any injection methods and resolution of
    dependencies for such methods

    :param object: 
    :param string: 
    :param array: 
    :param string: 
    :param bool: 
    :param string|null: 

    :rtype: bool 



resolveMethodParameters
+++++++++++++++++++++++

.. function:: resolveMethodParameters()


    Resolve parameters referencing other services

    :param string: 
    :param string: 
    :param array: 
    :param string: 
    :param bool: 
    :param bool: 

    :throws Exception\MissingPropertyException: 
    :throws Exception\CircularDependencyException: 

    :rtype: array 



getClass
++++++++

.. function:: getClass()


    Utility method used to retrieve the class of a particular instance. This is here to allow extending classes to
    override how class names are resolved


    :param Object: 

    :rtype: string 



isSubclassOf
++++++++++++

.. function:: isSubclassOf()


    Checks if the object has this class as one of its parents


    :param string: 
    :param $type: 

    :rtype: bool 



