.. View/Helper/Partial.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Partial
===========================

Helper for rendering a template fragment in its own variable scope.

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Renders a template fragment within a variable scope distinct from the
    calling View object. It proxies to view's render function

    :param string|ModelInterface: Name of view script, or a view model
    :param array|object: Variables to populate in the view

    :rtype: string|Partial 

    :throws: Exception\RuntimeException 



setObjectKey
------------

.. function:: setObjectKey()


    Set object key

    :param string: 

    :rtype: Partial 



getObjectKey
------------

.. function:: getObjectKey()


    Retrieve object key
    
    The objectKey is the variable to which an object in the iterator will be
    assigned.

    :rtype: null|string 



