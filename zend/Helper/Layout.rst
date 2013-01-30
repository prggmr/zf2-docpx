.. View/Helper/Layout.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\Layout
==========================

View helper for retrieving layout object

Methods
-------

getLayout
+++++++++

.. function:: getLayout()


    Get layout template

    :rtype: string 



setTemplate
+++++++++++

.. function:: setTemplate()


    Set layout template

    :param string: 

    :rtype: Layout 



__invoke
++++++++

.. function:: __invoke()


    Set layout template or retrieve "layout" view model
    
    If no arguments are given, grabs the "root" or "layout" view model.
    Otherwise, attempts to set the template for that view model.

    :param null|string: 

    :rtype: Layout 



getRoot
+++++++

.. function:: getRoot()


    Get the root view model


    :rtype: null|Model 



getViewModelHelper
++++++++++++++++++

.. function:: getViewModelHelper()


    Retrieve the view model helper

    :rtype: ViewModel 



