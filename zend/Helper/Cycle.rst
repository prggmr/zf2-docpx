.. View/Helper/Cycle.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\Cycle
=========================

Helper for alternating between set of values

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Add elements to alternate

    :param array: 
    :param string: 

    :rtype: \Zend\View\Helper\Cycle 



assign
++++++

.. function:: assign()


    Add elements to alternate

    :param array: 
    :param string: 

    :rtype: \Zend\View\Helper\Cycle 



setName
+++++++

.. function:: setName()


    Sets actual name of cycle

    :param $name: 

    :rtype: \Zend\View\Helper\Cycle 



getName
+++++++

.. function:: getName()


    Gets actual name of cycle

    :rtype: string 



getAll
++++++

.. function:: getAll()


    Return all elements

    :rtype: array 



toString
++++++++

.. function:: toString()


    Turn helper into string

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Cast to string

    :rtype: string 



next
++++

.. function:: next()


    Move to next value

    :rtype: \Zend\View\Helper\Cycle 



prev
++++

.. function:: prev()


    Move to previous value

    :rtype: \Zend\View\Helper\Cycle 



key
+++

.. function:: key()


    Return iteration number

    :rtype: int 



rewind
++++++

.. function:: rewind()


    Rewind pointer

    :rtype: \Zend\View\Helper\Cycle 



valid
+++++

.. function:: valid()


    Check if element is valid

    :rtype: bool 



current
+++++++

.. function:: current()


    Return  current element

    :rtype: mixed 





Constants
---------

DEFAULT_NAME
++++++++++++

Default name

