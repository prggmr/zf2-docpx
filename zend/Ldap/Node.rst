.. Ldap/Node.php generated using docpx on 01/30/13 03:32am


Zend\\Ldap\\Node
================

Zend\Ldap\Node provides an object oriented view into a LDAP node.

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Constructor.
    
    Constructor is protected to enforce the use of factory methods.

    :param Dn: 
    :param array: 
    :param bool: 
    :param Ldap: 

    :throws Exception\LdapException: 



__sleep
-------

.. function:: __sleep()


    Serialization callback
    
    Only Dn and attributes will be serialized.

    :rtype: array 



__wakeup
--------

.. function:: __wakeup()


    Deserialization callback
    
    Enforces a detached node.



getLdap
-------

.. function:: getLdap()


    Gets the current LDAP connection.

    :rtype: Ldap 

    :throws: Exception\LdapException 



attachLdap
----------

.. function:: attachLdap()


    Attach node to an LDAP connection
    
    This is an offline method.

    :param Ldap: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



detachLdap
----------

.. function:: detachLdap()


    Detach node from LDAP connection
    
    This is an offline method.

    :rtype: Node Provides a fluid interface



isAttached
----------

.. function:: isAttached()


    Checks if the current node is attached to a LDAP server.
    
    This is an offline method.

    :rtype: bool 



triggerEvent
------------

.. function:: triggerEvent()


    Trigger an event

    :param string: Event name
    :param array|\ArrayAccess: Array of arguments; typically, should be associative



loadData
--------

.. function:: loadData()


    @param  array   $data

    :param bool: 

    :throws Exception\LdapException: 



create
------

.. function:: create()


    Factory method to create a new detached Zend\Ldap\Node for a given DN.

    :param string|array|Dn: 
    :param array: 

    :rtype: Node 

    :throws: Exception\LdapException 



fromLdap
--------

.. function:: fromLdap()


    Factory method to create an attached Zend\Ldap\Node for a given DN.

    :param string|array|Dn: 
    :param Ldap: 

    :rtype: Node|null 

    :throws: Exception\LdapException 



fromArray
---------

.. function:: fromArray()


    Factory method to create a detached Zend\Ldap\Node from array data.

    :param array: 
    :param bool: 

    :rtype: Node 

    :throws: Exception\LdapException 



ensureRdnAttributeValues
------------------------

.. function:: ensureRdnAttributeValues()


    Ensures that teh RDN attributes are correctly set.

    :param bool: True to overwrite the RDN attributes

    :rtype: void 



markAsNew
---------

.. function:: markAsNew()


    Marks this node as new.
    
    Node will be added (instead of updated) on calling update() if $new is true.

    :param bool: 



isNew
-----

.. function:: isNew()


    Tells if the node is considered as new (not present on the server)
    
    Please note, that this doesn't tell you if the node is present on the server.
    Use {@link exits()} to see if a node is already there.

    :rtype: bool 



markAsToBeDeleted
-----------------

.. function:: markAsToBeDeleted()


    Marks this node as to be deleted.
    
    Node will be deleted on calling update() if $delete is true.

    :param bool: 



willBeDeleted
-------------

.. function:: willBeDeleted()


    Is this node going to be deleted once update() is called?

    :rtype: bool 



delete
------

.. function:: delete()


    Marks this node as to be deleted
    
    Node will be deleted on calling update() if $delete is true.

    :rtype: Node Provides a fluid interface



willBeMoved
-----------

.. function:: willBeMoved()


    Is this node going to be moved once update() is called?

    :rtype: bool 



update
------

.. function:: update()


    Sends all pending changes to the LDAP server

    :param Ldap: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException @trigger pre-delete
@trigger post-delete
@trigger pre-add
@trigger post-add
@trigger pre-rename
@trigger post-rename
@trigger pre-update
@trigger post-update



_getDn
------

.. function:: _getDn()


    Gets the DN of the current node as a Zend\Ldap\Dn.
    
    This is an offline method.

    :rtype: Dn 



getCurrentDn
------------

.. function:: getCurrentDn()


    Gets the current DN of the current node as a Zend\Ldap\Dn.
    The method returns a clone of the node's DN to prohibit modification.
    
    This is an offline method.

    :rtype: Dn 



setDn
-----

.. function:: setDn()


    Sets the new DN for this node
    
    This is an offline method.

    :param Dn|string|array: 

    :throws Exception\LdapException: 

    :rtype: Node Provides a fluid interface



move
----

.. function:: move()


    {@see setDn()}
    
    This is an offline method.

    :param Dn|string|array: 

    :throws Exception\LdapException: 

    :rtype: Node Provides a fluid interface



rename
------

.. function:: rename()


    {@see setDn()}
    
    This is an offline method.

    :param Dn|string|array: 

    :throws Exception\LdapException: 

    :rtype: Node Provides a fluid interface



setObjectClass
--------------

.. function:: setObjectClass()


    Sets the objectClass.
    
    This is an offline method.

    :param array|string: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



appendObjectClass
-----------------

.. function:: appendObjectClass()


    Appends to the objectClass.
    
    This is an offline method.

    :param array|string: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



toLdif
------

.. function:: toLdif()


    Returns a LDIF representation of the current node

    :param array: Additional options used during encoding

    :rtype: string 



getChangedData
--------------

.. function:: getChangedData()


    Gets changed node data.
    
    The array contains all changed attributes.
    This format can be used in {@link Zend\Ldap\Ldap::add()} and {@link Zend\Ldap\Ldap::update()}.
    
    This is an offline method.

    :rtype: array 



