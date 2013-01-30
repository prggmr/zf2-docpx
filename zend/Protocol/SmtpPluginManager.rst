.. Mail/Protocol/SmtpPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Mail\\Protocol\\SmtpPluginManager
=======================================

Plugin manager implementation for SMTP extensions.

Enforces that SMTP extensions retrieved are instances of Smtp. Additionally,
it registers a number of default extensions available.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the extension loaded is an instance of Smtp.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidArgumentException if invalid



