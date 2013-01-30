.. Mvc/Router/Console/Simple.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\Console\\Simple
==================================

Segment route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new simple console route.

    :param string: 
    :param array: 
    :param array: 
    :param array: 
    :param null|array|Traversable|FilterChain: 
    :param null|array|Traversable|ValidatorChain: 

    :throws \Zend\Mvc\Exception\InvalidArgumentException: 

    :rtype: \Zend\Mvc\Router\Console\Simple 



factory
+++++++

.. function:: factory()


    factory(): defined by Route interface.


    :param array|Traversable: 

    :throws \Zend\Mvc\Router\Exception\InvalidArgumentException: 

    :rtype: Simple 



parseRouteDefinition
++++++++++++++++++++

.. function:: parseRouteDefinition()


    Parse a route definition.

    :param string: 

    :rtype: array 

    :throws: Exception\InvalidArgumentException 



match
+++++

.. function:: match()


    match(): defined by Route interface.


    :param Request: 
    :param null|int: 

    :rtype: RouteMatch 



assemble
++++++++

.. function:: assemble()


    assemble(): Defined by Route interface.


    :param array: 
    :param array: 

    :rtype: mixed 



getAssembledParams
++++++++++++++++++

.. function:: getAssembledParams()


    getAssembledParams(): defined by Route interface.


    :rtype: array 



