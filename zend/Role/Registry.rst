.. Permissions/Acl/Role/Registry.php generated using docpx on 01/30/13 03:32am


Zend\\Permissions\\Acl\\Role\\Registry
======================================

Methods
+++++++

add
---

.. function:: add()


    Adds a Role having an identifier unique to the registry
    
    The $parents parameter may be a reference to, or the string identifier for,
    a Role existing in the registry, or $parents may be passed as an array of
    these - mixing string identifiers and objects is ok - to indicate the Roles
    from which the newly added Role will directly inherit.
    
    In order to resolve potential ambiguities with conflicting rules inherited
    from different parents, the most recently added parent takes precedence over
    parents that were previously added. In other words, the first parent added
    will have the least priority, and the last parent added will have the
    highest priority.

    :param RoleInterface: 
    :param RoleInterface|string|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Registry Provides a fluent interface



get
---

.. function:: get()


    Returns the identified Role
    
    The $role parameter can either be a Role or a Role identifier.

    :param RoleInterface|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: RoleInterface 



has
---

.. function:: has()


    Returns true if and only if the Role exists in the registry
    
    The $role parameter can either be a Role or a Role identifier.

    :param RoleInterface|string: 

    :rtype: bool 



getParents
----------

.. function:: getParents()


    Returns an array of an existing Role's parents
    
    The array keys are the identifiers of the parent Roles, and the values are
    the parent Role instances. The parent Roles are ordered in this array by
    ascending priority. The highest priority parent Role, last in the array,
    corresponds with the parent Role most recently added.
    
    If the Role does not have any parents, then an empty array is returned.

    :param RoleInterface|string: 

    :rtype: array 



inherits
--------

.. function:: inherits()


    Returns true if and only if $role inherits from $inherit
    
    Both parameters may be either a Role or a Role identifier. If
    $onlyParents is true, then $role must inherit directly from
    $inherit in order to return true. By default, this method looks
    through the entire inheritance DAG to determine whether $role
    inherits from $inherit through its ancestor Roles.

    :param RoleInterface|string: 
    :param RoleInterface|string: 
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: bool 



remove
------

.. function:: remove()


    Removes the Role from the registry
    
    The $role parameter can either be a Role or a Role identifier.

    :param RoleInterface|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Registry Provides a fluent interface



removeAll
---------

.. function:: removeAll()


    Removes all Roles from the registry

    :rtype: Registry Provides a fluent interface



getRoles
--------

.. function:: getRoles()


    Get all roles in the registry

    :rtype: array 



