.. Navigation/Page/AbstractPage.php generated using docpx on 01/30/13 03:32am


Zend\\Navigation\\Page\\AbstractPage
====================================

Base class for Zend\Navigation\Page pages

Methods
+++++++

factory
-------

.. function:: factory()


    Factory for Zend_Navigation_Page classes
    
    A specific type to construct can be specified by specifying the key
    'type' in $options. If type is 'uri' or 'mvc', the type will be resolved
    to Zend_Navigation_Page_Uri or Zend_Navigation_Page_Mvc. Any other value
    for 'type' will be considered the full name of the class to construct.
    A valid custom page class must extend Zend_Navigation_Page.
    
    If 'type' is not given, the type of page to construct will be determined
    by the following rules:
    - If $options contains either of the keys 'action', 'controller',
      or 'route', a Zend_Navigation_Page_Mvc page will be created.
    - If $options contains the key 'uri', a Zend_Navigation_Page_Uri page
      will be created.

    :param array|Traversable: options used for creating page

    :rtype: AbstractPage a page instance

    :throws: Exception\InvalidArgumentException if $options is not
                                           array/Traversable
    :throws: Exception\InvalidArgumentException if 'type' is specified
                                           but class not found
    :throws: Exception\InvalidArgumentException if something goes wrong
                                           during instantiation of
                                           the page
    :throws: Exception\InvalidArgumentException if 'type' is given, and
                                           the specified type does
                                           not extend this class
    :throws: Exception\InvalidArgumentException if unable to determine
                                           which class to instantiate



__construct
-----------

.. function:: __construct()


    Page constructor

    :param array|Traversable: [optional] page options. Default is
                                   null, which should set defaults.

    :throws Exception\InvalidArgumentException: if invalid options are given



init
----

.. function:: init()


    Initializes page (used by subclasses)

    :rtype: void 



setOptions
----------

.. function:: setOptions()


    Sets page properties using options from an associative array
    
    Each key in the array corresponds to the according set*() method, and
    each word is separated by underscores, e.g. the option 'target'
    corresponds to setTarget(), and the option 'reset_params' corresponds to
    the method setResetParams().

    :param array: associative array of options to set

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if invalid options are given



setLabel
--------

.. function:: setLabel()


    Sets page label

    :param string: new page label

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if empty/no string is given



getLabel
--------

.. function:: getLabel()


    Returns page label

    :rtype: string page label or null



setFragment
-----------

.. function:: setFragment()


    Sets a fragment identifier

    :param string: new fragment identifier

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if empty/no string is given



getFragment
-----------

.. function:: getFragment()


    Returns fragment identifier

    :rtype: string|null fragment identifier



setId
-----

.. function:: setId()


    Sets page id

    :param string|null: [optional] id to set. Default is null,
                        which sets no id.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if not given string or null



getId
-----

.. function:: getId()


    Returns page id

    :rtype: string|null page id or null



setClass
--------

.. function:: setClass()


    Sets page CSS class

    :param string|null: [optional] CSS class to set. Default
                           is null, which sets no CSS class.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if not given string or null



getClass
--------

.. function:: getClass()


    Returns page class (CSS)

    :rtype: string|null page's CSS class or null



setTitle
--------

.. function:: setTitle()


    Sets page title

    :param string: [optional] page title. Default is
                      null, which sets no title.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if not given string or null



getTitle
--------

.. function:: getTitle()


    Returns page title

    :rtype: string|null page title or null



setTarget
---------

.. function:: setTarget()


    Sets page target

    :param string|null: [optional] target to set. Default is
                            null, which sets no target.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if target is not string or null



getTarget
---------

.. function:: getTarget()


    Returns page target

    :rtype: string|null page target or null



setRel
------

.. function:: setRel()


    Sets the page's forward links to other pages
    
    This method expects an associative array of forward links to other pages,
    where each element's key is the name of the relation (e.g. alternate,
    prev, next, help, etc), and the value is a mixed value that could somehow
    be considered a page.

    :param array|Traversable: [optional] an associative array of
                          forward links to other pages

    :throws Exception\InvalidArgumentException: if $relations is not an array
                                           or Traversable object

    :rtype: AbstractPage fluent interface, returns self



