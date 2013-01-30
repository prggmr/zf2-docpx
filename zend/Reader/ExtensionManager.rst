.. Feed/Reader/ExtensionManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Feed\\Reader\\ExtensionManager
====================================

Plugin manager implementation for feed reader extensions

Validation checks that we have an Extension\AbstractEntry or
Extension\AbstractFeed.

Methods
-------

validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the extension loaded is of a valid type.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