getChanges
----------

.. function:: getChanges()


    Returns all changes made.
    
    This is an offline method.

    :rtype: array 



setAttribute
------------

.. function:: setAttribute()


    Sets a LDAP attribute.
    
    This is an offline method.

    :param string: 
    :param mixed: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



appendToAttribute
-----------------

.. function:: appendToAttribute()


    Appends to a LDAP attribute.
    
    This is an offline method.

    :param string: 
    :param mixed: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



_setAttribute
-------------

.. function:: _setAttribute()


    Checks if the attribute can be set and sets it accordingly.

    :param string: 
    :param mixed: 
    :param bool: 

    :throws Exception\LdapException: 



setDateTimeAttribute
--------------------

.. function:: setDateTimeAttribute()


    Sets a LDAP date/time attribute.
    
    This is an offline method.

    :param string: 
    :param integer|array: 
    :param bool: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



appendToDateTimeAttribute
-------------------------

.. function:: appendToDateTimeAttribute()


    Appends to a LDAP date/time attribute.
    
    This is an offline method.

    :param string: 
    :param integer|array: 
    :param bool: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



_setDateTimeAttribute
---------------------

.. function:: _setDateTimeAttribute()


    Checks if the attribute can be set and sets it accordingly.

    :param string: 
    :param integer|array: 
    :param bool: 
    :param bool: 

    :throws Exception\LdapException: 



setPasswordAttribute
--------------------

.. function:: setPasswordAttribute()


    Sets a LDAP password.

    :param string: 
    :param string: 
    :param string: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



deleteAttribute
---------------

.. function:: deleteAttribute()


    Deletes a LDAP attribute.
    
    This method deletes the attribute.
    
    This is an offline method.

    :param string: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



removeDuplicatesFromAttribute
-----------------------------

.. function:: removeDuplicatesFromAttribute()


    Removes duplicate values from a LDAP attribute

    :param string: 

    :rtype: void 



removeFromAttribute
-------------------

.. function:: removeFromAttribute()


    Remove given values from a LDAP attribute

    :param string: 
    :param mixed|array: 

    :rtype: void 



assertChangeableAttribute
-------------------------

.. function:: assertChangeableAttribute()


    @param  string $name

    :rtype: bool 

    :throws: Exception\LdapException 



__set
-----

.. function:: __set()


    Sets a LDAP attribute.
    
    This is an offline method.

    :param string: 
    :param $value: 



__unset
-------

.. function:: __unset()


    Deletes a LDAP attribute.
    
    This method deletes the attribute.
    
    This is an offline method.

    :param string: 

    :throws Exception\LdapException: 



offsetSet
---------

.. function:: offsetSet()


    Sets a LDAP attribute.
    Implements ArrayAccess.
    
    This is an offline method.

    :param string: 
    :param mixed: 

    :throws Exception\LdapException: 



offsetUnset
-----------

.. function:: offsetUnset()


    Deletes a LDAP attribute.
    Implements ArrayAccess.
    
    This method deletes the attribute.
    
    This is an offline method.

    :param string: 

    :throws Exception\LdapException: 



exists
------

.. function:: exists()


    Check if node exists on LDAP.
    
    This is an online method.

    :param Ldap: 

    :rtype: bool 

    :throws: Exception\LdapException 



reload
------

.. function:: reload()


    Reload node attributes from LDAP.
    
    This is an online method.

    :param Ldap: 

    :rtype: Node Provides a fluid interface

    :throws: Exception\LdapException 



searchSubtree
-------------

.. function:: searchSubtree()


    Search current subtree with given options.
    
    This is an online method.

    :param string|Filter\AbstractFilter: 
    :param integer: 
    :param string: 

    :rtype: Node\Collection 

    :throws: Exception\LdapException 



countSubtree
------------

.. function:: countSubtree()


    Count items in current subtree found by given filter.
    
    This is an online method.

    :param string|Filter\AbstractFilter: 
    :param integer: 

    :rtype: integer 

    :throws: Exception\LdapException 



countChildren
-------------

.. function:: countChildren()


    Count children of current node.
    
    This is an online method.

    :rtype: integer 

    :throws: Exception\LdapException 



searchChildren
--------------

.. function:: searchChildren()


    Gets children of current node.
    
    This is an online method.

    :param string|Filter\AbstractFilter: 
    :param string: 

    :rtype: Node\Collection 

    :throws: Exception\LdapException 



hasChildren
-----------

.. function:: hasChildren()


    Checks if current node has children.
    Returns whether the current element has children.
    
    Can be used offline but returns false if children have not been retrieved yet.

    :rtype: bool 

    :throws: Exception\LdapException 



getChildren
-----------

.. function:: getChildren()


    Returns the children for the current node.
    
    Can be used offline but returns an empty array if children have not been retrieved yet.

    :rtype: Node\ChildrenIterator 

    :throws: Exception\LdapException 



getParent
---------

.. function:: getParent()


    Returns the parent of the current node.

    :param Ldap: 

    :rtype: Node 

    :throws: Exception\LdapException 



current
-------

.. function:: current()


    Return the current attribute.
    Implements Iterator

    :rtype: array 



key
---

.. function:: key()


    Return the attribute name.
    Implements Iterator

    :rtype: string 



next
----

.. function:: next()


    Move forward to next attribute.
    Implements Iterator



rewind
------

.. function:: rewind()


    Rewind the Iterator to the first attribute.
    Implements Iterator



valid
-----

.. function:: valid()


    Check if there is a current attribute
    after calls to rewind() or next().
    Implements Iterator

    :rtype: bool 



