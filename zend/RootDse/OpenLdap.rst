.. Ldap/Node/RootDse/OpenLdap.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Node\\RootDse\\OpenLdap
===================================

Zend\Ldap\Node\RootDse\OpenLdap provides a simple data-container for the
RootDse node of an OpenLDAP server.

Methods
-------

getConfigContext
++++++++++++++++

.. function:: getConfigContext()


    Gets the configContext.

    :rtype: string|null 



getMonitorContext
+++++++++++++++++

.. function:: getMonitorContext()


    Gets the monitorContext.

    :rtype: string|null 



supportsControl
+++++++++++++++

.. function:: supportsControl()


    Determines if the control is supported

    :param string|array: control oid(s) to check

    :rtype: bool 



supportsExtension
+++++++++++++++++

.. function:: supportsExtension()


    Determines if the extension is supported

    :param string|array: oid(s) to check

    :rtype: bool 



supportsFeature
+++++++++++++++

.. function:: supportsFeature()


    Determines if the feature is supported

    :param string|array: feature oid(s) to check

    :rtype: bool 



getServerType
+++++++++++++

.. function:: getServerType()


    Gets the server type

    :rtype: int 



