.. View/HelperPluginManager.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\HelperPluginManager
===============================

Plugin manager implementation for view helpers

Enforces that helpers retrieved are instances of
Helper\HelperInterface. Additionally, it registers a number of default
helpers.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    After invoking parent constructor, add an initializer to inject the
    attached renderer and translator, if any, to the currently requested helper.

    :param null|ConfigInterface: 



setRenderer
+++++++++++

.. function:: setRenderer()


    Set renderer

    :param Renderer\RendererInterface: 

    :rtype: HelperPluginManager 



getRenderer
+++++++++++

.. function:: getRenderer()


    Retrieve renderer instance

    :rtype: null|Renderer\RendererInterface 



injectRenderer
++++++++++++++

.. function:: injectRenderer()


    Inject a helper instance with the registered renderer

    :param Helper\HelperInterface: 

    :rtype: void 



injectTranslator
++++++++++++++++

.. function:: injectTranslator()


    Inject a helper instance with the registered translator

    :param Helper\HelperInterface: 

    :rtype: void 



validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the helper loaded is an instance of Helper\HelperInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\InvalidHelperException if invalid



