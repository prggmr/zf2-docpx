.. Mvc/Router/Http/Literal.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Router\\Http\\Literal
================================

Literal route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new literal route.

    :param string: 
    :param array: 



factory
+++++++

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Literal 



match
+++++

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 
    :param int|null: 

    :rtype: RouteMatch|null 



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



