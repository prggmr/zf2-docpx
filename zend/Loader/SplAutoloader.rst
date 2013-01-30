.. Loader/SplAutoloader.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Loader\\__construct
=========================

.. function:: Zend\Loader\__construct()


    Constructor
    
    Allow configuration of the autoloader via the constructor.

    :param null|array|Traversable: 



Function
********

Zend\\Loader\\setOptions
========================

.. function:: Zend\Loader\setOptions()


    Configure the autoloader
    
    In most cases, $options should be either an associative array or
    Traversable object.

    :param array|Traversable: 

    :rtype: SplAutoloader 



Function
********

Zend\\Loader\\autoload
======================

.. function:: Zend\Loader\autoload()


    Autoload a class

    :param $class: 

    :rtype: mixed False [if unable to load $class]
         get_class($class) [if $class is successfully loaded]



Function
********

Zend\\Loader\\register
======================

.. function:: Zend\Loader\register()


    Register the autoloader with spl_autoload registry
    
    Typically, the body of this will simply be:
    <code>
    spl_autoload_register(array($this, 'autoload'));
    </code>

    :rtype: void 



