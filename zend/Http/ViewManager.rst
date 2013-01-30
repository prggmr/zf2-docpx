.. Mvc/View/Http/ViewManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\View\\Http\\ViewManager
==================================

Prepares the view layer

Instantiates and configures all classes related to the view layer, including
the renderer (and its associated resolver(s) and helper manager), the view
object (and its associated rendering strategies), and the various MVC
strategies and listeners.

Defines and manages the following services:

- ViewHelperManager (also aliased to Zend\View\HelperPluginManager)
- ViewTemplateMapResolver (also aliased to Zend\View\Resolver\TemplateMapResolver)
- ViewTemplatePathStack (also aliased to Zend\View\Resolver\TemplatePathStack)
- ViewResolver (also aliased to Zend\View\Resolver\AggregateResolver and ResolverInterface)
- ViewRenderer (also aliased to Zend\View\Renderer\PhpRenderer and RendererInterface)
- ViewPhpRendererStrategy (also aliased to Zend\View\Strategy\PhpRendererStrategy)
- View (also aliased to Zend\View\View)
- DefaultRenderingStrategy (also aliased to Zend\Mvc\View\Http\DefaultRenderingStrategy)
- ExceptionStrategy (also aliased to Zend\Mvc\View\Http\ExceptionStrategy)
- RouteNotFoundStrategy (also aliased to Zend\Mvc\View\Http\RouteNotFoundStrategy and 404Strategy)
- ViewModel

Methods
-------

attach
++++++

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



onBootstrap
+++++++++++

.. function:: onBootstrap()


    Prepares the view layer

    :param $event: 

    :rtype: void 



getHelperManager
++++++++++++++++

.. function:: getHelperManager()


    Instantiates and configures the renderer's helper manager

    :rtype: \Zend\View\HelperPluginManager 



getResolver
+++++++++++

.. function:: getResolver()


    Instantiates and configures the renderer's resolver

    :rtype: ViewResolver\ResolverInterface 



getRenderer
+++++++++++

.. function:: getRenderer()


    Instantiates and configures the renderer

    :rtype: ViewPhpRenderer 



getRendererStrategy
+++++++++++++++++++

.. function:: getRendererStrategy()


    Instantiates and configures the renderer strategy for the view

    :rtype: PhpRendererStrategy 



getView
+++++++

.. function:: getView()


    Instantiates and configures the view

    :rtype: View 



getLayoutTemplate
+++++++++++++++++

.. function:: getLayoutTemplate()


    Retrieves the layout template name from the configuration

    :rtype: string 



getMvcRenderingStrategy
+++++++++++++++++++++++

.. function:: getMvcRenderingStrategy()


    Instantiates and configures the default MVC rendering strategy

    :rtype: DefaultRenderingStrategy 



getExceptionStrategy
++++++++++++++++++++

.. function:: getExceptionStrategy()


    Instantiates and configures the exception strategy

    :rtype: ExceptionStrategy 



getRouteNotFoundStrategy
++++++++++++++++++++++++

.. function:: getRouteNotFoundStrategy()


    Instantiates and configures the "route not found", or 404, strategy

    :rtype: RouteNotFoundStrategy 



getViewModel
++++++++++++

.. function:: getViewModel()


    Configures the MvcEvent view model to ensure it has the template injected

    :rtype: \Zend\View\Model\ModelInterface 



registerMvcRenderingStrategies
++++++++++++++++++++++++++++++

.. function:: registerMvcRenderingStrategies()


    Register additional mvc rendering strategies
    
    If there is a "mvc_strategies" key of the view manager configuration, loop
    through it. Pull each as a service from the service manager, and, if it
    is a ListenerAggregate, attach it to the view, at priority 100. This
    latter allows each to trigger before the default mvc rendering strategy,
    and for them to trigger in the order they are registered.



registerViewStrategies
++++++++++++++++++++++

.. function:: registerViewStrategies()


    Register additional view strategies
    
    If there is a "strategies" key of the view manager configuration, loop
    through it. Pull each as a service from the service manager, and, if it
    is a ListenerAggregate, attach it to the view, at priority 100. This
    latter allows each to trigger before the default strategy, and for them
    to trigger in the order they are registered.

    :rtype: void 



