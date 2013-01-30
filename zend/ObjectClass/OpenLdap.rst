.. Ldap/Node/Schema/ObjectClass/OpenLdap.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Ldap\\Node\\Schema\\ObjectClass\\OpenLdap
===============================================

Zend\Ldap\Node\Schema\ObjectClass\OpenLdap provides access to the objectClass
schema information on an OpenLDAP server.

Methods
-------

getName
+++++++

.. function:: getName()


    Gets the objectClass name

    :rtype: string 



getOid
++++++

.. function:: getOid()


    Gets the objectClass OID

    :rtype: string 



getMustContain
++++++++++++++

.. function:: getMustContain()


    Gets the attributes that this objectClass must contain

    :rtype: array 



getMayContain
+++++++++++++

.. function:: getMayContain()


    Gets the attributes that this objectClass may contain

    :rtype: array 



resolveInheritance
++++++++++++++++++

.. function:: resolveInheritance()


    Resolves the inheritance tree

    :rtype: void 



getDescription
++++++++++++++

.. function:: getDescription()


    Gets the objectClass description

    :rtype: string 



getType
+++++++

.. function:: getType()


    Gets the objectClass type

    :rtype: integer 



getParentClasses
++++++++++++++++

.. function:: getParentClasses()


    Returns the parent objectClasses of this class.
    This includes structural, abstract and auxiliary objectClasses

    :rtype: array 



getParents
++++++++++

.. function:: getParents()


    Returns the parent object classes in the inheritance tree if one exists

    :rtype: array of OpenLdap



