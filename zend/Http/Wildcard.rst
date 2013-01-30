.. Mvc/Router/Http/Wildcard.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\Http\\Wildcard
=================================

Wildcard route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new wildcard route.

    :param string: 
    :param string: 
    :param array: 



factory
+++++++

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :throws \Zend\Mvc\Router\Exception\InvalidArgumentException: 

    :rtype: Wildcard 



match
+++++

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 
    :param int|null: 

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



