.. Loader/StandardAutoloader.php generated using docpx on 01/30/13 03:32am


Zend\\Loader\\StandardAutoloader
================================

PSR-0 compliant autoloader

Allows autoloading both namespaced and vendor-prefixed classes. Class
lookups are performed on the filesystem. If a class file for the referenced
class is not found, a PHP warning will be raised by include().

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor

    :param null|array|\Traversable: 



setOptions
----------

.. function:: setOptions()


    Configure autoloader
    
    Allows specifying both "namespace" and "prefix" pairs, using the
    following structure:
    <code>
    array(
        'namespaces' => array(
            'Zend'     => '/path/to/Zend/library',
            'Doctrine' => '/path/to/Doctrine/library',
        ),
        'prefixes' => array(
            'Phly_'     => '/path/to/Phly/library',
        ),
        'fallback_autoloader' => true,
    )
    </code>

    :param array|\Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: StandardAutoloader 



setFallbackAutoloader
---------------------

.. function:: setFallbackAutoloader()


    Set flag indicating fallback autoloader status

    :param bool: 

    :rtype: StandardAutoloader 



isFallbackAutoloader
--------------------

.. function:: isFallbackAutoloader()


    Is this autoloader acting as a fallback autoloader?

    :rtype: bool 



registerNamespace
-----------------

.. function:: registerNamespace()


    Register a namespace/directory pair

    :param string: 
    :param string: 

    :rtype: StandardAutoloader 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register many namespace/directory pairs at once

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: StandardAutoloader 



registerPrefix
--------------

.. function:: registerPrefix()


    Register a prefix/directory pair

    :param string: 
    :param string: 

    :rtype: StandardAutoloader 



registerPrefixes
----------------

.. function:: registerPrefixes()


    Register many namespace/directory pairs at once

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: StandardAutoloader 



autoload
--------

.. function:: autoload()


    Defined by Autoloadable; autoload a class

    :param string: 

    :rtype: false|string 



register
--------

.. function:: register()


    Register the autoloader with spl_autoload

    :rtype: void 



transformClassNameToFilename
----------------------------

.. function:: transformClassNameToFilename()


    Transform the class name to a filename

    :param string: 
    :param string: 

    :rtype: string 



loadClass
---------

.. function:: loadClass()


    Load a class, based on its type (namespaced or prefixed)

    :param string: 
    :param string: 

    :rtype: bool|string 

    :throws: Exception\InvalidArgumentException 



normalizeDirectory
------------------

.. function:: normalizeDirectory()


    Normalize the directory to include a trailing directory separator

    :param string: 

    :rtype: string 





Constants
+++++++++

NS_SEPARATOR
============

PREFIX_SEPARATOR
================

LOAD_NS
=======

LOAD_PREFIX
===========

ACT_AS_FALLBACK
===============

AUTOREGISTER_ZF
===============

