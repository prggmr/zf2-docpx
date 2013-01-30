.. Permissions/Rbac/RoleInterface.php generated using docpx on 01/30/13 03:32am


Zend\\Permissions\\Rbac\\getName
================================

.. function:: Zend\Permissions\Rbac\getName()


    Get the name of the role.

    :rtype: string 



Zend\\Permissions\\Rbac\\addPermission
======================================

.. function:: Zend\Permissions\Rbac\addPermission()


    Add permission to the role.

    :param $name: 

    :rtype: RoleInterface 



Zend\\Permissions\\Rbac\\hasPermission
======================================

.. function:: Zend\Permissions\Rbac\hasPermission()


    Checks if a permission exists for this role or any child roles.

    :param string: 

    :rtype: bool 



Zend\\Permissions\\Rbac\\addChild
=================================

.. function:: Zend\Permissions\Rbac\addChild()


    Add a child.

    :param RoleInterface|string: 

    :rtype: Role 



Zend\\Permissions\\Rbac\\setParent
==================================

.. function:: Zend\Permissions\Rbac\setParent()


    @param  RoleInterface $parent

    :rtype: RoleInterface 



Zend\\Permissions\\Rbac\\getParent
==================================

.. function:: Zend\Permissions\Rbac\getParent()


    @return null|RoleInterface



