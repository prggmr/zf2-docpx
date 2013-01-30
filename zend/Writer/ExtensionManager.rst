.. Feed/Writer/ExtensionManager.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Writer\\ExtensionManager
====================================

Plugin manager implementation for feed writer extensions

Validation checks that we have an Entry, Feed, or Extension\AbstractRenderer.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the extension loaded is of a valid type.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



