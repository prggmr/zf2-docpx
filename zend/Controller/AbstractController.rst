.. Mvc/Controller/AbstractController.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Controller\\AbstractController
=========================================

Abstract controller

Convenience methods for pre-built plugins (@see __call):

Methods
-------

onDispatch
++++++++++

.. function:: onDispatch()


    Execute the request

    :param MvcEvent: 

    :rtype: mixed 



dispatch
++++++++

.. function:: dispatch()


    Dispatch a request

    :param Request: 
    :param null|Response: 

    :rtype: Response|mixed 



getRequest
++++++++++

.. function:: getRequest()


    Get request object

    :rtype: Request 



getResponse
+++++++++++

.. function:: getResponse()


    Get response object

    :rtype: Response 



setEventManager
+++++++++++++++

.. function:: setEventManager()


    Set the event manager instance used by this context

    :param EventManagerInterface: 

    :rtype: AbstractController 



getEventManager
+++++++++++++++

.. function:: getEventManager()


    Retrieve the event manager
    
    Lazy-loads an EventManager instance if none registered.

    :rtype: EventManagerInterface 



setEvent
++++++++

.. function:: setEvent()


    Set an event to use during dispatch
    
    By default, will re-cast to MvcEvent if another event type is provided.

    :param Event: 

    :rtype: void 



getEvent
++++++++

.. function:: getEvent()


    Get the attached event
    
    Will create a new MvcEvent if none provided.

    :rtype: MvcEvent 



setServiceLocator
+++++++++++++++++

.. function:: setServiceLocator()


    Set serviceManager instance

    :param ServiceLocatorInterface: 

    :rtype: void 



getServiceLocator
+++++++++++++++++

.. function:: getServiceLocator()


    Retrieve serviceManager instance

    :rtype: ServiceLocatorInterface 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get plugin manager

    :rtype: PluginManager 



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set plugin manager

    :param PluginManager: 

    :rtype: AbstractController 



plugin
++++++

.. function:: plugin()


    Get plugin instance

    :param string: Name of plugin to return
    :param null|array: Options to pass to plugin constructor (if not already instantiated)

    :rtype: mixed 



__call
++++++

.. function:: __call()


    Method overloading: return/call plugins
    
    If the plugin is a functor, call it, passing the parameters provided.
    Otherwise, return the plugin instance.

    :param string: 
    :param array: 

    :rtype: mixed 



attachDefaultListeners
++++++++++++++++++++++

.. function:: attachDefaultListeners()


    Register the default events for this controller

    :rtype: void 



getMethodFromAction
+++++++++++++++++++

.. function:: getMethodFromAction()


    Transform an "action" token into a method name

    :param string: 

    :rtype: string 



