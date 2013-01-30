.. View/Helper/Navigation.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Navigation
==============================

Proxy helper for retrieving navigational helpers and forwarding calls

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Helper entry point

    :param string|AbstractContainer: container to operate on

    :rtype: Navigation 



__call
++++++

.. function:: __call()


    Magic overload: Proxy to other navigation helpers or the container
    
    Examples of usage from a view script or layout:
    <code>
    // proxy to Menu helper and render container:
    echo $this->navigation()->menu();
    
    // proxy to Breadcrumbs helper and set indentation:
    $this->navigation()->breadcrumbs()->setIndent(8);
    
    // proxy to container and find all pages with 'blog' route:
    $blogPages = $this->navigation()->findAllByRoute('blog');
    </code>

    :param string: helper name or method name in
                                   container
    :param array: [optional] arguments to pass

    :rtype: mixed returns what the proxied call returns

    :throws: \Zend\View\Exception\ExceptionInterface if proxying to a helper, and the
                                   helper is not an instance of the
                                   interface specified in
                                   {@link findHelper()}
    :throws: \Zend\Navigation\Exception\ExceptionInterface if method does not exist in container



setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set manager for retrieving navigation helpers

    :param Navigation\PluginManager: 

    :rtype: Navigation 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Retrieve plugin loader for navigation helpers
    
    Lazy-loads an instance of Navigation\HelperLoader if none currently
    registered.

    :rtype: Navigation\PluginManager 



findHelper
++++++++++

.. function:: findHelper()


    Returns the helper matching $proxy
    
    The helper must implement the interface
    {@link Zend\View\Helper\Navigation\Helper}.

    :param string: helper name
    :param bool: [optional] whether
                                            exceptions should be
                                            thrown if something goes
                                            wrong. Default is true.

    :rtype: \Zend\View\Helper\Navigation\HelperInterface helper instance

    :throws: Exception\RuntimeException if $strict is true and
        helper cannot be found



inject
++++++

.. function:: inject()


    Injects container, ACL, and translator to the given $helper if this
    helper is configured to do so

    :param NavigationHelper: helper instance

    :rtype: void 



setDefaultProxy
+++++++++++++++

.. function:: setDefaultProxy()


    Sets the default proxy to use in {@link render()}

    :param string: default proxy

    :rtype: \Zend\View\Helper\Navigation fluent interface, returns self



getDefaultProxy
+++++++++++++++

.. function:: getDefaultProxy()


    Returns the default proxy to use in {@link render()}

    :rtype: string the default proxy to use in {@link render()}



setInjectContainer
++++++++++++++++++

.. function:: setInjectContainer()


    Sets whether container should be injected when proxying

    :param bool: [optional] whether container should
                                     be injected when proxying. Default
                                     is true.

    :rtype: \Zend\View\Helper\Navigation fluent interface, returns self



getInjectContainer
++++++++++++++++++

.. function:: getInjectContainer()


    Returns whether container should be injected when proxying

    :rtype: bool whether container should be injected when proxying



setInjectAcl
++++++++++++

.. function:: setInjectAcl()


    Sets whether ACL should be injected when proxying

    :param bool: [optional] whether ACL should be
                                     injected when proxying. Default is
                                     true.

    :rtype: \Zend\View\Helper\Navigation fluent interface, returns self



getInjectAcl
++++++++++++

.. function:: getInjectAcl()


    Returns whether ACL should be injected when proxying

    :rtype: bool whether ACL should be injected when proxying



setInjectTranslator
+++++++++++++++++++

.. function:: setInjectTranslator()


    Sets whether translator should be injected when proxying

    :param bool: [optional] whether translator should
                                     be injected when proxying. Default
                                     is true.

    :rtype: Navigation fluent interface, returns self



getInjectTranslator
+++++++++++++++++++

.. function:: getInjectTranslator()


    Returns whether translator should be injected when proxying

    :rtype: bool whether translator should be injected when proxying



render
++++++

.. function:: render()


    Renders helper

    :param \Zend\Navigation\AbstractContainer: [optional] container to
                                              render. Default is to
                                              render the container
                                              registered in the helper.

    :rtype: string helper output

    :throws: Exception\RuntimeException if helper cannot be found





Constants
---------

NS
++

View helper namespace

