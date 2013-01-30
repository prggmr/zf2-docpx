.. Test/PHPUnit/Controller/AbstractControllerTestCase.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Test\\PHPUnit\\Controller\\AbstractControllerTestCase
===========================================================

Methods
-------

setUp
+++++

.. function:: setUp()


    Reset the application for isolation



getTraceError
+++++++++++++

.. function:: getTraceError()


    Get the trace error flag

    :rtype: boolean 



setTraceError
+++++++++++++

.. function:: setTraceError()


    Set the trace error flag

    :param boolean: 

    :rtype: AbstractControllerTestCase 



getUseConsoleRequest
++++++++++++++++++++

.. function:: getUseConsoleRequest()


    Get the usage of the console router or not

    :rtype: boolean $boolean



setUseConsoleRequest
++++++++++++++++++++

.. function:: setUseConsoleRequest()


    Set the usage of the console router or not

    :param boolean: 

    :rtype: AbstractControllerTestCase 



getApplicationConfig
++++++++++++++++++++

.. function:: getApplicationConfig()


    Get the application config

    :rtype: array the application config



setApplicationConfig
++++++++++++++++++++

.. function:: setApplicationConfig()


    Set the application config

    :param array: 

    :throws LogicException: 



getApplication
++++++++++++++

.. function:: getApplication()


    Get the application object

    :rtype: \Zend\Mvc\ApplicationInterface 



getApplicationServiceLocator
++++++++++++++++++++++++++++

.. function:: getApplicationServiceLocator()


    Get the service manager of the application object

    :rtype: \Zend\ServiceManager\ServiceManager 



getRequest
++++++++++

.. function:: getRequest()


    Get the application request object

    :rtype: \Zend\Stdlib\RequestInterface 



getResponse
+++++++++++

.. function:: getResponse()


    Get the application response object

    :rtype: ResponseInterface 



url
+++

.. function:: url()


    Set the request URL

    :param string: 

    :rtype: AbstractControllerTestCase 



dispatch
++++++++

.. function:: dispatch()


    Dispatch the MVC with an URL
    Accept a HTTP (simulate a customer action) or console route.
    
    The URL provided set the request URI in the request object.

    :param string: 

    :throws \Exception: 



reset
+++++

.. function:: reset()


    Reset the request

    :rtype: AbstractControllerTestCase 



triggerApplicationEvent
+++++++++++++++++++++++

.. function:: triggerApplicationEvent()


    Trigger an application event

    :param string: 

    :rtype: \Zend\EventManager\ResponseCollection 



assertModulesLoaded
+++++++++++++++++++

.. function:: assertModulesLoaded()


    Assert modules were loaded with the module manager

    :param array: 



assertNotModulesLoaded
++++++++++++++++++++++

.. function:: assertNotModulesLoaded()


    Assert modules were not loaded with the module manager

    :param array: 



getResponseStatusCode
+++++++++++++++++++++

.. function:: getResponseStatusCode()


    Retrieve the response status code

    :rtype: int 



assertResponseStatusCode
++++++++++++++++++++++++

.. function:: assertResponseStatusCode()


    Assert response status code

    :param int: 



assertNotResponseStatusCode
+++++++++++++++++++++++++++

.. function:: assertNotResponseStatusCode()


    Assert not response status code

    :param int: 



assertApplicationException
++++++++++++++++++++++++++

.. function:: assertApplicationException()


    Assert the application exception and message

    :param $type: exception type
    :param $message: exception message



getControllerFullClassName
++++++++++++++++++++++++++

.. function:: getControllerFullClassName()


    Get the full current controller class name

    :rtype: string 



assertModuleName
++++++++++++++++

.. function:: assertModuleName()


    Assert that the application route match used the given module

    :param string: 



assertNotModuleName
+++++++++++++++++++

.. function:: assertNotModuleName()


    Assert that the application route match used NOT the given module

    :param string: 



assertControllerClass
+++++++++++++++++++++

.. function:: assertControllerClass()


    Assert that the application route match used the given controller class

    :param string: 



assertNotControllerClass
++++++++++++++++++++++++

.. function:: assertNotControllerClass()


    Assert that the application route match used NOT the given controller class

    :param string: 



assertControllerName
++++++++++++++++++++

.. function:: assertControllerName()


    Assert that the application route match used the given controller name

    :param string: 



assertNotControllerName
+++++++++++++++++++++++

.. function:: assertNotControllerName()


    Assert that the application route match used NOT the given controller name

    :param string: 



assertActionName
++++++++++++++++

.. function:: assertActionName()


    Assert that the application route match used the given action

    :param string: 



assertNotActionName
+++++++++++++++++++

.. function:: assertNotActionName()


    Assert that the application route match used NOT the given action

    :param string: 



assertMatchedRouteName
++++++++++++++++++++++

.. function:: assertMatchedRouteName()


    Assert that the application route match used the given route name

    :param string: 



assertNotMatchedRouteName
+++++++++++++++++++++++++

.. function:: assertNotMatchedRouteName()


    Assert that the application route match used NOT the given route name

    :param string: 



