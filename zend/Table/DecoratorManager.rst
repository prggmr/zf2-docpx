.. Text/Table/DecoratorManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Text\\Table\\DecoratorManager
===================================

Plugin manager implementation for text table decorators

Enforces that decorators retrieved are instances of
Decorator\DecoratorInterface. Additionally, it registers a number of default
decorators.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the decorator loaded is an instance of Decorator\DecoratorInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidDecoratorException if invalid



