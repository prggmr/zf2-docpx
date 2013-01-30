.. View/Helper/Navigation/AbstractHelper.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Navigation\\AbstractHelper
==============================================

Base class for navigational helpers

Methods
+++++++

setServiceLocator
-----------------

.. function:: setServiceLocator()


    Set the service locator.

    :param ServiceLocatorInterface: 

    :rtype: AbstractHelper 



getServiceLocator
-----------------

.. function:: getServiceLocator()


    Get the service locator.

    :rtype: \Zend\ServiceManager\ServiceLocatorInterface 



setContainer
------------

.. function:: setContainer()


    Sets navigation container the helper operates on by default
    
    Implements {@link HelperInterface::setContainer()}.

    :param string|Navigation\AbstractContainer: [optional] container to operate on.
                                                       Default is null, meaning container will be reset.

    :rtype: AbstractHelper fluent interface, returns self



getContainer
------------

.. function:: getContainer()


    Returns the navigation container helper operates on by default
    
    Implements {@link HelperInterface::getContainer()}.
    
    If no container is set, a new container will be instantiated and
    stored in the helper.

    :rtype: Navigation\AbstractContainer navigation container



parseContainer
--------------

.. function:: parseContainer()


    Verifies container and eventually fetches it from service locator if it is a string

    :param Navigation\AbstractContainer|string|null: 

    :throws Exception\InvalidArgumentException: 



setMinDepth
-----------

.. function:: setMinDepth()


    Sets the minimum depth a page must have to be included when rendering

    :param int: [optional] minimum depth. Default is null, which
                      sets no minimum depth.

    :rtype: AbstractHelper fluent interface, returns self



getMinDepth
-----------

.. function:: getMinDepth()


    Returns minimum depth a page must have to be included when rendering

    :rtype: int|null minimum depth or null



setMaxDepth
-----------

.. function:: setMaxDepth()


    Sets the maximum depth a page can have to be included when rendering

    :param int: [optional] maximum depth. Default is null, which
                      sets no maximum depth.

    :rtype: AbstractHelper fluent interface, returns self



getMaxDepth
-----------

.. function:: getMaxDepth()


    Returns maximum depth a page can have to be included when rendering

    :rtype: int|null maximum depth or null



setIndent
---------

.. function:: setIndent()


    Set the indentation string for using in {@link render()}, optionally a
    number of spaces to indent with

    :param string|int: indentation string or number of spaces

    :rtype: AbstractHelper fluent interface, returns self



getIndent
---------

.. function:: getIndent()


    Returns indentation

    :rtype: string 



setAcl
------

.. function:: setAcl()


    Sets ACL to use when iterating pages
    
    Implements {@link HelperInterface::setAcl()}.

    :param Acl\AclInterface: [optional] ACL object.  Default is null.

    :rtype: AbstractHelper fluent interface, returns self



getAcl
------

.. function:: getAcl()


    Returns ACL or null if it isn't set using {@link setAcl()} or
    {@link setDefaultAcl()}
    
    Implements {@link HelperInterface::getAcl()}.

    :rtype: Acl\AclInterface|null ACL object or null



setRole
-------

.. function:: setRole()


    Sets ACL role(s) to use when iterating pages
    
    Implements {@link HelperInterface::setRole()}.

    :param mixed: [optional] role to set. Expects a string, an
                    instance of type {@link Acl\Role\RoleInterface}, or null. Default
                    is null, which will set no role.

    :rtype: AbstractHelper fluent interface, returns self

    :throws: Exception\InvalidArgumentException if $role is invalid



getRole
-------

.. function:: getRole()


    Returns ACL role to use when iterating pages, or null if it isn't set
    using {@link setRole()} or {@link setDefaultRole()}
    
    Implements {@link HelperInterface::getRole()}.

    :rtype: string|Acl\Role\RoleInterface|null role or null



setUseAcl
---------

.. function:: setUseAcl()


    Sets whether ACL should be used
    
    Implements {@link HelperInterface::setUseAcl()}.

    :param bool: [optional] whether ACL should be used.  Default is true.

    :rtype: AbstractHelper fluent interface, returns self



getUseAcl
---------

.. function:: getUseAcl()


    Returns whether ACL should be used
    
    Implements {@link HelperInterface::getUseAcl()}.

    :rtype: bool whether ACL should be used



getRenderInvisible
------------------

.. function:: getRenderInvisible()


    Return renderInvisible flag

    :rtype: bool 



setRenderInvisible
------------------

.. function:: setRenderInvisible()


    Render invisible items?

    :param bool: [optional] boolean flag

    :rtype: AbstractHelper fluent interface returns self



__call
------

.. function:: __call()


    Magic overload: Proxy calls to the navigation container

    :param string: method name in container
    :param array: [optional] arguments to pass

    :rtype: mixed returns what the container returns

    :throws: Navigation\Exception\ExceptionInterface if method does not exist in container



__toString
----------

.. function:: __toString()


    Magic overload: Proxy to {@link render()}.
    
    This method will trigger an E_USER_ERROR if rendering the helper causes
    an exception to be thrown.
    
    Implements {@link HelperInterface::__toString()}.

    :rtype: string 



