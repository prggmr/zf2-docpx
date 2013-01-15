.. /Feed/Writer/ExtensionManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\ExtensionManager
************************************


Plugin manager implementation for feed writer extensions

Validation checks that we have an Entry, Feed, or Extension\AbstractRenderer.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the extension loaded is of a valid type.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid





