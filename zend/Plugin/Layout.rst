.. Mvc/Controller/Plugin/Layout.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\Plugin\\Layout
=====================================

Methods
+++++++

setTemplate
-----------

.. function:: setTemplate()


    Set the layout template

    :param string: 

    :rtype: Layout 



__invoke
--------

.. function:: __invoke()


    Invoke as a functor
    
    If no arguments are given, grabs the "root" or "layout" view model.
    Otherwise, attempts to set the template for that view model.

    :param null|string: 

    :rtype: Model|Layout 



getEvent
--------

.. function:: getEvent()


    Get the event

    :rtype: MvcEvent 

    :throws: Exception\DomainException if unable to find event



getViewModel
------------

.. function:: getViewModel()


    Retrieve the root view model from the event

    :rtype: Model 

    :throws: Exception\DomainException 



