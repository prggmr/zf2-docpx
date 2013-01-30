.. Mvc/Router/Console/Catchall.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\Console\\Catchall
====================================

Segment route.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new simple console route.

    :param array: 

    :rtype: Catchall 



factory
+++++++

.. function:: factory()


    factory(): defined by Route interface.


    :param array|Traversable: 

    :rtype: Simple 



match
+++++

.. function:: match()


    match(): defined by Route interface.


    :param Request: 

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



