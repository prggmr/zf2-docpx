.. Mvc/Router/Http/Segment.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\Http\\Segment
================================

Segment route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new regex route.

    :param string: 
    :param array: 
    :param array: 



factory
+++++++

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :throws \Zend\Mvc\Router\Exception\InvalidArgumentException: 

    :rtype: Segment 



parseRouteDefinition
++++++++++++++++++++

.. function:: parseRouteDefinition()


    Parse a route definition.

    :param string: 

    :rtype: array 

    :throws: Exception\RuntimeException 



buildRegex
++++++++++

.. function:: buildRegex()


    Build the matching regex from parsed parts.

    :param array: 
    :param array: 
    :param integer: 

    :rtype: string 

    :throws: Exception\RuntimeException 



buildPath
+++++++++

.. function:: buildPath()


    Build a path.

    :param array: 
    :param array: 
    :param bool: 
    :param bool: 

    :rtype: string 

    :throws: Exception\RuntimeException 
    :throws: Exception\InvalidArgumentException 



match
+++++

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 
    :param string|null: 

    :rtype: RouteMatch 



assemble
++++++++

.. function:: assemble()


    assemble(): Defined by RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 



getAssembledParams
++++++++++++++++++

.. function:: getAssembledParams()


    getAssembledParams(): defined by RouteInterface interface.


    :rtype: array 



encode
++++++

.. function:: encode()


    Encode a path segment.

    :param string: 

    :rtype: string 



decode
++++++

.. function:: decode()


    Decode a path segment.

    :param string: 

    :rtype: string 



