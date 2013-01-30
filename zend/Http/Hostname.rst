.. Mvc/Router/Http/Hostname.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\Http\\Hostname
=================================

Hostname route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new hostname route.

    :param string: 
    :param array: 
    :param array: 



factory
+++++++

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|\Traversable: 

    :throws \Zend\Mvc\Router\Exception\InvalidArgumentException: 

    :rtype: Hostname 



match
+++++

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 

    :rtype: RouteMatch 



assemble
++++++++

.. function:: assemble()


    assemble(): Defined by RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\InvalidArgumentException 



getAssembledParams
++++++++++++++++++

.. function:: getAssembledParams()


    getAssembledParams(): defined by RouteInterface interface.


    :rtype: array 



