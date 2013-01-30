.. Mvc/View/Console/CreateViewModelListener.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mvc\\View\\Console\\CreateViewModelListener
=================================================

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



createViewModelFromString
+++++++++++++++++++++++++

.. function:: createViewModelFromString()


    Inspect the result, and cast it to a ViewModel if a string is detected

    :param MvcEvent: 

    :rtype: void 



createViewModelFromArray
++++++++++++++++++++++++

.. function:: createViewModelFromArray()


    Inspect the result, and cast it to a ViewModel if an assoc array is detected

    :param MvcEvent: 

    :rtype: void 



createViewModelFromNull
+++++++++++++++++++++++

.. function:: createViewModelFromNull()


    Inspect the result, and cast it to a ViewModel if null is detected

    :param MvcEvent: 

    :rtype: void 



