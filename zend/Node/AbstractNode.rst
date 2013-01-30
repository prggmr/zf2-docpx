.. Ldap/Node/AbstractNode.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Node\\AbstractNode
==============================

This class provides a base implementation for LDAP nodes

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.
    
    Constructor is protected to enforce the use of factory methods.

    :param \Zend\Ldap\Dn: 
    :param array: 
    :param bool: 



loadData
--------

.. function:: loadData()


    @param array   $data

    :param bool: 



reload
------

.. function:: reload()


    Reload node attributes from LDAP.
    
    This is an online method.

    :param \Zend\Ldap\Ldap: 

    :rtype: AbstractNode Provides a fluid interface



_getDn
------

.. function:: _getDn()


    Gets the DN of the current node as a Zend\Ldap\Dn.
    
    This is an offline method.

    :rtype: \Zend\Ldap\Dn 



getDn
-----

.. function:: getDn()


    Gets the DN of the current node as a Zend\Ldap\Dn.
    The method returns a clone of the node's DN to prohibit modification.
    
    This is an offline method.

    :rtype: \Zend\Ldap\Dn 



getDnString
-----------

.. function:: getDnString()


    Gets the DN of the current node as a string.
    
    This is an offline method.

    :param string: 

    :rtype: string 



getDnArray
----------

.. function:: getDnArray()


    Gets the DN of the current node as an array.
    
    This is an offline method.

    :param string: 

    :rtype: array 



getRdnString
------------

.. function:: getRdnString()


    Gets the RDN of the current node as a string.
    
    This is an offline method.

    :param string: 

    :rtype: string 



getRdnArray
-----------

.. function:: getRdnArray()


    Gets the RDN of the current node as an array.
    
    This is an offline method.

    :param string: 

    :rtype: array 



getObjectClass
--------------

.. function:: getObjectClass()


    Gets the objectClass of the node

    :rtype: array 



getAttributes
-------------

.. function:: getAttributes()


    Gets all attributes of node.
    
    The collection contains all attributes.
    
    This is an offline method.

    :param bool: 

    :rtype: array 



toString
--------

.. function:: toString()


    Returns the DN of the current node. {@see getDnString()}

    :rtype: string 



__toString
----------

.. function:: __toString()


    Cast to string representation {@see toString()}

    :rtype: string 



toArray
-------

.. function:: toArray()


    Returns an array representation of the current node

    :param bool: 

    :rtype: array 



toJson
------

.. function:: toJson()


    Returns a JSON representation of the current node

    :param bool: 

    :rtype: string 



getData
-------

.. function:: getData()


    Gets node attributes.
    
    The array contains all attributes in its internal format (no conversion).
    
    This is an offline method.

    :param bool: 

    :rtype: array 



existsAttribute
---------------

.. function:: existsAttribute()


    Checks whether a given attribute exists.
    
    If $emptyExists is false empty attributes (containing only array()) are
    treated as non-existent returning false.
    If $emptyExists is true empty attributes are treated as existent returning
    true. In this case method returns false only if the attribute name is
    missing in the key-collection.

    :param string: 
    :param bool: 

    :rtype: bool 



attributeHasValue
-----------------

.. function:: attributeHasValue()


    Checks if the given value(s) exist in the attribute

    :param string: 
    :param mixed|array: 

    :rtype: bool 



getAttribute
------------

.. function:: getAttribute()


    Gets a LDAP attribute.
    
    This is an offline method.

    :param string: 
    :param integer: 

    :rtype: mixed 

    :throws: \Zend\Ldap\Exception\LdapException 



getDateTimeAttribute
--------------------

.. function:: getDateTimeAttribute()


    Gets a LDAP date/time attribute.
    
    This is an offline method.

    :param string: 
    :param integer: 

    :rtype: array|integer 

    :throws: \Zend\Ldap\Exception\LdapException 



__set
-----

.. function:: __set()


    Sets a LDAP attribute.
    
    This is an offline method.

    :param string: 
    :param mixed: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 



__get
-----

.. function:: __get()


    Gets a LDAP attribute.
    
    This is an offline method.

    :param string: 

    :rtype: mixed 

    :throws: \Zend\Ldap\Exception\LdapException 



__unset
-------

.. function:: __unset()


    Deletes a LDAP attribute.
    
    This method deletes the attribute.
    
    This is an offline method.

    :param $name: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 



__isset
-------

.. function:: __isset()


    Checks whether a given attribute exists.
    
    Empty attributes will be treated as non-existent.

    :param string: 

    :rtype: bool 



offsetSet
---------

.. function:: offsetSet()


    Sets a LDAP attribute.
    Implements ArrayAccess.
    
    This is an offline method.

    :param string: 
    :param $value: 
    :param mixed: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 
    :throws \Zend\Ldap\Exception\BadMethodCallException: 



offsetGet
---------

.. function:: offsetGet()


    Gets a LDAP attribute.
    Implements ArrayAccess.
    
    This is an offline method.

    :param string: 

    :rtype: mixed 

    :throws: \Zend\Ldap\Exception\LdapException 



offsetUnset
-----------

.. function:: offsetUnset()


    Deletes a LDAP attribute.
    Implements ArrayAccess.
    
    This method deletes the attribute.
    
    This is an offline method.

    :param $name: 

    :throws \Zend\Ldap\Exception\BadMethodCallException: 



offsetExists
------------

.. function:: offsetExists()


    Checks whether a given attribute exists.
    Implements ArrayAccess.
    
    Empty attributes will be treated as non-existent.

    :param string: 

    :rtype: bool 



count
-----

.. function:: count()


    Returns the number of attributes in node.
    Implements Countable

    :rtype: int 



