.. Paginator/ScrollingStylePluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Paginator\\ScrollingStylePluginManager
============================================

Plugin manager implementation for scrolling style adapters

Enforces that adapters retrieved are instances of
ScrollingStyle\ScrollingStyleInterface. Additionally, it registers a number
of default adapters available.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the adapter loaded is an instance of ScrollingStyle\ScrollingStyleInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



