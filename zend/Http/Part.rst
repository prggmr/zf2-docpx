.. Mvc/Router/Http/Part.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\Http\\Part
=============================

RouteInterface part.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new part route.

    :param mixed: 
    :param bool: 
    :param RoutePluginManager: 
    :param array|null: 

    :throws Exception\InvalidArgumentException: 



factory
-------

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Part 



match
-----

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 
    :param int|null: 

    :rtype: RouteMatch|null 



assemble
--------

.. function:: assemble()


    assemble(): Defined by RouteInterface interface.


    :param array: 
    :param array: 

    :rtype: mixed 

    :throws: Exception\RuntimeException 



getAssembledParams
------------------

.. function:: getAssembledParams()


    getAssembledParams(): defined by RouteInterface interface.


    :rtype: array 



