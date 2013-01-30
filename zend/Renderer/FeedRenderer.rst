.. View/Renderer/FeedRenderer.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Renderer\\FeedRenderer
==================================

Interface class for Zend_View compatible template engine implementations

Methods
-------

getEngine
+++++++++

.. function:: getEngine()


    Return the template engine object, if any
    
    If using a third-party template engine, such as Smarty, patTemplate,
    phplib, etc, return the template engine object. Useful for calling
    methods on these objects, such as for setting filters, modifiers, etc.

    :rtype: mixed 



setResolver
+++++++++++

.. function:: setResolver()


    Set the resolver used to map a template name to a resource the renderer may consume.


    :param Resolver: 

    :rtype: FeedRenderer 



render
++++++

.. function:: render()


    Renders values as JSON


    :param string|Model: The script/resource process, or a view model
    :param null|array|\ArrayAccess: Values to use during rendering

    :throws Exception\InvalidArgumentException: 

    :rtype: string The script output.



setFeedType
+++++++++++

.. function:: setFeedType()


    Set feed type ('rss' or 'atom')

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: FeedRenderer 



getFeedType
+++++++++++

.. function:: getFeedType()


    Get feed type

    :rtype: string 



