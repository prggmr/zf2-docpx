.. View/Renderer/ConsoleRenderer.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Renderer\\ConsoleRenderer
=====================================

Abstract class for Zend_View to help enforce private constructs.

Note: all private variables in this class are prefixed with "__". This is to
mark them as part of the internal implementation, and thus prevent conflict
with variables injected into the renderer.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.


    :param array: Configuration key-value pairs.



setResolver
-----------

.. function:: setResolver()



getEngine
---------

.. function:: getEngine()


    Return the template engine object
    
    Returns the object instance, as it is its own template engine

    :rtype: PhpRenderer 



init
----

.. function:: init()


    Allow custom object initialization when extending Zend_View_Abstract or
    Zend_View
    
    Triggered by {@link __construct() the constructor} as its final action.

    :rtype: void 



setFilterChain
--------------

.. function:: setFilterChain()


    Set filter chain

    :param FilterChain: 

    :rtype: ConsoleRenderer 



getFilterChain
--------------

.. function:: getFilterChain()


    Retrieve filter chain for post-filtering script content

    :rtype: FilterChain 



render
------

.. function:: render()


    Recursively processes all ViewModels and returns output.

    :param string|ModelInterface: A ViewModel instance.
    :param null|array|\Traversable: Values to use when rendering. If none
                                              provided, uses those in the composed
                                              variables container.

    :rtype: string Console output.



canRenderTrees
--------------

.. function:: canRenderTrees()


    @see Zend\View\Renderer\TreeRendererInterface

    :rtype: bool 



