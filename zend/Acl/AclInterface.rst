.. Permissions/Acl/AclInterface.php generated using docpx on 01/30/13 03:27pm


Function
********

Zend\\Permissions\\Acl\\hasResource
===================================

.. function:: Zend\Permissions\Acl\hasResource()


    Returns true if and only if the Resource exists in the ACL
    
    The $resource parameter can either be a Resource or a Resource identifier.

    :param Resource\ResourceInterface|string: 

    :rtype: boolean 



Function
********

Zend\\Permissions\\Acl\\isAllowed
=================================

.. function:: Zend\Permissions\Acl\isAllowed()


    Returns true if and only if the Role has access to the Resource
    
    The $role and $resource parameters may be references to, or the string identifiers for,
    an existing Resource and Role combination.
    
    If either $role or $resource is null, then the query applies to all Roles or all Resources,
    respectively. Both may be null to query whether the ACL has a "blacklist" rule
    (allow everything to all). By default, Zend_Acl creates a "whitelist" rule (deny
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

    :rtype: boolean 



