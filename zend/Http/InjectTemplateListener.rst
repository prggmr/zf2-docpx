.. Mvc/View/Http/InjectTemplateListener.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\View\\Http\\InjectTemplateListener
=============================================

Methods
-------

attach
++++++

.. function:: attach()


    Attach listeners

    :param Events: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach listeners

    :param Events: 

    :rtype: void 



injectTemplate
++++++++++++++

.. function:: injectTemplate()


    Inject a template into the view model, if none present
    
    Template is derived from the controller found in the route match, and,
    optionally, the action, if present.

    :param MvcEvent: 

    :rtype: void 



inflectName
+++++++++++

.. function:: inflectName()


    Inflect a name to a normalized value

    :param string: 

    :rtype: string 



deriveModuleNamespace
+++++++++++++++++++++

.. function:: deriveModuleNamespace()


    Determine the top-level namespace of the controller

    :param string: 

    :rtype: string 



deriveControllerSubNamespace
++++++++++++++++++++++++++++

.. function:: deriveControllerSubNamespace()


    @param $namespace

    :rtype: string 



deriveControllerClass
+++++++++++++++++++++

.. function:: deriveControllerClass()


    Determine the name of the controller
    
    Strip the namespace, and the suffix "Controller" if present.

    :param string: 

    :rtype: string 



