.. ServiceManager/Di/DiServiceFactory.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\ServiceManager\\Di\\DiServiceFactory
==========================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param \Zend\Di\Di: 
    :param null|\Zend\Di\InstanceManager: 
    :param array: 
    :param string: 



createService
+++++++++++++

.. function:: createService()


    Create service

    :param ServiceLocatorInterface: 

    :rtype: object 



get
+++

.. function:: get()


    Override, as we want it to use the functionality defined in the proxy

    :param string: 
    :param array: 

    :rtype: object 

    :throws: Exception\ServiceNotFoundException 





Constants
---------

USE_SL_BEFORE_DI
++++++++++++++++

USE_SL_AFTER_DI
+++++++++++++++

USE_SL_NONE
+++++++++++

