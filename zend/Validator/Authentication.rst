.. Authentication/Validator/Authentication.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Authentication\\Validator\\Authentication
===============================================

Authentication Validator

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options

    :param mixed: 



getAdapter
++++++++++

.. function:: getAdapter()


    Get Adapter

    :rtype: Zend\Authentication\Adapter\ValidatableAdapterInterface 



setAdapter
++++++++++

.. function:: setAdapter()


    Set Adapter

    :param Zend\Authentication\Adapter\ValidatableAdapterInterface: 

    :rtype: Authentication 



getIdentity
+++++++++++

.. function:: getIdentity()


    Get Identity

    :rtype: mixed 



setIdentity
+++++++++++

.. function:: setIdentity()


    Set Identity

    :param mixed: 

    :rtype: Authentication 



getCredential
+++++++++++++

.. function:: getCredential()


    Get Credential

    :rtype: mixed 



setCredential
+++++++++++++

.. function:: setCredential()


    Set Credential

    :param mixed: 

    :rtype: Authentication 



getService
++++++++++

.. function:: getService()


    Get Service

    :rtype: Zend\Authentication\AuthenticationService 



setService
++++++++++

.. function:: setService()


    Set Service

    :param Zend\Authentication\AuthenticationService: 

    :rtype: Authentication 



isValid
+++++++

.. function:: isValid()


    Is Valid

    :param mixed: 
    :param array: 

    :rtype: bool 





Constants
---------

IDENTITY_NOT_FOUND
++++++++++++++++++

Error codes

IDENTITY_AMBIGUOUS
++++++++++++++++++

CREDENTIAL_INVALID
++++++++++++++++++

UNCATEGORIZED
+++++++++++++

GENERAL
+++++++

