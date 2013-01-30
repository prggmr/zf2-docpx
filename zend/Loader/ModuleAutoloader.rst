.. Loader/ModuleAutoloader.php generated using docpx on 01/30/13 03:32am


Zend\\Loader\\ModuleAutoloader
==============================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    Allow configuration of the autoloader via the constructor.

    :param null|array|Traversable: 



setOptions
----------

.. function:: setOptions()


    Configure the autoloader
    
    In most cases, $options should be either an associative array or
    Traversable object.

    :param array|Traversable: 

    :rtype: ModuleAutoloader 



getModuleClassMap
-----------------

.. function:: getModuleClassMap()


    Retrieves the class map for all loaded modules.

    :rtype: array 



setModuleClassMap
-----------------

.. function:: setModuleClassMap()


    Sets the class map used to speed up the module autoloading.

    :param array: 

    :rtype: ModuleLoader 



autoload
--------

.. function:: autoload()


    Autoload a class

    :param $class: 

    :rtype: mixed False [if unable to load $class]
         get_class($class) [if $class is successfully loaded]



loadModuleFromDir
-----------------

.. function:: loadModuleFromDir()


    loadModuleFromDir

    :param string: 
    :param string: 

    :rtype: mixed False [if unable to load $class]
         get_class($class) [if $class is successfully loaded]



loadModuleFromPhar
------------------

.. function:: loadModuleFromPhar()


    loadModuleFromPhar

    :param string: 
    :param string: 

    :rtype: mixed False [if unable to load $class]
         get_class($class) [if $class is successfully loaded]



register
--------

.. function:: register()


    Register the autoloader with spl_autoload registry

    :rtype: void 



unregister
----------

.. function:: unregister()


    Unregister the autoloader with spl_autoload registry

    :rtype: void 



registerPaths
-------------

.. function:: registerPaths()


    registerPaths

    :param array|Traversable: 

    :throws \InvalidArgumentException: 

    :rtype: ModuleAutoloader 



registerPath
------------

.. function:: registerPath()


    registerPath

    :param string: 
    :param bool|string: 

    :throws \InvalidArgumentException: 

    :rtype: ModuleAutoloader 



getPaths
--------

.. function:: getPaths()


    getPaths
    
    This is primarily for unit testing, but could have other uses.

    :rtype: array 



pharFileToModuleName
--------------------

.. function:: pharFileToModuleName()


    Returns the base module name from the path to a phar

    :param string: 

    :rtype: string 



normalizePath
-------------

.. function:: normalizePath()


    Normalize a path for insertion in the stack

    :param string: 
    :param bool: Whether trailing slash should be included

    :rtype: string 



