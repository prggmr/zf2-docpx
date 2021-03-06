.. Ldap/Node/Schema/AttributeType/OpenLdap.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Ldap\\Node\\Schema\\AttributeType\\OpenLdap
=================================================

Zend\Ldap\Node\Schema\AttributeType\OpenLdap provides access to the attribute type
schema information on an OpenLDAP server.

Methods
-------

getName
+++++++

.. function:: getName()


    Gets the attribute name

    :rtype: string 



getOid
++++++

.. function:: getOid()


    Gets the attribute OID

    :rtype: string 



getSyntax
+++++++++

.. function:: getSyntax()


    Gets the attribute syntax

    :rtype: string 



getMaxLength
++++++++++++

.. function:: getMaxLength()


    Gets the attribute maximum length

    :rtype: int|null 



isSingleValued
++++++++++++++

.. function:: isSingleValued()


    Returns if the attribute is single-valued.

    :rtype: bool 



getDescription
++++++++++++++

.. function:: getDescription()


    Gets the attribute description

    :rtype: string 



getParent
+++++++++

.. function:: getParent()


    Returns the parent attribute type in the inheritance tree if one exists

    :rtype: OpenLdap|null 



