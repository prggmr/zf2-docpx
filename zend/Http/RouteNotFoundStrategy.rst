.. Mvc/View/Http/RouteNotFoundStrategy.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\View\\Http\\RouteNotFoundStrategy
============================================

Methods
+++++++

attach
------

.. function:: attach()


    Attach the aggregate to the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setDisplayExceptions
--------------------

.. function:: setDisplayExceptions()


    Set value indicating whether or not to display exceptions related to a not-found condition

    :param bool: 

    :rtype: RouteNotFoundStrategy 



displayExceptions
-----------------

.. function:: displayExceptions()


    Should we display exceptions related to a not-found condition?

    :rtype: bool 



detach
------

.. function:: detach()


    Detach aggregate listeners from the specified event manager

    :param EventManagerInterface: 

    :rtype: void 



setDisplayNotFoundReason
------------------------

.. function:: setDisplayNotFoundReason()


    Set value indicating whether or not to display the reason for a not-found condition

    :param bool: 

    :rtype: RouteNotFoundStrategy 



displayNotFoundReason
---------------------

.. function:: displayNotFoundReason()


    Should we display the reason for a not-found condition?

    :rtype: bool 



setNotFoundTemplate
-------------------

.. function:: setNotFoundTemplate()


    Get template for not found conditions

    :param string: 

    :rtype: RouteNotFoundStrategy 



getNotFoundTemplate
-------------------

.. function:: getNotFoundTemplate()


    Get template for not found conditions

    :rtype: string 



detectNotFoundError
-------------------

.. function:: detectNotFoundError()


    Detect if an error is a 404 condition
    
    If a "controller not found" or "invalid controller" error type is
    encountered, sets the response status code to 404.

    :param MvcEvent: 

    :rtype: void 



prepareNotFoundViewModel
------------------------

.. function:: prepareNotFoundViewModel()


    Create and return a 404 view model

    :param MvcEvent: 

    :rtype: void 



injectNotFoundReason
--------------------

.. function:: injectNotFoundReason()


    Inject the not-found reason into the model
    
    If $displayNotFoundReason is enabled, checks to see if $reason is set,
    and, if so, injects it into the model. If not, it injects
    Application::ERROR_CONTROLLER_CANNOT_DISPATCH.

    :param ViewModel: 

    :rtype: void 



injectException
---------------

.. function:: injectException()


    Inject the exception message into the model
    
    If $displayExceptions is enabled, and an exception is found in the
    event, inject it into the model.

    :param ViewModel: 
    :param MvcEvent: 

    :rtype: void 



injectController
----------------

.. function:: injectController()


    Inject the controller and controller class into the model
    
    If either $displayExceptions or $displayNotFoundReason are enabled,
    injects the controllerClass from the MvcEvent. It checks to see if a
    controller is present in the MvcEvent, and, if not, grabs it from
    the route match if present; if a controller is found, it injects it into
    the model.

    :param ViewModel: 
    :param MvcEvent: 

    :rtype: void 



