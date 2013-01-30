.. Mvc/View/Http/InjectViewModelListener.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Mvc\\View\\Http\\InjectViewModelListener
==============================================

Methods
-------

attach
++++++

.. function:: attach()


    Attach listeners

    :param Events: 

    :rtype: void 



detach
++++++

.. function:: detach()


    Detach listeners

    :param Events: 

    :rtype: void 



injectViewModel
+++++++++++++++

.. function:: injectViewModel()


    Insert the view model into the event
    
    Inspects the MVC result; if it's a view model, it then either (a) adds
    it as a child to the default, composed view model, or (b) replaces it
    if the result is marked as terminable.

    :param MvcEvent: 

    :rtype: void 



