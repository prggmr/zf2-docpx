.. Mvc/Controller/AbstractActionController.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\AbstractActionController
===============================================

Basic action controller

Methods
+++++++

indexAction
-----------

.. function:: indexAction()


    Default action if none provided

    :rtype: array 



notFoundAction
--------------

.. function:: notFoundAction()


    Action called if matched action does not exist

    :rtype: array 



onDispatch
----------

.. function:: onDispatch()


    Execute the request

    :param MvcEvent: 

    :rtype: mixed 

    :throws: Exception\DomainException 



createHttpNotFoundModel
-----------------------

.. function:: createHttpNotFoundModel()


    Create an HTTP view model representing a "not found" page

    :param HttpResponse: 

    :rtype: ViewModel 



createConsoleNotFoundModel
--------------------------

.. function:: createConsoleNotFoundModel()


    Create a console view model representing a "not found" action

    :param \Zend\Stdlib\ResponseInterface: 

    :rtype: ConsoleModel 



