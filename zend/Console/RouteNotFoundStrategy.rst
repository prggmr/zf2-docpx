.. Mvc/View/Console/RouteNotFoundStrategy.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\View\\Console\\RouteNotFoundStrategy
===============================================

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



setDisplayNotFoundReason
++++++++++++++++++++++++

.. function:: setDisplayNotFoundReason()


    Set flag indicating whether or not to display the routing failure

    :param bool: 

    :rtype: RouteNotFoundStrategy 



displayNotFoundReason
+++++++++++++++++++++

.. function:: displayNotFoundReason()


    Do we display the routing failure?

    :rtype: bool 



handleRouteNotFoundError
++++++++++++++++++++++++

.. function:: handleRouteNotFoundError()


    Detect if an error is a route not found condition
    
    If a "controller not found" or "invalid controller" error type is
    encountered, sets the response status code to 404.

    :param MvcEvent: 

    :throws RuntimeException: 
    :throws ServiceNotFoundException: 

    :rtype: void 



getConsoleBanner
++++++++++++++++

.. function:: getConsoleBanner()


    Build Console application banner text by querying currently loaded
    modules.

    :param ModuleManagerInterface: 
    :param ConsoleAdapter: 

    :rtype: string 



getConsoleUsage
+++++++++++++++

.. function:: getConsoleUsage()


    Build Console usage information by querying currently loaded modules.

    :param ConsoleAdapter: 
    :param string: 
    :param ModuleManagerInterface: 

    :rtype: string 

    :throws: RuntimeException 



renderTable
+++++++++++

.. function:: renderTable()


    Render a text table containing the data provided, that will fit inside console window's width.

    :param $data: 
    :param $cols: 
    :param $consoleWidth: 

    :rtype: string 



reportNotFoundReason
++++++++++++++++++++

.. function:: reportNotFoundReason()


    Report the 404 reason and/or exceptions

    :param \Zend\EventManager\EventInterface: 

    :rtype: string 



