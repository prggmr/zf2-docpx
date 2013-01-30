.. Loader/AutoloaderFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Loader\\AutoloaderFactory
===============================

Methods
-------

factory
+++++++

.. function:: factory()


    Factory for autoloaders
    
    Options should be an array or Traversable object of the following structure:
    <code>
    array(
        '<autoloader class name>' => $autoloaderOptions,
    )
    </code>
    
    The factory will then loop through and instantiate each autoloader with
    the specified options, and register each with the spl_autoloader.
    
    You may retrieve the concrete autoloader instances later using
    {@link getRegisteredAutoloaders()}.
    
    Note that the class names must be resolvable on the include_path or via
    the Zend library, using PSR-0 rules (unless the class has already been
    loaded).

    :param array|Traversable: (optional) options to use. Defaults to Zend\Loader\StandardAutoloader

    :rtype: void 

    :throws: Exception\InvalidArgumentException for invalid options
    :throws: Exception\InvalidArgumentException for unloadable autoloader classes
    :throws: Exception\DomainException for autoloader classes not implementing SplAutoloader



getRegisteredAutoloaders
++++++++++++++++++++++++

.. function:: getRegisteredAutoloaders()


    Get an list of all autoloaders registered with the factory
    
    Returns an array of autoloader instances.

    :rtype: array 



getRegisteredAutoloader
+++++++++++++++++++++++

.. function:: getRegisteredAutoloader()


    Retrieves an autoloader by class name

    :param string: 

    :rtype: SplAutoloader 

    :throws: Exception\InvalidArgumentException for non-registered class



unregisterAutoloaders
+++++++++++++++++++++

.. function:: unregisterAutoloaders()


    Unregisters all autoloaders that have been registered via the factory.
    This will NOT unregister autoloaders registered outside of the fctory.

    :rtype: void 



unregisterAutoloader
++++++++++++++++++++

.. function:: unregisterAutoloader()


    Unregister a single autoloader by class name

    :param string: 

    :rtype: bool 



getStandardAutoloader
+++++++++++++++++++++

.. function:: getStandardAutoloader()


    Get an instance of the standard autoloader
    
    Used to attempt to resolve autoloader classes, using the
    StandardAutoloader. The instance is marked as a fallback autoloader, to
    allow resolving autoloaders not under the "Zend" namespace.

    :rtype: SplAutoloader 



isSubclassOf
++++++++++++

.. function:: isSubclassOf()


    Checks if the object has this class as one of its parents


    :param string: 
    :param string: 

    :rtype: bool 





Constants
---------

STANDARD_AUTOLOADER
+++++++++++++++++++

