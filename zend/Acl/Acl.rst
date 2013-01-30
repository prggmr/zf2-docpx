.. Permissions/Acl/Acl.php generated using docpx on 01/30/13 03:32am


Zend\\Permissions\\Acl\\Acl
===========================

Methods
+++++++

addRole
-------

.. function:: addRole()


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

    :param Role\RoleInterface: 
    :param Role\RoleInterface|string|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Acl Provides a fluent interface



getRole
-------

.. function:: getRole()


    Returns the identified Role
    
    The $role parameter can either be a Role or Role identifier.

    :param Role\RoleInterface|string: 

    :rtype: Role\RoleInterface 



hasRole
-------

.. function:: hasRole()


    Returns true if and only if the Role exists in the registry
    
    The $role parameter can either be a Role or a Role identifier.

    :param Role\RoleInterface|string: 

    :rtype: bool 



inheritsRole
------------

.. function:: inheritsRole()


    Returns true if and only if $role inherits from $inherit
    
    Both parameters may be either a Role or a Role identifier. If
    $onlyParents is true, then $role must inherit directly from
    $inherit in order to return true. By default, this method looks
    through the entire inheritance DAG to determine whether $role
    inherits from $inherit through its ancestor Roles.

    :param Role\RoleInterface|string: 
    :param Role\RoleInterface|string: 
    :param bool: 

    :rtype: bool 



removeRole
----------

.. function:: removeRole()


    Removes the Role from the registry
    
    The $role parameter can either be a Role or a Role identifier.

    :param Role\RoleInterface|string: 

    :rtype: Acl Provides a fluent interface



removeRoleAll
-------------

.. function:: removeRoleAll()


    Removes all Roles from the registry

    :rtype: Acl Provides a fluent interface



addResource
-----------

.. function:: addResource()


    Adds a Resource having an identifier unique to the ACL
    
    The $parent parameter may be a reference to, or the string identifier for,
    the existing Resource from which the newly added Resource will inherit.

    :param Resource\ResourceInterface|string: 
    :param Resource\ResourceInterface|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Acl Provides a fluent interface



getResource
-----------

.. function:: getResource()


    Returns the identified Resource
    
    The $resource parameter can either be a Resource or a Resource identifier.

    :param Resource\ResourceInterface|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Resource 



hasResource
-----------

.. function:: hasResource()


    Returns true if and only if the Resource exists in the ACL
    
    The $resource parameter can either be a Resource or a Resource identifier.

    :param Resource\ResourceInterface|string: 

    :rtype: bool 



inheritsResource
----------------

.. function:: inheritsResource()


    Returns true if and only if $resource inherits from $inherit
    
    Both parameters may be either a Resource or a Resource identifier. If
    $onlyParent is true, then $resource must inherit directly from
    $inherit in order to return true. By default, this method looks
    through the entire inheritance tree to determine whether $resource
    inherits from $inherit through its ancestor Resources.

    :param Resource\ResourceInterface|string: 
    :param Resource\ResourceInterface|string: 
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: bool 



removeResource
--------------

.. function:: removeResource()


    Removes a Resource and all of its children
    
    The $resource parameter can either be a Resource or a Resource identifier.

    :param Resource\ResourceInterface|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Acl Provides a fluent interface



removeResourceAll
-----------------

.. function:: removeResourceAll()


    Removes all Resources

    :rtype: Acl Provides a fluent interface



allow
-----

.. function:: allow()


    Adds an "allow" rule to the ACL

    :param Role\RoleInterface|string|array: 
    :param Resource\ResourceInterface|string|array: 
    :param string|array: 
    :param Assertion\AssertionInterface: 

    :rtype: Acl Provides a fluent interface



deny
----

.. function:: deny()


    Adds a "deny" rule to the ACL

    :param Role\RoleInterface|string|array: 
    :param Resource\ResourceInterface|string|array: 
    :param string|array: 
    :param Assertion\AssertionInterface: 

    :rtype: Acl Provides a fluent interface



