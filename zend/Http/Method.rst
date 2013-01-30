.. Mvc/Router/Http/Method.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\Http\\Method
===============================

Method route.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new method route.

    :param string: 
    :param array: 



factory
-------

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Method 



match
-----

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 

    :rtype: RouteMatch|null 



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