findActive
----------

.. function:: findActive()


    Finds the deepest active page in the given container

    :param Navigation\AbstractContainer: container to search
    :param int|null: [optional] minimum depth
                                         required for page to be
                                         valid. Default is to use
                                         {@link getMinDepth()}. A
                                         null value means no minimum
                                         depth required.
    :param int|null: [optional] maximum depth
                                         a page can have to be
                                         valid. Default is to use
                                         {@link getMaxDepth()}. A
                                         null value means no maximum
                                         depth required.

    :rtype: array an associative array with
                                         the values 'depth' and
                                         'page', or an empty array
                                         if not found



hasContainer
------------

.. function:: hasContainer()


    Checks if the helper has a container
    
    Implements {@link HelperInterface::hasContainer()}.

    :rtype: bool whether the helper has a container or not



hasAcl
------

.. function:: hasAcl()


    Checks if the helper has an ACL instance
    
    Implements {@link HelperInterface::hasAcl()}.

    :rtype: bool whether the helper has a an ACL instance or not



hasRole
-------

.. function:: hasRole()


    Checks if the helper has an ACL role
    
    Implements {@link HelperInterface::hasRole()}.

    :rtype: bool whether the helper has a an ACL role or not



htmlify
-------

.. function:: htmlify()


    Returns an HTML string containing an 'a' element for the given page

    :param AbstractPage: page to generate HTML for

    :rtype: string HTML string for the given page



setTranslator
-------------

.. function:: setTranslator()


    Sets translator to use in helper

    :param Translator: [optional] translator.
                                Default is null, which sets no translator.
    :param string: [optional] text domain
                                Default is null, which skips setTranslatorTextDomain

    :rtype: AbstractHelper 



getTranslator
-------------

.. function:: getTranslator()


    Returns translator used in helper

    :rtype: Translator|null 



hasTranslator
-------------

.. function:: hasTranslator()


    Checks if the helper has a translator

    :rtype: bool 



setTranslatorEnabled
--------------------

.. function:: setTranslatorEnabled()


    Sets whether translator is enabled and should be used

    :param bool: [optional] whether translator should be used.
                      Default is true.

    :rtype: AbstractHelper 



isTranslatorEnabled
-------------------

.. function:: isTranslatorEnabled()


    Returns whether translator is enabled and should be used

    :rtype: bool 



setTranslatorTextDomain
-----------------------

.. function:: setTranslatorTextDomain()


    Set translation text domain

    :param string: 

    :rtype: AbstractHelper 



getTranslatorTextDomain
-----------------------

.. function:: getTranslatorTextDomain()


    Return the translation text domain

    :rtype: string 



accept
------

.. function:: accept()


    Determines whether a page should be accepted when iterating
    
    Rules:
    - If a page is not visible it is not accepted, unless RenderInvisible has
      been set to true.
    - If helper has no ACL, page is accepted
    - If helper has ACL, but no role, page is not accepted
    - If helper has ACL and role:
     - Page is accepted if it has no resource or privilege
     - Page is accepted if ACL allows page's resource or privilege
    - If page is accepted by the rules above and $recursive is true, the page
      will not be accepted if it is the descendant of a non-accepted page.

    :param AbstractPage: page to check
    :param bool: [optional] if true, page will not be
                                accepted if it is the descendant of a
                                page that is not accepted. Default is true.

    :rtype: bool whether page should be accepted



acceptAcl
---------

.. function:: acceptAcl()


    Determines whether a page should be accepted by ACL when iterating
    
    Rules:
    - If helper has no ACL, page is accepted
    - If page has a resource or privilege defined, page is accepted
      if the ACL allows access to it using the helper's role
    - If page has no resource or privilege, page is accepted

    :param AbstractPage: page to check

    :rtype: bool whether page is accepted by ACL



getWhitespace
-------------

.. function:: getWhitespace()


    Retrieve whitespace representation of $indent

    :param int|string: 

    :rtype: string 



htmlAttribs
-----------

.. function:: htmlAttribs()


    Converts an associative array to a string of tag attributes.
    
    Overloads {@link View\Helper\AbstractHtmlElement::htmlAttribs()}.

    :param array: an array where each key-value pair is converted
                        to an attribute name and value

    :rtype: string an attribute string



normalizeId
-----------

.. function:: normalizeId()


    Normalize an ID
    
    Overrides {@link View\Helper\AbstractHtmlElement::normalizeId()}.

    :param string: 

    :rtype: string 



setDefaultAcl
-------------

.. function:: setDefaultAcl()


    Sets default ACL to use if another ACL is not explicitly set

    :param Acl\AclInterface: [optional] ACL object. Default is null, which
                     sets no ACL object.

    :rtype: void 



setDefaultRole
--------------

.. function:: setDefaultRole()


    Sets default ACL role(s) to use when iterating pages if not explicitly
    set later with {@link setRole()}

    :param mixed: [optional] role to set. Expects null, string, or an
                    instance of {@link Acl\Role\RoleInterface}. Default is null, which
                    sets no default role.

    :rtype: void 

    :throws: Exception\InvalidArgumentException if role is invalid



