.. Loader/ClassMapAutoloader.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Loader\\ClassMapAutoloader
================================

Class-map autoloader

Utilizes class-map files to lookup classfile locations.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Create a new instance, and optionally configure the autoloader.

    :param null|array|Traversable: 



setOptions
++++++++++

.. function:: setOptions()


    Configure the autoloader
    
    Proxies to {@link registerAutoloadMaps()}.

    :param array|Traversable: 

    :rtype: ClassMapAutoloader 



registerAutoloadMap
+++++++++++++++++++

.. function:: registerAutoloadMap()


    Register an autoload map
    
    An autoload map may be either an associative array, or a file returning
    an associative array.
    
    An autoload map should be an associative array containing
    classname/file pairs.

    :param string|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassMapAutoloader 



registerAutoloadMaps
++++++++++++++++++++

.. function:: registerAutoloadMaps()


    Register many autoload maps at once

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ClassMapAutoloader 



getAutoloadMap
++++++++++++++

.. function:: getAutoloadMap()


    Retrieve current autoload map

    :rtype: array 



autoload
++++++++

.. function:: autoload()


    {@inheritDoc}



register
++++++++

.. function:: register()


    Register the autoloader with spl_autoload registry

    :rtype: void 



loadMapFromFile
+++++++++++++++

.. function:: loadMapFromFile()


    Load a map from a file
    
    If the map has been previously loaded, returns the current instance;
    otherwise, returns whatever was returned by calling include() on the
    location.

    :param string: 

    :rtype: ClassMapAutoloader|mixed 

    :throws: Exception\InvalidArgumentException for nonexistent locations



realPharPath
++++++++++++

.. function:: realPharPath()


    Resolve the real_path() to a file within a phar.


    :param string: 

    :rtype: string 



