.. Mvc/View/Console/ViewManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\View\\Console\\ViewManager
=====================================

Prepares the view layer for console applications

Methods
-------

onBootstrap
+++++++++++

.. function:: onBootstrap()


    Prepares the view layer
    
    Overriding, as several operations are omitted in the console view
    algorithms, as well as to ensure we pick up the Console variants
    of several listeners and strategies.

    :param $event: 

    :rtype: void 



getMvcRenderingStrategy
+++++++++++++++++++++++

.. function:: getMvcRenderingStrategy()


    Instantiates and configures the default MVC rendering strategy
    
    Overriding to ensure we pick up the MVC rendering strategy for console,
    as well as to ensure that the appropriate aliases are set.

    :rtype: DefaultRenderingStrategy 



getExceptionStrategy
++++++++++++++++++++

.. function:: getExceptionStrategy()


    Instantiates and configures the exception strategy
    
    Overriding to ensure we pick up the exception strategy for console, as
    well as to ensure that the appropriate aliases are set.

    :rtype: ExceptionStrategy 



getRouteNotFoundStrategy
++++++++++++++++++++++++

.. function:: getRouteNotFoundStrategy()


    Instantiates and configures the "route not found", or 404, strategy
    
    Overriding to ensure we pick up the route not found strategy for console,
    as well as to ensure that the appropriate aliases are set.

    :rtype: RouteNotFoundStrategy 



