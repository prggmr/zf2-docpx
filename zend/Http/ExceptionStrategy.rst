.. Mvc/View/Http/ExceptionStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\View\\Http\\ExceptionStrategy
========================================

Methods
+++++++

attach
------

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



detach
------

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setDisplayExceptions
--------------------

.. function:: setDisplayExceptions()


    Flag: display exceptions in error pages?

    :param bool: 

    :rtype: ExceptionStrategy 



displayExceptions
-----------------

.. function:: displayExceptions()


    Should we display exceptions in error pages?

    :rtype: bool 



setExceptionTemplate
--------------------

.. function:: setExceptionTemplate()


    Set the exception template

    :param string: 

    :rtype: ExceptionStrategy 



getExceptionTemplate
--------------------

.. function:: getExceptionTemplate()


    Retrieve the exception template

    :rtype: string 



prepareExceptionViewModel
-------------------------

.. function:: prepareExceptionViewModel()


    Create an exception view model, and set the HTTP status code


    :param MvcEvent: 

    :rtype: void 



