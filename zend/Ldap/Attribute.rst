.. Ldap/Attribute.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Attribute
=====================

Zend\Ldap\Attribute is a collection of LDAP attribute related functions.

Methods
+++++++

setAttribute
------------

.. function:: setAttribute()


    Sets a LDAP attribute.

    :param array: 
    :param string: 
    :param string|array|\Traversable: 
    :param bool: 

    :rtype: void 



getAttribute
------------

.. function:: getAttribute()


    Gets a LDAP attribute.

    :param array: 
    :param string: 
    :param integer: 

    :rtype: array|mixed 



attributeHasValue
-----------------

.. function:: attributeHasValue()


    Checks if the given value(s) exist in the attribute

    :param array: 
    :param string: 
    :param mixed|array: 

    :rtype: bool 



removeDuplicatesFromAttribute
-----------------------------

.. function:: removeDuplicatesFromAttribute()


    Removes duplicate values from a LDAP attribute

    :param array: 
    :param string: 

    :rtype: void 



removeFromAttribute
-------------------

.. function:: removeFromAttribute()


    Remove given values from a LDAP attribute

    :param array: 
    :param string: 
    :param mixed|array: 

    :rtype: void 



valueToLdap
-----------

.. function:: valueToLdap()


    @param  mixed $value

    :rtype: string|null 



valueFromLdap
-------------

.. function:: valueFromLdap()


    @param  string $value

    :rtype: mixed 



setPassword
-----------

.. function:: setPassword()


    Sets a LDAP password.

    :param array: 
    :param string: 
    :param string: Optional by default MD5
    :param string: Optional



createPassword
--------------

.. function:: createPassword()


    Creates a LDAP password.

    :param string: 
    :param string: 

    :rtype: string 



setDateTimeAttribute
--------------------

.. function:: setDateTimeAttribute()


    Sets a LDAP date/time attribute.

    :param array: 
    :param string: 
    :param integer|array|\Traversable: 
    :param bool: 
    :param bool: 



valueToLdapDateTime
-------------------

.. function:: valueToLdapDateTime()


    @param  integer $value

    :param bool: 

    :rtype: string|null 



getDateTimeAttribute
--------------------

.. function:: getDateTimeAttribute()


    Gets a LDAP date/time attribute.

    :param array: 
    :param string: 
    :param integer: 

    :rtype: array|integer 



valueFromLdapDateTime
---------------------

.. function:: valueFromLdapDateTime()


    @param  string|DateTime $value

    :rtype: integer|null 





Constants
+++++++++

PASSWORD_HASH_MD5
=================

PASSWORD_HASH_SMD5
==================

PASSWORD_HASH_SHA
=================

PASSWORD_HASH_SSHA
==================

PASSWORD_UNICODEPWD
===================

