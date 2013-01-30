.. ModuleManager/ModuleEvent.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ModuleManager\\ModuleEvent
================================

Custom event for use with module manager
Composes Module objects

Methods
-------

getModuleName
+++++++++++++

.. function:: getModuleName()


    Get the name of a given module

    :rtype: string 



setModuleName
+++++++++++++

.. function:: setModuleName()


    Set the name of a given module

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ModuleEvent 



getModule
+++++++++

.. function:: getModule()


    Get module object

    :rtype: null|object 



setModule
+++++++++

.. function:: setModule()


    Set module object to compose in this event

    :param object: 

    :throws Exception\InvalidArgumentException: 

    :rtype: ModuleEvent 



getConfigListener
+++++++++++++++++

.. function:: getConfigListener()


    Get the config listener

    :rtype: null|Listener\ConfigMergerInterface 



setConfigListener
+++++++++++++++++

.. function:: setConfigListener()


    Set module object to compose in this event

    :param Listener\ConfigMergerInterface: 

    :rtype: ModuleEvent 





Constants
---------

EVENT_LOAD_MODULES
++++++++++++++++++

Module events triggered by eventmanager

EVENT_LOAD_MODULE_RESOLVE
+++++++++++++++++++++++++

EVENT_LOAD_MODULE
+++++++++++++++++

EVENT_LOAD_MODULES_POST
+++++++++++++++++++++++

