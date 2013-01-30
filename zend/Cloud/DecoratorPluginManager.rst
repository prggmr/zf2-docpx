.. Tag/Cloud/DecoratorPluginManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Tag\\Cloud\\DecoratorPluginManager
========================================

Plugin manager implementation for decorators.

Enforces that decorators retrieved are instances of
Decorator\DecoratorInterface. Additionally, it registers a number of default
decorators available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the decorator loaded is an instance
    of Decorator\DecoratorInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



