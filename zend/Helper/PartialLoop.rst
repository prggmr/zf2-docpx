.. View/Helper/PartialLoop.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\PartialLoop
===============================

Helper for rendering a template fragment in its own variable scope; iterates
over data provided and renders for each iteration.

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Renders a template fragment within a variable scope distinct from the
    calling View object.
    
    If no arguments are provided, returns object instance.

    :param string: Name of view script
    :param array: Variables to populate in the view

    :rtype: string 

    :throws: Exception\InvalidArgumentException 



getPartialCounter
-----------------

.. function:: getPartialCounter()


    Get the partial counter

    :rtype: int 



