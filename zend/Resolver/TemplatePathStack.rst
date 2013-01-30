.. View/Resolver/TemplatePathStack.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Resolver\\TemplatePathStack
=======================================

Resolves view scripts based on a stack of paths

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param null|array|Traversable: 



setOptions
++++++++++

.. function:: setOptions()


    Configure object

    :param array|Traversable: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException 



setDefaultSuffix
++++++++++++++++

.. function:: setDefaultSuffix()


    Set default file suffix

    :param string: 

    :rtype: TemplatePathStack 



getDefaultSuffix
++++++++++++++++

.. function:: getDefaultSuffix()


    Get default file suffix

    :rtype: string 



addPaths
++++++++

.. function:: addPaths()


    Add many paths to the stack at once

    :param array: 

    :rtype: TemplatePathStack 



setPaths
++++++++

.. function:: setPaths()


    Rest the path stack to the paths provided

    :param SplStack|array: 

    :rtype: TemplatePathStack 

    :throws: Exception\InvalidArgumentException 



normalizePath
+++++++++++++

.. function:: normalizePath()


    Normalize a path for insertion in the stack

    :param string: 

    :rtype: string 



addPath
+++++++

.. function:: addPath()


    Add a single path to the stack

    :param string: 

    :rtype: TemplatePathStack 

    :throws: Exception\InvalidArgumentException 



clearPaths
++++++++++

.. function:: clearPaths()


    Clear all paths

    :rtype: void 



getPaths
++++++++

.. function:: getPaths()


    Returns stack of paths

    :rtype: SplStack 



setLfiProtection
++++++++++++++++

.. function:: setLfiProtection()


    Set LFI protection flag

    :param bool: 

    :rtype: TemplatePathStack 



isLfiProtectionOn
+++++++++++++++++

.. function:: isLfiProtectionOn()


    Return status of LFI protection flag

    :rtype: bool 



setUseStreamWrapper
+++++++++++++++++++

.. function:: setUseStreamWrapper()


    Set flag indicating if stream wrapper should be used if short_open_tag is off

    :param bool: 

    :rtype: TemplatePathStack 



useStreamWrapper
++++++++++++++++

.. function:: useStreamWrapper()


    Should the stream wrapper be used if short_open_tag is off?
    
    Returns true if the use_stream_wrapper flag is set, and if short_open_tag
    is disabled.

    :rtype: bool 



resolve
+++++++

.. function:: resolve()


    Retrieve the filesystem path to a view script

    :param string: 
    :param null|Renderer: 

    :rtype: string 

    :throws: Exception\DomainException 



getLastLookupFailure
++++++++++++++++++++

.. function:: getLastLookupFailure()


    Get the last lookup failure message, if any

    :rtype: false|string 





Constants
---------

FAILURE_NO_PATHS
++++++++++++++++

FAILURE_NOT_FOUND
+++++++++++++++++

