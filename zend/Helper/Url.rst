.. View/Helper/Url.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Url
=======================

Helper for making easy links and getting urls that depend on the routes and router.

Methods
-------

setRouter
+++++++++

.. function:: setRouter()


    Set the router to use for assembling.

    :param RouteStackInterface: 

    :rtype: Url 



setRouteMatch
+++++++++++++

.. function:: setRouteMatch()


    Set route match returned by the router.

    :param RouteMatch: 

    :rtype: self 



__invoke
++++++++

.. function:: __invoke()


    Generates an url given the name of a route.


    :param string: Name of the route
    :param array: Parameters for the link
    :param array: Options for the route
    :param bool: Whether to reuse matched parameters

    :rtype: string Url                  For the link href attribute

    :throws: Exception\RuntimeException If no RouteStackInterface was provided
    :throws: Exception\RuntimeException If no RouteMatch was provided
    :throws: Exception\RuntimeException If RouteMatch didn't contain a matched route name



