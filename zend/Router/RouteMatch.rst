.. Mvc/Router/RouteMatch.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\RouteMatch
=============================

RouteInterface match.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a RouteMatch with given parameters.

    :param array: 



setMatchedRouteName
-------------------

.. function:: setMatchedRouteName()


    Set name of matched route.

    :param string: 

    :rtype: RouteMatch 



getMatchedRouteName
-------------------

.. function:: getMatchedRouteName()


    Get name of matched route.

    :rtype: string 



setParam
--------

.. function:: setParam()


    Set a parameter.

    :param string: 
    :param mixed: 

    :rtype: RouteMatch 



getParams
---------

.. function:: getParams()


    Get all parameters.

    :rtype: array 



getParam
--------

.. function:: getParam()


    Get a specific parameter.

    :param string: 
    :param mixed: 

    :rtype: mixed 