removeAllow
-----------

.. function:: removeAllow()


    Removes "allow" permissions from the ACL

    :param Role\RoleInterface|string|array: 
    :param Resource\ResourceInterface|string|array: 
    :param string|array: 

    :rtype: Acl Provides a fluent interface



removeDeny
----------

.. function:: removeDeny()


    Removes "deny" restrictions from the ACL

    :param Role\RoleInterface|string|array: 
    :param Resource\ResourceInterface|string|array: 
    :param string|array: 

    :rtype: Acl Provides a fluent interface



setRule
-------

.. function:: setRule()


    Performs operations on ACL rules
    
    The $operation parameter may be either OP_ADD or OP_REMOVE, depending on whether the
    user wants to add or remove a rule, respectively:
    
    OP_ADD specifics:
    
         A rule is added that would allow one or more Roles access to [certain $privileges
         upon] the specified Resource(s).
    
    OP_REMOVE specifics:
    
         The rule is removed only in the context of the given Roles, Resources, and privileges.
         Existing rules to which the remove operation does not apply would remain in the
         ACL.
    
    The $type parameter may be either TYPE_ALLOW or TYPE_DENY, depending on whether the
    rule is intended to allow or deny permission, respectively.
    
    The $roles and $resources parameters may be references to, or the string identifiers for,
    existing Resources/Roles, or they may be passed as arrays of these - mixing string identifiers
    and objects is ok - to indicate the Resources and Roles to which the rule applies. If either
    $roles or $resources is null, then the rule applies to all Roles or all Resources, respectively.
    Both may be null in order to work with the default rule of the ACL.
    
    The $privileges parameter may be used to further specify that the rule applies only
    to certain privileges upon the Resource(s) in question. This may be specified to be a single
    privilege with a string, and multiple privileges may be specified as an array of strings.
    
    If $assert is provided, then its assert() method must return true in order for
    the rule to apply. If $assert is provided with $roles, $resources, and $privileges all
    equal to null, then a rule having a type of:
    
         TYPE_ALLOW will imply a type of TYPE_DENY, and
    
         TYPE_DENY will imply a type of TYPE_ALLOW
    
    when the rule's assertion fails. This is because the ACL needs to provide expected
    behavior when an assertion upon the default ACL rule fails.

    :param string: 
    :param string: 
    :param Role\RoleInterface|string|array: 
    :param Resource\ResourceInterface|string|array: 
    :param string|array: 
    :param Assertion\AssertionInterface: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Acl Provides a fluent interface



getChildResources
-----------------

.. function:: getChildResources()


    Returns all child resources from the given resource.

    :param Resource\ResourceInterface|string: 

    :rtype: Resource\ResourceInterface[] 



isAllowed
---------

.. function:: isAllowed()


    Returns true if and only if the Role has access to the Resource
    
    The $role and $resource parameters may be references to, or the string identifiers for,
    an existing Resource and Role combination.
    
    If either $role or $resource is null, then the query applies to all Roles or all Resources,
    respectively. Both may be null to query whether the ACL has a "blacklist" rule
    (allow everything to all). By default, Zend\Permissions\Acl creates a "whitelist" rule (deny
    everything to all), and this method would return false unless this default has
    been overridden (i.e., by executing $acl->allow()).
    
    If a $privilege is not provided, then this method returns false if and only if the
    Role is denied access to at least one privilege upon the Resource. In other words, this
    method returns true if and only if the Role is allowed all privileges on the Resource.
    
    This method checks Role inheritance using a depth-first traversal of the Role registry.
    The highest priority parent (i.e., the parent most recently added) is checked first,
    and its respective parents are checked similarly before the lower-priority parents of
    the Role are checked.

    :param Role\RoleInterface|string: 
    :param Resource\ResourceInterface|string: 
    :param string: 

    :rtype: bool 



getRoleRegistry
---------------