getRel
------

.. function:: getRel()


    Returns the page's forward links to other pages
    
    This method returns an associative array of forward links to other pages,
    where each element's key is the name of the relation (e.g. alternate,
    prev, next, help, etc), and the value is a mixed value that could somehow
    be considered a page.

    :param string: [optional] name of relation to return. If not
                         given, all relations will be returned.

    :rtype: array an array of relations. If $relation is not
                         specified, all relations will be returned in
                         an associative array.



setRev
------

.. function:: setRev()


    Sets the page's reverse links to other pages
    
    This method expects an associative array of reverse links to other pages,
    where each element's key is the name of the relation (e.g. alternate,
    prev, next, help, etc), and the value is a mixed value that could somehow
    be considered a page.

    :param array|Traversable: [optional] an associative array of
                                     reverse links to other pages

    :throws Exception\InvalidArgumentException: if $relations it not an array
                                           or Traversable object

    :rtype: AbstractPage fluent interface, returns self



getRev
------

.. function:: getRev()


    Returns the page's reverse links to other pages
    
    This method returns an associative array of forward links to other pages,
    where each element's key is the name of the relation (e.g. alternate,
    prev, next, help, etc), and the value is a mixed value that could somehow
    be considered a page.

    :param string: [optional] name of relation to return. If not
                          given, all relations will be returned.

    :rtype: array an array of relations. If $relation is not
                          specified, all relations will be returned in
                          an associative array.



setOrder
--------

.. function:: setOrder()


    Sets page order to use in parent container

    :param int: [optional] page order in container.
                   Default is null, which sets no
                   specific order.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if order is not integer or null



getOrder
--------

.. function:: getOrder()


    Returns page order used in parent container

    :rtype: int|null page order or null



setResource
-----------

.. function:: setResource()


    Sets ACL resource associated with this page

    :param string|AclResource: [optional] resource to associate
                                     with page. Default is null, which
                                     sets no resource.

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if $resource is invalid



getResource
-----------

.. function:: getResource()


    Returns ACL resource associated with this page

    :rtype: string|AclResource|null ACL resource or null



setPrivilege
------------

.. function:: setPrivilege()


    Sets ACL privilege associated with this page

    :param string|null: [optional] ACL privilege to associate
                                with this page. Default is null, which
                                sets no privilege.

    :rtype: AbstractPage fluent interface, returns self



getPrivilege
------------

.. function:: getPrivilege()


    Returns ACL privilege associated with this page

    :rtype: string|null ACL privilege or null



setActive
---------

.. function:: setActive()


    Sets whether page should be considered active or not

    :param bool: [optional] whether page should be
                     considered active or not. Default is true.

    :rtype: AbstractPage fluent interface, returns self



isActive
--------

.. function:: isActive()


    Returns whether page should be considered active or not

    :param bool: [optional] whether page should be considered
                         active if any child pages are active. Default is
                         false.

    :rtype: bool whether page should be considered active



getActive
---------

.. function:: getActive()


    Proxy to isActive()

    :param bool: [optional] whether page should be considered
                         active if any child pages are active. Default
                         is false.

    :rtype: bool whether page should be considered active



setVisible
----------

.. function:: setVisible()


    Sets whether the page should be visible or not

    :param bool: [optional] whether page should be
                      considered visible or not. Default is true.

    :rtype: AbstractPage fluent interface, returns self



isVisible
---------

.. function:: isVisible()


    Returns a boolean value indicating whether the page is visible

    :param bool: [optional] whether page should be considered
                         invisible if parent is invisible. Default is
                         false.

    :rtype: bool whether page should be considered visible



getVisible
----------

.. function:: getVisible()


    Proxy to isVisible()
    
    Returns a boolean value indicating whether the page is visible

    :param bool: [optional] whether page should be considered
                         invisible if parent is invisible. Default is
                         false.

    :rtype: bool whether page should be considered visible



