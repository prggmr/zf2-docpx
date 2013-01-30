.. Navigation/Page/Mvc.php generated using docpx on 01/30/13 03:32am


Zend\\Navigation\\Page\\Mvc
===========================

Represents a page that is defined using controller, action, route
name and route params to assemble the href

Methods
+++++++

isActive
--------

.. function:: isActive()


    Returns whether page should be considered active or not
    
    This method will compare the page properties against the route matches
    composed in the object.

    :param bool: [optional] whether page should be considered
                         active if any child pages are active. Default is
                         false.

    :rtype: bool whether page should be considered active or not



getHref
-------

.. function:: getHref()


    Returns href for this page
    
    This method uses {@link RouteStackInterface} to assemble
    the href based on the page's properties.


    :rtype: string page href

    :throws: Exception\DomainException if no router is set



setAction
---------

.. function:: setAction()


    Sets action name to use when assembling URL


    :param string: action name

    :rtype: Mvc fluent interface, returns self

    :throws: Exception\InvalidArgumentException if invalid $action is given



getAction
---------

.. function:: getAction()


    Returns action name to use when assembling URL


    :rtype: string|null action name



setController
-------------

.. function:: setController()


    Sets controller name to use when assembling URL


    :param string|null: controller name

    :rtype: Mvc fluent interface, returns self

    :throws: Exception\InvalidArgumentException if invalid controller name is given



getController
-------------

.. function:: getController()


    Returns controller name to use when assembling URL


    :rtype: string|null controller name or null



setParams
---------

.. function:: setParams()


    Sets params to use when assembling URL


    :param array|null: [optional] page params. Default is null
                           which sets no params.

    :rtype: Mvc fluent interface, returns self



getParams
---------

.. function:: getParams()


    Returns params to use when assembling URL


    :rtype: array page params



setRoute
--------

.. function:: setRoute()


    Sets route name to use when assembling URL


    :param string: route name to use when assembling URL

    :rtype: Mvc fluent interface, returns self

    :throws: Exception\InvalidArgumentException if invalid $route is given



getRoute
--------

.. function:: getRoute()


    Returns route name to use when assembling URL


    :rtype: string route name



getRouteMatch
-------------

.. function:: getRouteMatch()


    Get the route match.

    :rtype: \Zend\Mvc\Router\RouteMatch 



setRouteMatch
-------------

.. function:: setRouteMatch()


    Set route match object from which parameters will be retrieved

    :param RouteMatch: 

    :rtype: Mvc fluent interface, returns self



getRouter
---------

.. function:: getRouter()


    Get the router.

    :rtype: null|RouteStackInterface 



setRouter
---------

.. function:: setRouter()


    Sets router for assembling URLs


    :param RouteStackInterface: Router

    :rtype: Mvc fluent interface, returns self



setDefaultRouter
----------------

.. function:: setDefaultRouter()


    Sets the default router for assembling URLs.


    :param RouteStackInterface: Router

    :rtype: void 



getDefaultRouter
----------------

.. function:: getDefaultRouter()


    Gets the default router for assembling URLs.

    :rtype: RouteStackInterface 



toArray
-------

.. function:: toArray()


    Returns an array representation of the page

    :rtype: array associative array containing all page properties



