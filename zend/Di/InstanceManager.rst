.. Di/InstanceManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Di\\InstanceManager
=========================

Registry of instantiated objects, their names and the parameters used to build them

Methods
-------

hasSharedInstance
+++++++++++++++++

.. function:: hasSharedInstance()


    Does this instance manager have this shared instance

    :param string: 

    :rtype: bool 



getSharedInstance
+++++++++++++++++

.. function:: getSharedInstance()


    getSharedInstance()



addSharedInstance
+++++++++++++++++

.. function:: addSharedInstance()


    Add shared instance

    :param object: 
    :param string: 

    :throws Exception\InvalidArgumentException: 



hasSharedInstanceWithParameters
+++++++++++++++++++++++++++++++

.. function:: hasSharedInstanceWithParameters()


    hasSharedInstanceWithParameters()

    :param string: 
    :param array: 
    :param bool: 

    :rtype: bool|string 



addSharedInstanceWithParameters
+++++++++++++++++++++++++++++++

.. function:: addSharedInstanceWithParameters()


    addSharedInstanceWithParameters()

    :param object: 
    :param string: 
    :param array: 

    :rtype: void 



getSharedInstanceWithParameters
+++++++++++++++++++++++++++++++

.. function:: getSharedInstanceWithParameters()


    Retrieves an instance by its name and the parameters stored at its instantiation

    :param string: 
    :param array: 
    :param bool|null: 

    :rtype: object|bool false if no instance was found



hasAlias
++++++++

.. function:: hasAlias()


    Check for an alias

    :param string: 

    :rtype: bool 



getAliases
++++++++++

.. function:: getAliases()


    Get aliases

    :rtype: array 



getClassFromAlias
+++++++++++++++++

.. function:: getClassFromAlias()


    getClassFromAlias()

    :param string: 

    :rtype: string|bool 

    :throws: Exception\RuntimeException 



getBaseAlias
++++++++++++

.. function:: getBaseAlias()


    @param  string                     $alias

    :rtype: string|bool 

    :throws: Exception\RuntimeException 



addAlias
++++++++

.. function:: addAlias()


    Add alias


    :param string: 
    :param string: 
    :param array: 

    :rtype: void 



hasConfig
+++++++++

.. function:: hasConfig()


    Check for configuration

    :param string: 

    :rtype: bool 



setConfig
+++++++++

.. function:: setConfig()


    Sets configuration for a single alias/class

    :param string: 
    :param array: 
    :param bool: 



getClasses
++++++++++

.. function:: getClasses()


    Get classes

    :rtype: array 



getConfig
+++++++++

.. function:: getConfig()


    @param  string $aliasOrClass

    :rtype: array 



setParameters
+++++++++++++

.. function:: setParameters()


    setParameters() is a convenience method for:
       setConfig($type, array('parameters' => array(...)), true);

    :param string: Alias or Class
    :param array: Multi-dim array of parameters and their values

    :rtype: void 



setInjections
+++++++++++++

.. function:: setInjections()


    setInjections() is a convenience method for:
       setConfig($type, array('injections' => array(...)), true);

    :param string: Alias or Class
    :param array: Multi-dim array of methods and their parameters

    :rtype: void 



setShared
+++++++++

.. function:: setShared()


    Set shared

    :param string: 
    :param bool: 

    :rtype: void 



hasTypePreferences
++++++++++++++++++

.. function:: hasTypePreferences()


    Check for type preferences

    :param string: 

    :rtype: bool 



setTypePreference
+++++++++++++++++

.. function:: setTypePreference()


    Set type preference

    :param string: 
    :param array: 

    :rtype: InstanceManager 



getTypePreferences
++++++++++++++++++

.. function:: getTypePreferences()


    Get type preferences

    :param string: 

    :rtype: array 



unsetTypePreferences
++++++++++++++++++++

.. function:: unsetTypePreferences()


    Unset type preferences

    :param string: 

    :rtype: void 



addTypePreference
+++++++++++++++++

.. function:: addTypePreference()


    Adds a type preference. A type preference is a redirection to a preferred alias or type when an abstract type
    $interfaceOrAbstract is requested

    :param string: 
    :param string: 

    :rtype: self 



removeTypePreference
++++++++++++++++++++

.. function:: removeTypePreference()


    Removes a previously set type preference

    :param string: 
    :param string: 

    :rtype: bool|self 



createHashForKeys
+++++++++++++++++

.. function:: createHashForKeys()


    @param  string   $classOrAlias

    :param string[]: 

    :rtype: string 



createHashForValues
+++++++++++++++++++

.. function:: createHashForValues()


    @param  string $classOrAlias

    :param array: 

    :rtype: string 



