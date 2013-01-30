.. Barcode/ObjectPluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\ObjectPluginManager
==================================

Plugin manager implementation for barcode parsers.

Enforces that barcode parsers retrieved are instances of
Object\AbstractObject. Additionally, it registers a number of default
barcode parsers.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the barcode parser loaded is an instance
    of Object\AbstractObject.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



