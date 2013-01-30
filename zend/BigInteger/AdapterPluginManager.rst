.. Math/BigInteger/AdapterPluginManager.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Math\\BigInteger\\AdapterPluginManager
============================================

Plugin manager implementation for BigInteger adapters.

Enforces that adapters retrieved are instances of
Adapter\AdapterInterface. Additionally, it registers a number of default
adapters available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance of Adapter\AdapterInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



