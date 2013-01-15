.. /Barcode/RendererPluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\RendererPluginManager
************************************


Plugin manager implementation for barcode renderers.

Enforces that barcode parsers retrieved are instances of
Renderer\AbstractRenderer. Additionally, it registers a number of default
barcode renderers.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the barcode parser loaded is an instance
    of Renderer\AbstractRenderer.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid





