.. Mvc/Controller/Plugin/Url.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\Url
==================================

Methods
-------

fromRoute
+++++++++

.. function:: fromRoute()


    Generates a URL based on a route

    :param string: RouteInterface name
    :param array: Parameters to use in url generation, if any
    :param array|bool: RouteInterface-specific options to use in url generation, if any. If boolean, and no fourth argument, used as $reuseMatchedParams
    :param bool: Whether to reuse matched parameters

    :rtype: string 

    :throws: Exception\DomainException if composed controller does not implement InjectApplicationEventInterface, or
        router cannot be found in controller event
    :throws: Exception\RuntimeException if no RouteMatch instance or no matched route name present