.. function:: getRoleRegistry()


    Returns the Role registry for this ACL
    
    If no Role registry has been created yet, a new default Role registry
    is created and returned.

    :rtype: Role\Registry 



roleDFSAllPrivileges
--------------------

.. function:: roleDFSAllPrivileges()


    Performs a depth-first search of the Role DAG, starting at $role, in order to find a rule
    allowing/denying $role access to all privileges upon $resource
    
    This method returns true if a rule is found and allows access. If a rule exists and denies access,
    then this method returns false. If no applicable rule is found, then this method returns null.

    :param Role\RoleInterface: 
    :param Resource\ResourceInterface: 

    :rtype: bool|null 



roleDFSVisitAllPrivileges
-------------------------

.. function:: roleDFSVisitAllPrivileges()


    Visits an $role in order to look for a rule allowing/denying $role access to all privileges upon $resource
    
    This method returns true if a rule is found and allows access. If a rule exists and denies access,
    then this method returns false. If no applicable rule is found, then this method returns null.
    
    This method is used by the internal depth-first search algorithm and may modify the DFS data structure.

    :param Role\RoleInterface: 
    :param Resource\ResourceInterface: 
    :param array: 

    :rtype: bool|null 

    :throws: Exception\RuntimeException 



roleDFSOnePrivilege
-------------------

.. function:: roleDFSOnePrivilege()


    Performs a depth-first search of the Role DAG, starting at $role, in order to find a rule
    allowing/denying $role access to a $privilege upon $resource
    
    This method returns true if a rule is found and allows access. If a rule exists and denies access,
    then this method returns false. If no applicable rule is found, then this method returns null.

    :param Role\RoleInterface: 
    :param Resource\ResourceInterface: 
    :param string: 

    :rtype: bool|null 

    :throws: Exception\RuntimeException 



roleDFSVisitOnePrivilege
------------------------

.. function:: roleDFSVisitOnePrivilege()


    Visits an $role in order to look for a rule allowing/denying $role access to a $privilege upon $resource
    
    This method returns true if a rule is found and allows access. If a rule exists and denies access,
    then this method returns false. If no applicable rule is found, then this method returns null.
    
    This method is used by the internal depth-first search algorithm and may modify the DFS data structure.

    :param Role\RoleInterface: 
    :param Resource\ResourceInterface: 
    :param string: 
    :param array: 

    :rtype: bool|null 

    :throws: Exception\RuntimeException 



getRuleType
-----------

.. function:: getRuleType()


    Returns the rule type associated with the specified Resource, Role, and privilege
    combination.
    
    If a rule does not exist or its attached assertion fails, which means that
    the rule is not applicable, then this method returns null. Otherwise, the
    rule type applies and is returned as either TYPE_ALLOW or TYPE_DENY.
    
    If $resource or $role is null, then this means that the rule must apply to
    all Resources or Roles, respectively.
    
    If $privilege is null, then the rule must apply to all privileges.
    
    If all three parameters are null, then the default ACL rule type is returned,
    based on whether its assertion method passes.

    :param null|Resource\ResourceInterface: 
    :param null|Role\RoleInterface: 
    :param null|string: 

    :rtype: string|null 



getRules
--------

.. function:: getRules()


    Returns the rules associated with a Resource and a Role, or null if no such rules exist
    
    If either $resource or $role is null, this means that the rules returned are for all Resources or all Roles,
    respectively. Both can be null to return the default rule set for all Resources and all Roles.
    
    If the $create parameter is true, then a rule set is first created and then returned to the caller.

    :param Resource\ResourceInterface: 
    :param Role\RoleInterface: 
    :param bool: 

    :rtype: array|null 



getRoles
--------

.. function:: getRoles()


    @return array of registered roles



getResources
------------

.. function:: getResources()


    @return array of registered resources





Constants
+++++++++

TYPE_ALLOW
==========

Rule type: allow

TYPE_DENY
=========

Rule type: deny

OP_ADD
======

Rule operation: add

OP_REMOVE
=========

Rule operation: remove

