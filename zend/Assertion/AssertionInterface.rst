.. Permissions/Acl/Assertion/AssertionInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Permissions\\Acl\\Assertion\\assert
=========================================

.. function:: Zend\Permissions\Acl\Assertion\assert()


    Returns true if and only if the assertion conditions are met
    
    This method is passed the ACL, Role, Resource, and privilege to which the authorization query applies. If the
    $role, $resource, or $privilege parameters are null, it means that the query applies to all Roles, Resources, or
    privileges, respectively.

    :param Acl: 
    :param RoleInterface: 
    :param ResourceInterface: 
    :param string: 

    :rtype: bool 



