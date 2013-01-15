.. /Di/InstanceManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Di\\InstanceManager
*************************


Registry of instantiated objects, their names and the parameters used to build them



Methods
=======

hasSharedInstance
-----------------

.. function:: hasSharedInstance($classOrAlias)


    Does this instance manager have this shared instance

    :param string $classOrAlias: 

    :rtype: bool 



getSharedInstance
-----------------

.. function:: getSharedInstance($classOrAlias)


    getSharedInstance()



addSharedInstance
-----------------

.. function:: addSharedInstance($instance, $classOrAlias)


    Add shared instance

    :param object $instance: 
    :param string $classOrAlias: 

    :throws Exception\InvalidArgumentException: 



hasSharedInstanceWithParameters
-------------------------------

.. function:: hasSharedInstanceWithParameters($classOrAlias, $params, [$returnFastHashLookupKey = false])


    hasSharedInstanceWithParameters()

    :param string $classOrAlias: 
    :param array $params: 
    :param bool $returnFastHashLookupKey: 

    :rtype: bool|string 



addSharedInstanceWithParameters
-------------------------------

.. function:: addSharedInstanceWithParameters($instance, $classOrAlias, $params)


    addSharedInstanceWithParameters()

    :param object $instance: 
    :param string $classOrAlias: 
    :param array $params: 

    :rtype: void 



getSharedInstanceWithParameters
-------------------------------

.. function:: getSharedInstanceWithParameters($classOrAlias, $params, [$fastHashFromHasLookup = false])


    Retrieves an instance by its name and the parameters stored at its instantiation

    :param string $classOrAlias: 
    :param array $params: 
    :param bool|null $fastHashFromHasLookup: 

    :rtype: object|bool false if no instance was found



hasAlias
--------

.. function:: hasAlias($alias)


    Check for an alias

    :param string $alias: 

    :rtype: bool 



getAliases
----------

.. function:: getAliases()


    Get aliases

    :rtype: array 



getClassFromAlias
-----------------

.. function:: getClassFromAlias($alias)


    getClassFromAlias()

    :param string: 

    :rtype: string|bool 

    :throws: Exception\RuntimeException 



getBaseAlias
------------

.. function:: getBaseAlias($alias)


    @param  string                     $alias

    :rtype: string|bool 

    :throws: Exception\RuntimeException 



addAlias
--------

.. function:: addAlias($alias, $class, [$parameters = false])


    Add alias


    :param string $alias: 
    :param string $class: 
    :param array $parameters: 

    :rtype: void 



hasConfig
---------

.. function:: hasConfig($aliasOrClass)


    Check for configuration

    :param string $aliasOrClass: 

    :rtype: bool 



setConfig
---------

.. function:: setConfig($aliasOrClass, $configuration, [$append = false])


    Sets configuration for a single alias/class

    :param string $aliasOrClass: 
    :param array $configuration: 
    :param bool $append: 



getClasses
----------

.. function:: getClasses()


    Get classes

    :rtype: array 



getConfig
---------

.. function:: getConfig($aliasOrClass)


    @param  string $aliasOrClass

    :rtype: array 



setParameters
-------------

.. function:: setParameters($aliasOrClass, $parameters)


    setParameters() is a convenience method for:
       setConfig($type, array('parameters' => array(...)), true);

    :param string $aliasOrClass: Alias or Class
    :param array $parameters: Multi-dim array of parameters and their values

    :rtype: void 



setInjections
-------------

.. function:: setInjections($aliasOrClass, $injections)


    setInjections() is a convenience method for:
       setConfig($type, array('injections' => array(...)), true);

    :param string $aliasOrClass: Alias or Class
    :param array $injections: Multi-dim array of methods and their parameters

    :rtype: void 



setShared
---------

.. function:: setShared($aliasOrClass, $isShared)


    Set shared

    :param string $aliasOrClass: 
    :param bool $isShared: 

    :rtype: void 



hasTypePreferences
------------------

.. function:: hasTypePreferences($interfaceOrAbstract)


    Check for type preferences

    :param string $interfaceOrAbstract: 

    :rtype: bool 



setTypePreference
-----------------

.. function:: setTypePreference($interfaceOrAbstract, $preferredImplementations)


    Set type preference

    :param string $interfaceOrAbstract: 
    :param array $preferredImplementations: 

    :rtype: InstanceManager 



getTypePreferences
------------------

.. function:: getTypePreferences($interfaceOrAbstract)


    Get type preferences

    :param string $interfaceOrAbstract: 

    :rtype: array 



unsetTypePreferences
--------------------

.. function:: unsetTypePreferences($interfaceOrAbstract)


    Unset type preferences

    :param string $interfaceOrAbstract: 

    :rtype: void 



addTypePreference
-----------------

.. function:: addTypePreference($interfaceOrAbstract, $preferredImplementation)


    Adds a type preference. A type preference is a redirection to a preferred alias or type when an abstract type
    $interfaceOrAbstract is requested

    :param string $interfaceOrAbstract: 
    :param string $preferredImplementation: 

    :rtype: self 



removeTypePreference
--------------------

.. function:: removeTypePreference($interfaceOrAbstract, $preferredType)


    Removes a previously set type preference

    :param string $interfaceOrAbstract: 
    :param string $preferredType: 

    :rtype: bool|self 



createHashForKeys
-----------------

.. function:: createHashForKeys($classOrAlias, $paramKeys)


    @param  string   $classOrAlias

    :param string[] $paramKeys: 

    :rtype: string 



createHashForValues
-------------------

.. function:: createHashForValues($classOrAlias, $paramValues)


    @param  string $classOrAlias

    :param array $paramValues: 

    :rtype: string 