setParent
---------

.. function:: setParent()


    Sets parent container

    :param AbstractContainer: [optional] new parent to set.
                          Default is null which will set no parent.

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractPage fluent interface, returns self



getParent
---------

.. function:: getParent()


    Returns parent container

    :rtype: AbstractContainer|null parent container or null



set
---

.. function:: set()


    Sets the given property
    
    If the given property is native (id, class, title, etc), the matching
    set method will be used. Otherwise, it will be set as a custom property.

    :param string: property name
    :param mixed: value to set

    :rtype: AbstractPage fluent interface, returns self

    :throws: Exception\InvalidArgumentException if property name is invalid



get
---

.. function:: get()


    Returns the value of the given property
    
    If the given property is native (id, class, title, etc), the matching
    get method will be used. Otherwise, it will return the matching custom
    property, or null if not found.

    :param string: property name

    :rtype: mixed the property's value or null

    :throws: Exception\InvalidArgumentException if property name is invalid



__set
-----

.. function:: __set()


    Sets a custom property
    
    Magic overload for enabling <code>$page->propname = $value</code>.

    :param string: property name
    :param mixed: value to set

    :rtype: void 

    :throws: Exception\InvalidArgumentException if property name is invalid



__get
-----

.. function:: __get()


    Returns a property, or null if it doesn't exist
    
    Magic overload for enabling <code>$page->propname</code>.

    :param string: property name

    :rtype: mixed property value or null

    :throws: Exception\InvalidArgumentException if property name is invalid



__isset
-------

.. function:: __isset()


    Checks if a property is set
    
    Magic overload for enabling <code>isset($page->propname)</code>.
    
    Returns true if the property is native (id, class, title, etc), and
    true or false if it's a custom property (depending on whether the
    property actually is set).

    :param string: property name

    :rtype: bool whether the given property exists



__unset
-------

.. function:: __unset()


    Unsets the given custom property
    
    Magic overload for enabling <code>unset($page->propname)</code>.

    :param string: property name

    :rtype: void 

    :throws: Exception\InvalidArgumentException if the property is native



__toString
----------

.. function:: __toString()


    Returns page label
    
    Magic overload for enabling <code>echo $page</code>.

    :rtype: string page label



addRel
------

.. function:: addRel()


    Adds a forward relation to the page

    :param string: relation name (e.g. alternate, glossary,
                         canonical, etc)
    :param mixed: value to set for relation

    :rtype: AbstractPage fluent interface, returns self



addRev
------

.. function:: addRev()


    Adds a reverse relation to the page

    :param string: relation name (e.g. alternate, glossary,
                         canonical, etc)
    :param mixed: value to set for relation

    :rtype: AbstractPage fluent interface, returns self



removeRel
---------

.. function:: removeRel()


    Removes a forward relation from the page

    :param string: name of relation to remove

    :rtype: AbstractPage fluent interface, returns self



removeRev
---------

.. function:: removeRev()


    Removes a reverse relation from the page

    :param string: name of relation to remove

    :rtype: AbstractPage fluent interface, returns self



getDefinedRel
-------------

.. function:: getDefinedRel()


    Returns an array containing the defined forward relations

    :rtype: array defined forward relations



getDefinedRev
-------------

.. function:: getDefinedRev()


    Returns an array containing the defined reverse relations

    :rtype: array defined reverse relations



getCustomProperties
-------------------

.. function:: getCustomProperties()


    Returns custom properties as an array

    :rtype: array an array containing custom properties



hashCode
--------

.. function:: hashCode()


    Returns a hash code value for the page

    :rtype: string a hash code value for this page



toArray
-------

.. function:: toArray()


    Returns an array representation of the page

    :rtype: array associative array containing all page properties



normalizePropertyName
---------------------

.. function:: normalizePropertyName()


    Normalizes a property name

    :param string: property name to normalize

    :rtype: string normalized property name



getHref
-------

.. function:: getHref()


    Returns href for this page

    :rtype: string the page's href



