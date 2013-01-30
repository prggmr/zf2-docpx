.. ServiceManager/Di/DiInstanceManagerProxy.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\ServiceManager\\Di\\DiInstanceManagerProxy
================================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param DiInstanceManager: 
    :param ServiceLocatorInterface: 



hasSharedInstance
+++++++++++++++++

.. function:: hasSharedInstance()


    Determine if we have a shared instance by class or alias

    :param $classOrAlias: 

    :rtype: bool 



getSharedInstance
+++++++++++++++++

.. function:: getSharedInstance()


    Get shared instance

    :param $classOrAlias: 

    :rtype: mixed 



