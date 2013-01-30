.. Barcode/RendererPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Barcode\\RendererPluginManager
====================================

Plugin manager implementation for barcode renderers.

Enforces that barcode parsers retrieved are instances of
Renderer\AbstractRenderer. Additionally, it registers a number of default
barcode renderers.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the barcode parser loaded is an instance
    of Renderer\AbstractRenderer.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



