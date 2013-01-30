.. Mvc/Router/Console/RouteMatch.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Router\\Console\\RouteMatch
======================================

Part route match.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a part RouteMatch with given parameters and length.

    :param array: 
    :param integer: 



setMatchedRouteName
+++++++++++++++++++

.. function:: setMatchedRouteName()


    setMatchedRouteName(): defined by BaseRouteMatch.


    :param string: 

    :rtype: self 



merge
+++++

.. function:: merge()


    Merge parameters from another match.

    :param RouteMatch: 

    :rtype: RouteMatch 



getLength
+++++++++

.. function:: getLength()


    Get the matched path length.

    :rtype: integer 



