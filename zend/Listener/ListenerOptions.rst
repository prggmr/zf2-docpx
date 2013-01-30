.. ModuleManager/Listener/ListenerOptions.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\ModuleManager\\Listener\\ListenerOptions
==============================================

Listener options

Methods
-------

getModulePaths
++++++++++++++

.. function:: getModulePaths()


    Get an array of paths where modules reside

    :rtype: array 



setModulePaths
++++++++++++++

.. function:: setModulePaths()


    Set an array of paths where modules reside

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ListenerOptions Provides fluent interface



getConfigGlobPaths
++++++++++++++++++

.. function:: getConfigGlobPaths()


    Get the glob patterns to load additional config files

    :rtype: array 



getConfigStaticPaths
++++++++++++++++++++

.. function:: getConfigStaticPaths()


    Get the static paths to load additional config files

    :rtype: array 



setConfigGlobPaths
++++++++++++++++++

.. function:: setConfigGlobPaths()


    Set the glob patterns to use for loading additional config files

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ListenerOptions Provides fluent interface



setConfigStaticPaths
++++++++++++++++++++

.. function:: setConfigStaticPaths()


    Set the static paths to use for loading additional config files

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ListenerOptions Provides fluent interface



getExtraConfig
++++++++++++++

.. function:: getExtraConfig()


    Get any extra config to merge in.

    :rtype: array|Traversable 



setExtraConfig
++++++++++++++

.. function:: setExtraConfig()


    Add some extra config array to the main config. This is mainly useful
    for unit testing purposes.

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ListenerOptions Provides fluent interface



getConfigCacheEnabled
+++++++++++++++++++++

.. function:: getConfigCacheEnabled()


    Check if the config cache is enabled

    :rtype: bool 



setConfigCacheEnabled
+++++++++++++++++++++

.. function:: setConfigCacheEnabled()


    Set if the config cache should be enabled or not

    :param bool: 

    :rtype: ListenerOptions 



getConfigCacheKey
+++++++++++++++++

.. function:: getConfigCacheKey()


    Get key used to create the cache file name

    :rtype: string 



setConfigCacheKey
+++++++++++++++++

.. function:: setConfigCacheKey()


    Set key used to create the cache file name

    :param string: the value to be set

    :rtype: ListenerOptions 



getConfigCacheFile
++++++++++++++++++

.. function:: getConfigCacheFile()


    Get the path to the config cache
    
    Should this be an option, or should the dir option include the
    filename, or should it simply remain hard-coded? Thoughts?

    :rtype: string 



getCacheDir
+++++++++++

.. function:: getCacheDir()


    Get the path where cache file(s) are stored

    :rtype: string 



setCacheDir
+++++++++++

.. function:: setCacheDir()


    Set the path where cache files can be stored

    :param string: the value to be set

    :rtype: ListenerOptions 



getModuleMapCacheEnabled
++++++++++++++++++++++++

.. function:: getModuleMapCacheEnabled()


    Check if the module class map cache is enabled

    :rtype: bool 



setModuleMapCacheEnabled
++++++++++++++++++++++++

.. function:: setModuleMapCacheEnabled()


    Set if the module class map cache should be enabled or not

    :param bool: 

    :rtype: ListenerOptions 



getModuleMapCacheKey
++++++++++++++++++++

.. function:: getModuleMapCacheKey()


    Get key used to create the cache file name

    :rtype: string 



setModuleMapCacheKey
++++++++++++++++++++

.. function:: setModuleMapCacheKey()


    Set key used to create the cache file name

    :param string: the value to be set

    :rtype: ListenerOptions 



getModuleMapCacheFile
+++++++++++++++++++++

.. function:: getModuleMapCacheFile()


    Get the path to the module class map cache

    :rtype: string 



getCheckDependencies
++++++++++++++++++++

.. function:: getCheckDependencies()


    Set whether to check dependencies during module loading or not

    :rtype: string 



setCheckDependencies
++++++++++++++++++++

.. function:: setCheckDependencies()


    Set whether to check dependencies during module loading or not

    :param bool: the value to be set

    :rtype: ListenerOptions 



normalizePath
+++++++++++++

.. function:: normalizePath()


    Normalize a path for insertion in the stack

    :param string: 

    :rtype: string 



