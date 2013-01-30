.. Crypt/SymmetricPluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\SymmetricPluginManager
===================================

Plugin manager implementation for the symmetric adapter instances.

Enforces that symmetric adapters retrieved are instances of
Symmetric\SymmetricInterface. Additionally, it registers a number of default
symmetric adapters available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance
    of Symmetric\SymmetricInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



