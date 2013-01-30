.. Ldap/Node/Schema/ObjectClass/ActiveDirectory.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Node\\Schema\\ObjectClass\\ActiveDirectory
======================================================

Zend\Ldap\Node\Schema\ObjectClass\ActiveDirectory provides access to the objectClass
schema information on an Active Directory server.

Methods
+++++++

getName
-------

.. function:: getName()


    Gets the objectClass name

    :rtype: string 



getOid
------

.. function:: getOid()


    Gets the objectClass OID

    :rtype: string 



getMustContain
--------------

.. function:: getMustContain()


    Gets the attributes that this objectClass must contain

    :rtype: array 



getMayContain
-------------

.. function:: getMayContain()


    Gets the attributes that this objectClass may contain

    :rtype: array 



getDescription
--------------

.. function:: getDescription()


    Gets the objectClass description

    :rtype: string 



getType
-------

.. function:: getType()


    Gets the objectClass type

    :rtype: integer 



getParentClasses
----------------

.. function:: getParentClasses()


    Returns the parent objectClasses of this class.
    This includes structural, abstract and auxiliary objectClasses

    :rtype: array 



