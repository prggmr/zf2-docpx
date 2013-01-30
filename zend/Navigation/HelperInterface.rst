.. View/Helper/Navigation/HelperInterface.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Navigation\\setContainer
============================================

.. function:: Zend\View\Helper\Navigation\setContainer()


    Sets navigation container the helper should operate on by default

    :param string|Navigation\AbstractContainer: [optional] container to operate
                                        on. Default is null, which
                                        indicates that the container
                                        should be reset.

    :rtype: HelperInterface fluent interface, returns self



Zend\\View\\Helper\\Navigation\\getContainer
============================================

.. function:: Zend\View\Helper\Navigation\getContainer()


    Returns the navigation container the helper operates on by default

    :rtype: Navigation\AbstractContainer navigation container



Zend\\View\\Helper\\Navigation\\setAcl
======================================

.. function:: Zend\View\Helper\Navigation\setAcl()


    Sets ACL to use when iterating pages

    :param Acl\AclInterface: [optional] ACL instance

    :rtype: HelperInterface fluent interface, returns self



Zend\\View\\Helper\\Navigation\\getAcl
======================================

.. function:: Zend\View\Helper\Navigation\getAcl()


    Returns ACL or null if it isn't set using {@link setAcl()} or
    {@link setDefaultAcl()}

    :rtype: Acl\AclInterface|null ACL object or null



Zend\\View\\Helper\\Navigation\\setRole
=======================================

.. function:: Zend\View\Helper\Navigation\setRole()


    Sets ACL role to use when iterating pages

    :param mixed: [optional] role to set.  Expects a string, an
                    instance of type {@link Acl\Role}, or null. Default
                    is null.

    :throws \Zend\View\Exception\ExceptionInterface: if $role is invalid

    :rtype: HelperInterface fluent interface, returns
                                            self



Zend\\View\\Helper\\Navigation\\getRole
=======================================

.. function:: Zend\View\Helper\Navigation\getRole()


    Returns ACL role to use when iterating pages, or null if it isn't set

    :rtype: string|Acl\Role\RoleInterface|null role or null



Zend\\View\\Helper\\Navigation\\setUseAcl
=========================================

.. function:: Zend\View\Helper\Navigation\setUseAcl()


    Sets whether ACL should be used

    :param bool: [optional] whether ACL should be used. Default is true.

    :rtype: HelperInterface fluent interface, returns self



Zend\\View\\Helper\\Navigation\\getUseAcl
=========================================

.. function:: Zend\View\Helper\Navigation\getUseAcl()


    Returns whether ACL should be used

    :rtype: bool whether ACL should be used



Zend\\View\\Helper\\Navigation\\getRenderInvisible
==================================================

.. function:: Zend\View\Helper\Navigation\getRenderInvisible()


    Return renderInvisible flag

    :rtype: bool 



Zend\\View\\Helper\\Navigation\\setRenderInvisible
==================================================

.. function:: Zend\View\Helper\Navigation\setRenderInvisible()


    Render invisible items?

    :param bool: [optional] boolean flag

    :rtype: HelperInterface fluent interface returns self



Zend\\View\\Helper\\Navigation\\hasContainer
============================================

.. function:: Zend\View\Helper\Navigation\hasContainer()


    Checks if the helper has a container

    :rtype: bool whether the helper has a container or not



Zend\\View\\Helper\\Navigation\\hasAcl
======================================

.. function:: Zend\View\Helper\Navigation\hasAcl()


    Checks if the helper has an ACL instance

    :rtype: bool whether the helper has a an ACL instance or not



Zend\\View\\Helper\\Navigation\\hasRole
=======================================

.. function:: Zend\View\Helper\Navigation\hasRole()


    Checks if the helper has an ACL role

    :rtype: bool whether the helper has a an ACL role or not



Zend\\View\\Helper\\Navigation\\__toString
==========================================

.. function:: Zend\View\Helper\Navigation\__toString()


    Magic overload: Should proxy to {@link render()}.

    :rtype: string 



Zend\\View\\Helper\\Navigation\\render
======================================

.. function:: Zend\View\Helper\Navigation\render()


    Renders helper

    :param string|Navigation\AbstractContainer: [optional] container to render.
                                        Default is null, which indicates
                                        that the helper should render
                                        the container returned by {@link
                                        getContainer()}.

    :rtype: string helper output

    :throws: \Zend\View\Exception\ExceptionInterface if unable to render



