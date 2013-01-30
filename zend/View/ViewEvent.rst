.. View/ViewEvent.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\ViewEvent
=====================

Methods
-------

setModel
++++++++

.. function:: setModel()


    Set the view model

    :param Model: 

    :rtype: ViewEvent 



setRequest
++++++++++

.. function:: setRequest()


    Set the MVC request object

    :param Request: 

    :rtype: ViewEvent 



setResponse
+++++++++++

.. function:: setResponse()


    Set the MVC response object

    :param Response: 

    :rtype: ViewEvent 



setResult
+++++++++

.. function:: setResult()


    Set result of rendering

    :param mixed: 

    :rtype: ViewEvent 



getModel
++++++++

.. function:: getModel()


    Retrieve the view model

    :rtype: null|Model 



setRenderer
+++++++++++

.. function:: setRenderer()


    Set value for renderer

    :param Renderer: 

    :rtype: ViewEvent 



getRenderer
+++++++++++

.. function:: getRenderer()


    Get value for renderer

    :rtype: null|Renderer 



getRequest
++++++++++

.. function:: getRequest()


    Retrieve the MVC request object

    :rtype: null|Request 



getResponse
+++++++++++

.. function:: getResponse()


    Retrieve the MVC response object

    :rtype: null|Response 



getResult
+++++++++

.. function:: getResult()


    Retrieve the result of rendering

    :rtype: mixed 



getParam
++++++++

.. function:: getParam()


    Get event parameter

    :param string: 
    :param mixed: 

    :rtype: mixed 



getParams
+++++++++

.. function:: getParams()


    Get all event parameters

    :rtype: array|\ArrayAccess 



setParams
+++++++++

.. function:: setParams()


    Set event parameters

    :param array|object|ArrayAccess: 

    :rtype: ViewEvent 



setParam
++++++++

.. function:: setParam()


    Set an individual event parameter

    :param string: 
    :param mixed: 

    :rtype: ViewEvent 





Constants
---------

EVENT_RENDERER
++++++++++++++

EVENT_RENDERER_POST
+++++++++++++++++++

EVENT_RESPONSE
++++++++++++++

