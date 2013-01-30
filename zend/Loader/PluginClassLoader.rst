.. Loader/PluginClassLoader.php generated using docpx on 01/30/13 03:32am


Zend\\Loader\\PluginClassLoader
===============================

Plugin class locator interface

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|array|Traversable: If provided, seeds the loader with a map



addStaticMap
------------

.. function:: addStaticMap()


    Add a static map of plugins
    
    A null value will clear the static map.

    :param null|array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: void 



registerPlugin
--------------

.. function:: registerPlugin()


    Register a class to a given short name

    :param string: 
    :param string: 

    :rtype: PluginClassLoader 



registerPlugins
---------------

.. function:: registerPlugins()


    Register many plugins at once
    
    If $map is a string, assumes that the map is the class name of a
    Traversable object (likely a ShortNameLocator); it will then instantiate
    this class and use it to register plugins.
    
    If $map is an array or Traversable object, it will iterate it to
    register plugin names/classes.
    
    For all other arguments, or if the string $map is not a class or not a
    Traversable class, an exception will be raised.

    :param string|array|Traversable: 

    :rtype: PluginClassLoader 

    :throws: Exception\InvalidArgumentException 



unregisterPlugin
----------------

.. function:: unregisterPlugin()


    Unregister a short name lookup

    :param mixed: 

    :rtype: PluginClassLoader 



getRegisteredPlugins
--------------------

.. function:: getRegisteredPlugins()


    Get a list of all registered plugins

    :rtype: array|Traversable 



isLoaded
--------

.. function:: isLoaded()


    Whether or not a plugin by a specific name has been registered

    :param string: 

    :rtype: bool 



getClassName
------------

.. function:: getClassName()


    Return full class name for a named helper

    :param string: 

    :rtype: string|false 



load
----

.. function:: load()


    Load a helper via the name provided

    :param string: 

    :rtype: string|false 



getIterator
-----------

.. function:: getIterator()


    Defined by IteratorAggregate
    
    Returns an instance of ArrayIterator, containing a map of
    all plugins

    :rtype: ArrayIterator 



