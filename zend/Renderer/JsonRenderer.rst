.. View/Renderer/JsonRenderer.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Renderer\\JsonRenderer
==================================

JSON renderer

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

    :rtype: Renderer 



setMergeUnnamedChildren
+++++++++++++++++++++++

.. function:: setMergeUnnamedChildren()


    Set flag indicating whether or not to merge unnamed children

    :param bool: 

    :rtype: JsonRenderer 



setJsonpCallback
++++++++++++++++

.. function:: setJsonpCallback()


    Set the JSONP callback function name

    :param string: 

    :rtype: JsonpModel 



hasJsonpCallback
++++++++++++++++

.. function:: hasJsonpCallback()


    Returns whether or not the jsonpCallback has been set

    :rtype: bool 



mergeUnnamedChildren
++++++++++++++++++++

.. function:: mergeUnnamedChildren()


    Should we merge unnamed children?

    :rtype: bool 



render
++++++

.. function:: render()


    Renders values as JSON


    :param string|Model: The script/resource process, or a view model
    :param null|array|\ArrayAccess: Values to use during rendering

    :throws Exception\DomainException: 

    :rtype: string The script output.



canRenderTrees
++++++++++++++

.. function:: canRenderTrees()


    Can this renderer render trees of view models?
    
    Yes.

    :rtype: true 



recurseModel
++++++++++++

.. function:: recurseModel()


    Retrieve values from a model and recurse its children to build a data structure

    :param Model: 

    :rtype: array 



