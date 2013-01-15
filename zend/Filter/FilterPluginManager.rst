.. /Filter/FilterPluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\FilterPluginManager
*********************************


Plugin manager implementation for the filter chain.

Enforces that filters retrieved are either callbacks or instances of
FilterInterface. Additionally, it registers a number of default filters
available, as well as aliases for them.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the filter loaded is either a valid callback or an instance
    of FilterInterface.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid





