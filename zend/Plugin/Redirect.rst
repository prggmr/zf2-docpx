.. Mvc/Controller/Plugin/Redirect.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Controller\\Plugin\\Redirect
=======================================

@todo       allow specifying status code as a default, or as an option to methods

Methods
-------

toRoute
+++++++

.. function:: toRoute()


    Generates a URL based on a route

    :param string: RouteInterface name
    :param array: Parameters to use in url generation, if any
    :param array: RouteInterface-specific options to use in url generation, if any
    :param bool: Whether to reuse matched parameters

    :rtype: Response 

    :throws: Exception\DomainException if composed controller does not implement InjectApplicationEventInterface, or
        router cannot be found in controller event



toUrl
+++++

.. function:: toUrl()


    Redirect to the given URL

    :param string: 

    :rtype: Response 



refresh
+++++++

.. function:: refresh()


    Refresh to current route

    :rtype: string 



getResponse
+++++++++++

.. function:: getResponse()


    Get the response

    :rtype: Response 

    :throws: Exception\DomainException if unable to find response



getEvent
++++++++

.. function:: getEvent()


    Get the event

    :rtype: MvcEvent 

    :throws: Exception\DomainException if unable to find event



