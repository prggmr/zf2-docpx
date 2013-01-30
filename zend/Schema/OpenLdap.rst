.. Ldap/Node/Schema/OpenLdap.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Node\\Schema\\OpenLdap
==================================

Zend\Ldap\Node\Schema\OpenLDAP provides a simple data-container for the Schema node of
an OpenLDAP server.

Methods
+++++++

parseSchema
-----------

.. function:: parseSchema()


    Parses the schema

    :param \Zend\Ldap\Dn: 
    :param \Zend\Ldap\Ldap: 

    :rtype: OpenLdap Provides a fluid interface



getAttributeTypes
-----------------

.. function:: getAttributeTypes()


    Gets the attribute Types

    :rtype: array 



getObjectClasses
----------------

.. function:: getObjectClasses()


    Gets the object classes

    :rtype: array 



getLdapSyntaxes
---------------

.. function:: getLdapSyntaxes()


    Gets the LDAP syntaxes

    :rtype: array 



getMatchingRules
----------------

.. function:: getMatchingRules()


    Gets the matching rules

    :rtype: array 



getMatchingRuleUse
------------------

.. function:: getMatchingRuleUse()


    Gets the matching rule use

    :rtype: array 



loadAttributeTypes
------------------

.. function:: loadAttributeTypes()


    Loads the attribute Types

    :rtype: void 



parseAttributeType
------------------

.. function:: parseAttributeType()


    Parses an attributeType value

    :param string: 

    :rtype: array 



loadObjectClasses
-----------------

.. function:: loadObjectClasses()


    Loads the object classes

    :rtype: void 



parseObjectClass
----------------

.. function:: parseObjectClass()


    Parses an objectClasses value

    :param string: 

    :rtype: array 



resolveInheritance
------------------

.. function:: resolveInheritance()


    Resolves inheritance in objectClasses and attributes

    :param AbstractItem: 
    :param array: 



loadLdapSyntaxes
----------------

.. function:: loadLdapSyntaxes()


    Loads the LDAP syntaxes

    :rtype: void 



parseLdapSyntax
---------------

.. function:: parseLdapSyntax()


    Parses an ldapSyntaxes value

    :param string: 

    :rtype: array 



loadMatchingRules
-----------------

.. function:: loadMatchingRules()


    Loads the matching rules

    :rtype: void 



parseMatchingRule
-----------------

.. function:: parseMatchingRule()


    Parses an matchingRules value

    :param string: 

    :rtype: array 



loadMatchingRuleUse
-------------------

.. function:: loadMatchingRuleUse()


    Loads the matching rule use

    :rtype: void 



parseMatchingRuleUse
--------------------

.. function:: parseMatchingRuleUse()


    Parses an matchingRuleUse value

    :param string: 

    :rtype: array 



ensureNameAttribute
-------------------

.. function:: ensureNameAttribute()


    Ensures that a name element is present and that it is single-values.

    :param array: 



parseLdapSchemaSyntax
---------------------

.. function:: parseLdapSchemaSyntax()


    Parse the given tokens into a data structure

    :param array: 
    :param array: 

    :rtype: void 



tokenizeString
--------------

.. function:: tokenizeString()


    Tokenizes the given value into an array

    :param string: 

    :rtype: array tokens



