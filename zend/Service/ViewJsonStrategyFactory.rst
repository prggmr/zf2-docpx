.. Mvc/Service/ViewJsonStrategyFactory.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Service\\ViewJsonStrategyFactory
===========================================

Methods
-------

createService
+++++++++++++

.. function:: createService()


    Create and return the JSON view strategy
    
    Retrieves the ViewJsonRenderer service from the service locator, and
    injects it into the constructor for the JSON strategy.
    
    It then attaches the strategy to the View service, at a priority of 100.

    :param ServiceLocatorInterface: 

    :rtype: JsonStrategy 



