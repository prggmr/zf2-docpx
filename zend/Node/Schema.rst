.. Ldap/Node/Schema.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Ldap\\Node\\Schema
========================

Zend\Ldap\Node\Schema provides a simple data-container for the Schema node.

Methods
-------

create
++++++

.. function:: create()


    Factory method to create the Schema node.

    :param \Zend\Ldap\Ldap: 

    :rtype: Schema 



__construct
+++++++++++

.. function:: __construct()


    Constructor.
    
    Constructor is protected to enforce the use of factory methods.

    :param \Zend\Ldap\Dn: 
    :param array: 
    :param \Zend\Ldap\Ldap: 



parseSchema
+++++++++++

.. function:: parseSchema()


    Parses the schema

    :param \Zend\Ldap\Dn: 
    :param \Zend\Ldap\Ldap: 

    :rtype: Schema Provides a fluid interface



getAttributeTypes
+++++++++++++++++

.. function:: getAttributeTypes()


    Gets the attribute Types

    :rtype: array 



getObjectClasses
++++++++++++++++

.. function:: getObjectClasses()


    Gets the object classes

    :rtype: array 





Constants
---------

OBJECTCLASS_TYPE_UNKNOWN
++++++++++++++++++++++++

OBJECTCLASS_TYPE_STRUCTURAL
+++++++++++++++++++++++++++

OBJECTCLASS_TYPE_ABSTRACT
+++++++++++++++++++++++++

OBJECTCLASS_TYPE_AUXILIARY
++++++++++++++++++++++++++

