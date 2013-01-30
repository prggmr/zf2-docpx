.. Crypt/Symmetric/PaddingPluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\Symmetric\\PaddingPluginManager
============================================

Plugin manager implementation for the padding adapter instances.

Enforces that padding adapters retrieved are instances of
Padding\PaddingInterface. Additionally, it registers a number of default
padding adapters available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the padding adapter loaded is an instance of Padding\PaddingInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



