.. View/Helper/Navigation/Menu.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Navigation\\Menu
====================================

Helper for rendering menus from navigation containers

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    View helper entry point:
    Retrieves helper and optionally sets container to operate on

    :param AbstractContainer: [optional] container to operate on

    :rtype: Menu fluent interface, returns self



setUlClass
----------

.. function:: setUlClass()


    Sets CSS class to use for the first 'ul' element when rendering

    :param string: CSS class to set

    :rtype: Menu fluent interface, returns self



getUlClass
----------

.. function:: getUlClass()


    Returns CSS class to use for the first 'ul' element when rendering

    :rtype: string CSS class



setOnlyActiveBranch
-------------------

.. function:: setOnlyActiveBranch()


    Sets a flag indicating whether only active branch should be rendered

    :param bool: [optional] render only active branch. Default is true.

    :rtype: Menu fluent interface, returns self



getOnlyActiveBranch
-------------------

.. function:: getOnlyActiveBranch()


    Returns a flag indicating whether only active branch should be rendered
    
    By default, this value is false, meaning the entire menu will be
    be rendered.

    :rtype: bool whether only active branch should be rendered



escapeLabels
------------

.. function:: escapeLabels()


    Sets a flag indicating whether labels should be escaped

    :param bool: [optional] escape labels. Default is true.

    :rtype: Menu fluent interface, returns self



setRenderParents
----------------

.. function:: setRenderParents()


    Enables/disables rendering of parents when only rendering active branch
    
    See {@link setOnlyActiveBranch()} for more information.

    :param bool: [optional] render parents when rendering active branch.
                   Default is true.

    :rtype: Menu fluent interface, returns self



getRenderParents
----------------

.. function:: getRenderParents()


    Returns flag indicating whether parents should be rendered when rendering
    only the active branch
    
    By default, this value is true.

    :rtype: bool whether parents should be rendered



setPartial
----------

.. function:: setPartial()


    Sets which partial view script to use for rendering menu

    :param string|array: partial view script or null. If an array is
                              given, it is expected to contain two
                              values; the partial view script to use,
                              and the module where the script can be
                              found.

    :rtype: Menu fluent interface, returns self



getPartial
----------

.. function:: getPartial()


    Returns partial view script to use for rendering menu

    :rtype: string|array|null 



htmlify
-------

.. function:: htmlify()


    Returns an HTML string containing an 'a' element for the given page if
    the page's href is not empty, and a 'span' element if it is empty
    
    Overrides {@link AbstractHelper::htmlify()}.

    :param AbstractPage: page to generate HTML for
    :param bool: Whether or not to escape the label

    :rtype: string HTML string for the given page



normalizeOptions
----------------

.. function:: normalizeOptions()


    Normalizes given render options

    :param array: [optional] options to normalize

    :rtype: array normalized options



renderDeepestMenu
-----------------

.. function:: renderDeepestMenu()


    Renders the deepest active menu within [$minDepth, $maxDepth], (called
    from {@link renderMenu()})

    :param AbstractContainer: container to render
    :param string: CSS class for first UL
    :param string: initial indentation
    :param int|null: minimum depth
    :param int|null: maximum depth
    :param bool: Whether or not to escape the labels

    :rtype: string rendered menu



renderNormalMenu
----------------

.. function:: renderNormalMenu()


    Renders a normal menu (called from {@link renderMenu()})

    :param AbstractContainer: container to render
    :param string: CSS class for first UL
    :param string: initial indentation
    :param int|null: minimum depth
    :param int|null: maximum depth
    :param bool: render only active branch?
    :param bool: Whether or not to escape the labels

    :rtype: string 



renderMenu
----------

.. function:: renderMenu()


    Renders helper
    
    Renders a HTML 'ul' for the given $container. If $container is not given,
    the container registered in the helper will be used.
    
    Available $options:

    :param AbstractContainer: [optional] container to create menu from.
                             Default is to use the container retrieved
                             from {@link getContainer()}.
    :param array: [optional] options for controlling rendering

    :rtype: string rendered menu



renderSubMenu
-------------

.. function:: renderSubMenu()


    Renders the inner-most sub menu for the active page in the $container
    
    This is a convenience method which is equivalent to the following call:
    <code>
    renderMenu($container, array(
        'indent'           => $indent,
        'ulClass'          => $ulClass,
        'minDepth'         => null,
        'maxDepth'         => null,
        'onlyActiveBranch' => true,
        'renderParents'    => false
    ));
    </code>

    :param AbstractContainer: [optional] container to
                                              render. Default is to render
                                              the container registered in
                                              the helper.
    :param string: [optional] CSS class to
                                              use for UL element. Default
                                              is to use the value from
                                              {@link getUlClass()}.
    :param string|int: [optional] indentation as
                                              a string or number of
                                              spaces. Default is to use
                                              the value retrieved from
                                              {@link getIndent()}.

    :rtype: string rendered content



renderPartial
-------------

.. function:: renderPartial()


    Renders the given $container by invoking the partial view helper
    
    The container will simply be passed on as a model to the view script
    as-is, and will be available in the partial script as 'container', e.g.
    <code>echo 'Number of pages: ', count($this->container);</code>.

    :param AbstractContainer: [optional] container to pass to view
                                 script. Default is to use the container
                                 registered in the helper.
    :param string|array: [optional] partial view script to use.
                                 Default is to use the partial
                                 registered in the helper. If an array
                                 is given, it is expected to contain two
                                 values; the partial view script to use,
                                 and the module where the script can be
                                 found.

    :rtype: string helper output

    :throws: Exception\RuntimeException if no partial provided
    :throws: Exception\InvalidArgumentException if partial is invalid array



render
------

.. function:: render()


    Renders menu
    
    Implements {@link HelperInterface::render()}.
    
    If a partial view is registered in the helper, the menu will be rendered
    using the given partial script. If no partial is registered, the menu
    will be rendered as an 'ul' element by the helper's internal method.


    :param AbstractContainer: [optional] container to render. Default is
                             to render the container registered in the
                             helper.

    :rtype: string helper output



