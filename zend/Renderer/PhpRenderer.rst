.. View/Renderer/PhpRenderer.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Renderer\\PhpRenderer
=================================

Abstract class for Zend_View to help enforce private constructs.

Note: all private variables in this class are prefixed with "__". This is to
mark them as part of the internal implementation, and thus prevent conflict
with variables injected into the renderer.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor.


    :param array: Configuration key-value pairs.



getEngine
+++++++++

.. function:: getEngine()


    Return the template engine object
    
    Returns the object instance, as it is its own template engine

    :rtype: PhpRenderer 



init
++++

.. function:: init()


    Allow custom object initialization when extending Zend_View_Abstract or
    Zend_View
    
    Triggered by {@link __construct() the constructor} as its final action.

    :rtype: void 



setResolver
+++++++++++

.. function:: setResolver()


    Set script resolver

    :param Resolver: 

    :rtype: PhpRenderer 

    :throws: Exception\InvalidArgumentException 



resolver
++++++++

.. function:: resolver()


    Retrieve template name or template resolver

    :param null|string: 

    :rtype: string|Resolver 



setVars
+++++++

.. function:: setVars()


    Set variable storage
    
    Expects either an array, or an object implementing ArrayAccess.

    :param array|ArrayAccess: 

    :rtype: PhpRenderer 

    :throws: Exception\InvalidArgumentException 



vars
++++

.. function:: vars()


    Get a single variable, or all variables

    :param mixed: 

    :rtype: mixed 



get
+++

.. function:: get()


    Get a single variable

    :param mixed: 

    :rtype: mixed 



__get
+++++

.. function:: __get()


    Overloading: proxy to Variables container

    :param string: 

    :rtype: mixed 



__set
+++++

.. function:: __set()


    Overloading: proxy to Variables container

    :param string: 
    :param mixed: 

    :rtype: void 



__isset
+++++++

.. function:: __isset()


    Overloading: proxy to Variables container

    :param string: 

    :rtype: bool 



__unset
+++++++

.. function:: __unset()


    Overloading: proxy to Variables container

    :param string: 

    :rtype: void 



setHelperPluginManager
++++++++++++++++++++++

.. function:: setHelperPluginManager()


    Set helper plugin manager instance

    :param string|HelperPluginManager: 

    :rtype: PhpRenderer 

    :throws: Exception\InvalidArgumentException 



getHelperPluginManager
++++++++++++++++++++++

.. function:: getHelperPluginManager()


    Get helper plugin manager instance

    :rtype: HelperPluginManager 



plugin
++++++

.. function:: plugin()


    Get plugin instance

    :param string: Name of plugin to return
    :param null|array: Options to pass to plugin constructor (if not already instantiated)

    :rtype: AbstractHelper 



__call
++++++

.. function:: __call()


    Overloading: proxy to helpers
    
    Proxies to the attached plugin manager to retrieve, return, and potentially
    execute helpers.
    
    * If the helper does not define __invoke, it will be returned
    * If the helper does define __invoke, it will be called as a functor

    :param string: 
    :param array: 

    :rtype: mixed 



setFilterChain
++++++++++++++

.. function:: setFilterChain()


    Set filter chain

    :param FilterChain: 

    :rtype: PhpRenderer 



getFilterChain
++++++++++++++

.. function:: getFilterChain()


    Retrieve filter chain for post-filtering script content

    :rtype: FilterChain 



render
++++++

.. function:: render()


    Processes a view script and returns the output.

    :param string|Model: Either the template to use, or a
                                  ViewModel. The ViewModel must have the
                                  template as an option in order to be
                                  valid.
    :param null|array|Traversable: Values to use when rendering. If none
                               provided, uses those in the composed
                               variables container.

    :rtype: string The script output.

    :throws: Exception\DomainException if a ViewModel is passed, but does not
                                  contain a template option.
    :throws: Exception\InvalidArgumentException if the values passed are not
                                           an array or ArrayAccess object
    :throws: Exception\RuntimeException if the template cannot be rendered



setCanRenderTrees
+++++++++++++++++

.. function:: setCanRenderTrees()


    Set flag indicating whether or not we should render trees of view models
    
    If set to true, the View instance will not attempt to render children
    separately, but instead pass the root view model directly to the PhpRenderer.
    It is then up to the developer to render the children from within the
    view script.

    :param bool: 

    :rtype: PhpRenderer 



canRenderTrees
++++++++++++++

.. function:: canRenderTrees()


    Can we render trees, or are we configured to do so?

    :rtype: bool 



addTemplate
+++++++++++

.. function:: addTemplate()


    Add a template to the stack

    :param string: 

    :rtype: PhpRenderer 



__clone
+++++++

.. function:: __clone()


    Make sure View variables are cloned when the view is cloned.

    :rtype: PhpRenderer 



