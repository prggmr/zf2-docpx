.. Mvc/Router/PriorityList.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Router\\PriorityList
===============================

Priority list

Methods
-------

insert
++++++

.. function:: insert()


    Insert a new route.

    :param string: 
    :param RouteInterface: 
    :param integer: 

    :rtype: void 



remove
++++++

.. function:: remove()


    Remove a route.

    :param string: 

    :rtype: void 



clear
+++++

.. function:: clear()


    Remove all routes.

    :rtype: void 



get
+++

.. function:: get()


    Get a route.

    :param string: 

    :rtype: RouteInterface 



sort
++++

.. function:: sort()


    Sort all routes.

    :rtype: void 



compare
+++++++

.. function:: compare()


    Compare the priority of two routes.

    :param array: 
    :param array: 

    :rtype: integer 



rewind
++++++

.. function:: rewind()


    rewind(): defined by Iterator interface.


    :rtype: void 



current
+++++++

.. function:: current()


    current(): defined by Iterator interface.


    :rtype: RouteInterface 



key
+++

.. function:: key()


    key(): defined by Iterator interface.


    :rtype: string 



next
++++

.. function:: next()


    next(): defined by Iterator interface.


    :rtype: RouteInterface 



valid
+++++

.. function:: valid()


    valid(): defined by Iterator interface.


    :rtype: bool 



count
+++++

.. function:: count()


    count(): defined by Countable interface.


    :rtype: integer 



