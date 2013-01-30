.. View/View.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\View
================

Methods
-------

setRequest
++++++++++

.. function:: setRequest()


    Set MVC request object

    :param Request: 

    :rtype: View 



setResponse
+++++++++++

.. function:: setResponse()


    Set MVC response object

    :param Response: 

    :rtype: View 



getRequest
++++++++++

.. function:: getRequest()


    Get MVC request object

    :rtype: null|Request 



getResponse
+++++++++++

.. function:: getResponse()


    Get MVC response object

    :rtype: null|Response 



setEventManager
+++++++++++++++

.. function:: setEventManager()


    Set the event manager instance

    :param EventManagerInterface: 

    :rtype: View 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve the event manager instance
    
    Lazy-loads a default instance if none available

    :rtype: EventManagerInterface 



addRenderingStrategy
++++++++++++++++++++

.. function:: addRenderingStrategy()


    Add a rendering strategy
    
    Expects a callable. Strategies should accept a ViewEvent object, and should
    return a Renderer instance if the strategy is selected.
    
    Internally, the callable provided will be subscribed to the "renderer"
    event, at the priority specified.

    :param callable: 
    :param int: 

    :rtype: View 



addResponseStrategy
+++++++++++++++++++

.. function:: addResponseStrategy()


    Add a response strategy
    
    Expects a callable. Strategies should accept a ViewEvent object. The return
    value will be ignored.
    
    Typical usages for a response strategy are to populate the Response object.
    
    Internally, the callable provided will be subscribed to the "response"
    event, at the priority specified.

    :param callable: 
    :param int: 

    :rtype: View 



render
++++++

.. function:: render()


    Render the provided model.
    
    Internally, the following workflow is used:
    
    - Trigger the "renderer" event to select a renderer.
    - Call the selected renderer with the provided Model
    - Trigger the "response" event

    :param Model: 

    :throws Exception\RuntimeException: 

    :rtype: void 



renderChildren
++++++++++++++

.. function:: renderChildren()


    Loop through children, rendering each

    :param Model: 

    :throws Exception\DomainException: 

    :rtype: void 



getEvent
++++++++

.. function:: getEvent()


    Create and return ViewEvent used by render()

    :rtype: ViewEvent 



