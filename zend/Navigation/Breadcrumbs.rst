.. View/Helper/Navigation/Breadcrumbs.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Navigation\\Breadcrumbs
===========================================

Helper for printing breadcrumbs

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Helper entry point

    :param string|AbstractContainer: container to operate on

    :rtype: Breadcrumbs 



setSeparator
------------

.. function:: setSeparator()


    Sets breadcrumb separator

    :param string: separator string

    :rtype: Breadcrumbs fluent interface, returns self



getSeparator
------------

.. function:: getSeparator()


    Returns breadcrumb separator

    :rtype: string breadcrumb separator



setLinkLast
-----------

.. function:: setLinkLast()


    Sets whether last page in breadcrumbs should be hyperlinked

    :param bool: whether last page should be hyperlinked

    :rtype: Breadcrumbs fluent interface, returns self



getLinkLast
-----------

.. function:: getLinkLast()


    Returns whether last page in breadcrumbs should be hyperlinked

    :rtype: bool whether last page in breadcrumbs should be hyperlinked



setPartial
----------

.. function:: setPartial()


    Sets which partial view script to use for rendering menu

    :param string|array: partial view script or null. If an array is
                              given, it is expected to contain two
                              values; the partial view script to use,
                              and the module where the script can be
                              found.

    :rtype: Breadcrumbs fluent interface, returns self



getPartial
----------

.. function:: getPartial()


    Returns partial view script to use for rendering menu

    :rtype: string|array|null 



renderStraight
--------------

.. function:: renderStraight()


    Renders breadcrumbs by chaining 'a' elements with the separator
    registered in the helper

    :param AbstractContainer: [optional] container to render. Default is
                             to render the container registered in the helper.

    :rtype: string helper output



renderPartial
-------------

.. function:: renderPartial()


    Renders the given $container by invoking the partial view helper
    
    The container will simply be passed on as a model to the view script,
    so in the script it will be available in <code>$this->container</code>.

    :param AbstractContainer: [optional] container to pass to view script.
                             Default is to use the container registered
                             in the helper.
    :param string|array: [optional] partial view script to use.
                              Default is to use the partial registered
                              in the helper.  If an array is given, it
                              is expected to contain two values; the
                              partial view script to use, and the module
                              where the script can be found.

    :rtype: string helper output

    :throws: Exception\RuntimeException if no partial provided
    :throws: Exception\InvalidArgumentException if partial is invalid array



render
------

.. function:: render()


    Renders helper
    
    Implements {@link HelperInterface::render()}.

    :param AbstractContainer: [optional] container to render. Default is
                             to render the container registered in the helper.

    :rtype: string helper output



