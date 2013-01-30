.. Mvc/Router/Http/Regex.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\Http\\Regex
==============================

Regex route.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new regex route.

    :param string: 
    :param string: 
    :param array: 



factory
-------

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|\Traversable: 

    :throws \Zend\Mvc\Router\Exception\InvalidArgumentException: 

    :rtype: Regex 



match
-----

.. function:: match()


    match(): defined by RouteInterface interface.

    :param Request: 
    :param integer: 

    :rtype: RouteMatch 



assemble
--------

.. function:: assemble()


    assemble(): Defined by RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 



getAssembledParams
------------------

.. function:: getAssembledParams()


    getAssembledParams(): defined by RouteInterface interface.


    :rtype: array 



