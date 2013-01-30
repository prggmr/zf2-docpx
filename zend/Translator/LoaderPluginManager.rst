.. I18n/Translator/LoaderPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\I18n\\Translator\\LoaderPluginManager
===========================================

Plugin manager implementation for translation loaders.

Enforces that loaders retrieved are either instances of
Loader\FileLoaderInterface or Loader\RemoteLoaderInterface. Additionally,
it registers a number of default loaders.

Methods
+++++++

validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin.
    
    Checks that the filter loaded is an instance of
    Loader\FileLoaderInterface or Loader\RemoteLoaderInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



