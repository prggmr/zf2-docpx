.. ModuleManager/Listener/ConfigListener.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ModuleManager\\Listener\\ConfigListener
=============================================

Config listener

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    __construct

    :param ListenerOptions: 



attach
++++++

.. function:: attach()


    Attach one or more listeners

    :param EventManagerInterface: 

    :rtype: ConfigListener 



onloadModulesPre
++++++++++++++++

.. function:: onloadModulesPre()


    Pass self to the ModuleEvent object early so everyone has access.

    :param ModuleEvent: 

    :rtype: ConfigListener 



onLoadModule
++++++++++++

.. function:: onLoadModule()


    Merge the config for each module

    :param ModuleEvent: 

    :rtype: ConfigListener 



onLoadModulesPost
+++++++++++++++++

.. function:: onLoadModulesPost()


    Merge all config files matched by the given glob()s
    
    This is only attached if config is not cached.

    :param ModuleEvent: 

    :rtype: ConfigListener 



detach
++++++

.. function:: detach()


    Detach all previously attached listeners

    :param EventManagerInterface: 

    :rtype: ConfigListener 



getMergedConfig
+++++++++++++++

.. function:: getMergedConfig()


    getMergedConfig

    :param bool: 

    :rtype: mixed 



setMergedConfig
+++++++++++++++

.. function:: setMergedConfig()


    setMergedConfig

    :param array: 

    :rtype: ConfigListener 



addConfigGlobPaths
++++++++++++++++++

.. function:: addConfigGlobPaths()


    Add an array of glob paths of config files to merge after loading modules

    :param array|Traversable: 

    :rtype: ConfigListener 



addConfigGlobPath
+++++++++++++++++

.. function:: addConfigGlobPath()


    Add a glob path of config files to merge after loading modules

    :param string: 

    :rtype: ConfigListener 



addConfigStaticPaths
++++++++++++++++++++

.. function:: addConfigStaticPaths()


    Add an array of static paths of config files to merge after loading modules

    :param array|Traversable: 

    :rtype: ConfigListener 



addConfigStaticPath
+++++++++++++++++++

.. function:: addConfigStaticPath()


    Add a static path of config files to merge after loading modules

    :param string: 

    :rtype: ConfigListener 



addConfigPaths
++++++++++++++

.. function:: addConfigPaths()


    Add an array of paths of config files to merge after loading modules

    :param Traversable|array: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ConfigListener 



addConfigPath
+++++++++++++

.. function:: addConfigPath()


    Add a path of config files to load and merge after loading modules

    :param string: 
    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ConfigListener 



addConfig
+++++++++

.. function:: addConfig()


    @param string $key

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ConfigListener 



addConfigByPath
+++++++++++++++

.. function:: addConfigByPath()


    Given a path (glob or static), fetch the config and add it to the array
    of configs to merge.

    :param string: 
    :param string: 

    :rtype: ConfigListener 



hasCachedConfig
+++++++++++++++

.. function:: hasCachedConfig()


    @return bool



getCachedConfig
+++++++++++++++

.. function:: getCachedConfig()


    @return mixed





Constants
---------

STATIC_PATH
+++++++++++

GLOB_PATH
+++++++++

