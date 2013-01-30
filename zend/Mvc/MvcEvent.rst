.. Mvc/MvcEvent.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\MvcEvent
===================

Methods
-------

setApplication
++++++++++++++

.. function:: setApplication()


    Set application instance

    :param ApplicationInterface: 

    :rtype: MvcEvent 



getApplication
++++++++++++++

.. function:: getApplication()


    Get application instance

    :rtype: ApplicationInterface 



getRouter
+++++++++

.. function:: getRouter()


    Get router

    :rtype: Router\RouteStackInterface 



setRouter
+++++++++

.. function:: setRouter()


    Set router

    :param Router\RouteStackInterface: 

    :rtype: MvcEvent 



getRouteMatch
+++++++++++++

.. function:: getRouteMatch()


    Get route match

    :rtype: Router\RouteMatch 



setRouteMatch
+++++++++++++

.. function:: setRouteMatch()


    Set route match

    :param Router\RouteMatch: 

    :rtype: MvcEvent 



getRequest
++++++++++

.. function:: getRequest()


    Get request

    :rtype: Request 



setRequest
++++++++++

.. function:: setRequest()


    Set request

    :param Request: 

    :rtype: MvcEvent 



getResponse
+++++++++++

.. function:: getResponse()


    Get response

    :rtype: Response 



setResponse
+++++++++++

.. function:: setResponse()


    Set response

    :param Response: 

    :rtype: MvcEvent 



setViewModel
++++++++++++

.. function:: setViewModel()


    Set the view model

    :param Model: 

    :rtype: MvcEvent 



getViewModel
++++++++++++

.. function:: getViewModel()


    Get the view model

    :rtype: Model 



getResult
+++++++++

.. function:: getResult()


    Get result

    :rtype: mixed 



setResult
+++++++++

.. function:: setResult()


    Set result

    :param mixed: 

    :rtype: MvcEvent 



isError
+++++++

.. function:: isError()


    Does the event represent an error response?

    :rtype: bool 



setError
++++++++

.. function:: setError()


    Set the error message (indicating error in handling request)

    :param string: 

    :rtype: MvcEvent 



getError
++++++++

.. function:: getError()


    Retrieve the error message, if any

    :rtype: string 



getController
+++++++++++++

.. function:: getController()


    Get the currently registered controller name

    :rtype: string 



setController
+++++++++++++

.. function:: setController()


    Set controller name

    :param string: 

    :rtype: MvcEvent 



getControllerClass
++++++++++++++++++

.. function:: getControllerClass()


    Get controller class

    :rtype: string 



setControllerClass
++++++++++++++++++

.. function:: setControllerClass()


    Set controller class

    :param string: 

    :rtype: MvcEvent 





Constants
---------

EVENT_BOOTSTRAP
+++++++++++++++

EVENT_DISPATCH
++++++++++++++

EVENT_DISPATCH_ERROR
++++++++++++++++++++

EVENT_FINISH
++++++++++++

EVENT_RENDER
++++++++++++

EVENT_RENDER_ERROR
++++++++++++++++++

EVENT_ROUTE
+++++++++++

