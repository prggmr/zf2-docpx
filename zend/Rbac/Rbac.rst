.. Permissions/Rbac/Rbac.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Permissions\\Rbac\\Rbac
=============================

Methods
-------

setCreateMissingRoles
+++++++++++++++++++++

.. function:: setCreateMissingRoles()


    @param  boolean                     $createMissingRoles

    :rtype: \Zend\Permissions\Rbac\Rbac 



getCreateMissingRoles
+++++++++++++++++++++

.. function:: getCreateMissingRoles()


    @return boolean



addRole
+++++++

.. function:: addRole()


    Add a child.

    :param string|RoleInterface: 

    :rtype: RoleInterface 

    :throws: Exception\InvalidArgumentException 



hasRole
+++++++

.. function:: hasRole()


    Is a child with $name registered?

    :param \Zend\Permissions\Rbac\RoleInterface|string: 

    :rtype: bool 



getRole
+++++++

.. function:: getRole()


    Get a child.

    :param \Zend\Permissions\Rbac\RoleInterface|string: 

    :rtype: RoleInterface 

    :throws: Exception\InvalidArgumentException 



isGranted
+++++++++

.. function:: isGranted()


    Determines if access is granted by checking the role and child roles for permission.

    :param string: 
    :param \Zend\Permissions\Rbac\AssertionInterface|Callable|null: 



