.. /Barcode/ObjectPluginManager.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\ObjectPluginManager
**********************************


Plugin manager implementation for barcode parsers.

Enforces that barcode parsers retrieved are instances of
Object\AbstractObject. Additionally, it registers a number of default
barcode parsers.



Methods
=======

validatePlugin
--------------

.. function:: validatePlugin($plugin)


    Validate the plugin
    
    Checks that the barcode parser loaded is an instance
    of Object\AbstractObject.

    :param mixed $plugin: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid





