.. Mvc/Router/Http/Query.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Router\\Http\\Query
==============================

Query route.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Create a new wildcard route.

    :param array: 



factory
-------

.. function:: factory()


    factory(): defined by RouteInterface interface.


    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Query 



match
-----

.. function:: match()


    match(): defined by RouteInterface interface.


    :param Request: 
    :param int|null: 

    :rtype: RouteMatch 



recursiveUrldecode
------------------

.. function:: recursiveUrldecode()


    Recursively urldecodes keys and values from an array

    :param array: 

    :rtype: array 



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



