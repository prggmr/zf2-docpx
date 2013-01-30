.. View/Renderer/RendererInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\View\\Renderer\\getEngine
===============================

.. function:: Zend\View\Renderer\getEngine()


    Return the template engine object, if any
    
    If using a third-party template engine, such as Smarty, patTemplate,
    phplib, etc, return the template engine object. Useful for calling
    methods on these objects, such as for setting filters, modifiers, etc.

    :rtype: mixed 



Function
********

Zend\\View\\Renderer\\setResolver
=================================

.. function:: Zend\View\Renderer\setResolver()


    Set the resolver used to map a template name to a resource the renderer may consume.

    :param ResolverInterface: 

    :rtype: RendererInterface 



Function
********

Zend\\View\\Renderer\\render
============================

.. function:: Zend\View\Renderer\render()


    Processes a view script and returns the output.

    :param string|ModelInterface: The script/resource process, or a view model
    :param null|array|\ArrayAccess: Values to use during rendering

    :rtype: string The script output.



