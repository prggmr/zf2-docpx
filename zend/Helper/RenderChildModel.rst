.. View/Helper/RenderChildModel.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\RenderChildModel
====================================

Helper for rendering child view models

Finds children matching "capture-to" values, and renders them using the
composed view instance.

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Invoke as a function
    
    Proxies to {render()}.

    :param string: 

    :rtype: string 



render
------

.. function:: render()


    Render a model
    
    If a matching child model is found, it is rendered. If not, an empty
    string is returned.

    :param string: 

    :rtype: string 



findChild
---------

.. function:: findChild()


    Find the named child model
    
    Iterates through the current view model, looking for a child model that
    has a captureTo value matching the requested $child. If found, that child
    model is returned; otherwise, a boolean false is returned.

    :param string: 

    :rtype: false|Model 



getCurrent
----------

.. function:: getCurrent()


    Get the current view model


    :rtype: null|Model 



getViewModelHelper
------------------

.. function:: getViewModelHelper()


    Retrieve the view model helper

    :rtype: ViewModel 



