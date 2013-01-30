.. Mvc/Router/SimpleRouteStack.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\SimpleRouteStack
===================================

Simple route stack implementation.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new simple route stack.

    :param RoutePluginManager: 



factory
-------

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|\Traversable: 

    :rtype: SimpleRouteStack 

    :throws: Exception\InvalidArgumentException 



init
----

.. function:: init()


    Init method for extending classes.

    :rtype: void 



setRoutePluginManager
---------------------

.. function:: setRoutePluginManager()


    Set the route plugin manager.

    :param RoutePluginManager: 

    :rtype: SimpleRouteStack 



getRoutePluginManager
---------------------

.. function:: getRoutePluginManager()


    Get the route plugin manager.

    :rtype: RoutePluginManager 



addRoutes
---------

.. function:: addRoutes()


    addRoutes(): defined by RouteStackInterface interface.


    :param array|\Traversable: 

    :rtype: SimpleRouteStack 

    :throws: Exception\InvalidArgumentException 



addRoute
--------

.. function:: addRoute()


    addRoute(): defined by RouteStackInterface interface.


    :param string: 
    :param mixed: 
    :param integer: 

    :rtype: SimpleRouteStack 



removeRoute
-----------

.. function:: removeRoute()


    removeRoute(): defined by RouteStackInterface interface.


    :param string: 

    :rtype: SimpleRouteStack 



setRoutes
---------

.. function:: setRoutes()


    setRoutes(): defined by RouteStackInterface interface.

    :param array|\Traversable: 

    :rtype: SimpleRouteStack 



getRoutes
---------

.. function:: getRoutes()


    Get the added routes

    :rtype: Traversable list of all routes



hasRoute
--------

.. function:: hasRoute()


    Check if a route with a specific name exists

    :param string: 

    :rtype: boolean true if route exists



getRoute
--------

.. function:: getRoute()


    Get a route by name

    :param string: 

    :rtype: RouteInterface the route



setDefaultParams
----------------

.. function:: setDefaultParams()


    Set a default parameters.

    :param array: 

    :rtype: SimpleRouteStack 



setDefaultParam
---------------

.. function:: setDefaultParam()


    Set a default parameter.

    :param string: 
    :param mixed: 

    :rtype: SimpleRouteStack 



routeFromArray
--------------

.. function:: routeFromArray()


    Create a route from array specifications.

    :param array|\Traversable: 

    :rtype: SimpleRouteStack 

    :throws: Exception\InvalidArgumentException 



match
-----

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 

    :rtype: RouteMatch|null 



assemble
--------

.. function:: assemble()


    assemble(): defined by RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



