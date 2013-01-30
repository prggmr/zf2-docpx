.. Permissions/Rbac/AbstractRole.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Permissions\\Rbac\\AbstractRole
=====================================

Methods
-------

getName
+++++++

.. function:: getName()


    Get the name of the role.

    :rtype: string 



addPermission
+++++++++++++

.. function:: addPermission()


    Add permission to the role.

    :param $name: 

    :rtype: RoleInterface 



hasPermission
+++++++++++++

.. function:: hasPermission()


    Checks if a permission exists for this role or any child roles.

    :param string: 

    :rtype: bool 



addChild
++++++++

.. function:: addChild()


    Add a child.

    :param RoleInterface|string: 

    :rtype: Role 



setParent
+++++++++

.. function:: setParent()


    @param  RoleInterface $parent

    :rtype: RoleInterface 



getParent
+++++++++

.. function:: getParent()


    @return null|RoleInterface



