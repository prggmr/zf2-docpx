.. Mvc/Router/Http/TreeRouteStack.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Router\\Http\\TreeRouteStack
=======================================

Tree search implementation.

Methods
-------

init
++++

.. function:: init()


    init(): defined by SimpleRouteStack.




addRoute
++++++++

.. function:: addRoute()


    addRoute(): defined by RouteStackInterface interface.


    :param string: 
    :param mixed: 
    :param integer: 

    :rtype: TreeRouteStack 



routeFromArray
++++++++++++++

.. function:: routeFromArray()


    routeFromArray(): defined by SimpleRouteStack.


    :param array|\Traversable: 

    :rtype: RouteInterface 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



match
+++++

.. function:: match()


    match(): defined by \Zend\Mvc\Router\RouteInterface


    :param Request: 

    :rtype: RouteMatch 



assemble
++++++++

.. function:: assemble()


    assemble(): defined by \Zend\Mvc\Router\RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



setBaseUrl
++++++++++

.. function:: setBaseUrl()


    Set the base URL.

    :param string: 

    :rtype: self 



getBaseUrl
++++++++++

.. function:: getBaseUrl()


    Get the base URL.

    :rtype: string 



setRequestUri
+++++++++++++

.. function:: setRequestUri()


    Set the request URI.

    :param HttpUri: 

    :rtype: TreeRouteStack 



getRequestUri
+++++++++++++

.. function:: getRequestUri()


    Get the request URI.

    :rtype: HttpUri 



