.. Ldap/Node/RootDse.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Node\\RootDse
=========================

Zend\Ldap\Node\RootDse provides a simple data-container for the RootDse node.

Methods
+++++++

create
------

.. function:: create()


    Factory method to create the RootDse.

    :param \Zend\Ldap\Ldap: 

    :rtype: RootDse 



__construct
-----------

.. function:: __construct()


    Constructor.
    
    Constructor is protected to enforce the use of factory methods.

    :param \Zend\Ldap\Dn: 
    :param array: 



getNamingContexts
-----------------

.. function:: getNamingContexts()


    Gets the namingContexts.

    :rtype: array 



getSubschemaSubentry
--------------------

.. function:: getSubschemaSubentry()


    Gets the subschemaSubentry.

    :rtype: string|null 



supportsVersion
---------------

.. function:: supportsVersion()


    Determines if the version is supported

    :param string|int|array: version(s) to check

    :rtype: bool 



supportsSaslMechanism
---------------------

.. function:: supportsSaslMechanism()


    Determines if the sasl mechanism is supported

    :param string|array: SASL mechanisms to check

    :rtype: bool 



getServerType
-------------

.. function:: getServerType()


    Gets the server type

    :rtype: int 



getSchemaDn
-----------

.. function:: getSchemaDn()


    Returns the schema DN

    :rtype: \Zend\Ldap\Dn 





Constants
+++++++++

SERVER_TYPE_GENERIC
===================

SERVER_TYPE_OPENLDAP
====================

SERVER_TYPE_ACTIVEDIRECTORY
===========================

SERVER_TYPE_EDIRECTORY
======================

