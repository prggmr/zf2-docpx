.. Mvc/Router/Http/Scheme.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\Router\\Http\\Scheme
===============================

Scheme route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new scheme route.

    :param string: 
    :param array: 



factory
+++++++

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :rtype: Scheme 

    :throws: Exception\InvalidArgumentException 



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



getAssembledParams
++++++++++++++++++

.. function:: getAssembledParams()


    getAssembledParams(): defined by RouteInterface interface.


    :rtype: array 



