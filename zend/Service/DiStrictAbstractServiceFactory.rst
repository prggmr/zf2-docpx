.. Mvc/Service/DiStrictAbstractServiceFactory.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\Service\\DiStrictAbstractServiceFactory
==================================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param Di $di

    :param string: 



setAllowedServiceNames
++++++++++++++++++++++

.. function:: setAllowedServiceNames()


    @param array $allowedServiceNames



getAllowedServiceNames
++++++++++++++++++++++

.. function:: getAllowedServiceNames()


    @return array



createServiceWithName
+++++++++++++++++++++

.. function:: createServiceWithName()


    {@inheritDoc}
    
    Allows creation of services only when in a whitelist



get
+++

.. function:: get()


    Overrides Zend\Di to allow the given serviceLocator's services to be reused by Di itself
    
    {@inheritDoc}




canCreateServiceWithName
++++++++++++++++++++++++

.. function:: canCreateServiceWithName()


    {@inheritDoc}
    
    Allows creation of services only when in a whitelist





Constants
---------

USE_SL_BEFORE_DI
++++++++++++++++

USE_SL_AFTER_DI
+++++++++++++++

USE_SL_NONE
+++++++++++

