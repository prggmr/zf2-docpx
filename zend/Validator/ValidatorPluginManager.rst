.. Validator/ValidatorPluginManager.php generated using docpx on 01/30/13 03:32am


Zend\\Validator\\ValidatorPluginManager
=======================================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor
    
    After invoking parent constructor, add an initializer to inject the
    attached translator, if any, to the currently requested helper.

    :param null|ConfigInterface: 



injectTranslator
----------------

.. function:: injectTranslator()


    Inject a validator instance with the registered translator

    :param ValidatorInterface: 

    :rtype: void 



validatePlugin
--------------

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the validator loaded is an instance of ValidatorInterface.

    :param mixed: 

    :rtype: void 

    :throws: Exception\RuntimeException if invalid



